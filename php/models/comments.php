<?php
  class Comments {
    // DB
    public $conn;
    private $table = 'comments';

    // Properties
    public $id;
    public $product_comments;
    public $product_id;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

  // Create Post
    public function create() {
    // Create query
     $query ="INSERT INTO comments(product_comments,product_id)  VALUES('".$this->product_comments."',".$this->product_id.")";


    // Prepare statement
    $stmt = mysql_query($query, $this->conn);

    echo $stnt;
   if ($stmt) {
        return true;
}
// Print error if something goes wrong
printf("Error: %s.\n", $stmt->error);
return false;
}
// Delete Comments
public function delete() {
  // Create query
  $query = 'DELETE FROM ' . $this->table . ' WHERE id = '. $this->id . '';
     echo $this->conn;
  // Prepare Statement
  $stmt = mysql_query($query, $this->conn);

  // Execute query
  if($stmt) {
    return true;
  }

  // Print error if something goes wrong
  printf("Error: $s.\n", $stmt->error);
  return false;
  }


  }
  ?>
