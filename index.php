<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>

	<div class="relative">
		<img src="images/img1.png"  height="100" width="100">
	</div>
	
	<div class="relative2">
		<img src="images/img2.png"  height="100" width="100">
	</div>
	
	<div class="relative3">
		<img src="images/img3.png"  height="100" width="100">
	</div>
	
	<div class="relative4">
		<img src="images/img4.png"  height="100" width="100">
	</div>	
 
  <table>
  
  		<td colspan="2">lista 1</td>
		<td colspan="2">lista 2</td>
	
  
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
      
		<<tr>
	<td><img align="center" src ="<?php echo $row['imagen_servicio']?>"/></td>
<td><?php echo $row['nombre_servicio']?><br/> <?php echo $row['descripcion_servicio']?></td>
<?php $row = $result -> fetch_assoc() ?>
<td><img align ="center" src ="<?php echo $row['imagen_servicio']?>" /></td>
<td><?php echo $row['nombre_servicio']?><br/><?php echo $row['descripcion_servicio']?></td>
</tr>
     <?php }
     
  } else {
      echo "0 results";
  }
  
  $conn->close();
 ?> 
 </table>
	<div class="absolute1">
		<img src="images/blockchain.png" width="300" height="250">
	</div>

	<div class="absolute2">
		<img src="images/cloud-computing.jpg" width="300" height="250">
	</div>

	<div class ="absolute3">
		<img src="images/data-big-data.jpg" width="300" height="250">
	</div> 
 </body>
 </html>
