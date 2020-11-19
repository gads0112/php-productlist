<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/database.php';
  include_once '../../models/comments.php';

  // DB connect
  $database = new Database();
  $db = $database->connect();

  $comments = new Comments($db);

  // Get ID
  $comments->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get $comments
  $comments->delete();



  // Make JSON
  print_r(json_encode([]));
