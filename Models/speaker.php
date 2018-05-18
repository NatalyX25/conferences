<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 01:06 AM
 */

require_once "Model.php";

class Speaker extends Model
{

    /**
     * @return array
     */
    public function getAllSpeakers(){
        $query = "SELECT id, name,last_name, phone_number, email, organization, cv_resume 
              FROM speakers;";

        try{
            return $this->connection->query($query)->fetchAll();
        } catch (Exception $exception){
            return [];
        }
    }

    public function saveSpeaker($data){
        $query = "INSERT INTO speakers (name,last_name,phone_number,email,organization,cv_resume)
              VALUES (".$data['name'].",".$data['last_name'].",".$data['phone_number'].",".$data['email'].",".$data['organization'].",".$data['cv_resume'].")";


        $result = $GLOBALS['db_conn']->exec($query);
    }

}

