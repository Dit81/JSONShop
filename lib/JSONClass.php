<?php
class JSONClass {
	
	function __construct(){}
	
	// json из массива
	public $cart = array(
	  "orderID" => 12345,
	  "shopperName" => "Ваня Иванов",
	  "shopperEmail" => "ivanov@example.com",
	  "contents" => array(
		array(
		  "productID" => 34,
		  "productName" => "Супер товар",
		  "quantity" => 1
		),
		array(
		  "productID" => 56,
		  "productName" => "Чудо товар",
		  "quantity" => 3
		)
	  ),
	  "orderCompleted" => true
	);

	// Пример json'а

/*	public $jsonString = '
	{                
	  "orderID": 12345,
	  "shopperName": "Ivan Ivanov",
	  "shopperEmail": "ivanov@cesis.ru",
	  "contents": [
		{
		  "productID": 34,
		  "productName": "Product 1",
		  "quantity": 1
		},       
		{
		  "productID": 56,
		  "productName": "Product 2",
		  "quantity": 3
		}          
	  ],
	  "orderCompleted": true
	}
	';
*/

	// Декодируем json
	public function jsonDecode() {		
		return json_decode( file_get_contents('cart.json') );
		//return json_decode( $this->jsonString );
	}
  
	// Создание json из массива
	public function jsonCreate() {
		return json_encode( $this->cart );
	}
	
	public function jsonOutputAll() {
		return $this->jsonDecode();
	}  

/* Создание json из массива
//////////////////////////////////////
$cart = array(
  "orderID" => 12345,
  "shopperName" => "Ваня Иванов",
  "shopperEmail" => "ivanov@example.com",
  "contents" => array(
    array(
      "productID" => 34,
      "productName" => "Супер товар",
      "quantity" => 1
    ),
    array(
      "productID" => 56,
      "productName" => "Чудо товар",
      "quantity" => 3
    )
  ),
  "orderCompleted" => true
);
 
echo json_encode( $cart );
//////////////////////////////////////*/  
}
?>
