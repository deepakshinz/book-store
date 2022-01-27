<?php 
    $conn = mysqli_connect("localhost","root","","book store");
    //table name
    $tablename = $_POST["cat"];
    //columns
    $id = $_POST["bookid"];
    $name = $_POST["bookname"];
    $price = $_POST["price"];
    $rackno = $_POST["rackno"];
    $author = $_POST["author"];
    $isbn = $_POST["isbn"];
    $edition = $_POST["edition"];

    if(!$conn)
        echo mysqli_connect_error();
    else{
        if(strlen($name)>5){
            
            $qur = "insert into ".$tablename." values('".$id."','".$name."','".$price."','".$rackno."','".$author."','".$isbn."','".$edition."')";
            $res=mysqli_query($conn,$qur);
            
            if(!$res)
                echo "insertion failed";
            else{
                echo "book details stored";
            }
        }else{
            echo "length should be greater than 5";
        }
    }
?>