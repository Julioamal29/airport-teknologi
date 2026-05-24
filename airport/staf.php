<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Staf & Tim — SIAT Airport Teknologi</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

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
      <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
      <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang</a></li>
      <li class="nav-item"><a href="perangkat.php" class="nav-link">Perangkat</a></li>
      <li class="nav-item"><a href="staf.php" class="nav-link active">Staf & Tim</a></li>
      <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
    </ul>
    <div class="navbar-right">
      <div class="search-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" placeholder="Cari staf..." oninput="filterStaff(this.value)"/>
      </div>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Beranda</a> <span>›</span> Staf & Tim
    </div>
    <h1>Tim Teknologi Kami</h1>
    <p>Kenali para profesional IT yang berdedikasi dalam menjaga dan mengembangkan infrastruktur teknologi Bandar Udara El Tari Kupang.</p>
  </div>
</div>

<!-- STATS ROW -->
<div class="quick-links" style="padding:20px 0;">
  <div class="container" style="grid-template-columns:repeat(4,1fr);">
    <div class="quick-link-item"><div class="quick-link-icon">👥</div><div class="quick-link-text"><div class="title">6</div><div class="desc">Total Staf TI</div></div></div>
    <div class="quick-link-item"><div class="quick-link-icon">🎓</div><div class="quick-link-text"><div class="title">3</div><div class="desc">Bersertifikat</div></div></div>
    <div class="quick-link-item"><div class="quick-link-icon">🏢</div><div class="quick-link-text"><div class="title">3</div><div class="desc">Divisi</div></div></div>
    <div class="quick-link-item"><div class="quick-link-icon">⭐</div><div class="quick-link-text"><div class="title">5+</div><div class="desc">Tahun Rata-rata Pengalaman</div></div></div>
  </div>
</div>

