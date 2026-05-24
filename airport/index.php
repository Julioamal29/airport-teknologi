<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SIAT — Sistem Informasi Airport Teknologi</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>✈️</text></svg>"/>
</head>
<body>

<?php $current_page = 'index.php'; ?>

<!-- TOP BAR -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <a href="#">📞 (0380) 123-4567</a>
      <a href="#">✉ info@airportteknologi.go.id</a>
      <a href="#">⏰ Senin – Jumat, 08.00–16.00 WITA</a>
    </div>
    <div class="topbar-right">
      <a href="#">Portal Pegawai</a>
      <a href="#">E-Laporan</a>
      <button class="lang-btn">ID ▾</button>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="container">
    <a href="index.php" class="navbar-brand">
      <div class="brand-logo">✈</div>
      <div class="brand-text">
        <div class="name">SIAT <span>Teknologi</span></div>
        <div class="sub">Sistem Informasi Airport Teknologi</div>
        <div class="sub">El-Tari Airport</div>
      </div>
    </a>

    <ul class="nav-menu">
      <li class="nav-item"><a href="index.php" class="nav-link active">Beranda</a></li>
      <li class="nav-item">
        <a href="tentang.php" class="nav-link">Tentang
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
        </a>
        <div class="dropdown">
          <a href="tentang.php#visi">Visi & Misi</a>
          <a href="tentang.php#struktur">Struktur Organisasi</a>
          <a href="tentang.php#sejarah">Sejarah</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="perangkat.php" class="nav-link">Perangkat
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
        </a>
        <div class="dropdown">
          <a href="perangkat.php#hardware">Hardware</a>
          <a href="perangkat.php#jaringan">Jaringan</a>
          <a href="perangkat.php#server">Server</a>
          <a href="perangkat.php#cctv">CCTV & Keamanan</a>
        </div>
      </li>
      <li class="nav-item"><a href="staf.php" class="nav-link">Staf & Tim</a></li>
      <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
    </ul>

    <div class="navbar-right">
      <div class="search-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" placeholder="Cari informasi..."/>
      </div>
      <button class="hamburger" onclick="toggleMenu(this)">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-deco"></div>
  <div class="hero-deco-2"></div>
  <div class="hero-shapes">
    <div class="shape-triangle"></div>
    <div class="shape-rect"></div>
    <div class="shape-rect-2"></div>
  </div>

  <div class="container">
    <div class="hero-content">
      <div class="hero-badge">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        Sistem Informasi Terpadu
      </div>
      <h1 class="hero-title">
        Kelola Infrastruktur<br>Teknologi <span>Bandara</span><br>Dengan Cerdas
      </h1>
      <p class="hero-subtitle">
        Platform manajemen teknologi informasi terintegrasi untuk mendukung operasional Bandar Udara El-Tari Kupang secara efisien, aman, dan transparan.
      </p>
      <div class="hero-actions">
        <a href="perangkat.php" class="btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
          Lihat Perangkat
        </a>
        <a href="tentang.php" class="btn-secondary">
          Tentang SIAT →
        </a>
      </div>
    </div>

    <div class="hero-visual">
      <div class="hero-stats">
        <div class="stat-card">
          <div class="stat-icon blue">🖥️</div>
          <div class="stat-number">142</div>
          <div class="stat-label">Total Perangkat</div>
        </div>
        <div class="stat-card">
          <div class="stat-icon green">✅</div>
          <div class="stat-number">128</div>
          <div class="stat-label">Aktif & Beroperasi</div>
        </div>
        <div class="stat-card">
          <div class="stat-icon sky">👥</div>
          <div class="stat-number">24</div>
          <div class="stat-label">Staf Teknologi</div>
        </div>
        <div class="stat-card">
          <div class="stat-icon orange">📡</div>
          <div class="stat-number">8</div>
          <div class="stat-label">Jaringan Aktif</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- QUICK LINKS -->
<div class="quick-links">
  <div class="container">
    <a href="perangkat.php" class="quick-link-item">
      <div class="quick-link-icon">🖥️</div>
      <div class="quick-link-text">
        <div class="title">Inventaris Perangkat</div>
        <div class="desc">Data aset teknologi</div>
      </div>
    </a>
    <a href="staf.php" class="quick-link-item">
      <div class="quick-link-icon">👨‍💻</div>
      <div class="quick-link-text">
        <div class="title">Tim Teknologi</div>
        <div class="desc">Profil staf & tim IT</div>
      </div>
    </a>
    <a href="#layanan" class="quick-link-item">
      <div class="quick-link-icon">🔧</div>
      <div class="quick-link-text">
        <div class="title">Layanan IT</div>
        <div class="desc">Bantuan & dukungan teknis</div>
      </div>
    </a>
    <a href="kontak.php" class="quick-link-item">
      <div class="quick-link-icon">📞</div>
      <div class="quick-link-text">
        <div class="title">Helpdesk</div>
        <div class="desc">Laporkan gangguan</div>
      </div>
    </a>
  </div>
