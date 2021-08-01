<?php
	require_once 'models/db_config.php';
	
	
	$err_db="";
	if(isset($_POST["add_product"])){
		
		
		$fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
		
		$rs = insertProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["qty"],$_POST["desc"],$target);
		if ($rs === true){
			header("Location: allproducts.php");
		}
		$err_db = $rs;
	}
	
	function insertProduct($name,$c_id,$price,$qty,$desc,$img){
		$query = "insert into products values (NULL,'$name',$c_id,$price,$qty,'$desc','$img')";
		return execute($query);
	}
	function getProducts(){
		$query ="select p.*,c.name as 'c_name' from products p left join categories c on p.c_id = c.id";
		$rs = get($query);
		return $rs;
	}
	function getProduct($id){
		$query = "select * from products where id = $id";
		$rs = get($query);
		return $rs[0];
		
	}
	function editProduct($name,$c_id,$price,$qty,$desc,$id){
		$query ="update products set name='$name',c_id=$c_id,price=$price,qty=$qty,description='$desc' where id = $id";
		return execute($query);
	}
    function searchProduct($key)
    {
        $query = "select id,name from products where name like '%key'";

        $rs = get($query);
        return $rs;
    }
	
	
?>