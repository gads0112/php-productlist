<?php
  class Comments {
    // DB 
    private $conn;
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
    $query = 'INSERT INTO ' . $this->table . ' SET product_comments = :product_comments, product_id = :product_id';

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    // Clean data
    $this->product_comments = htmlspecialchars(strip_tags($this->product_comments));
    $this->product_id = htmlspecialchars(strip_tags($this->product_id));
    

    // Bind data
    $stmt->bindParam(':product_comments', $this->product_comments);
    $stmt->bindParam(':product_id', $this->product_id);
    

    // Execute query
    if($stmt->execute()) {
      return true;
}

// Print error if something goes wrong
printf("Error: %s.\n", $stmt->error);

return false;
}
// Delete Comments
public function delete() {
  // Create query
  $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

  // Prepare Statement
  $stmt = $this->conn->prepare($query);

  // clean data
  $this->id = htmlspecialchars(strip_tags($this->id));

  // Bind Data
  $stmt-> bindParam(':id', $this->id);

  // Execute query
  if($stmt->execute()) {
    return true;
  }

  // Print error if something goes wrong
  printf("Error: $s.\n", $stmt->error);

  return false;
  }

  

  
  }
