<?php
// This demo will only return results if modified to spider a website that includes email addresses somewhere on it.

// Increase max_execution_time (The spider operation often takes a while)


// Require Mailspider class
require_once 'mailspider.class.php';

// Initialize new Mailspider instance
$spider = new Mailspider(
		$url = 'http://www.example.com/',
		$options = array(
			'maxurls' => 5, // Integer, maximum addresses to scan for email addresses, 0 means no limit (don't do that)
			'outside' => false // Boolean, whether to spider outside of the initial domain
		)
	);

// Run the spider














?>