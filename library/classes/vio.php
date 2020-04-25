<?php

/**
 * Description of platform
 *
 * @author Angelos
 */
class Vio {
    
    public $db;
    public $beepdb;
    public $sphinx;
    public $config;
    public $menu;
    public $memcache;
    public $user;
    public $countries;
    public $translator;
    public $defaulttranslator;
    public $lang;
    public $textRTL;
    
    function Vio(){
        //Initiate configuration
        if(file_exists('config.php')){
            include_once('config.php');
        }else{
            //If it is called from a subdirectory. For different solution change it...
            include_once('../config.php');
        }
        
        $this->config = new config();
        $this->security = 1;
        
        //Language provision
        if(isset($_GET["lang"])){
            $this->lang=$_GET["lang"];
        }else{
            $this->lang="en";
        }
    }
    //sample function
    public function getPage(){
        if(isset($_GET['page'])){
                    $page = $_GET['page'];
                } else {
                    $page = 'orders';
                }
                return $page;
    }
    
    ////////////////////////DATABASE FUNCTIONS///////////////////
    //connect to the database
    function connect_to_database(){
        include('db.php');
        $this->db= new db();
        $this->db->open_connection();
        return $this->db;
    }
    
    //check if database connected
    function database_connected(){
        if (isset($this->db)){
            return true;
        }else{
            return false;
        }
    }
    //close database
    function database_close(){
        $this->db->close_connection();
    }

    ///////////////////END OF DATABASE FUNCTIONS///////////////////
    
    //////////////////GET DATA////////////////////////////////////
    function getdata($query){
        $result=$this->db->query($query);
        return $this->db->fetch_assoc($result);
    }

    //////////////////// APPEND SCRIPTS //////////////////////
    function appendscript($appendscript,$script = NULL){
        //echo 'test'.$appendscript;
        //If no script, set as null
        if($script == NULL){
            $appendscript = '';
        } else {
            $appendscript .= $script;
        }
        return $appendscript;
    }
    
    function appendscriptfile($appendfile,$file = NULL){
        //echo 'test'.$appendscript;
        //If no script, set as null
        if($file == NULL){
            $appendfile = '';
        } else {
            $appendfile .= '<script type="text/javascript" src="'.$file.'"></script>';
        }
        return $appendfile;
    }
    ///////////////// END OF APPEND SCRIPTS ///////////////////
    ///////////SEND EMAIL TO USER//////////////////////////////
    function sendmail($from=NULL, $to, $subject, $body){
        require_once("Mail.php");
        if($from==NULL){
            $from= "donotreply@viralio";
        }
       $host = $this->config->smtphost;
       $username = $this->config->smtpusername;
       $password = $this->config->smtppassword;
       $port = $this->config->smtpport;
       $headers = array('From' => $from, 'To' => $to, 'Reply-To' => $from, 'Subject' => $subject,  'Content-Type' =>  'text/html', 'Date' => date('r', $_SERVER['REQUEST_TIME']));
       $smtp = Mail::factory('smtp', array ('host' => $host,
                                             'auth' => true,
                                             'username' => $username,
                                             'password' => $password,
                                             'port' => $port));
       $mail = $smtp->send($to, $headers, $body); 
    }
    
    function sendmailattachment($from=NULL, $to, $subject, $body, $files){
        require_once("Mail.php");
        require_once("Mail/mime.php");
        if($from==NULL){
            $from= "donotreply@viralio";
        }
       // $file="add_users_sphinx.php";
       $host = "localhost";
       $username = $this->config->smtpusername;
       $password = $this->config->smtppassword;
       $port = "25";
       $headers = array('MIME-Version' => '1.0',
           'From' => $from, 'To' => $to, 'Reply-To' => $from, 'Subject' => $subject, 'Content-Type' =>  'text/html; charset=UTF-8', 'Content-Transfer-Encoding' => '8bit');
       $crlf="\r\n";
       $mime = new Mail_mime(array('eol' => $crlf));
       //$mime->setTxtBody($body);
       $mime->setHTMLBody($body);
       foreach ($files as $file){
           if($file["error"]==0){
             $mime->addAttachment($file["tmp_name"], $file["type"], $file["name"]);    
           }
       }
        $mimeparams['text_encoding']="8bit"; 
        $mimeparams['text_charset']="UTF-8"; 
        $mimeparams['html_charset']="UTF-8"; 
        $mimeparams['head_charset']="UTF-8"; 

        $mimeparams["debug"] = "True"; 
        
       $body = $mime->get($mimeparams);
       $hdrs = $mime->headers($headers);
       
       $smtp = Mail::factory('smtp', array ('host' => $host,
                                             'username' => $username,
                                             'password' => $password,
                                             'port' => $port));
       $mail = $smtp->send($to, $hdrs, $body); 
    }
  
    function createSEFurl($menu){
        switch ($menu->type) {
            case 'page':
                $link = "/".$this->lang."/".$menu->path;
                break;
            case 'external':
                $link = $menu->link;
                break;
            case 'media':
                $link = '#';
                break;
            case 'news':
                $link = '#';
                break;
            case 'controller':
                $link = "/".$this->lang."/".$menu->path;
                break;
            default:
            $link = '#';
        }
        return $link;
    }
    
    function translator($lang){
        include('translation.php');
        $this->translator = new Translator($lang);
        $this->defaulttranslator = new Translator("en");
    }
    function changelanguage($lang){
        $this->lang=$lang;
    }
    
    function getTextDirection($lang){
        $data= $this->getData("SELECT rtl FROM languages where code='$lang'");
        $this->textRTL=$data[0]["rtl"];
    }
    
}

?>