</div>

<!-- LAYANAN -->
<section class="section" id="layanan">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-badge">Layanan Kami</div>
      <h2 class="section-title">Layanan <span>Teknologi Informasi</span></h2>
      <p class="section-desc">Kami menyediakan berbagai layanan IT untuk mendukung seluruh operasional bandar udara secara optimal.</p>
    </div>
    <div class="services-grid">
      <div class="service-card fade-in">
        <div class="service-icon">🌐</div>
        <div class="service-title">Manajemen Jaringan</div>
        <div class="service-desc">Pengelolaan infrastruktur jaringan LAN, WAN, dan WiFi di seluruh area bandara termasuk monitoring real-time dan pemeliharaan berkala.</div>
        <a href="perangkat.php#jaringan" class="service-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg></a>
      </div>
      <div class="service-card fade-in">
        <div class="service-icon">🖥️</div>
        <div class="service-title">Dukungan Hardware</div>
        <div class="service-desc">Perawatan, perbaikan, dan pengadaan perangkat keras komputer, printer, scanner, dan peralatan teknologi pendukung operasional.</div>
        <a href="perangkat.php#hardware" class="service-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg></a>
      </div>
      <div class="service-card fade-in">
        <div class="service-icon">🔒</div>
        <div class="service-title">Keamanan Sistem</div>
        <div class="service-desc">Implementasi sistem keamanan siber, firewall, antivirus, dan monitoring keamanan jaringan untuk melindungi data dan sistem bandara.</div>
        <a href="#" class="service-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg></a>
      </div>
      <div class="service-card fade-in">
        <div class="service-icon">📹</div>
        <div class="service-title">CCTV & Surveillance</div>
        <div class="service-desc">Pengelolaan sistem kamera pengawas di seluruh area bandara, kontrol akses, dan sistem keamanan terintegrasi.</div>
        <a href="perangkat.php#cctv" class="service-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg></a>
      </div>
      <div class="service-card fade-in">
        <div class="service-icon">☁️</div>
        <div class="service-title">Server & Data Center</div>
        <div class="service-desc">Manajemen server, backup data, virtualisasi, dan pemeliharaan pusat data untuk memastikan ketersediaan sistem 24/7.</div>
        <a href="perangkat.php#server" class="service-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg></a>
      </div>
      <div class="service-card fade-in">
        <div class="service-icon">📱</div>
        <div class="service-title">Helpdesk & Support</div>
        <div class="service-desc">Layanan bantuan teknis untuk seluruh pengguna sistem, troubleshooting, instalasi software, dan pelatihan penggunaan sistem.</div>
        <a href="kontak.php" class="service-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- PERANGKAT HIGHLIGHT -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-badge">Perangkat Unggulan</div>
      <h2 class="section-title">Status <span>Perangkat Terkini</span></h2>
      <p class="section-desc">Pantau status perangkat utama sistem informasi bandara secara real-time.</p>
    </div>
    <div class="devices-grid">
      <div class="device-card fade-in">
        <div class="device-emoji">🖥️</div>
        <div class="device-name">Workstation Terminal</div>
        <div class="device-status status-active">Aktif</div>
      </div>
      <div class="device-card fade-in">
        <div class="device-emoji">🌐</div>
        <div class="device-name">Router Utama</div>
        <div class="device-status status-active">Aktif</div>
      </div>
      <div class="device-card fade-in">
        <div class="device-emoji">📡</div>
        <div class="device-name">Access Point WiFi</div>
        <div class="device-status status-maintenance">Maintenance</div>
      </div>
      <div class="device-card fade-in">
        <div class="device-emoji">🖨️</div>
        <div class="device-name">Printer Check-in</div>
        <div class="device-status status-active">Aktif</div>
      </div>
    </div>
    <div style="text-align:center; margin-top:36px;">
      <a href="perangkat.php" class="btn-primary">Lihat Semua Perangkat →</a>
    </div>
  </div>
</section>

