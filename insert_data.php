<?php
include('db_connection.php');
if(isset($_POST['add_data'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $file_name = $_FILES['image']['name'];
    $tempname= $_FILES['image']['tmp_name'];
    $folder = "images/".$file_name;


   if($title == "" || empty($title)){
    header('location: index.php?error=Title is required');
   }
   else{
    $query=" INSERT INTO  `header` (`logo`,`title`,`description`) 
    values ('$file_name','$title,'$description',)";
    if(move_uploaded_file($tempname,$folder)){
        echo "logo uploaded successfully";
    }
    else{
        echo "logo not uploaded";
    }

    $result = mysqli_query($connection,$query);

    if(!$result){
        die(mysqli_error($connection));
    }
    else{
        header('location: index.php?insert_msg=Data added successfully');
    }
}
}

?>