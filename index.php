<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        $students = array();
        
        // Create Student 1
        $first = new Student();
        // Adding name
        $first->surname = "Doe";
        $first->first_name = "John";
        // Adding emails
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        // Adding grades which will be used to calculate the average
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        // Adding the student to the students array
        $students['j123'] = $first;
        
        // Create Student 2
        $second = new Student();
        // Adding name
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        // Adding emails
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        // Adding grades which will be used to calculate the average
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        // Adding the student to the students array
        $students['a456'] = $second;
        
        // Create Student 3, myself.
        $third = new Student();
        // Adding name
        $third->surname = "Tallentire";
        $third->first_name = "Thomas";
        // Adding emails
        $third->add_email('home', 'tallentire@home.ca');
        $third->add_email('work1', 'ttallentire@my.bcit.ca');
        // Adding grades which will be used to calculate the average
        $third->add_grade(84);
        $third->add_grade(86);
        $third->add_grade(94);
        // Adding myself to the students array.
        $students['t654'] = $third;
        
        // Sorting the array
        ksort($students);
        
        // For-each loop to print out the students
        foreach($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