<!-- BERITA -->
<section class="section">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-badge">Informasi Terkini</div>
      <h2 class="section-title">Berita & <span>Pengumuman</span></h2>
    </div>
    <div class="news-grid fade-in">
      <div class="news-featured">
        <div class="news-img">📢</div>
        <div class="news-body">
          <span class="news-tag">Pengumuman</span>
          <div class="news-title">Peningkatan Infrastruktur Jaringan Fiber Optik di Terminal Keberangkatan Bandara El Tari</div>
          <p class="news-excerpt">Divisi Teknologi Informasi telah berhasil menyelesaikan pemasangan jaringan fiber optik baru yang meningkatkan kecepatan koneksi hingga 10 Gbps di seluruh area terminal keberangkatan.</p>
          <div class="news-meta">
            <span>📅 15 Mei 2025</span>
            <span>👤 Divisi TI</span>
          </div>
        </div>
      </div>
      <div class="news-list">
        <div class="news-item">
          <div class="news-item-img c1">🔧</div>
          <div>
            <div class="news-item-title">Jadwal Pemeliharaan Server Bulanan — Juni 2025</div>
            <div class="news-item-date">📅 10 Mei 2025</div>
          </div>
        </div>
        <div class="news-item">
          <div class="news-item-img c2">🔒</div>
          <div>
            <div class="news-item-title">Update Kebijakan Keamanan Siber & Penggunaan Sistem</div>
            <div class="news-item-date">📅 05 Mei 2025</div>
          </div>
        </div>
        <div class="news-item">
          <div class="news-item-img c3">📱</div>
          <div>
            <div class="news-item-title">Peluncuran Aplikasi Mobile Helpdesk Teknologi Bandara</div>
            <div class="news-item-date">📅 28 Apr 2025</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="cta-banner">
  <div class="container">
    <div class="cta-text">
      <div class="title">Ada Gangguan Sistem?<br>Hubungi Tim Kami Sekarang</div>
      <div class="desc">Tim helpdesk kami siap membantu menangani masalah teknis Anda. Layanan tersedia setiap hari kerja pukul 08.00 – 16.00 WITA.</div>
    </div>
    <div class="cta-actions">
      <a href="kontak.php" class="btn-white">📞 Hubungi Helpdesk</a>
      <a href="staf.php" class="btn-outline-white">👥 Tim Teknologi</a>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="name">SIAT <span>Teknologi</span></div>
        <div class="tagline">Sistem Informasi Airport Teknologi</div>
        <p>Platform manajemen teknologi informasi terpadu untuk mendukung operasional Bandar Udara El Tari Kupang, Nusa Tenggara Timur.</p>
        <div class="footer-socials">
          <div class="social-btn">📘</div>
          <div class="social-btn">🐦</div>
          <div class="social-btn">📺</div>
          <div class="social-btn">📸</div>
        </div>
      </div>
      <div class="footer-col">
        <h4>Navigasi</h4>
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="tentang.php">Tentang SIAT</a></li>
          <li><a href="perangkat.php">Inventaris Perangkat</a></li>
          <li><a href="staf.php">Tim Teknologi</a></li>
          <li><a href="kontak.php">Kontak & Helpdesk</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Manajemen Jaringan</a></li>
          <li><a href="#">Dukungan Hardware</a></li>
          <li><a href="#">Keamanan Sistem</a></li>
          <li><a href="#">Server & Data Center</a></li>
          <li><a href="#">CCTV & Surveillance</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Kontak</h4>
        <div class="footer-contact-item">
          <span class="icon">📍</span>
          <span>Bandar Udara El Tari, Kupang, NTT 85111</span>
        </div>
        <div class="footer-contact-item">
          <span class="icon">📞</span>
          <span>(0380) 123-4567</span>
        </div>
        <div class="footer-contact-item">
          <span class="icon">✉</span>
          <span>info@airportteknologi.go.id</span>
        </div>
        <div class="footer-contact-item">
          <span class="icon">⏰</span>
          <span>Senin–Jumat, 08.00–16.00 WITA</span>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> SIAT — Sistem Informasi Airport Teknologi. Bandar Udara El Tari Kupang.</p>
      <div class="footer-bottom-links">
        <a href="#">Kebijakan Privasi</a>
        <a href="#">Syarat Penggunaan</a>
        <a href="#">Aksesibilitas</a>
      </div>
    </div>
  </div>
</footer>

<script>
function toggleMenu(btn) {
  const menu = document.querySelector('.nav-menu');
  menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
  menu.style.flexDirection = 'column';
  menu.style.position = 'absolute';
  menu.style.top = '70px';
  menu.style.left = '0'; menu.style.right = '0';
  menu.style.background = '#fff';
  menu.style.padding = '16px';
  menu.style.boxShadow = '0 8px 30px rgba(0,0,0,0.1)';
  menu.style.zIndex = '999';
}

// Fade-in on scroll
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>
</body>
</html>
