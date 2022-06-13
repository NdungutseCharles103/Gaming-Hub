<?php

class Person
{
    public $firstname;
    public $lastname;
    public $dob;

    public function __construct($firstname, $lastname, $dob)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
    }

    public function __toString()
    {
        return "Firstname: " . $this->firstname . " Lastname: " . $this->lastname;
    }

    public function ckeckAge()
    {
        $today = new DateTime();
        $dob = new DateTime($this->dob);
        $interval = $today->diff($dob);
        $age = $interval->y;

        if ($age >= 18) {
            return true;
        } else {
            return false;
        }
    }
}

$charles = new Person("Charles", "Xavier", "1923-04-23");
echo $charles;
