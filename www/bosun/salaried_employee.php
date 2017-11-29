<?php


	class Salaried_Employee extends Employee


	{
		private $weeklySalary;
		public function __construct($name, $designation, $amountPaid,$duration){

			$this->name = $name;
			$this->designation = $designation;
			$this->amountPaid = $amountPaid;
			$this->duration = $duration;
			$this->weeklySalary = $weeklySalary;
		}

		public function getWeeklysalary(){
			return $this->weeklySalary;
		}

	}



?>