<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

 if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $passport = mysqli_real_escape_string($link, $_POST['passport']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);
    $total = mysqli_real_escape_string($link, $_POST['total']);
    $advance = mysqli_real_escape_string($link, $_POST['advance']);
    $due = mysqli_real_escape_string($link, $_POST['due']);
    $tracking = mysqli_real_escape_string($link, $_POST['tracking']);
    $email = mysqli_real_escape_string($link, $_POST['email']);

    $sql = "INSERT into traders (name, passport_no, contact_no, total_payment, advance_payment, due_payment, tracking_id, email) VALUES ('$name', '$passport', '$contact', '$total', '$advance', '$due', '$tracking', '$email')";

    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    if($query){
        header("location:table.php?record=inserted");
    }
 }
?>