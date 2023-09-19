<?php
include("w_db.php");

if (isset($_POST['send'])){
    if(strlen($_POST['name']) < 1 &&
       strlen($_POST['email']) < 1 &&
       strlen($_POST['message']) < 1) {
           $name = trim($_POST['name']);
           $email = trim($_POST['email']);
           $message = trim($_POST['message']);
           $date_reg=date("d/m/y");
           $query = "INSERT INTO datos( name, email, message date_reg) VALUES ('$name','$email','$message','$date_reg')";
           $result = mysqli_query($conex,$query);
           if($result){
            ?>
            <h2> Tu mensaje ha sido enviado </h2>
            <?php
            }else{
                ?>
                <h2> Ups a mejorar estooo</h2>
                <?php
            }
         
       }
}





?>