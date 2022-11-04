
<!DOCTYPE html>
<html>
<head>
<style>
#student {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#student td, #student th {
    border: 1px solid #DDAF94;
    padding: 8px;
	text-align: center;
}


#student tr:nth-child(even){background-color:White;}

#student tr:hover {background-color: #E8CEBF;}

#student th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color:  #E8CEBF;
    color: white;
}
</style>
</head>
<body>
<form action="indexx.php" method="get">

<br>

<table id="student">
  <tr>
 <th>SN</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject </th>
	<th>Message</th>
	<th>Delete</th>
	
  </tr>
  <?php
	  $conn=mysqli_connect("localhost","root","","information");
	  $query="select*from message";
	  $run=mysqli_query($conn,$query);
	  $i=0;
	  while($row=mysqli_fetch_array($run)){
		 $i++; 
	  
		 $name=$row['name'];
			$email=$row['email'];
			$subject=$row['subject'];
			$message=$row['message'];
		  ?>
		  <tr>
		  <td><?php echo $i;?></td>
		  <td><?php echo $name;?></td>
		<td><?php echo $email;?></td>
		<td><?php echo $subject;?></td>
		<td><?php echo $message;?></td>
				<td><a href='delete.php?delete=<?php echo $row['id'];?>'>Delete</a></td>
				 
	  <?php } ?></tr>
		  </table>
		 
		  

</body>
</html>
