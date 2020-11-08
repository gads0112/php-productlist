<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/database.php';
  include_once '../../models/product.php';

  // DB connect
  $database = new Database();
  $db = $database->connect();

  $product = new Product($db);

  // Get ID
  $product->id = isset($_GET['id']) ? $_GET['id'] : die();
   echo $product->id;
  // Get $product
  $product->read_single();

  // Create array
  $product_item = array(
    'id' => $product->id,
    'title' => $product->title,
    'description' => $product->description,
    'product_image' => $product->product_image,
    'price' => $product->price,
    'comments'=> $product->comments
  );

  // Make JSON
  print_r(json_encode($product_item));