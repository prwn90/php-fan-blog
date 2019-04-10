<?php include 'includes/header.php'; ?>
<?php
	//Create DB Object
	$db = new Database();
	
	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($db->link, $_POST['name']);	
		//Validation
		if($name == ''){
			//Error
			$error = 'Empty fields, please enter something!';
		} else {
			$query = "INSERT INTO categories
					  (name) 
				VALUES('$name')";
			
			$update_row = $db->update($query);
		}
	}
?>
<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-primary" value="Submit" />
  <a href="index.php" class="btn btn-danger">Cancel</a>
  </div>
  <br>
</form>
<?php include 'includes/footer.php'; ?>