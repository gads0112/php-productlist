<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/database.php';
  include_once '../../models/product.php';

  //  DB connect
  $database = new Database();
  $db = $database->connect();

  //  product object
  $product = new Product($db);

  // product query
  $result = $product->read();
  // Get row count
  $num = mysql_num_rows($result);

  // Check if any products
  if($num > 0) {
    // product array
    $product_arr = array();


    while($row = mysql_fetch_assoc($result)) {
      extract($row);

      $product_item = array(
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'product_image' => $product_image,
        'price' => $price

      );

      // Push to "data"
      array_push($product_arr, $product_item);

    }

    // Turn to JSON & output
    echo json_encode($product_arr);

  } else
  {
    // No products
    echo json_encode(
      array('message' => 'No products Found')
    );
  }
