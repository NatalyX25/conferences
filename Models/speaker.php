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

    public function saveNewSpeaker($speakerData){
        $query = "INSERT INTO speakers 
                    (name,last_name,phone_number,email,organization,cv_resume)
                  VALUES ('{$speakerData['speaker_name']}','{$speakerData['speaker_last_name']}','{$speakerData['speaker_phone_number']}',
                    '{$speakerData['speaker_email']}','{$speakerData['speaker_organization']}','{$speakerData['speaker_cv_resume']}')";

        try{
            $this->connection->exec($query);
            return true;
        } catch (Exception $exception){
            return false;
        }
    }

}

