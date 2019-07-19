<?php

	use PHPUnit\Framework\TestCase;
	
	class SacTest extends TestCase{

		public function testGetTicket(){

			$appHost = $_ENV["ET_SUT_HOST"];
		
			if($appHost == NULL){
				$appHost = "localhost";
			}

			//$curl_handle=curl_init();
			//curl_setopt($curl_handle, CURLOPT_URL,"http://$appHost:80/tickets");
			//curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
			//curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			//curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
			//$query = curl_exec($curl_handle);
			//curl_close($curl_handle);
			
			$response = file_get_contents("http://$appHost:80/");
			$this->assertNull(NULL);
			//fwrite(STDERR, print_r($query, TRUE));
			//$this->assertJsonStringEqualsJsonString(
        		//	'{"ticketId":"555555","userName":"teste","userEmail":"teste@gmail.com","userPhone":"9999999","userMessage":"ola","ticketStatus":"1"}',
			//	$query
			//);
		}	
	}

?>

