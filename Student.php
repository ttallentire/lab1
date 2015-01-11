<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Thomas
 */
class Student {
    // Class constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Function to add an email to the student
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    // Function to add a grade to the student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // Function to calculate the grade average of the student
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    // To string function for ease of printing the student to the screen
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
}
