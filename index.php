<?php include_once 'config/init.php'; ?>

<?php
$products = new Products;

$template = new Template('templates/frontpage.php');

$category= isset($_GET['category']) ? $_GET['category']:null;
if ($category) {
	$template->Products = $products->getByCategory($category);
	$template->title = 'Jobs In'.$products->getCategory($category)->name;
}else{
	$template->title = 'Latest Products';
	$template->Products = $products->getAllProducts();
}

$template->categories = $products->getCategories();

echo $template;