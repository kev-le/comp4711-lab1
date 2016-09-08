<?php

 class Student {

     // DEFAULT CONSTRUCTOR
     function __construct() {
         $this->surname   = ' ';
         $this->first_name = ' ';
         $this->emails    = array();
         $this->grades    = array();
     }

     // adds an email to the Student
     function add_email($which, $address) {
         $this->emails[$which] = $address;
     }

     // adds a grade to the grades
     function add_grade($grade) {
        $this->grades[] = $grade;
    }

    // returns the average of all the grades
     function average() {
        $total = 0;
        foreach ($this->grades as $value)
        $total += $value;
        return $total / count($this->grades);
    }

    // prints out Student details
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }




}
