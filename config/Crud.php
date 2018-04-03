<?php

include_once 'ConfigurasiDB.php';
 
class Crud extends ConfigurasiDB
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function dapatkanData($query)
    {        
        $result = $this->koneksi->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }

    public function dataSama($id, $table)
    {
        $query = "SELECT FROM $table WHERE id = $id";

        $result = $this->koneksi->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
        
    public function executeSql($query) 
    {
        $result = $this->koneksi->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
    
    public function deleteData($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->koneksi->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
 
    public function escape_string($value)
    {
        return $this->koneksi->real_escape_string($value);
    }
}
?>