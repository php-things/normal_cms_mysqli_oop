<?php
//	$connection=mysqli_connect('localhost','root','','normal_cms') or die('error occur while connecting server');
  function db_connect() {
    $connection=mysqli_connect('localhost','root','','normal_cms') or die('error occur while connecting server');
    confirm_db_connect();
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

// for error msg errno is error number
  //its is using for database error msg
  function confirm_db_connect(){
    if(mysqli_connect_errno()){
      $msg = "database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" .mysqli_connect_errno() .")";
      exit($msg);
    }

  }

	// error msg for query error handeling
  function comfirm_result_set($res){
    if(!$res){
      exit("datbase querry failed");
    }

  }
  
?>