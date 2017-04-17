
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A fancy add,edit,delete ajax paginated mysql table</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript" src="pagination.js"></script>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/content.css" />
<script src="js/modernizr.custom.js"></script>		
<script src="jquery.min.js"></script>
<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to delete users?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('checkbox#select_all').on('click',function(){
       
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
</head>
 
<body>
    
        <div id="formDiv">
	      <form id="formSearch" >
            <!-- <input type="file" name="adjunto" value="subir" /> -->
            Buscar <input type="text" id="fieldSearch" name="search_text" > 
	        <input type="submit" value="Search">
		  </form>
	   <div  id="divLoading"></div> 
       <div id="selectDiv">
         <small>
          <select id="pageRecord">
            <option value="1">1</option>
            <option value="2">2</option>
            <option selected value="3">3</option>
            <option value="4">4</option>
            <option value="20">20</option>
          </select><i> # por pagina</i>
         </small>
      </div>
	 </div>
	  
	<div  id="divPageData"></div>
</body>
</html>