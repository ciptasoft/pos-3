<div class="sales_page">
	<div class="container">
		<div class="col-md-6 col-sm-12"> 
			<input type="text" name="productName" id="productName" placeholder="Search for product">	
			<input type="number" name="quantity" id="quantity" value="1">	
			<input type="number" name="price" id="price" value="" placeholder="Price">	
			<input type="button" class="btn btn-success" value="Add To Cart">
		</div>
		<div class="col-md-6 col-sm-12"> 
			<input type="text">
		</div>
	</div>
	<hr>
	<div>
		<div class="container">
			<div class="item-form">
				
				<form action="https://demo.phppointofsale.com/index.php/sales/add" id="add_item_form" class="form-inline" autocomplete="off" method="post" accept-charset="utf-8">
					<div class="input-group input-group-mobile contacts">
						<span class="input-group-addon">
							<a href="https://demo.phppointofsale.com/index.php/items/view/-1/1/sale" class="none add-new-item" title="New Item" id="new-item-mobile" tabindex="-1"><i class="icon ti-pencil-alt"></i> <span class="register-btn-text">New Item</span></a> </span>
							<div class="input-group-addon register-mode sale-mode dropdown">
								<a href="https://demo.phppointofsale.com/index.php/#" class="none active" tabindex="-1" title="Sale" id="select-mode-1" data-target="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><i class="icon ti-shopping-cart"></i> <span class="register-btn-text">Sale</span></a> <ul class="dropdown-menu sales-dropdown">
								<li><a tabindex="-1" href="#" data-mode="return" class="change-mode">Return</a></li>
								<li><a tabindex="-1" href="#" data-mode="store_account_payment" class="change-mode">Store Account Payment</a></li>
							</ul>
						</div>
						<span class="input-group-addon grid-buttons ">
							<a href="https://demo.phppointofsale.com/index.php/#" class="none show-grid" tabindex="-1" title="Show Grid"><i class="icon ti-layout"></i> <span class="register-btn-text">Show Grid</span></a> <a href="https://demo.phppointofsale.com/index.php/#" class="none hide-grid hidden" tabindex="-1" title="Hide Grid"><i class="icon ti-layout"></i> <span class="register-btn-text">Hide Grid</span></a> </span>
						</div>
						<div class="input-group contacts register-input-group">
							
							<div class="spinner" id="ajax-loader" style="display:none">
								<div class="rect1"></div>
								<div class="rect2"></div>
								<div class="rect3"></div>
							</div>
							<span class="input-group-addon">
								<a href="https://demo.phppointofsale.com/index.php/items/view/-1/1/sale" class="none add-new-item" title="New Item" id="new-item" tabindex="-1"><i class="icon ti-pencil-alt"></i></a> </span>
								<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" id="item" name="item" class="add-item-input pull-left ui-autocomplete-input" placeholder="Enter item name or scan barcode" autocomplete="off">
								<div class="input-group-addon register-mode sale-mode dropdown">
									<a href="https://demo.phppointofsale.com/index.php/#" class="none active" tabindex="-1" title="Sale" id="select-mode-2" data-target="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"><i class="icon ti-shopping-cart"></i>Sale</a> <ul class="dropdown-menu sales-dropdown">
									<li><a tabindex="-1" href="#" data-mode="return" class="change-mode">Return</a></li>
									<li><a tabindex="-1" href="#" data-mode="store_account_payment" class="change-mode">Store Account Payment</a></li>
								</ul>
							</div>
							<span class="input-group-addon grid-buttons ">
								<a href="https://demo.phppointofsale.com/index.php/#" class="none show-grid" tabindex="-1" title="Show Grid"><i class="icon ti-layout"></i> Show Grid</a> <a href="https://demo.phppointofsale.com/index.php/#" class="none hide-grid hidden" tabindex="-1" title="Hide Grid"><i class="icon ti-layout"></i> Hide Grid</a> </span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
