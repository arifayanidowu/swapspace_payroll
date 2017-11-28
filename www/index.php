<?php
	

	include 'sales_percentage.php';
	include 'employee.php';
	include 'commissioned.php';
	include 'hourly.php';
	include 'salaried.php';
	include 'salaried_commission.php';


	$employee1 = new salaried_employee("Bosun","CEO", 1000, 2);
	$employeeTitle = $employee1->getTitle();
	
	echo $employeeTitle;	
		
	



?>