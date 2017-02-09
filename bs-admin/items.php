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
						List of Items <span title="6 total items" class="badge bg-primary tip-left" id="manage_total_items">6</span>
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
						<tbody>
							<tr style="cursor: pointer;">
								<td>
									<input type="checkbox" id="item_18" value="18">
									<label for="item_18"><span></span>
									</label>
								</td>
								<td>18</td>
								<td><a class="" href="#" data-toggle="modal" data-target="#myModal">12</a>
								</td>
								<td>bettery</td>
								<td>Phone</td>
								<td>XL</td>
								<td>$12.00</td>
								<td>10</td>

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