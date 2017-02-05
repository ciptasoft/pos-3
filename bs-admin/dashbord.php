
<div class="col-md-10">
	<div class="dashbord_content">
		<div class="col-md-3">
			<div class="card_shop s1">
				<div class="info">
					<a href="<?php echo "/bs-admin/main.php?ref=sales"; ?>"><h2>110</h2></a>
					<p>Total sales</p>
				</div>
				<div class="icon">
					<i class="ion-ios-cart-outline"></i>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card_shop" id="s2">
				<div class="info">
					<h2>2310</h2>
					<p>Total Items</p>
				</div>
				<div class="icon">
					<i class="ion-ios-cart-outline"></i>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card_shop" id="s3">
				<div class="info">
					<h2>240</h2>
					<p>Order pending</p>
				</div>
				<div class="icon">
					<i class="ion-ios-cart-outline"></i>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card_shop" id="s4">
				<div class="info">
					<h2>185</h2>
					<p>Total Customers</p>
				</div>
				<div class="icon">
					<i class="ion-ios-cart-outline"></i>
				</div>
			</div>
		</div>
		<div class="b_fun">
			<h4 class="text-center">Choose a common task from below to get started!</h4>
			<hr>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="list-group">
					<a class="list-group-item" href="#"> <i class="ion-clock"></i> Today's closeout report</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="list-group">
					<a class="list-group-item" href="#"> <i class="ion-stats-bars"></i> Today's Sales</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<form action="bs-admin/main.php" method="get">
					<div class="list-group">
						<a class="list-group-item" href="/<?= '?ref=sales'; ?>"> <i class="ion-ios-cart-outline"></i> Start new sale</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
