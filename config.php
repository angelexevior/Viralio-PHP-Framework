<?php
class config{
    //Database configuration
    public $db_hostname = 'localhost';
    public $db_username = 'root';
    public $db_password = '';
    public $db_database = 'dmaster';
    
    //The time a session should be left alive (In seconds)
    //This is for security reasons. Users will be automatically logged out after the specified seconds of inactivity
    public $session_timeout = '3600';
    
    //Email settings
    public $smtphost= "ssl://smtp.beepextra.com";
    public $smtpusername = "donotreply@beepextra.com";
    public $smtppassword = "tsoullara";
    public $smtpmode = "SSL";
    public $smtpport = "465";
    
    //Time settings
    public $timezone = 'UTC';
    
    public $site_id = 1;
    public $debug_queries = 0;
    public $cdnversion = '?v=2.0.1';
}
?>
