<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edit Job Listing</h2>
	<form method="post" action="edit.php?id=<?php echo $products->id; ?>">
		<div class="form-group">
			<label>Company</label>
			<input type="texr" class="form-control" name="company" value="<?php echo $products->company; ?>">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select type="texr" class="form-control" name="category">
				
				<option value="0" >Choose Category</option>
        		<?php foreach($categories as $category): ?>
        		<?php if($products->category_id == $category->id) :   ?>
        			<option value="<?php echo $category->id; ?>" selected>
        			<?php echo $category->name; ?></option>
				<?php else:   ?>
					<option value="<?php echo $category->id; ?>">
        			<?php echo $category->name; ?></option>
				<?php endif;   ?>
        		
        		<?php endforeach; ?> 
			</select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="product_title" value="<?php echo $products->product_title; ?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"> <?php echo $products->description; ?></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" value="<?php echo $products->location; ?>">
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control" name="price" value="<?php echo $products->price; ?>">
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" class="form-control" name="contact_user" value="<?php echo $products->contact_user; ?>">
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" class="form-control" name="contact_email" value="<?php echo $products->contact_email; ?>">
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="text" class="form-control" name="image" value="<?php echo $products->image; ?>">
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit">

	</form>
<?php include 'inc/footer.php'; ?>