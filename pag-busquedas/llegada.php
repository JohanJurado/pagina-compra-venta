    <?php  

	$desc=$_POST['buscar'];  
	echo "<script>
	alert ('La busqueda se realizo correctamente');
	location.href='index.php?desc=$desc';
	</script>";
	
  
  ?>