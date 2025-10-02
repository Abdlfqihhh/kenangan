<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARSIP</title>
    <meta charset="UTF-8">
    <meta name="description" content="My PHP Website">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<header>
    <h1 class="title">ARSIP</h1>
    <h3 class="desc">ARSIP FOTO</h3>`

    <div class="gedungImg">
        <center><img src="Rtamu.jpg" alt=""width=100%><center>
    </div>

    <nav id="navigation">
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=visimisi">Joging</a></li>
            <li><a href="index.php?page=about">Puncak</a></li>
            <li><a href="index.php?page=contact">Random</a></li>
            <li><a href="index.php?page=galery">contact</a></li>
        </ul>
    </nav>
</header>
<div id="contents">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include 'home.php';
                break;
            case 'about':
                include 'about.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            case 'visimisi':
                include 'visimisi.php';
                break;
            case 'galery':
                include 'galery.php';
                break;
        }
    } else {
        include 'home.php';
    }
    ?>

    <style>
        <?php 
            include "style.css"
        ?>
    </style>

</div>
<footer>
    abdulfaqihanisa@gmail.com
</footer>
</body>
</html>