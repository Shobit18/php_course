<?php
class Database {

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "testing";

    private $mysqli = "";
    private $result = array();
    private $conn = false;

    public function __construct() {
        if(!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn = true;
            if(!$this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }

    }
    public function insert($table, $params=array()) {
        if($this->tableExists($table)) {
            print_r($params);
            $table_columns = implode(', ', array_key(params));
            $table_value = implode(', ', $params);
            echo  $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";
            
            if($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->inset_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return true;
            }
        } else {
            array_push($this->result, $tablble. " data not exits in datwbase");
            return false;
        }
    }
public function getResult() {
    $val = $this-> result;
    $this->result = array();
    return $val;
}
    public function update() {
        
    }

    public function delete() {
        
    }
    public function select() {
        
    }
    private function tableExists($table) {
        $sql = "SHOW TABLES FROM $this->db_name LIKE $'table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb) {
            if($tableInDb->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table."does not exits in the database");
                return false;
            }
        }
    }
    public function __destruct() {
        if($this->conn) {
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }
    }
}
?>