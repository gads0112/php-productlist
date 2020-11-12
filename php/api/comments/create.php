<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

  include_once '../../config/database.php';
  include_once '../../models/comments.php';
  //  DB connect
  $database = new database();
  $db = $database->connect();

  //  comments object
  $comments = new Comments($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  $comments->product_comments = $data->product_comments;
  $comments->product_id = $data->product_id;

  // Create comments
  if($comments->create()) {
    echo json_encode(
      array('message' => 'comments Created')
    );
  } else {
    echo json_encode(
      array('message' => 'comments Not Created')
    );
  }
