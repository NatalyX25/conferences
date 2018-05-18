<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 08:35 PM
 */

require_once "Form.php";

class ConferenceForm extends Form
{
    private $conference;

    public function __construct($conference = [])
    {
        $this->conference = $conference;
    }

    public function validate()
    {
        $formField = new Form();
        foreach ($this->conference as $field => $value){
            if ($field == 'conference_name' || $field == 'conference_place' || $field == 'conference_description'){
                if (!$formField->validateString($value)){
                    return false;
                }
            }
            if ($field == 'conference_date'){
                if (!$formField->validateDate($value)){
                    return false;
                }
            }
            if ($field == 'conference_speaker'){
                if (!$formField->validateSpeaker($value)){
                    return false;
                }
            }
        }
        return true;
    }
}