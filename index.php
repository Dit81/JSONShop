<?php
include_once "lib/JSONClass.php";
error_reporting( E_ALL );


$page = '<!doctype html><head>
<title>Orders</title>
<meta charset="utf-8">
</head><body>';


$json = new JSONClass();
$cart = $json->jsonDecode();
//echo $cart->shopperEmail . "<br>";
//echo $cart->contents[0]->productID . "<br>";
//echo $cart->contents[0]->productName . "<br>";



$page .= '<h1>Order ID: ' . $cart->orderID . '</h1>
<h2>#' . $cart->contents[0]->productID . ' - ' . $cart->contents[0]->productName . '</h2>';

/*$posts = $cart->contents;
echo '<pre>';
var_dump($posts);
echo '</pre>';*/

for ($i=0; $i < count($cart->contents); $i++){
	$page .= $cart->contents[$i]->productName . '<br>';
}

$page .= '</body></html>';
echo $page; // Output HTML

?>
