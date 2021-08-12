<?php include_once 'config/init.php'; ?>

<?php
$products = new Products;

if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];
	if ($products->delete($del_id)) {
		redirect('index.php','Product Deleted','success');
	}else{
		redirect('index.php','Product Not Deleted','error');
	}
	# code...
}

$template = new Template('templates/product-single.php');
//if there is an id parameter it will be put in this variable
$product_id= isset($_GET['id']) ? $_GET['id']:null;


$template->products = $products->getProduct($product_id);

echo $template;