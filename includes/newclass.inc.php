plain text

<h4>h4 tag</h4>

<?php
    echo "some text";
    echo "another text";

    class Person {
        private $personcode;
        public $name;
        public $gender;
        
        public function setName($inputname){
            // return "do nothing for now";
            $this->name = $inputname;
        }

        public function getName() {
            return $this->name;
        }
    }

    // Izveidot divas klases: Employee un Manager
    // Employee atribūti: name, role, access
    // Manager atribūti: name, role, access, manager_role
    // uztaisīt get un set metodes "access" atribūta uzstādīšanai un iegūšanai

    // ekstendot Employee klasi ar manager

    class Employee  {
        // ...
    }


    class Manager extends Employee {
        // ...
    }

?>