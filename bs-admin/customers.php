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
}
echo "hi";
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
						List of Customers <span title="6 total items" class="badge bg-primary tip-left" id="manage_total_items">6</span>
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