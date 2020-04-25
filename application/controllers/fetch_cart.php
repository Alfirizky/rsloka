<?php

//fetch_cart.php

session_start();

$total_price = 0;
$total_item = 0;

$output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>
            <th width="40%">Nama Produk</th>
            <th width="10%">Kuantitas</th>
            <th width="20%">Harga</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '
		<tr>
			<td>'.$values["product_name"].'</td>
			<td>'.$values["product_quantity"].'</td>
			<td align="right">Rp '.$values["product_price"].'</td>
			<td align="right">Rp '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">hapus</button></td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;
	}
	$output .= '
	<tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">Rp '.number_format($total_price, 2).'</td>
        <td></td>
    </tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		Keranjang anda kosong, beli yuk!
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'Rp' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);

echo json_encode($data);


?>
