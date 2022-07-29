
<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT TABLE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		    method="post">
                 
                    <h4 class="display-4 text-center"><b>UPDATE REGISTRATION</b></h4><hr><br>
                   
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   
                    <div class="form-group">
		     <label for="ln">LIBRARY NAME</label>
		     <input type="ln" 
		           class="form-control" 
		           id="ln" 
		           name="ln" 
		           value="<?=$row['ln'] ?>" >
		       
		   </div>
                    
                    
                    
                    <div class="form-group">
		     <label for="title">TITLE</label>
		     <input type="title" 
		           class="form-control" 
		           id="title" 
		           name="title" 
		           value="<?=$row['title'] ?>" >
		       
		   </div>

		   <div class="form-group">
		     <label for="author">AUTHOR</label>
		     <input type="author" 
		           class="form-control" 
		           id="author" 
		           name="author" 
		           value="<?=$row['author'] ?>" >
		           
		   </div>
                   
                   <div class="form-group">
		     <label for="category">CATEGORY</label>
		     <input type="category" 
		           class="form-control" 
		           id="category" 
		           name="category" 
		           value="<?=$row['category'] ?>" >
                     
                     <div class="form-group">
		     <label for="year">YEAR PUBLISHED</label>
		     <input type="year" 
		           class="form-control" 
		           id="year" 
		           name="year" 
		           value="<?=$row['year'] ?>" >
		           
		   </div>
                     
                        <div class="form-group">
		     <label for="quantity">QUANTITY</label>
		     <input type="quantity" 
		           class="form-control" 
		           id="quantity" 
		           name="quantity" 
		           value="<?=$row['quantity'] ?>" >
		           
		   </div>
                   
                   <input type="text"
                         name="id"
                         value="<?=$row['id']?>"
                         hidden >
                       
		   <button type="submit" 
		          class="btn btn-primary"
		          name="update">SAVE</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html> 