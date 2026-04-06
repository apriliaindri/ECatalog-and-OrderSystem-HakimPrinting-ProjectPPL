<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesanan Diproses</title>

    <link rel="stylesheet" href="{{ asset('css/style-processed.css') }}">
</head>
<body>

{{-- HEADER --}}
<div class="header">
    <img src="{{ asset('images/logo.png') }}" class="logo">

    <h2>Pesanan Diproses</h2>

    {{-- SIGN OUT --}}
    <form action="{{ route('logoutprocessed') }}" method="POST">
    @csrf
    <button type="submit" class="logout-link">
        <img src="{{ asset('images/logout.png') }}" class="logout-icon">
        Sign Out
    </button>
</form>
</div>

{{-- LIST PESANAN --}}
<div class="container">

    {{-- ITEM --}}
    <div class="order-card">
        <div class="left">
            <h4>Product A</h4>
            <p>x 200</p>
            <p class="price">Rp. xxxxx,xx</p>
        </div>

        <div class="right">
            <p>No Resi:</p>
            <span>xxxxxxxxxxxxxxxxxxxx</span>
        </div>
    </div>

    <div class="order-card">
        <div class="left">
            <h4>Product A</h4>
            <p>x 200</p>
            <p class="price">Rp. xxxxx,xx</p>
        </div>

        <div class="right">
            <p>No Resi:</p>
            <span>xxxxxxxxxxxxxxxxxxxx</span>
        </div>
    </div>

    <div class="order-card">
        <div class="left">
            <h4>Product A</h4>
            <p>x 200</p>
            <p class="price">Rp. xxxxx,xx</p>
        </div>

        <div class="right">
            <p>No Resi:</p>
            <span>xxxxxxxxxxxxxxxxxxxx</span>
        </div>
    </div>

</div>

</body>
</html>
