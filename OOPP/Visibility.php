<?php

// use Person as GlobalPerson;

class Person
{
    static $code = 2230432;
    public $id;
    public $lastname;
    protected $firstname;
    private $dob;

    function hello()
    {
        echo "Hello " . $this->lastname;
    }

    function __construct($id, $firstname, $lastname, $dob)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->dob = $dob;
    }
    function __toString()
    {
        $age = date_diff(date_create($this->dob), date_create('now'))->y;
        return "ID=" . $this->id . " Firstname=" . $this->firstname . " Lastname=" . $this->lastname . " DOB=" . $this->dob . " Age=" . $age;
    }
};

class Student extends Person
{
    public $school;

    function __construct($school)
    {
        $this->school = $school;
    }
    function setLastname($lname)
    {
        $this->lastname = $lname;
    }
    function setDOB($dob)
    {
        $this->dob = $dob;
    }
}

$student1 = new Student("RCA");
$student1->lastname = "Gasana";
echo $student1->lastname . " study in " . $student1->school;
echo "<br>";
$student1->setLastname("Joy");
$student1->setDOB("2005-03-7");
echo $student1;
echo $student1->lastname . " study in " . $student1->school;
