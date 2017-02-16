<div class="sales_page">
	<div class="container">
		<div class="col-lg-8 col-sm-12"> 
			<div class="search_box">
				<div class="items">
					<div class="col-md-6">
						<div class="form-group">
							<label for="productName">Type Product name</label>
							<input type="text" name="productName" class="form-control" id="productName" placeholder="Search for product">	
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="quantity">Set Quantity</label>
							<input type="number" name="quantity" class="form-control" id="quantity" value="1">	
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="price">Set Price</label>
							<input type="number" name="price" class="form-control" id="price" value="1" placeholder="Price">	
						</div>
					</div>
					<div class="col-md-2">
						<a href="#" class="btn btn-success" onclick="addToCart()">Add to Cart</a>
					</div>
				</div>
			</div>
			<div class="bar"></div>
			<table class="table table-hover crtTbl">
				<thead>
					<tr>
						<th>#</th>
						<th>Item Name</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total</th>
						<th>Remove</th>
					</tr>
				</thead>
				<tbody  id="cartTable"></tbody>
			</table>
		</div>
		<div class="col-lg-4 col-sm-12"> 
			<div class="sales_sidebar">
				<a href="/" class="btn btn-danger">Cancel sale</a>
				<br>
				<hr>
				<div class="search_customer">
					<label for="customerName">Enter Customer Name</label>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2"><a href="#" class="newCustomerToggler"><i class="ion-person-add"></i></a></span>
						<input type="text" class="form-control" name="customerName" id="customerName" placeholder="Customer Name" aria-describedby="sizing-addon2">
					</div>
					<div class="new_customer">
						<label for="Username">New Customer Information</label>
						<div class="input-group input-group-sm">
							<span class="input-group-addon" id="sizing-addon3"><I class="ion-person"></I></span>
							<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
						</div>
						<div class="input-group input-group-sm">
							<span class="input-group-addon" id="sizing-addon3"><i class="ion-android-call"></i></span>
							<input type="text" class="form-control" placeholder="Phone Number" aria-describedby="sizing-addon3">
						</div>
						<div class="input-group input-group-sm">
							<span class="input-group-addon" id="sizing-addon3"><i class="ion-ios-email"></i></span>
							<input type="text" class="form-control" placeholder="Email AAddress" aria-describedby="sizing-addon3">
						</div>
					</div>
				</div>
				<hr>
				<div class="discount">
					<label>Set Discount</label>
					<ul>
						<li>Discount On Entire Sale :</li>
						<li style="float: right; color: red; cursor: pointer;" ><a onclick="setDiscount()" href="#"><b>Set Disc.</b></a></li>
					</ul>
				</div>
				<div class="sub_total">
					<label>Sub Total </label>
					<ul>
						<li>Total Ammount <br> <h4>0</h4></li>
						<li>Ammount Due <br><h4>0</h4></li>
					</ul>
				</div>
				<div class="payment_type">
					<label>Payment Type</label>
					<br>
					<a href="#" class="btn btn-primary">Cash</a>
					<a href="#" class="btn btn-warning">Check</a>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-info" type="button">Complete sale</button>
						</span>
					</div>
					<label for="paymentComment">Add Comment</label>
					<textarea name="paymentComment" id="paymentComment" rows="3"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
