<?php
require_once ('mercadopago.php');

//$mp = new MP('', '');
$mp = new MP('6517025143495386', 'R7kefxzRGswIuKLMAx5cKnxdv3FRHcHh');

$preference_data = array(
	"items" => array(
		array(
			"title" => "Multicolor kite",
			"quantity" => 1,
			"currency_id" => "BRL", // Available currencies at: https://api.mercadopago.com/currencies
			"unit_price" => 130.00
		)
	)
);

$preference = $mp->create_preference($preference_data);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pay</title>
	</head>
	<body>
		<a href="<?php echo $preference['response']['init_point']; ?>">Pay</a>
	</body>
</html>