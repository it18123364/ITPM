<?php

    require_once('./controllers/DatabaseController.php');
    $db = new DatabaseController();

   class ShopController extends DatabaseController
   {
        public function getShopRecords()
        {
            global $db;
            $query = "select * from shop";
            $shops = mysqli_query($db->connection,$query);

            return $shops;
        }

        public function createShopRecords()
        {
            if(isset($_POST['btn_save']))
            {
                global $db;

                $filename = $_FILES["photo"]["name"];
                $tempname = $_FILES["photo"]["tmp_name"];    
                $folder = "images/".$filename;

                if (move_uploaded_file($tempname, $folder))  {
                    $msg = "Image uploaded successfully";
                }else{
                    $msg = "Failed to upload image";
                }

                $shop_name = (string) $db->check($_POST['shop_name']);
                $contact_number = $db->check($_POST['contact_number']);
                $location = $db->check($_POST['location']);
                $address = $db->check($_POST['address']);
    
                $query = "INSERT INTO shop (name, contact, location, address, photo) VALUES ('{$shop_name}', '{$contact_number}', '{$location}', '{$address}', '{$filename}')";
                mysqli_query($db->connection,$query);
            }
        }

        public function updateShopRecords()
        {
            global $db;

            $id = $_GET['edit'];

            $shop = "SELECT * FROM shop WHERE id = '{$id}' LIMIT 1";
            $shop_details = mysqli_query($db->connection,$shop);
            $shop_obj = mysqli_fetch_object($shop_details);

            return $shop_obj;
        }

        public function saveUpdateShopRecords($id)
        {
            if(isset($_POST['btn_save']))
            {
                global $db;

                $filename = $_FILES["photo"]["name"];
                $tempname = $_FILES["photo"]["tmp_name"];    
                $folder = "images/".$filename;

                if (move_uploaded_file($tempname, $folder))  {
                    $msg = "Image uploaded successfully";
                }else{
                    $msg = "Failed to upload image";
                }

                $shop_name = $db->check($_POST['shop_name']);
                $contact_number = $db->check($_POST['contact_number']);
                $location = $db->check($_POST['location']);
                $address = $db->check($_POST['address']);

                $shop = "UPDATE shop SET name = '{$shop_name}', contact= '{$contact_number}', location= '{$location}', address= '{$address}', photo= '{$filename}' WHERE id = '{$id}'";
                $shop_details = mysqli_query($db->connection,$shop);
            }
        }

        public function deleteRecords($id)
        {
            if(isset($_POST['btn_save']))
            {
                global $db;

                $shop = "DELETE FROM shop WHERE id = '{$id}'";
                $shop_details = mysqli_query($db->connection,$shop);
                $_POST['btn_save'] = null;
            }
        }
   } 

?>