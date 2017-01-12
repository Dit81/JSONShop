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

$page .= '<h1>Order ID: ' . $cart->orderID . '</h1>';

/*$posts = $cart->contents;
echo '<pre>';
var_dump($posts);
echo '</pre>';*/

$page .= '<ul>';
for ($i=0; $i < count($cart->contents); $i++){
	//$page .= '<li>' . $cart->contents[$i]->productName . '</li>';
	$page .= '<li>#' . $cart->contents[$i]->productID . ' - ' . $cart->contents[$i]->productName . '</li>';
}
$page .= '</ul>';
$page .= '</body></html>';
echo $page; // Output HTML

?>
