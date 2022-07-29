<?php include"php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>

	<title>LIST OF BOOKS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    
	<div class="container">
            
		<div class="box">
                    <?php if (isset($_GET['success'])) { ?>
		   <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		   <?php } ?>
                    <?php if (mysqli_num_rows($result)){ ?>

                  <table class="table table-striped">
  <thead>
    <tr>
     
        <th scope="col">ID</th>
       <th scope="col">LIBRARY NAME</th> 
      <th scope="col">TITLE</th>
      <th scope="col">AUTHOR</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">YEAR</th>
        <th scope="col">QUANTITY</th>
    

    </tr>
  </thead>
  <tbody>
                          <?php 
                          $i =0;
                          while($rows = mysqli_fetch_assoc($result)){
                          $i++;
                          ?>
    <tr>
      <th scope="row"> <?=$i?> </th>
      <td><?=$rows['ln']?></td>
      <td><?=$rows['title']?></td>
      <td><?=$rows['author']?></td>
      <td><?=$rows['category']?></td>
      <td><?=$rows['year']?></td>
         <td><?php echo $rows['quantity']; ?></td>
      
    
 </tr>
 <?php } ?>
 </tr>
 </tbody>
 <h1> LIST OF BOOK</h1>
</table>
                                        <?php } ?>
                <div class ="link-left">
                        <a href="index.php" class="link-primary">BACK TO FRONT PAGE</a>
      
</div>   
</div>
</body>

</html> 
