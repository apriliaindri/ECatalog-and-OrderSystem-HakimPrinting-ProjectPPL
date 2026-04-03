<!DOCTYPE html>
<html>
<head>
    <title>Information Page</title>

    <link rel="stylesheet" href="{{ asset('css/style-info-invitation.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

<!-- HEADER -->
<div class="header">
    <img src="{{ asset('images/logo.png') }}">
    <h2>Informasi Pesanan</h2>
</div>

<!-- BACKGROUND -->
<div class="bg">
    <div class="pink-top"></div>
    <div class="white-middle"></div>
    <div class="pink-bottom"></div>
</div>

<!-- CARD -->
<div class="card-container">
    <div class="card">
         <form action="/checkout" method="GET">

            <!-- NAMA -->
            <div class="form-group">
                <label>Nama Lengkap Mempelai Pria</label>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Alamat Mempelai Pria</label>
                <div class="input-box">
                    <i class="fa fa-whatsapp"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Nama Orang Tua Mempelai Pria</label>
                <div class="input-box">
                    <i class="fa fa-home"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Nama Lengkap Mempelai Wanita</label>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Alamat Mempelai Wanita</label>
                <div class="input-box">
                    <i class="fa fa-whatsapp"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Nama Orang Tua Mempelai Wanita</label>
                <div class="input-box">
                    <i class="fa fa-home"></i>
                    <input type="text">
                </div>
            </div>

                        <div class="form-group">
                <label>Tanggal Akad (Waktu Akad)</label>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Lokasi Akad</label>
                <div class="input-box">
                    <i class="fa fa-whatsapp"></i>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Resepsi (Waktu Resepsi)</label>
                <div class="input-box">
                    <i class="fa fa-home"></i>
                    <input type="text">
                </div>
            </div>

                        <div class="form-group">
                <label>Lokasi Resepsi</label>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text">
                </div>
            </div>

                        <div class="form-group">
                <label>Quotes (Opsional)</label>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text">
                </div>
            </div>

        <div class="btn">
            <button onclick="goNext()">> Checkout</button>
        </div>

    </div>
</div>

<script>
function goCheckout(e) {
    e.preventDefault(); // cegah reload

    // redirect ke halaman checkout
    window.location.href = "/checkout";
}
</script>

</body>
</html>
