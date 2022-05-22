<?php

    require_once('ShopController.php');
    require_once('EquipmentController.php');
    // require_once('./controllers/AddShop.php');

    class DatabaseController
    {
        public $connection;

        public function __construct()
        {
            $this->db_connect();
        }

        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost','root','','equipment');

            if (mysqli_connect_error()) {
                die("Connection Failed");
            }
        }

        public function check($field)
        {
            $return = mysqli_real_escape_string($this->connection, $field);

            return $return;
        }
    }

?>