<?php

class Database extends PDO {


    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASSWOR) {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASSWOR);
    }

    public function runQuery($query){
        $stmt = $this->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
