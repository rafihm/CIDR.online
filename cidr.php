<?php
		require_once(__DIR__ . '/vendor/autoload.php');
		$combinedCIDR = $_GET["inCIDR"];
		$delimitor = '/';
		$splittedString = explode($delimitor, $combinedCIDR);
		$sub = new IPv4\SubnetCalculator($splittedString[0], $splittedString[1]);
		
		$number_ip_addresses    = $sub->getNumberIPAddresses();
		$jsonOutput = $sub->getSubnetJSONReport();
		echo $jsonOutput;
		echo $sub;
		$string_report = $sub->getPrintableReport();
		echo "   \n";
		echo $string_report;
?>
