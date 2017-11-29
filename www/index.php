<?php
	

	include 'sales_percentage.php';
	include 'employee.php';
	include 'commissioned.php';
	include 'hourly.php';
	include 'salaried.php';
	include 'salaried_commission.php';


<<<<<<< HEAD
	$commission = new commission(40, $amount, $commission);

		$commissionDuration = $Commission->getDuration();
		$commissionAmount = $Commission->getAmount();
		$commissionType = $Commission->getType();

		echo $commissionType;

=======
	$employee1 = new salaried_employee("Bosun","CEO", 1000, 2);
	$employeeTitle = $employee1->getTitle();
	
	echo $employeeTitle;	
		
>>>>>>> develop
	



?>