<?php 
  class Product {

    private $conn;
    private $table = 'product_information';
    public $id;
    public $title;
    public $description;
    public $product_image;
    public $price;
    

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get multiple products
    public function read() {
      // Create query
      $query = 'SELECT * FROM '. $this->table.'';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single product
    public function read_single() {
          // Create query
          $query = 'SELECT * FROM ' . $this->table . ' WHERE id = '.$this->id.' LIMIT 0,1';
          $query1 = 'SELECT * FROM  comments WHERE product_id = '.$this->id.' ';

          // Prepare statement
          $stmt = $this->conn->prepare($query);
          $stmt1 = $this->conn->prepare($query1);

         

          // Execute query
          $stmt->execute();
          $stmt1->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          
          
          $comments_arr = array();
    

          while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
              
            extract($row1);
      
            $comments_item = array(
              'product_comments' => $product_comments,
              'id'=>$id
              
            );
      
            // Push to "data"
            array_push($comments_arr, $comments_item);
            
          }
          // Set properties
          
          $this->title = $row['title'];
          $this->description = $row['description'];
          $this->product_image = $row['product_image'];
          $this->price = $row['price'];
          $this->comments =$comments_arr;
          
    }

    

    
    
  }