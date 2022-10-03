<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container container-contact1">
			<div class="col-md-12 text-center border-bottom-0 py-4">
                <h1 class="text-bukutamu">DATA KOMENTAR ANDA</h1>
            </div>
            <!-- <h2>Nama : CHERRY CITRA</h2>
            <h2>Nama : CHERRY CITRA</h2>
            <h2>Nama : CHERRY CITRA</h2> -->
            <div class="container">
                <div class="row">

                    <?php 
                        $nama = $_POST["nama"];
                        $email = $_POST["email"];
                        $komentar = $_POST["komentar"];
                    ?>
                    <div class="col-md-12 py-4"><h2 >Nama :  </h2><h3 style="color:red;"><?= $nama ?><h3></div>
                    <div class="col-md-12 py-4"><h2 >Email :  </h2><h3 style="color:red;"><?= $email ?><h3></div>
                    <div class="col-md-12 py-4" style="margin-bottom:100px; width:60%;" >
                        <h3>Komentar :  </h2>
                        <h3 style="color:red;"><?= $komentar ?></h3>
                    
                    </div>
                <a href="index.php" class="btn btn-primary">Input Data Lagi</a>
                </div>
            </div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
