
<?php
if (isset($_GET['id'])){
    include "db_conn.php";
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);
    
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_assoc($result);
    }else{
         header("Location: read.php");
    }
    
    
}else if (isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $ln = validate($_POST['ln']);
    $title = validate($_POST['title']);
    $author = validate($_POST['author']);
    $category = validate($_POST['category']);
    $year = validate($_POST['year']);
    $quantity = validate($_POST['quantity']);
    $id = validate($_POST['id']);

   

    if (empty($ln)) {
        header("Location: ../update.php?id=$id&error=Library name is required");
     } else if (empty($title)) {
        header("Location: ../update.php?id=$id&error=Author of book is required");   
    } else if (empty($author)) {
        header("Location: ../update.php?id=$id&error=Author of book is required");
    } else if (empty($category)) {
        header("Location: ../update.php?id=$id&error=Category of book is required");
    } else if (empty($year)) {
        header("Location: ../update.php?id=$id&error=Published year of book is required");
    } else if (empty($quantity)) {
        header("Location: ../update.php?id=$id&error=Status of book is required");
    } else {

        $sql = "UPDATE users
               SET ln='$ln',title='$title', author='$author', category='$category', year='$year', quantity='$quantity'
               WHERE id=$id ";
           
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../read.php?success=sucessfully updated");
        } else {
            header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
        }
    }
}else{
    header("Location: read.php");
}