<?php 
if(isset($_POST['userSubmit'])){
	$errorFName = "";
	$errorLName = "";
	$errorUserType = "";
	$errorUserEmail = "";
	$errorUserNumber = "";
	$errorUserPassword = "";

	$fName = "";
	$lName = "";
	$userType = "";
	$userEmail = "";
	$userNumber = "";
	$userPassword = "";

	if (trim($_POST['userFirstName']) === '') {
		$errorFName = true;
	} else {
		$fName = trim($_POST['userFirstName']);
	}

	if (trim($_POST['userLastName']) === '') {
		$errorLName = true;
	} else {
		$lName = trim($_POST['userLastName']);
	}

	if (trim($_POST['userEmail']) === '') {
		$errorUserEmail = true;
	} else {
		$userEmail = trim($_POST['userEmail']);
	}

	if (trim($_POST['userNumber']) === '') {
		$errorUserNumber = true;
	} else {
		$userNumber = trim($_POST['userNumber']);
	}

	if (trim($_POST['userPassword']) === '') {
		$errorUserPassword = true;
	} else {
		$userPassword = trim($_POST['userPassword']);
	}

	if ($_POST['userRole'] == '') {
		$errorUserType = true;
	} 
	else {
		if($_POST['userRole']==1){
			$userType = 'Admin';
		}
		elseif($_POST['userRole']==2){
			$userType = 'Editor';
		}
		elseif($_POST['userRole']==3){
			$userType = 'Subscriber';
		}

	}



    //upload file
	$target_dir = getcwd()."/bs-content/uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$fileDir = "/bs-content/uploads/".basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image

	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}

    // Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
    // Check file size
	if ($_FILES["fileToUpload"]["size"] > 300000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
    // Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) 
	{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
    // Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
	} 
	else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			require 'core/curd.php';

    		//insert into table
			$sql = "INSERT INTO `user` (`fName`, `lName`, `type`, `email`, `number`, `password`,`uri`, `image_id`) VALUES ('$fName', '$lName', '$userType', '$userEmail', '$userNumber', '$userPassword', 'user', '$fileDir')";
			createRow($sql);
			echo "string";

		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>
<div class="items_page">
	<div class="container">
		<div class="bs_btn">
			<a href="<?php echo "?ref=newUser" ?>" class="btn btn-primary" role="button">New User</a>
		</div>
		<hr>
		<div class="bs_table">
			<div class="panel panel-piluku">
				<div class="panel-heading">
					<h3 class="panel-title">
						List of User <span title="6 total items" class="badge bg-primary tip-left" id="manage_total_items">6</span>
						<div class="panel-options custom">
						</div>
					</h3>
				</div>
				<div class="panel-body nopadding table_holder table-responsive">
					<table class="table tablesorter table-hover" id="sortable_table">
						<thead>
							<tr>
								<th class="leftmost">
									<input type="checkbox" id="select_all">
									<label for="select_all"><span></span>
									</label>
								</th>
								<th>Serial</th>
								<th>User Id</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>User Email</th>
								<th>User Phone Number</th>
								<th>Edit</th>
								<th>Preview</th>
								<th class="rightmost">&nbsp;</th>
							</tr>
						</thead>
						<?php  

						require 'core/curd.php';
    				//insert into table
						$sql = "select * from user";
						$data = readRow($sql,array());  
						$count = 1;
						foreach($data as $result) :?>
						<tbody>
							<tr style="cursor: pointer;">
								<td>
									<input type="checkbox" id="item_18" value="18">
									<label for="item_18"><span></span>
									</label>
								</td>
								<td><?php echo $count; ?></td>
								<td><?php echo $result[id]; ?></td>
								<td><?php echo $result[fName]; ?></td>
								<td><?php echo $result[lName]; ?></td>
								<td><?php echo $result[email]; ?></td>
								<td><?php echo $result[number]; ?></td>

								<td class="rightmost"><a href="#" class=" " title="Update Item">Edit</a>
								</td>
								<td>
									<a href="https://demo.phppointofsale.com/assets/assets/images/avatar-default.jpg" class="rollover"><img src="https://demo.phppointofsale.com/assets/assets/images/avatar-default.jpg" alt="12" class="img-polaroid" width="45">
									</a>
								</td>
							</tr>

						</tbody>
						<?php $count++; endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>