<?php

	abstract class Employee{

		protected $_duration;
		protected $_amount;
		protected $_type;


		function getDuration(){
			return $this->_duration;
		}

		function setDuration($duration){
			$this->_duration = $duration;
		}

		function getAmount(){
			return $this->_amount;
		}

		function setAmount($amount){
			$this->_amount = $amount;
		}

		function getType(){
			return $this->_type;
		}

		function setType($type){
			$this->_type = $type;
		}

		abstract public function getAmount();











	}








?>