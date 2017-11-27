<?php
	
	class Hourly extends Employee{

		private $_hours;

		public function __construct($duration, $amount, $hours) {
			$this->_type = "hourly";
			$this->_duration = $duration;
			$this->_amount = $amount;
			$this->_hours = $hours;


		}

		public function  getHours(){

			return $this->_hours; 
		}


	}




?>