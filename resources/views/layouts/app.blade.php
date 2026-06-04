<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Geosite Danau Toba')</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
   
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
   <style>
        * { font-family: 'Inter', sans-serif; }
        
        :root {
            --blue-dark: #003366;
            --blue-medium: #1a4a7a;
            --gold: #c6a43b;
            --white: #ffffff;
        }
        
        .navbar {
            transition: all 0.4s ease;
            padding: 0.8rem 0;
            background: white;
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(198, 164, 59, 0.25);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.96);
            padding: 0.4rem 0;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.12);
        }
        
     .navbar .container {
    max-width: 100%;
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;

    display: flex;
    align-items: center;
    justify-content: space-between;
}
        
        .logo-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0;
            padding: 0;
        }
        
            .logo-img {
            height: 60px;
            width: auto;
            border-radius: 16px;
            object-fit: cover;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px -6px rgba(0, 0, 0, 0.2);

            margin-left: 20px; /* Geser ke kanan */
        }
        
        .logo-img:hover {
            transform: scale(1.02) translateY(-2px);
            box-shadow: 0 14px 24px -8px rgba(0, 0, 0, 0.3);
        }
        
        .logo-divider {
            width: 1.5px;
            height: 42px;
            background: linear-gradient(145deg, rgba(214, 205, 205, 0.5), rgba(255,255,255,0.1));
            border-radius: 2px;
        }
        
        .navbar-brand {
            font-size: 1.65rem;
            font-weight: 800;
            color: rgba(0, 0, 0, 1);
            margin: 0;
            padding: 0 0 0 6px;
            letter-spacing: -0.3px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        
        .navbar-brand span { color: var(--gold); font-weight: 800; }
        
        .nav-link {
            color: black;
            font-weight: 500;
            margin: 0 0.2rem;
            transition: all 0.25s ease;
            font-size: 0.95rem;
            padding: 0.5rem 1rem;
            border-radius: 40px;
        }
        
        .nav-link:hover {
            color: var(--gold) !important;
            background: rgba(255, 255, 255, 0.12);
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: var(--gold) !important;
            background: rgba(198, 164, 59, 0.2);
        }
        
        .dropdown-menu {
            background: rgba(0, 51, 102, 0.96);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            padding: 0.6rem 0;
            margin-top: 0.7rem;
            box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.3);
        }
        
        .dropdown-item {
            color: white;
            padding: 10px 24px;
            font-size: 0.85rem;
            transition: all 0.25s ease;
            border-radius: 18px;
            margin: 4px 10px;
        }
        
        .dropdown-item:hover {
            background: rgba(198, 164, 59, 0.2);
            color: var(--gold);
            transform: translateX(5px);
        }
        
        .dropdown-header {
            color: var(--gold);
            padding: 8px 24px;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .navbar-toggler {
            border: none;
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 12px;
            border-radius: 14px;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        @media (max-width: 991px) {
            .logo-img { height: 52px; }
            .logo-divider { height: 36px; }
            .navbar-brand { font-size: 1.5rem; }
            .navbar-collapse {
                background: rgba(0, 51, 102, 0.96);
                backdrop-filter: blur(20px);
                padding: 1.2rem;
                border-radius: 28px;
                margin-top: 1rem;
            }
            .nav-link { text-align: center; }
        }
        
        @media (max-width: 768px) {
            .logo-img { height: 46px; }
            .logo-divider { height: 32px; }
            .navbar-brand { font-size: 1.35rem; }
        }
        
        @media (max-width: 576px) {
            .logo-img { height: 40px; }
            .logo-divider { height: 28px; }
            .navbar-brand { font-size: 1.2rem; }
        }
        
        .footer {
            background: white;
            color: black;
            padding: 40px 0 20px;
            margin-top: 0;
        }
        
        .footer h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 35px;
            height: 2px;
            background: var(--gold);
            border-radius: 4px;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.8rem;
        }
        
        .footer a:hover {
            color: var(--gold);
            transform: translateX(5px);
        }
        
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: var(--gold);
            transform: translateY(-3px);
        }
        
        .social-icons a:hover i { color: var(--blue-dark); }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 15px;
            margin-top: 25px;
            text-align: center;
            font-size: 0.7rem;
            color: rgba(255, 255, 255, 0.5);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 44px;
            height: 44px;
            border-radius: 22px;
            background: var(--gold);
            color: var(--blue-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: white;
            transform: translateY(-4px);
        }
        .music-card { position:fixed; bottom:28px; right:24px; z-index:1100; display:flex; align-items:center; gap:12px; background:rgba(10,10,20,0.82); backdrop-filter:blur(20px); border:1px solid rgba(198,164,59,0.35); border-radius:50px; padding:8px 16px 8px 8px; box-shadow:0 8px 32px rgba(0,0,0,0.45); cursor:pointer; transition:all 0.4s ease; min-width:205px; max-width:265px; }
    .music-card:hover { transform:translateY(-3px); }
    .music-disc { position:relative; width:44px; height:44px; flex-shrink:0; }
    .music-disc-img { width:44px; height:44px; border-radius:50%; object-fit:cover; border:2px solid rgba(198,164,59,0.55); animation:spinDisc 4s linear infinite; animation-play-state:paused; }
    .music-disc-img.playing { animation-play-state:running; }
    @keyframes spinDisc { from{transform:rotate(0deg);} to{transform:rotate(360deg);} }
    .music-disc::after { content:''; position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:11px; height:11px; background:#10102a; border-radius:50%; border:1.5px solid rgba(198,164,59,0.65); z-index:2; pointer-events:none; }
    .music-info { flex:1; overflow:hidden; }
    .music-title { font-size:0.72rem; font-weight:700; color:#fff; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
    .music-artist { font-size:0.62rem; color:rgba(198,164,59,0.9); font-weight:500; margin-top:2px; }
    .music-eq { display:flex; align-items:flex-end; gap:2px; height:16px; flex-shrink:0; opacity:0; transition:opacity 0.3s ease; }
    .music-eq.active { opacity:1; }
    .music-eq span { display:block; width:3px; background:linear-gradient(to top,#c6a43b,#f0d060); border-radius:2px; animation:eqBar 0.8s ease-in-out infinite alternate; }
    .music-eq span:nth-child(1){height:6px;} .music-eq span:nth-child(2){height:12px;animation-delay:0.15s;} .music-eq span:nth-child(3){height:8px;animation-delay:0.3s;} .music-eq span:nth-child(4){height:14px;animation-delay:0.1s;}
    @keyframes eqBar { from{transform:scaleY(0.3);} to{transform:scaleY(1);} }
    .music-btn { width:30px; height:30px; border-radius:50%; background:linear-gradient(135deg,#c6a43b,#d4a947); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:0.72rem; color:#003366; transition:transform 0.3s ease; }
    .music-btn:hover { transform:scale(1.2); }
    .music-badge { position:absolute; top:-7px; left:14px; background:linear-gradient(135deg,#003366,#1a4a7a); color:rgba(198,164,59,0.9); font-size:0.47rem; font-weight:800; letter-spacing:0.8px; text-transform:uppercase; padding:2px 8px; border-radius:20px; border:1px solid rgba(198,164,59,0.3); }
    </style>
    
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <!-- LOGO SECTION - LANGSUNG DARI FOLDER public/image/Logo/ -->
            <div class="logo-wrapper">
                <img src="{{ asset('image/Logo/logobankindonesia.jpg') }}" alt="Bank Indonesia" class="logo-img" loading="lazy">
                <div class="logo-divider"></div>
                <img src="{{ asset('image/Logo/del.jpg') }}" alt="Logo Del" class="logo-img" loading="lazy">
                <div class="logo-divider"></div>
                <a class="navbar-brand" href="{{ url('/') }}">Geo<span>Toba</span></a>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">
            <i class="fas fa-house me-1"></i> Home
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('informasi') ? 'active' : '' }}" href="{{ url('/informasi') }}">
            <i class="fas fa-circle-info me-1"></i> Informasi
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ request()->routeIs('destinasi*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">
            <i class="fas fa-map-location-dot me-1"></i> Destinasi
        </a>
        <ul class="dropdown-menu">
            <li><h6 class="dropdown-header"><i class="fas fa-tag me-1"></i> KATEGORI DESTINASI</h6></li>
            <li><a class="dropdown-item" href="{{ url('/destinasi/alam') }}">Destinasi Alam</a></li>
            <li><a class="dropdown-item" href="{{ url('/destinasi/buatan') }}">Destinasi Buatan</a></li>
            <li><a class="dropdown-item" href="{{ url('/destinasi/budaya') }}">Destinasi Budaya</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('/destinasi') }}">Semua Destinasi</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ url('/galeri') }}">
            <i class="fas fa-camera me-1"></i> Galeri
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ url('/berita') }}">
            <i class="fas fa-newspaper me-1"></i> Berita
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">
            <i class="fas fa-phone me-1"></i> Kontak
        </a>
    </li>
</ul>
    </nav>

    <main>@yield('content')</main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Geo<span style="color: #c6a43b;">Toba</span></h5>
                    <p style="font-size: 0.8rem; color: rgba(0, 0, 0, 1);">Sistem Informasi Geosite Danau Toba - Menyajikan informasi lengkap tentang keindahan geologi dan budaya Batak di kawasan Danau Toba.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Tautan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a hr ef="{{ url('/') }}">Beranda</a></li>
                        <li class="mb-2"><a href="{{ url('/informasi') }}">Informasi</a></li>
                        <li class="mb-2"><a href="{{ url('/galeri') }}">Galeri</a></li>
                        <li class="mb-2"><a href="{{ url('/berita') }}">Berita</a></li>
                        <li class="mb-2"><a href="{{ url('/kontak') }}">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Destinasi</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ url('/destinasi/alam') }}">Destinasi Alam</a></li>
                        <li class="mb-2"><a href="{{ url('/destinasi/buatan') }}">Destinasi Buatan</a></li>
                        <li class="mb-2"><a href="{{ url('/destinasi/budaya') }}">Destinasi Budaya</a></li>
                        <li class="mb-2"><a href="{{ url('/destinasi') }}">Semua Destinasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2" style="color: #c6a43b;"></i> Danau Toba, Sumatera Utara</li>
                        <li class="mb-2"><i class="fas fa-phone me-2" style="color: #c6a43b;"></i> +62 812 3456 7890</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2" style="color: #c6a43b;"></i> info@geotoba.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright"><p>&copy; 2026 GeoToba - Geopark Danau Toba. All rights reserved.</p></div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({ duration: 1000, once: true });
        
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });
        
       const SONG_TITLE  = 'Horbo Paung';
