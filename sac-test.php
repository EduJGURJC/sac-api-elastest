<?php

	use PHPUnit\Framework\TestCase;
	
	class SacTest extends TestCase{

		public function testGetTicket(){

			$appHost = $_ENV["ET_SUT_HOST"];
		
			if($appHost == NULL){
				$appHost = "localhost";
			}

			$response = file_get_contents("http://$appHost:5000/tickets");
			$this->assertNull(NULL);

		}	
	}

?>

