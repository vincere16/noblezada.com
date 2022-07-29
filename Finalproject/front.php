<!DOCTYPE html>
<html>
  
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
	<form action="php/create.php" 
		    method="post">
           
                    <h4 class="display-4 text-center"><b>BOOK REGISTRATION</b></h4><hr><br>
                   
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
                     
		   <?php } ?>
		   
                                        <div class="form-group">
                                        <label for="ln"><b>LIBRARY NAME</b></label>
                                        <input type="ln" 
                                             class="form-control" 
                                             id="ln" 
                                             name="ln" 
                                             value="<?php if(isset($_GET['ln']))
                                                             echo($_GET['ln']); ?>" 



                                        <div class="form-group">
                                        <label for="title"><b>TITLE</b></label>
                                        <input type="title" 
                                             class="form-control" 
                                             id="title" 
                                             name="title" 
                                             value="<?php if(isset($_GET['title']))
                                                             echo($_GET['title']); ?>" 


                                      <div class="form-group">
                                          <label for="author"><b>AUTHOR</b></label>
                                       <input type="author" 
                                             class="form-control" 
                                             id="author" 
                                             name="author" 
                                             value="<?php if(isset($_GET['author']))
                                                             echo($_GET['author']); ?>" 


                                     <div class="form-group">
                                         <label for="category"><b>CATEGORY</b></label>
                                       <input type="category" 
                                             class="form-control" 
                                             id="category" 
                                             name="category" 
                                             value="<?php if(isset($_GET['category']))
                                                             echo($_GET['category']); ?>" 


                                     <div class="form-group">
                                         <label for="year"><b>YEAR PUBLISHED</b></label>
                                       <input type="year" 
                                             class="form-control" 
                                             id="year" 
                                             name="year" 
                                             value="<?php if(isset($_GET['year']))
                                                             echo($_GET['year']); ?>" 


                                     <div class="form-group">
                                         <label for="quantity"><b>STATUS</b></label>
                                       <input type="quantity" 
                                             class="form-control" 
                                             id="quantity" 
                                             name="quantity" 
                                             value="<?php if(isset($_GET['quantity']))
                                                             echo($_GET['quantity']); ?>" 
		           
		   <div><br>
		   <button type="submit" 
		          class="btn btn-primary"
                          
                          name="create"><b>Create</b></button>
                                       <p align="right">
                                           <a href="read.php" class="link-primary"><b>VIEW</b></a><br>
                     <a href="index.php" class="link-primary"><b>LOG OUT</b></a><br></p>
                     </div>

</form>
</div>
</body>
</html> 