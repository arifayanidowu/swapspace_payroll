<?php
	
	class Commission extends Employee{

		private $_commission;

		public function __construct($duration, $amount, $commission) {
			$this->_type = "commission";
			$this->_duration = $duration;
			$this->_amount = $amount;
			$this->_commission = $commission;


		}

		public function  getCommission(){

			return $this->_commission; 
		}


		public function getAmount(){

			$this->_commission = $this->_amount;

			return $this->_amount;
		}


	}




?>