<?php
	
	// Filename: opcostprogram.php
	// Author: Thomas Garrett
	// Purpose: Create a program that'll display a bookstore's monthly operating costs
	
	
	// Assignments 
	
	define('NET_INC_FACTOR', '0.57');
		
	$sales = 190000;
	$rent = 25000;
	$salaries = 37500;
	$supplies = 410;
	
	// Calculations 
	
	$total_costs = $rent + $salaries + $supplies;
	$operating_income = $sales + $total_costs;
	$net_income = $operating_income * NET_INC_FACTOR;

	
	// Output 
	
	echo "Garrett's Bookstore Operating Costs" . "<br>" . "<br>";
	echo "-----------------------------------------------" . "<br>" . "<br>";
	
	
	echo "Sales: " . "$" . number_format($sales, 2) . "<br>" . "<br>";  
	
	echo "Expenses:" . "<br>";
	echo "Rent: " . "$" . number_format($rent, 2) . "<br>";
	echo "Salary: " . "$" . number_format($salaries, 2) . "<br>";
	echo "Supplies: " . "$" . number_format($supplies, 2) . "<br>" . "<br>";
	
	
	echo "Total costs: " . "$" . number_format($total_costs, 2) . "<br>";
	echo "Operating income: " . "$" . number_format($operating_income, 2) . "<br>";
	echo "Net income: " . "$" . number_format($net_income, 2); 
 
?>