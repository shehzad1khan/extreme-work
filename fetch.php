<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
       $query = "SELECT * FROM traders WHERE id = '$id'";
       $result = mysqli_query($link, $query);
       $row = mysqli_fetch_array($result);
       echo json_encode($row);
    }

?>