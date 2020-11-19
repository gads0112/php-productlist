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

      $stmt = mysql_query($query,$this->conn);

      return $stmt;
    }

    // Get Single product
    public function read_single() {
          // Create query
          $query = 'SELECT * FROM ' . $this->table . ' WHERE id = '.$this->id.' LIMIT 0,1';
          $query1 = 'SELECT * FROM  comments WHERE product_id = '.$this->id.' ';

          // Prepare statement
          $stmt = mysql_query($query,$this->conn);
          $stmt1 = mysql_query($query1,$this->conn);




          $row = mysql_fetch_assoc($stmt);


          $comments_arr = array();


          while($row1 = mysql_fetch_assoc($stmt1)) {

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
?>
                         