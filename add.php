<?php
    include('include/header.php');
    
    if(isset($_POST['pro_subbtn_ok'])){
        # code...
         $name = $_POST['name'];
         $address = $_POST['address'];
         $number=$_POST['number'];
        //exit;
        $result= $objAdmin->add_records($name, $address, $number);
        //$new_id=mysqli_insert_id($db);
        //redirect_to('index.php');
        echo 'add successfully';
    }

?>

<h4>add record</h4>			
						
<form action="" method="post">
		
        
        <div>
        	<div class="div_fst" >Name :</div>
            <div class="div_snd"><input type="text" name="name" /></div>
        <div class="clr"></div>
        </div>
        <br>
        
        <div>
        	<div class="div_fst" >address :</div>
            <div class="div_snd"><input type="text" name="address" /></div>
        <div class="clr"></div>
        </div>
        <br>
        <div>
        	<div class="div_fst" >number :</div>
            <div class="div_snd"><input type="text" name="number" /></div>
        <div class="clr"></div>
        </div>
        <br>

        
        <div >
        	<input type="submit" name="pro_subbtn_ok" value="save" />
        </div>
        
</form>
<br>
<a href="./">show record</a>
<?php include('include/footer.php');?>