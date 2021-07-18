<?php
include 'admin_header.php';
include 'controller/CategoryController.php';
$categories = getAllActegories();
?>
<div class="center">
<h3 class ="text"> All Categories</h3>
<table class="table table-striped">
<thead>
<th>Sl#</th>
<th>Name</th>
<th>Product count</th>
<th></th>
</thead>
<tbody>
    <?php
    $i =1;
    fpreach ($categories as $c)
    {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>".$c["name"]."</td>";
        echo '<td><a href="editcategory.php" class="btn btn-success">Edit</a></td>';
        echo '<td><a class="btn btn-danger">Delete</td>';
        echo "</tr>";
        $i++;
    }
    ?>
<thead>
<tbody>
<td>1</td>
<td>Groserry</td>
<td>100</td>
<td><a href="editcategory.php" class="btn btn-success">Edit</a></td>
<td><a class="btn btn-danger">Delete</td>
</tbody>
</thead>
</div>
<?php include 'admin_footer.php';?>