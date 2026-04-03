<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/style-userpage.css') }}">
    <title>Halaman Pengguna</title>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <img src="logo.png" class="logo">

    <h2>User Page</h2>

    <ul>
        <li><a href="/signout">Sign Out</a></li>
    </ul>
</nav>

<!-- GREETING -->
<div class="greeting">
    <h3>Halo, User</h3>
</div>

<!-- MENU -->
<div class="user-section">
    <div class="menu">
        <div class="menu-item">
            <img src="images/processed.png">
            <p>Diproses</p>
        </div>

        <div class="menu-sent">
            <img src="images/sent.png">
            <p>Dikirim</p>
        </div>

        <div class="menu-item">
            <img src="images/finished.png">
            <p>Selesai</p>
        </div>

        <div class="menu-item">
            <img src="images/catalog.png">
            <p>Katalog</p>
        </div>
    </div>
</div>

<!-- CONTACT -->
<section class="contact">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.473457428458!2d110.46122197457171!3d-7.73949849227904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5b0015672ad5%3A0xfc2cac214650f77e!2sHakim%20Printing!5e0!3m2!1sid!2sid!4v1774552938299!5m2!1sid!2sid"
            width="300"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <div class="info">
        <h2>Alamat & Kontak</h2>
        <p>Hakim Printing</p>
        <p>📍 Kalimati, Tirtomartani, Kec. Kalasan, Sleman</p>
        <p>📞 +628xxx</p>
        <p>✉️ email@gmail.com</p>
    </div>
</section>

</body>
</html>
