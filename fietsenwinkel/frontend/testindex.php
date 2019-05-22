<?php
include 'databasecon.php';
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="gridview">
        <div class="heading">Product Gallery for Shopping Cart</div>
<?php
$query = $db_handle->runQuery("SELECT * FROM products ORDER BY id ASC");
if (! empty($query)) {
    foreach ($query as $key => $value) {
        ?>  
            <div class="image">
            <img src="<?php echo $query[$key]["product_image"] ; ?>" />
            <div class="product-info">
                <div class="product-title"><?php echo $query[$key]["name"] ; ?></div>
                <ul>
  <li class='<?php echo $selected; ?>'>★</li>  
  <?php }  ?>
</ul>
                <div class="product-category"><?php echo $query[$key]["category"] ; ?>
                
                </div>
                <div class="add-to-cart">
                <div><?php echo $query[$key]["price"] ; ?> USD</div>
                <div><img src="icon-cart.png" /></div>
                </div>
            </div>
            </div>
<?php
    }
}
?>
    </div>
</body>
</html>