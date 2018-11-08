<?php
	include('include/header.php');
	//$result = $objAdmin->test();  // $result jst variable $bojAdmin is object name , test() is function of class...
	//echo $result;
	$results = $objAdmin->view_all();
	//print_r($results);
	if(isset($_GET['del']))
	{
		$id =$_GET['del'];
		$results = $objAdmin->delete_id($id);
		if($results)
		{
			header('location:index.php');
			echo "delete successfuly";
		}
		else
		{
			echo "error occure";
		}
	//$sql ="delete from tb_doctor where doctor_id ='$id'";
	}
?>
	<h1>Basic CMS site</h1>
	<table style="width: 50%; border: 1px solid black;">
			<tr>
			    <th>SN</th>
			    <th>NAME</th> 
			    <th>ADDRESS</th>
			    <th>CONTACT</th> 
			    <th>OPERATION</th>
			  </tr>
			  
			  		 <?php
			  		while ($row=$results->fetch_assoc()) {
			  			# code...
			  	?>
			  		<tr>
					    <td><?php echo $row['sn'];?></td>
					    <td><?php echo $row['name'];?></td> 
					    <td><?php echo $row['address'];?></td>
					    <td><?php echo $row['number'];?></td> 
					    <td><a href="edit.php?val=<?php echo $row['sn']; ?>">edit</a>/
					    	<a href="index.php?del=<?php echo $row['sn']; ?>">del</a>
					    </td>
					  </tr>			
			  	<?php
			  		}
			  ?>		
			  	
	</table>
	<?php mysqli_free_result($results);?>
		</br>
<a href="./add.php">ADD</a>

<?php include('include/footer.php');?>