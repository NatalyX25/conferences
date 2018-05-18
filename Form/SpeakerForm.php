<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 08:35 PM
 */

require_once "Form.php";

class SpeakerForm extends Form
{
    private $speaker;

    public function __construct($speaker = [])
    {
        $this->speaker = $speaker;
    }

    public function validate()
    {
        $formField = new Form();
        foreach ($this->speaker as $field => $value){
            if ($field == 'speaker_name' || $field == 'speaker_last_name' || $field == 'speaker_phone_number' || $field == 'speaker_organization'
                || $field == 'speaker_cv_resume'){
                if (!$formField->validateString($value)){
                    return false;
                }
            }
            if ($field == 'speaker_email'){
                if (!$formField->validateEmail($value)){
                    return false;
                }
            }
        }
        return true;
    }
}