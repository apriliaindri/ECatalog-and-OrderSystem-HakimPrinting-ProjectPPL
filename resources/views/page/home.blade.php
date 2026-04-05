<!DOCTYPE html>
<html>
<head>
    <title>Hakim Printing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar">
    <img src="{{ asset('images/logo.png') }}" class="logo">
    <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About Us</a></li>
       <li><a href="{{ url('/') }}#product">Product</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="/signup">Sign Up</a></li>
    </ul>
</nav>

{{-- HERO --}}
<section class="hero section-pink" id="hero">
    <div class="hero-text">
        <h1>Selamat Datang Di <br> Hakim Printing</h1>
    </div>
    <img src="{{ asset('images/img1.jpeg') }}">
</section>

{{-- ABOUT --}}
<section class="about section-white" id="about">
    <img src="{{ asset('images/img2.jpeg') }}">
    <div>
        <h2>Hakim Printing</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    </div>
</section>

<section class="product section-pink" id="product">
    <h2>Product</h2>

    <div class="grid">

        <div class="item">
            <a href="/product/1#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>

            <h3>Produk A</h3>
            <p>Lorem ipsum</p>
            <p class="price">Rp 20.000</p>
            <a href="/order/1">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/2#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk B</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 20.000,00</p>
            <a href="/order/2">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/3#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk C</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 20.000,00</p>
            <a href="/order/3">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/4#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk D</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 20.000,00</p>
            <a href="/order/4">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/5#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk E</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 20.000,00</p>
            <a href="/order/5">
                <button>Pesan</button>
            </a>
        </div>

    </div>
</section>

<section class="product section-pink">

    <div class="grid">

        <div class="item">
            <a href="/product/6#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk F</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 25.000,00</p>
            <a href="/order/6">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/7#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk F</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 25.000,00</p>
            <a href="/order/7">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/8#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk F</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 25.000,00</p>
            <a href="/order/8">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/9#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk F</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 25.000,00</p>
            <a href="/order/9">
                <button>Pesan</button>
            </a>
        </div>

        <div class="item">
            <a href="/product/10#detail">
                <div class="card-img">
                    <img src="{{ asset('images/img2.jpeg') }}">
                </div>
            </a>
            <h3>Produk F</h3>
            <p>Lorem ipsum dolor sit amet</p>
            <p class="price">Rp 25.000,00</p>
            <a href="/order/10">
                <button>Pesan</button>
            </a>
        </div>

    </div>

</section>

{{-- CONTACT --}}
<section class="contact section-pink" id="contact">
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

    <div>
        <h2>Alamat & Kontak</h2>
        <p>Hakim Printing</p>
        <p>📍 Kalimati, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571</p>
        <p>📞 +628xxx</p>
        <p>✉️ email@gmail.com</p>
    </div>
</section>

</body>
</html>
