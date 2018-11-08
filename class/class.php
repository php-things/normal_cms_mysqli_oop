<?php
	class General_Class{

		public function test()
		{
			return "This is just test!!!";
		}

		//$result1 = $mysqli->query("SELECT * FROM tbl_about ORDER BY SN DESC LIMIT 1");
		//$row1 = $result1->fetch_assoc();
		
		public function view_all()
		{
			global $db;
			$sql="SELECT * FROM record";
			//echo $sql;
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			return $res;		
		}

		public function delete_id($id)
		{
			global $db;
			$sql="DELETE from record where sn ='$id'";
			//echo $sql;
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			return $res;		
		}

		public function view_all_id($id)
		{
			global $db;
			$sql="SELECT * FROM record where sn='$id'";
			//echo $sql;
			$res =mysqli_query($db, $sql);
			comfirm_result_set($res);
			return $res;		
		}


		public function add_records($name,$address,$number)
		{
			global $db;
			$sql1 ="INSERT INTO `record` (`name`,`address`,`number`) VALUES ('$name','$address','$number')";
			//echo $sql1;
			//echo $db;
			//echo $sql1;
			//exit();
			$res = mysqli_query($db, $sql1);
			//$res = mysqli_query($db,$sql1) or die(mysqli_connect_errno($db));
			if($res){
				return true;
			}
			else{
				echo 'error';
				exit;
			}

		}
		

		public function update_records($name,$address,$number,$id)
		{
			global $db;
			$sql1 ="UPDATE `record` SET `name`='$name',`address`='$address',`number`='$number' where sn = '$id'";
			$res = mysqli_query($db, $sql1);
			//$res = mysqli_query($db,$sql1) or die(mysqli_connect_errno($db));
			if($res){
				return true;
			}
			else{
				echo 'error';
				exit;
			}

		}		

	}