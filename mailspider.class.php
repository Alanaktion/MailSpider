<?php
// MailSpider
// Copyright (c) Alan Hardman 2013
// Licensed under Creative Commons 3.0 Attribution (http://creativecommons.org/licenses/by/3.0/)

class Mailspider() {
	
	private string $url;      // URL to start spidering from
	private int    $maxurls;  // Maximum number of URLs to spider
	private bool   $outside;  // Whether to spider pages outside initial domain
	private array  $prevurls; // Scanned URLs
	private array  $newurls;  // URLs that need to be scanned
	private array  $emails;   // Email addressed found
	
	// Initialize the spider
	function __construct($url,$options = array()) {
		$this->url     = $url;
		$this->host    = parse_url($url,PHP_URL_HOST);
		$this->maxurls = intval($options['maxurls']) ? intval($options['maxurls']) : 0;
		$this->outside = boolval($options['outside']);
	}
	
	// Start the spider
	function run() {
		if(!$this->url)
			throw new Exception('No spider URL specified, cannot begin spidering!');
		
	}
	
	// Process a page (this thing'll be terrifyingly recursive)
	private function process($url) {
		
		
		
		// Add email addresses from page content
		preg_match_all("/\b\w+\@\w+[\.\w+]+\b/", $str, $output);
		foreach($output[0] as $email)
			$this->emails[] = strtolower($email);
		
		
	}
	
	// 

}

?>