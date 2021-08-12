<?php include_once 'config/init.php'; ?>

<?php
$products = new Products;
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
	if ($products->create($data)) {
		redirect('index.php','Your Product has been listed','success');
	}else{
		      redirect('index.php','Something Went Wrong','error');
          }
	# code...
}

$template = new Template('templates/product-create.php');

$template->categories = $products->getCategories();

echo $template;

?>