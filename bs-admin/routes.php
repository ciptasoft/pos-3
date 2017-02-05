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
		else if ($_GET['ref']=='Suppliers') {
			require "bs-admin/Suppliers.php";
		}
		else if ($_GET['ref']=='Balance') {
			require "bs-admin/Balance.php";
		}
		else if ($_GET['ref']=='Reports') {
			require "bs-admin/Reports.php";
		}
		else if ($_GET['ref']=='Users') {
			require "bs-admin/Users.php";
		}
		else if ($_GET['ref']=='Settings') {
			require "bs-admin/Settings.php";
		}
		else if ($_GET['ref']=='About') {
			require "bs-admin/About.php";
		}
		// if (_GET['ref'=='db') {
		// 	echo "string";
		// }
		// require "bs-admin/dashbord.php";
		?> 