<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>FORM SURVEY</title>

	<meta name="description" content="" />
	<meta name="author" content="" />

	<!-- ****** begin favicons ****** -->
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- ****** end favicons ****** -->

	<!-- begin fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<!-- end fonts -->

	<!-- AOS Animate -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- begin basic framework engine css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<!-- end basic framework engine css -->

	<!-- begin jquery -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.structure.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css" />
	<!-- end jquery -->

	<!-- begin ADD ON / PLUGINS CSS -->
	<link rel="stylesheet" type="text/css" href="assets/js/vendors/animate/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/js/vendors/fancybox/dist/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">


	<!-- Leaflet CSS -->
	<link rel="stylesheet" href="assets/js/vendors/leaflet/leaflet.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/js/vendors/select2/select2.min.css">

	<!-- begin plugin Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.css">
	<!-- end plugin Datatables -->

	<!-- end ADD ON / PLUGINS CSS -->

	<!-- begin basic css in local -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/styles.min.css"/> -->

	<!-- end basic css in local -->
</head>

<body>

	<?php

	if (!empty($_GET['pages'])) {
		$url = $_GET['pages'];
	} else {
		$url = 'home';
	}

	$pages_path 	= "pages/";
	$pages      	= '404.php';
	$page_current 	= $url . '.php';
	if (file_exists("{$pages_path}{$page_current}")) {
		$pages = $page_current;
	}

	?>

	<?php if (in_array($url, array('home', 'profile', 'data-visualization', 'contact')) || $pages == '404.php') { ?>

		<div class="wrapper">
			<div class="preloader-layout">
				<div class="preloader-icon">
					<img src="assets/images/identity/spinner.gif" alt="loading" />
				</div>
			</div>
			<?php include 'components/navbar.php'; ?>
			<div class="layout-page">
				<?php
				include "{$pages_path}{$pages}";
				?>
			</div>
			<?php include 'components/footer.php'; ?>
		</div>

	<?php } ?>

	<!-- begin jquery -->
	<script type="text/javascript" src="assets/js/vendors/jquery/jquery-3.5.1.min.js"></script>
	<!-- end jquery -->

	<!-- begin popper js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<!-- end popper js -->

	<!-- begin basic framework engine js -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- end basic framework engine js -->

	<!-- begin jquery extra -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<!-- end jquery extra -->


	<!-- START ADD ON / PLUGINS JS -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

	<script type="text/javascript" src="assets/js/vendors/fancybox/dist/jquery.fancybox.js"></script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>

	<script type="text/javascript" src="https://unpkg.com/@popperjs/core@2"></script>
	<!-- <script type="text/javascript" src="https://unpkg.com/tippy.js@6"></script> -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- begin plugin datatables -->
	<script src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.js"></script>
	<!-- end plugin datatables -->

	<!-- begin plugin copy text -->
	<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
	<!-- end plugin copy text -->

	<!-- begin plugin Leaflet Js -->
	<script type="text/javascript" src="assets/js/vendors/leaflet/leaflet.js"></script>
	<script type="text/javascript" src="assets/js/vendors/leaflet-ajax/leaflet.ajax.min.js"></script>
	<!-- end plugin Leaflet Js -->

	<!-- begin plugin AOS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- end plugin AOS -->

	<!-- begin plugin select2-->
	<script type="text/javascript" src="assets/js/vendors/select2/select2.min.js"></script>
	<!-- end plugin select2-->


	<!-- END ADD ON / PLUGINS JS -->

	<!-- begin basic js in local -->

	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/validation.js"></script>
	<!-- end basic js in local -->


	<script type="text/javascript">
		document.title = '<?php echo (!empty($title)) ? $title : 'KEMENSOS - PKAT - 2021'; ?>';
	</script>

</body>

</html>