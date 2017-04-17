<?php
//include 'db.php';




if(isset($_POST["Import"])){
echo "<script>alert(".$_POST['subir'].");</script>";		
if(is_numeric($_POST['subir'])==false){
echo "<script type=\"text/javascript\">
						alert(\"CSV error debe seleccionar un valor de registros validos .\");
						window.location = \"listar.php\"
					</script>";
}
		echo $filename=$_FILES["file"]["tmp_name"];
				
		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, $_POST['subir'], ",")) !== FALSE)
	         {
	    
	    
	    try {
    $db = mysqli_connect("localhost", "originar_sonia", "trabajosonia", "originar_usuariostest");
    if ($db->connect_errno)
        throw new Exception("Connection to the database failed: " . $db->connect_error);

    $sql = "INSERT INTO usuarios (`first_name`, `last_name`) ";
    $sql .= "VALUES('$emapData[1]','$emapData[2]')";

    if (!$db->query($sql))
        throw new Exception("Error Inserting Data " . $db->error);

    mysqli_close($db);
} catch (Exception $e) {
    echo $e->getMessage();
    
    
}
	    
	    
	    

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"listar.php\"
					</script>";
	        
			
			 //close of connection
			mysql_close($conn); 
				
		 	
			
		 }
		 
		 else{echo "<script type=\"text/javascript\">
						alert(\"CSV error debe seleccionar un archivo valido.\");
						window.location = \"listar.php\"
					</script>";}
	}	

	if(@$_POST['btnEliminar'])
    {
	foreach($_POST['IdsUsuarios'] as $id)
	{
		mysql_query('DELETE FROM usuarios where id =' .$id);
	}

	header ('Location: ../formulario_database');
   } 
?>		 
