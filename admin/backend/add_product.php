<?php
require_once "backend/connection.php";
require_once "backend/functions.php";

?>

<?php add_product(); ?>




<form action="" method="post" enctype="multipart/form-data">





  <div class="col-md-6" style="margin-left:50px ;">


  <div class="col-xs-3">
      <label for="name">Product Category</label>

      <?php
      $categories = show_categories_add_product_page();
      ?>

      <select name="category_id" id="" class="form-control">
        <option value="">Select a category </option>
        <?php foreach ($categories as $category): ?>


        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
        <?php endforeach; ?>

      </select>

    </div>

    <div class="col-xs-3 mt-4">
      <label for="product-title">Product Name </label>
      <input type="text" name="name" class="form-control">
    </div>


    <div class="col-xs-3 mt-4">
      <label for="product-title">Product Description</label>
      <textarea name="description" id="" cols="30" rows="7" class="form-control"></textarea>
    </div>



    <div class="col-xs-3">

      <div class="col-xs-3 mt-4">
        <label for="product-price">Product Price</label>
        <input type="number" name="price" class="form-control" size="60">
      </div>
    </div>


      <div><br></div>

      <!-- Product Image -->
      <div class="col-xs-3">
        <label for="product-title">Product Image</label>
        <input type="file" name="file">

      </div>


      <div class="col-xs-3 d-flex justify-content-center">

        <input type="submit" name="publish" class="btn btn-primary btn-lg rounded-pill pr-5 pl-5 mb-5 mt-3" value="Send">
      </div>

</form>


</div>

</div>