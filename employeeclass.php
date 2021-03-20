<?php //IDEA:
    require_once("personclass.php");
    
    class Employee extends Person 
    {
        private $ID;
        private $department;
        public function __construct ($eName, $nationalID, $dept){
            parent:: __construct($eName, $nationalID);
            $this->department = $dept;
            $this->ID = $this->GentID();

        }
        public function GetID() 
        {
            return  $this->ID;
        }
      
        public function GetDeparment() 
        {
            return  $this->department;
        }
        public function SetDeparment($dept) 
        {
            $this->department = $dept;
        }
        final private function GentID(){
            static $IDGen = 1;
            return $IDGen++; 
        }
    }
?>