<!-- TEAM SECTION -->
<section class="section">
  <div class="container">

    <!-- Filter Divisi -->
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:36px;" class="fade-in">
      <?php
        $divisi = ['Semua','Pimpinan','Admin','ICT Support','Helpdesk & Support'];
        foreach($divisi as $i => $d):
      ?>
      <button onclick="filterDivisi('<?= $d ?>', this)"
        style="padding:9px 18px;border-radius:30px;font-family:inherit;font-size:0.84rem;font-weight:700;border:2px solid <?= $i===0 ? 'var(--teal)' : 'var(--gray-mid)' ?>;background:<?= $i===0 ? 'var(--teal)' : 'white' ?>;color:<?= $i===0 ? 'white' : 'var(--dark-text)' ?>;cursor:pointer;transition:all 0.2s;" class="div-btn">
        <?= $d ?>
      </button>
      <?php endforeach; ?>
    </div>

    <?php
      $staff = [
        // Pimpinan
        ['Pak. Rachmad, M.T.','Kepala Divisi Teknologi Informasi','Pimpinan','BS','rachmad@airportteknologi.go.id','0812-3456-7890','Pendidikan','5+ tahun'],
        // Admin
        ['Ibu Dian, S.T.','Network Engineer Senior','Admin','AF','dian@airportteknologi.go.id','0812-3456-7892','S1 Teknik Komputer — UGM','10 tahun'],
        ['Ibu Ira, S.T.','Network Engineer Senior','Admin','AF','ira@airportteknologi.go.id','0812-3456-7892','S1 Teknik Komputer — UGM','5+ tahun'],
        // ICT Support
        ['Pak Rifzki, S.Kom., CEH','Cybersecurity Analyst','ICT Support','RF','rifzki@airportteknologi.go.id','0812-3456-7896','S1 Informatika — ITS | CEH Certified','9 tahun'],
        ['Pak Eman, S.Kom., CEH','Cybersecurity Analyst','ICT Support','RF','eman@airportteknologi.go.id','0812-3456-7896','S1 Informatika — ITS | CEH Certified','9 tahun'],
         ['Pak Arry, S.Kom., CEH','Cybersecurity Analyst','ICT Support','RF','arry@airportteknologi.go.id','0812-3456-7896','S1 Informatika — ITS | CEH Certified','9 tahun'],
        // Helpdesk 
        ['Pak Julio, S.Kom.','IT Support Supervisor','Helpdesk & Support','YK','julio@airportteknologi.go.id','0812-3456-7899','S1 Teknik Informatika — Undana','8 tahun'],
        ['Pak Wiliam, S.Kom.','IT Support Supervisor','Helpdesk & Support','YK','wiliam@airportteknologi.go.id','0812-3456-7899','S1 Teknik Informatika — Undana','8 tahun'],
      ];
    ?>

    <div class="staff-grid" id="staffGrid">
      <?php foreach($staff as $s): ?>
      <div class="staff-card fade-in" data-divisi="<?= htmlspecialchars($s[2]) ?>" data-name="<?= strtolower($s[0]) ?> <?= strtolower($s[1]) ?>">
        <div class="staff-avatar"><?= $s[3] ?></div>
        <div class="staff-name"><?= $s[0] ?></div>
        <div class="staff-role"><?= $s[1] ?></div>
        <div style="display:inline-block; background:var(--teal-pale); color:var(--teal); padding:3px 12px; border-radius:20px; font-size:0.72rem; font-weight:700; margin-bottom:12px;"><?= $s[2] ?></div>
        <div class="staff-info">
          <div style="margin-bottom:4px;">🎓 <?= $s[6] ?></div>
          <div style="margin-bottom:4px;">⏱ <?= $s[7] ?> pengalaman</div>
          <div style="margin-bottom:4px; word-break:break-all;">✉ <?= $s[4] ?></div>
          <div>📱 <?= $s[5] ?></div>
        </div>
        <div class="staff-contact">
          <div class="contact-btn" title="Email">✉</div>
          <div class="contact-btn" title="Telepon">📞</div>
          <div class="contact-btn" title="Profil">👤</div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="name">SIAT <span>Teknologi</span></div>
        <div class="tagline">Sistem Informasi Airport Teknologi</div>
        <p>Platform manajemen teknologi informasi terpadu Bandar Udara El Tari Kupang.</p>
        <div class="footer-socials">
          <div class="social-btn">📘</div>
          <div class="social-btn">🐦</div>
          <div class="social-btn">📺</div>
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
        <h4>Tim Divisi</h4>
        <ul>
          <li><a href="#">👥 Pimpinan</a></li>
          <li><a href="#">🌐 Jaringan & Infrastruktur</a></li>
          <li><a href="#">🔒 Keamanan Sistem</a></li>
          <li><a href="#">🔧 Helpdesk & Support</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Kontak</h4>
        <div class="footer-contact-item"><span class="icon">📍</span><span>Bandar Udara El Tari, Kupang, NTT</span></div>
        <div class="footer-contact-item"><span class="icon">📞</span><span>(0380) 123-4567</span></div>
        <div class="footer-contact-item"><span class="icon">✉</span><span>info@airportteknologi.go.id</span></div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> SIAT — Sistem Informasi Airport Teknologi.</p>
      <div class="footer-bottom-links">
        <a href="#">Kebijakan Privasi</a>
        <a href="#">Syarat Penggunaan</a>
      </div>
    </div>
  </div>
</footer>

<script>
function filterStaff(q) {
  q = q.toLowerCase();
  document.querySelectorAll('.staff-card').forEach(c => {
    c.style.display = c.dataset.name.includes(q) ? '' : 'none';
  });
}

function filterDivisi(divisi, btn) {
  document.querySelectorAll('.div-btn').forEach(b => {
    b.style.background = 'white';
    b.style.color = 'var(--dark-text)';
    b.style.borderColor = 'var(--gray-mid)';
  });
  btn.style.background = 'var(--teal)';
  btn.style.color = 'white';
  btn.style.borderColor = 'var(--teal)';

  document.querySelectorAll('.staff-card').forEach(c => {
    c.style.display = (divisi === 'Semua' || c.dataset.divisi === divisi) ? '' : 'none';
  });
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>
</body>
</html>
