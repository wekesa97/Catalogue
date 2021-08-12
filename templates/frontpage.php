<?php include 'inc/header.php'; ?>
<div class="jumbotron" style="background-image: url(images/iron_sheet.jpg);opacity: 0.6;height: 350px;padding: 20px;">
        <h1 class="display-3" style=" color:white " >Find A Product</h1>
        <form method="GET" action="index.php" >
          <select name="category" class="form-control">
            <option value="0" ><h1>Choose Category</h1></option>
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>">
              <?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-lg btn-success" value="FIND">
          
        </form>
      </div>
      <h3><?php echo $title;  ?></h3>
   

     </div>


<!--Grid Start for blogs-->
      
      <div class="container-fluid">
         <?php foreach($Products as $products): ?>
          <div class="row" style="padding: 20px;">

            <div class="col-sm-4" >

              <h5 class="card-title font-size-14"><?php echo $products->product_title; ?></h5>
              <img src="<?php echo $products->image;  ?>" alt="cart-image" class="card-img top">
              <p class="card-text font-size-14 text-black-50 pt1"><?php echo $products->description; ?></p>
                 
                 <a class="btn btn-danger" href="products.php?id=<?php echo $products->id; ?>">View</a>
            </div>           
          </div>
         

      </div>
       <?php  endforeach; ?>
      <!-- end of blogs-->

<!--
<div class="container">
      <div class="jumbotron">
        <h1 class="display-3">Find A Product</h1>
        <form method="GET" action="index.php" >
        	<select name="category" class="form-control">
        		<option value="0" >Choose Category</option>
        		<?php foreach($categories as $category): ?>
        		<option value="<?php echo $category->id; ?>">
        			<?php echo $category->name; ?></option>
        		<?php endforeach; ?>
        	</select>
        	<br>
        	<input type="submit" class="btn btn-lg btn-success" value="FIND">
        	
        </form>
      </div>
      <h3><?php echo $title;  ?></h3>
 		<?php foreach($Products as $products): ?>
       <div class="row marketing">     
          <div class="row marketing">
        	 <div class="col-md-10">
              <img src="<?php echo $products->image;  ?>" alt="No Image available">
          		<h4><?php echo $products->product_title; ?></h4>
          		<p><?php echo $products->description; ?></p>
       		 </div>
          <div class="col-md-2">
        	<a class="btn btn-default" href="products.php?id=<?php echo $products->id; ?>">View</a>
        </div>
       </div>

       <?php  endforeach; ?>

     </div>     
</div>      
-->
    
<?php include 'inc/footer.php'; ?>
