<?php

class Person{
    public $id;
    public $lastname;
    public $firstname;
    public $dob;

    function hello(){
        echo "Hello ".$this->lastname;
    }

    function __construct($id, $firstname, $lastname, $dob)
    {
        $this->id=$id;
        $this->lastname=$lastname;
        $this->firstname=$firstname;
        $this->dob=$dob;
    }
    function __toString()
    {
        $age = date_diff(date_create($this->dob), date_create('now'))->y;
        return "ID=".$this->id." Firstname=".$this->firstname." Lastname=".$this->lastname." DOB=".$this->dob." Age=".$age;
    }
};

$person = new Person(1,"Hirwa","Vanessa","2005-03-7");
echo $person;
echo "<br>";
$mysql = new mysqli();
$today = (new DateTime())->format("y-m-d h:i:s");
var_dump($today);
var_dump(new DateTime());




?>