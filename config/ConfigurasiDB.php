<?php
class ConfigurasiDB
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '1234567';
    private $_database = 'farah';
    
    protected $koneksi;
    
    public function __construct()
    {
        if (!isset($this->koneksi)) {
            
            $this->koneksi = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->koneksi) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->koneksi;
    }
}
?>