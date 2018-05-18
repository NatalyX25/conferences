<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 01:06 AM
 */

require_once "Model.php";

class Conference extends Model
{
    public function getAllConferences(){
        $query = "SELECT place, date, con.name as title, description, spk.name as speakerName,last_name
              FROM conferences AS con
              INNER JOIN speakers AS spk ON con.speaker = spk.id;";

        try{
            return $this->connection->query($query)->fetchAll();
        } catch (Exception $exception){
            return [];
        }
    }

    public function saveNewConference($conferenceData){
        $query = "INSERT INTO conferences
                    (name, place, date, description, speaker)
                  VALUES ('{$conferenceData['conference_name']}','{$conferenceData['conference_place']}','{$conferenceData['conference_date']}',
                    '{$conferenceData['conference_description']}',{$conferenceData['conference_speaker']})";

        try{
            $this->connection->exec($query);
            return true;
        } catch (Exception $exception){
            return false;
        }
    }

}