const SONG_ARTIST = "D' Bambo Official";
const DISC_IMG    = "{{ asset('image/musik/horbo_paung.jpg') }}";

const musicCard = document.createElement('div');
musicCard.className = 'music-card';
musicCard.id        = 'musicCard';
musicCard.innerHTML = `
    <span class="music-badge">&#9835; Bebas Hak Cipta</span>
    <div class="music-disc">
        <img src="${DISC_IMG}" alt="sampul lagu" class="music-disc-img" id="musicDisc"
             onerror="this.src='https://placehold.co/44x44/003366/c6a43b?text=\u266a'">
    </div>
    <div class="music-info">
        <div class="music-title">${SONG_TITLE}</div>
        <div class="music-artist">${SONG_ARTIST}</div>
    </div>
    <div class="music-eq" id="musicEq">
        <span></span><span></span><span></span><span></span>
    </div>
    <div class="music-btn" id="musicPlayBtn">
        <i class="bi bi-play-fill" id="musicBtnIcon"></i>
    </div>
`;
document.body.appendChild(musicCard);

const audio   = new Audio("{{ asset('audio/Horbo_Paung_Gondang.mp3') }}");
audio.loop    = true;
audio.volume  = 0.45;

const discEl  = document.getElementById('musicDisc');
const eqEl    = document.getElementById('musicEq');
const iconEl  = document.getElementById('musicBtnIcon');
let isPlaying = false;

function startMusic() { audio.play().catch(()=>{}); discEl.classList.add('playing'); eqEl.classList.add('active'); iconEl.className='bi bi-stop-fill'; isPlaying=true; }
function stopMusic()  { audio.pause(); discEl.classList.remove('playing'); eqEl.classList.remove('active'); iconEl.className='bi bi-play-fill'; isPlaying=false; }

document.getElementById('musicPlayBtn').addEventListener('click', e => { e.stopPropagation(); isPlaying ? stopMusic() : startMusic(); });
musicCard.addEventListener('click', () => { isPlaying ? stopMusic() : startMusic(); });
window.addEventListener('click', () => { if (!isPlaying) startMusic(); }, { once: true });
    </script>
    
    @stack('scripts')
</body>
</html>