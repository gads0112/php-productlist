<?php
  class Database {
    // DB Parameters
    public $host = 'mysql.wiu.edu:2520';
    public $db_name = 'productlist';
    public $username = 'root';
    public $password = '7dib2vug';
    public $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      // try {
      //   $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
      //   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // } catch(PDOException $e) {
      //   echo 'Connection Error: ' . $e->getMessage();
      // }
      $this->conn = mysql_connect($this->host, $this->username, $this->password);
      if (!$this->conn) {
          die('Could not connect: ' . mysql_error());
      }

      $db_selected = mysql_select_db($this->db_name);
      if (!$db_selected) {
          die('Could not select database: ' . mysql_error());
      }


      return $this->conn;
    }
}
?>
