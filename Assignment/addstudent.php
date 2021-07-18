<?php
    require_once 'controllers/StudentController.php';
	require_once 'controllers/DepartmentController.php';
	$departments=getAllDepartments();
    
?>

<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <b>Add Student</b></td>
				<tr>
					<td>Name</td><td>: <input type="text" name="name" value="<?php echo $name; ?>" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>

				<tr>
				    <td>DOB</td>
					<td>: <input type="text" name="dob" value="<?php echo $dob; ?>" > </td>
					<td><span> <?php echo $err_dob;?> </span></td>
				</tr>

				<tr>
					<td>Credit</td>
					<td>: <input type="text" name="credit"  value="<?php echo $credit; ?>"> </td>
					<td><span> <?php echo $err_credit;?> </span></td>
				</tr>

				<tr>
					<td>CGPA</td>
					<td>: <input type="text" name="cgpa" value="<?php echo $cgpa; ?>" > </td>
					<td><span> <?php echo $err_cgpa;?> </span></td>
				</tr>
				
				<tr>
				    <td>Deparment:</td>
					<td><select name="dptid" value="<?php echo $dptid; ?>">
					<option selected disabled>Choose Deparment</option>
					<?php
					  foreach($departments as $d){
						echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span> <?php echo $err_dptid;?> </span></td>
				</tr>

				<tr>
					<td align="right"> <input type="submit" name="addstudent" value="Add Student"> </td>	
				</tr>
                
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>