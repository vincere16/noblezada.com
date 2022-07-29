<?php include"php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOK REGISTERED</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
        <div class="box">
                    <h4 class="display-4 text-center"><b>BOOK REGISTERED</b></h4><hr><br>
                    <?php if (isset($_GET['success'])) { ?>
		   <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		   <?php } ?>
                    <?php if (mysqli_num_rows($result)){ ?>

                  <table class="table table-bordered">
  <thead>
    <tr>
     
      <th scope="col">ID</th>
      <th scope="col">LIBRARY NAME</th> 
      <th scope="col">TITLE</th>
      <th scope="col">AUTHOR</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">YEAR</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTION</th>

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
      
 <td> 
          <a href="update.php?id=<?=$rows['id']?>" 
              class="btn btn-success">Update</a>
 </td>
 <td>
              <a href="php/delete.php?id=<?=$rows['id']?>" 
              class="btn btn-danger">Delete</a>
 </td>
 </tr>
 <?php } ?>
</tr>
 </tbody>
</table>
 <?php } ?>
                    <div class ="link-left">
                        <a href="front.php" class="link-primary">CREATE</a>
        <a href="front.php" class="link-primary">CLOSE</a>                  
</div>
</body>

</html> 
