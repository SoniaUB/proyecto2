<!DOCTYPE html>
<?php 
    include 'connect.php';
    
?>	

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/content.css" />


	</head>

	<body>    

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="conectar.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<!-- <legend>Import CSV/Excel file</legend> -->
						<div class="control-group">
							<div class="control-label">
						    <!-- <label>CSV/Excel File:</label> -->
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						<div>
							<input type="text" name="subir" value="Numero de registros" class="form-input" required/> 
                            <label for="Orden"></label>
                            <select name="Orden" id="Orden">
      	                    <option>Ascendente</option>
      	                    <option>Descendente</option>      	
                            </select>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Procesar</button>
							</div>
						</div>
					</fieldset>
				</form>
				<?php
               get_all_records();
            ?>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
     
	</body>
</html>
