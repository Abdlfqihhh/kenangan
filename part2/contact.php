<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisiMisi</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #white;
            color: #black;
            padding: 10px 0;
        }
        .navbar-nav > li > a {
            color: #fff;
            padding: 10px 20px;
        }
        .section-container {
            margin: 20px auto;
            padding: 20px;
            max-width: 1200px;
        }
        .card-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .album {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 10px;
        }
        .album img {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .album img:hover {
            transform: scale(1.05);
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #fff;
            color: #333;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- <header>
        <nav class="navbar navbar-fixed-top navbar-default">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </nav>
    </header> -->

    <div class="section-container">
        <div class="card-container">
        </div>
        <div class="album">
            <div>
                <img src="kos1.jpg" alt="This Is Me">
                <p>Rp 800 Ribu</p>
                <p>Kost perempuan spre bunga</p>
                <p>Kota Depok</p>
                <p>☐ 100m²  🛏️ 1 🛀 1</p>
            </div>
            <div>
                <img src="kos2.jpg" alt="This Is My Little Brother">
                <p>Rp 1 Juta</p>
                <p>Kosr perempuan estetik dikit</p>
                <p>Kota Tangerang Selatan</p>
                <p>☐ 90m²  🛏️ 1 🛀 1</p>
            </div>
            <div>
                <img src="kos3.jpg" alt="This Is My Mother">
                <p>Rp 1.5 Juta</p>
                <p>Kost lanang keren</p>
                <p>Kota Jakarta</p>
                <p>☐ 100m²  🛏️ 1 🛀 1</p>
            </div>
            <div>
                <img src="kos4.jpg" alt="This Is My Little Sister">
                <p>Rp 1 Juta</p>
                <p>Disewakan kost nanggung</p>
                <p>Kota Bekasi</p>
                <p>☐ 100m²  🛏️ 1 🛀 1</p>
            </div>
            <div>
                <img src="kos5.jpg" alt="This Is Me">
                <p>Rp 750 Ribu</p>
                <p>Kost warna atalanta</p>
                <p>Kota Tangerang Selatan</p>
                <p>☐ 50m²  🛏️ 1 🛀 1</p>
            </div>
            <div>
                <img src="kos6.jpg" alt="This Is Me">
                <p>Rp 1.2 Juta</p>
                <p>Kost deket pasar</p>
                <p>Kota Bali</p>
                <p>☐ 50m²  🛏️ 1 🛀 1</p>
            </div>
        </div>
    </div>

    <!-- <footer>
        <p>© UNTITLED | My Web Project</p>
    </footer> -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            navActivePage();
        });
    </script>
    <script type="text/javascript" src="./main.70a66962.js"></script>
</body>

</html>