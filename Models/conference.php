<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 01:06 AM
 */

class Conference {

    public function getConnection(){
        $connection = require_once 'connection.php';
        $db_conn = new PDO($connection['dsn'],$connection['user'],$connection['pass']);
    }

    public function getAllConferences(){
        $query = "SELECT place, date_time, con.name, description, spk.name,last_name
              FROM conferences AS con
              INNER JOIN speakers AS spk ON con.speaker = spk.id;";

        $result = $GLOBALS['db_conn']->query($query)->fetchAll();

        return $result;
    }

}
