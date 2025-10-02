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
                <img src="pnck.jpeg" alt="This Is Me">
            </div>
            
            <div>
                <img src="pnck2.jpeg" alt="This Is My Little Brother">
            </div>
            <div>
                <img src="pnck3.jpeg" alt="This Is My Mother">
            </div>
            <div>
                <img src="pnck4.jpeg" alt="This Is My Little Sister">
            </div>
            <div>
                <img src="pnck5.jpeg" alt="This Is Me">
            </div>
            <div>
                <img src="pnck6.jpeg" alt="This Is Me">
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