<?php
require_once(__DIR__ . '/database/CJ_Connection.php');

class CJ_Model {
    function __construct() {
        echo 'CJ_Model class created <br>';

        $db = new CJ_Connection();
        $this->connection = $db->getConnection();
    }

    function create($tableName, $insertWhat) {

    }

    function read($tableName, $args, $whereArgs) {

    }

    function update($tableName, $whatToSet, $whereArgs) {

    }

    function delete($tableName, $whereArgs) {

    }

    function where($sql, $whereArgs) {
        
    }

}

?>