<?php
  // Headers

  include_once '../../config/database.php';
  include_once '../../models/comments.php';
  //  DB connect
  $database = new Database();
  $db = $database->connect();

  //  comments object
  $comment = new Comments($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  $comment->product_comments = $data->product_comments;
  $comment->product_id = $data->product_id;

  // Create comments
  if($comment->create()) {
    echo json_encode(
      array('message' => 'comments Created')
    );
  } else {
    echo json_encode(
      array('message' => 'comments Not Created')
    );
  }
