<?php
    session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'link/link.php'; ?>
    <style>::after.card {
        background: #fff;
        color:blueviolet;
        border-radius: 8px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand fs-2" style="font-family:Libre Baskerville, serif;" href="dashboard.php">Galery</a>
            <button claas="collapse navbar-collapse mt</button>
    </nav>
</body>
