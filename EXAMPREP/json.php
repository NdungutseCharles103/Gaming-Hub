<?php
    $student_json = '[
        {
            "name" : "John Garg",
            "age"  : "15",
            "school" : "Ahlcon Public school"
            },
            {
            "name" : "Smith Soy",
            "age"  : "16",
            "school" : "St. Marie school"
            },
            {
            "name" : "Charle Rena",
            "age"  : "16",
            "school" : "St. Columba school"
            }
        ]';
$students = json_decode($student_json, true);
print_r($students);
foreach ($students as $student) {
    echo $student['name'] .' is a '. $student['age'] .' years old. He is in '. $student['school'] .' school.';
}
?>