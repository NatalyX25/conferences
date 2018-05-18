<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 08:43 PM
 */

class Form
{
    public function validateString($string)
    {
        $string = $this->trimInput($string);
        if (!preg_match("/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/",$string)) {
            return false;
        }
        return true;
    }

    public function validateDate($date)
    {
        $test_arr = explode('-', $date);
        if (!checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
            return false;
        }
        return true;
    }

    public function validateEmail($email)
    {
        $email = $this->trimInput($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function validateSpeaker($value)
    {
        if (!is_numeric($value)) {
            return false;
        }
        return true;
    }

    private function trimInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
}