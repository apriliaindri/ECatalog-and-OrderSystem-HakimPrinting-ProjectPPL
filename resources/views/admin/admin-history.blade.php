<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesanan Selesai</title>

    <link rel="stylesheet" href="{{ asset('css/style-history.css') }}">
</head>
<body>

{{-- HEADER --}}
<div class="header">
    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h2>Pesanan Selesai</h2>

<a href="/admin" class="back">Back</a>
</div>


        {{-- LIST PESANAN --}}
<div class="container">

    {{-- ITEM --}}
    {{-- ===== PRODUK 1 ===== --}}
    <div class="order-card">
        <div class="left">
            <h4>John Doe</h4
        <p>Product A</p>
            <p>x 200</p>
            <p class="price">Rp. xxxxx,xx</p>

            <div class="shipping-status">
                <div class="status-header">
                    <img src="{{ asset('images/shipping.png') }}" class="icon-img">
                    <p>Status Pengiriman</p>
                </div>

                    <div class="status">
                        <span class="dot"></span>
                        <p>Paket sampai ke penerima</p>
                    </div>
            </div>
        </div>

        <div class="right">
            <p>No Resi:</p>
            <span>xxxxxxxxxxxxxxxxxxxx</span>
        </div>
    </div>

    {{-- ===== PRODUK 2 ===== --}}
    <div class="order-card">
        <div class="left">
            <h4>John Doe</h4> <!-- nama pengguna -->
        <p>Product A</p>
            <p>x 100</p>
            <p class="price">Rp. xxxxx,xx</p>

            <div class="shipping-status">
                <div class="status-header">
                    <img src="{{ asset('images/shipping.png') }}" class="icon-img">
                    <p>Status Pengiriman</p>
                </div>

                    <div class="status">
                        <span class="dot"></span>
                        <p>Paket sampai ke penerima</p>
                    </div>
            </div>
        </div>

        <div class="right">
            <p>No Resi:</p>
            <span>xxxxxxxxxxxxxxxxxxxx</span>
        </div>
    </div>

    {{-- ===== PRODUK 3 ===== --}}
    <div class="order-card">
        <div class="left">
            <h4>John Doe</h4>
        <p>Product A</p>
            <p>x 150</p>
            <p class="price">Rp. xxxxx,xx</p>

            <div class="shipping-status">
                <div class="status-header">
                    <img src="{{ asset('images/shipping.png') }}" class="icon-img">
                    <p>Status Pengiriman</p>
                </div>

                    <div class="status">
                        <span class="dot"></span>
                        <p>Paket sampai ke penerima</p>
                    </div>
            </div>
        </div>

        <div class="right">
            <p>No Resi:</p>
            <span>xxxxxxxxxxxxxxxxxxxx</span>
        </div>
    </div>
</div>



</body>
</html>
