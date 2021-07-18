<?php include 'admin_header.php';
include 'controller/CategoryControllers.php';
$id = $_GET["id"];
$c = getCategory($id);

?>
<div class="center">
    <form class="form-horizonatl form-material">
    <div class="form-group">
        <h4 class = "text" class ="form-control"> 
</div>
<div class="form-group text-center">
    <input type ="submit" class="btn btn-success" value="Edit Category" class="form-control">
</div>
</form>
</div>
<?php include 'admin_footer.php';?>