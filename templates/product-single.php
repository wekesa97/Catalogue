<?php include 'inc/header.php'; ?>
<h2 class="page-header"><?php echo $products->product_title; ?> (<?php echo $products->location ?> ) </h2>

<small>Posted By <?php echo $products->contact_user; ?> on <?php echo $products->post_date; ?></small>
<div>
	<img src="<?php echo $products->image; ?>" alt="description">
</div>
<hr>
<p class="lead">
	<?php echo $products->description; ?></p>
	<ul class="list-group">
		<li class="list-group-item"><strong>Company:</strong><?php echo $products->company; ?></li>
		<li class="list-group-item"><strong>Price:</strong><?php echo $products->price; ?></li>
		<li class="list-group-item"><strong>Contact Email:</strong><?php echo $products->contact_email; ?></li>		
	</ul>
	<br><br>
	<a href="index.php">Go Back</a>
	<br><br>
	<div class="well">
		<a href="edit.php?id=<?php echo $products->id; ?>" class="btn btn-default">Edit </a>
		<form style="display:inline;" method="post" action="products.php">
			<input type="hidden" name="del_id" value="<?php echo $products->id; ?>">
			<input type="submit" name="btn btn-danger" value="Delete">
		</form>
		
	</div>
<?php include 'inc/footer.php'; ?>