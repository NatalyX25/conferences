<?php
/**
 * Created by PhpStorm.
 * User: retimeradm
 * Date: 17/05/18
 * Time: 08:35 PM
 */

class ConferenceForm extends Form
{
    private $conference;

    public function __construct($conference = [])
    {
        $this->conference = $conference;
    }

    public function validate()
    {
        foreach ($this->conference as $item){

        }
    }
}