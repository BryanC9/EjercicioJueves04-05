<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>

	<div class="relative">
		<img src="images/img1.png"  height="200" width="200">
	</div>
	
	<div class="relative2">
		<img src="images/img2.png"  height="200" width="200">
	</div>
	
	<div class="relative3">
		<img src="images/img3.png"  height="200" width="200">
	</div>
	
	<div class="relative4">
		<img src="images/img4.png"  height="200" width="200">
	</div>

 
 
 
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      
       <tr>
       	  <ul>
       	  	 <td><img src = "<?php echo $row ['imagen_servicio']; ?>" width="60" height="60" alt="word" /></td>
       	  	 <ul>
       	  	 	<ol><td><?php echo $row['nombre_servicio']?></td></ol>
	      		<ol><td><?php echo $row['descripcion_servicio']?></td></ol>
       	  	 </ul>
       	  </ul>
	  </tr>
     
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </body>
 </html>
