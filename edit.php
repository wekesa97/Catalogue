<?php include_once 'config/init.php'; ?>

<?php
$products = new Products;
$product_id= isset($_GET['id']) ? $_GET['id']:null;
if (isset($_POST['submit'])) {
	//Create Data Array
	$data = array();
	$data['product_title'] = $_POST['product_title'];
	$data['company']= $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['price'] = $_POST['price'];
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];
	$data['image'] = $_POST['image'];
	if ($products->update($product_id,$data)) {
		redirect('index.php','Your product has been updated','success');
	}else{
		redirect('index.php','Something Went Wrong','error');
	}
	# code...
}

$template = new Template('templates/product-edit.php');
$template->products = $products->getProduct($product_id);


$template->categories = $products->getCategories();

echo $template;