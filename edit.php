<?php
include('include/header.php');

if(isset($_GET['val']))
    {
        $id =$_GET['val'];
        $results = $objAdmin->view_all_id($id);
        //print_r($results);
    }

    if(isset($_POST['pro_subbtn_edit']))
    {

        $name = $_POST['name'];
        $address = $_POST['address'];
        $number=$_POST['number'];

        $result= $objAdmin->update_records($name, $address, $number, $id);
        //$new_id=mysqli_insert_id($db);
        //redirect_to('index.php');
        echo 'update successfully';
    }
?>
<h4>edit record</h4>			
						
<form action="" method="post">
		
        <?php 
        while($row=$results->fetch_assoc())
        {
    ?>
        <div>
            <div class="div_fst" >Name :</div>
            <div class="div_snd"><input type="text" name="name" value="<?php echo $row['name'];?>" /></div>
        <div class="clr"></div>
        </div>
        <br>
        
        <div>
            <div class="div_fst" >address :</div>
            <div class="div_snd"><input type="text" name="address" value="<?php echo $row['address'];?>" /></div>
        <div class="clr"></div>
        </div>
        <br>
        <div>
            <div class="div_fst" >number :</div>
            <div class="div_snd"><input type="text" name="number" value="<?php echo $row['number'];?>" /></div>
        <div class="clr"></div>
        </div>
        <br>
        
        <?php
        }
        ?>
		
		
        <div >
        	<input type="submit" name="pro_subbtn_edit" value="edit" />
        </div>
        
</form>
<br>
<a href="./">show record</a>
<?php include('include/footer.php');?>