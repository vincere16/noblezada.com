<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
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

	

    $user_data = '&ln='.$ln. '&title='.$title. '&author='.$author. '&category='.$category. '&year='.$year.'&quantity='.$quantity ;


      
        if (empty($ln)) {
		header("Location: ../front.php?error=Library name of book is required&$user_data");
           
        }else if(empty($title)) {
		header("Location: ../front.php?error=Title of book is required&$user_data");
                
	}else if(empty($author)) {
		header("Location: ../front.php?error=Author of the book is required&$user_data");
                
        }else if(empty($category)) {
		header("Location: ../front.php?error=Category of the book is required&$user_data");
        }else if(empty($year)) {
		header("Location: ../front.php?error=Year of published is required&$user_data");
            }else if(empty($quantity)) {
        header("Location: ../front.php?error=Quantity name is required&$user_data");
     
            }else {

       $sql = "INSERT INTO users(ln, title, author, category, year, quantity) 
               VALUES('$ln', '$title', '$author', '$category', '$year', '$quantity')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	    header("Location: ../read.php?success=sucessfully created");
       }else {
          header("Location: ../front.php?error=unknown error occurred&$user_data");
       }
	}

 }