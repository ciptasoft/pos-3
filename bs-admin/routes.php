		<?php
		if ($_GET['ref']==NULL) {
			require "bs-admin/dashbord.php";
		}
		else if ($_GET['ref']=='db') {
			require "bs-admin/dashbord.php";
		}
		else if ($_GET['ref']=='items') {
			require "bs-admin/items.php";
		}
		else if ($_GET['ref']=='sales') {
			require "bs-admin/sales.php";
		}
		else if ($_GET['ref']=='customers') {
			require "bs-admin/customers.php";
		}
		else if ($_GET['ref']=='suppliers') {
			require "bs-admin/suppliers.php";
		}
		else if ($_GET['ref']=='Balance') {
			require "bs-admin/Balance.php";
		}
		else if ($_GET['ref']=='Reports') {
			require "bs-admin/Reports.php";
		}
		else if ($_GET['ref']=='users') {
			require "bs-admin/users.php";
		}
		else if ($_GET['ref']=='settings') {
			require "bs-admin/settings.php";
		}
		else if ($_GET['ref']=='about') {
			require "bs-admin/about.php";
		}
		else if ($_GET['ref']=='newItem') {
			require "bs-admin/newItem.php";
		}
		else if ($_GET['ref']=='newCustomer') {
			require "bs-admin/newCustomer.php";
		}
		else if ($_GET['ref']=='newSuppliers') {
			require "bs-admin/newSuppliers.php";
		}
		else if ($_GET['ref']=='newUser') {
			require "bs-admin/newUser.php";
		}
		// if (_GET['ref'=='db') {
		// 	echo "string";
		// }
		// require "bs-admin/dashbord.php";
		?> 