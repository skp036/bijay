<?php

$file = file_get_contents('file.json');
$arr = json_decode($file, true);

// insert_user_details($arr);
// insert_product_details($arr);

function insert_product_details($arr)
{
	$product_details 	   = $arr['product_details'];
	$product_names 		   = $product_details['product_name'];
	// SQL Values
	$product_id 		   = $product_details['product_id'];
	$product_price 		   = $product_details['product_price'];
	$product_regular_price = $product_details['product_regular_price'];
	$product_sale_price	   = $product_details['product_sale_price'];

	for ($x = 0; $x < count($product_names); $x++) {
		
		$current_product_name 	  = $product_names[$x];
		$current_product_quantity = $product_details['product_quantity'][$x];

		$query = "
			INSERT INTO
				product_details
			VALUES (
				NULL,
				'$product_id',
				'$current_product_name',
				'$current_product_quantity',
				'$product_price',
				'$product_regular_price',
				'$product_sale_price'
			)
		";

		
	}
}

function get_user_details($arr)
{
	
	$user_details = $arr['user_details'];
	unset( $user_details['terms'] );
	unset( $user_details['createaccount'] );
	unset( $user_details['shipping_method'] );

	$column_values_arr = array_values($user_details);
	$column_values = "NULL, '" . implode("', '", $column_values_arr) . "'";
	$query = "INSERT INTO user_details VALUES ( $column_values )";
	
}