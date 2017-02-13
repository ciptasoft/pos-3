<?php 
if(isset($_POST['itemSubmit'])){
	$errorID = false;
	$errorName = false;
	$errorCategory = false;
	$errorSize = false;
	$errorPrice = false;
	$errorQuantity = false;

	$id = "";
	$name = "";
	$category = "";
	$size = "";
	$price = "";
	$quantity = "";
	$image_id = "";

	if (trim($_POST['itemID']) === '') {
		$errorID = true;
	} else {
		$id = trim($_POST['itemID']);
	}

	if (trim($_POST['itemName']) === '') {
		$errorName = true;
	} else {
		$name = trim($_POST['itemName']);
	}

	if (trim($_POST['itemCategory']) === '') {
		$errorCategory = true;
	} else {
		$category = trim($_POST['itemCategory']);
	}

	if (trim($_POST['itemSize']) === '') {
		$errorSize = true;
	} else {
		$size = trim($_POST['itemSize']);
	}

	if (trim($_POST['itemPrice']) === '') {
		$errorPrice = true;
	} else {
		$price = trim($_POST['itemPrice']);
	}

	if (trim($_POST['itemQuantity']) === '') {
		$errorQuantity = true;
	} else {
		$quantity = trim($_POST['itemQuantity']);
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
			$sql = "INSERT INTO `items` (`Item_name`, `Category`, `Size`, `Price`, `Quantity`, `image_id`) VALUES ('$name', '$category', '$size', '$price', '$quantity','$fileDir')";
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
			<a href="<?php echo "?ref=newItem" ?>" class="btn btn-primary" role="button">New item</a>
		</div>
		<hr>
		<div class="bs_table">
			<div class="panel panel-piluku">
				<div class="panel-heading">
					<h3 class="panel-title">
						List of Items <span title="6 total items" class="badge bg-primary tip-left" id="manage_total_items">
						<?php 
						require 'core/curd.php';
						rowCount("items");
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
							<th>Item Id</th>
							<th>Item Name</th>
							<th>Category</th>
							<th>Size</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Edit</th>
							<th>Preview</th>
							<th class="rightmost">&nbsp;</th>
						</tr>
					</thead>
					<?php  

					require 'core/curd.php';
    				//insert into table
					$sql = "select * from items";
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
							<td><a class="" href="#" data-toggle="modal" data-target="#myModal"><?php echo $result[ID]; ?></a>
							</td>
							<td><?php echo $result[Item_name]; ?></td>
							<td><?php echo $result[Category]; ?></td>
							<td><?php echo $result[Size]; ?></td>
							<td><?php echo $result[Price]; ?></td>
							<td><?php echo $result[Quantity]; ?></td>

							<td class="rightmost"><a href="#" class=" " title="Update Item">Edit</a>
							</td>
							<td>
								<a href="<?php echo $result[image_id]; ?>" class="rollover"><img src="<?php echo $result[image_id]; ?>" alt="12" class="img-polaroid" width="45">
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