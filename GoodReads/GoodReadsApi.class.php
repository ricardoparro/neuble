<?php

class GoodReadsApi{
	
	//method for auth
	public static function GetBooksByIsbn($key, $isbn){
		$service_url = 'http://www.goodreads.com/book/isbn_to_id';
		
		$curl = curl_init($service_url);
		$curl_post_data = array("key" => $key,
		            "isbn" => $isbn);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPGET, true);
				       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
				       $curl_response = curl_exec($curl);
				       curl_close($curl);

				       return $curl_response;
		
		
	}
	
	public static function GetReviewsByBookId($bookId, $key){
		
		$service_url = 'http://www.goodreads.com/book/show';
		
		$curl = curl_init($service_url);
		$curl_post_data = array("format" => 'xml',
		            "key" => $key,
					"id" => $bookId);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPGET, true);
				       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
				       $curl_response = curl_exec($curl);
				       curl_close($curl);
						$xml = new SimpleXMLElement($curl_response);
				       return $xml;
		
		
		
	} 
	
	
	
}
	
	


?>