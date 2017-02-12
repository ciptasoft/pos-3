<?php 
if(isset($_POST['cusSub'])){
	$customerName = "";
	$customerEmail = "";
	$customerNumber = "";
	$image_id = "";

	$errornNme = false;
	$errorEmail = false;
	$errorNumber = false;
	$errorImage_id = false;

	if (trim($_POST['customerName']) === '') {
		$errorName = true;
	} else {
		$customerName = trim($_POST['customerName']);
	}

	if (trim($_POST['customerEmail']) === '') {
		$errorEmail = true;
	} else {
		$customerEmail = trim($_POST['customerEmail']);
	}

	if (trim($_POST['customerNumber']) === '') {
		$errorNumber = true;
	} else {
		$customerNumber = trim($_POST['customerNumber']);
	}

	//upload file
	$target_dir = getcwd()."/bs-content/uploads/ ";
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
			$sql = "INSERT INTO `customers` (`customer_name`, `customer_email`, `customer_number`, `image_id`) VALUES ('$customerName', '$customerEmail', 'customerNumber', '$fileDir')";
			createRow($sql);

		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>
<div class="items_page">
	<div class="container">
		<div class="bs_btn">
			<a href="<?php echo "?ref=newCustomer" ?>" class="btn btn-primary" role="button">New Customer</a>
		</div>
		<hr>
		<div class="bs_table">
			<div class="panel panel-piluku">
				<div class="panel-heading">
					<h3 class="panel-title">
						List of Customers <span title="6 total items" class="badge bg-primary tip-left" id="manage_total_items">
						<?php 
						require 'core/curd.php';
						rowCount("customers");
						?>

					</span>
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
							<th>Person ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Edit</th>
							<th>Preview</th>
							<th class="rightmost">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr style="cursor: pointer;">
							<td>
								<input type="checkbox" id="item_18" value="18">
								<label for="item_18"><span></span>
								</label>
							</td>
							<td>1</td>
							<td>23</td>
							<td>Karim</td>
							<td>me@you.com</td>
							<td>+8801748914040</td>
							<td class="rightmost"><a href="#" class=" " title="Update Item">Edit</a>
							</td>
							<td>
								<a href="https://demo.phppointofsale.com/assets/assets/images/avatar-default.jpg" class="rollover"><img src="https://demo.phppointofsale.com/assets/assets/images/avatar-default.jpg" alt="12" class="img-polaroid" width="45">
								</a>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>