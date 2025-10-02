<html>
 <head>
  <title>
   Property Listing
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .property-details, .contact-details {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
        }
        .property-details h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .property-details p {
            color: #666;
            margin-bottom: 20px;
        }
        .price-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .price-info div {
            background-color: #3b82f6;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            margin-right: 10px;
        }
        .icons {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .icons i {
            margin-right: 10px;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .details-table th, .details-table td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .details-table th {
            background-color: #f9f9f9;
        }
        .contact-details {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-details img {
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .contact-details h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .contact-details .whatsapp {
            display: flex;
            align-items: center;
            background-color: #25d366;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .contact-details .whatsapp i {
            margin-right: 10px;
        }
        .contact-details .phone-number {
            background-color: #fff;
            color: #3b82f6;
            padding: 10px 20px;
            border: 1px solid #3b82f6;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .contact-details input, .contact-details textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-details button {
            background-color: #3b82f6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
  </style>
 </head>
 <body>
  <div class="container">
   <div class="property-details">
   </div>
   <div class="contact-details">
    <img alt="Profile picture of Vanessa L" height="100" src="kcy.jpeg" width="100"/>
    <h2>
     Kucuyyy
    </h2>
    <div class="whatsapp">
     <i  class="fab fa-whatsapp">
     </i>
     <a href="https://wa.me/qr/NRYHR5DMDUCEO1">08872191561</a>
     <!-- 08872191561 -->
    </div>
    <form action="api.php" method="POST">
        <input type="text" name="Nama" placeholder="Nama"/>
        <input type="text" name="Nope" placeholder="Nomor Telepon Genggam"/>
        <input type="email" name="Email" placeholder="Email"/>
        <input type="pesan" name="Pesan" placeholder="Pesan"/>
        <button type="submit">
            Kirim
        </button>
    </form>
   </div>
  </div>
 </body>
</html>