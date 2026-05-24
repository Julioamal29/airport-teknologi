<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontak — SIAT Airport Teknologi</title>
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
      <li class="nav-item"><a href="staf.php" class="nav-link">Staf & Tim</a></li>
      <li class="nav-item"><a href="kontak.php" class="nav-link active">Kontak</a></li>
    </ul>
    <div class="navbar-right">
      <div class="search-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" placeholder="Cari..."/>
      </div>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Beranda</a> <span>›</span> Kontak & Helpdesk
    </div>
    <h1>Kontak & Helpdesk</h1>
    <p>Hubungi tim teknologi kami untuk pelaporan gangguan, pertanyaan teknis, atau permintaan layanan IT.</p>
  </div>
</div>

<!-- KONTAK SECTION -->
<section class="section">
  <div class="container">
    <div class="kontak-grid">
      <!-- INFO CARD -->
      <div class="kontak-info-card fade-in">
        <h3>📍 Informasi Kontak</h3>
        <div class="kontak-item">
          <div class="kontak-item-icon">📍</div>
          <div class="kontak-item-text">
            <div class="label">Alamat</div>
            <div class="value">Bandar Udara El Tari, Jl. El Tari No.1, Kupang, Nusa Tenggara Timur 85111</div>
          </div>
        </div>
        <div class="kontak-item">
          <div class="kontak-item-icon">📞</div>
          <div class="kontak-item-text">
            <div class="label">Telepon Utama</div>
            <div class="value">(0380) 123-4567</div>
          </div>
        </div>
        <div class="kontak-item">
          <div class="kontak-item-icon">🆘</div>
          <div class="kontak-item-text">
            <div class="label">Helpdesk Darurat</div>
            <div class="value">0800-123-4567 (Gratis)</div>
          </div>
        </div>
        <div class="kontak-item">
          <div class="kontak-item-icon">✉</div>
          <div class="kontak-item-text">
            <div class="label">Email</div>
            <div class="value">info@airportteknologi.go.id</div>
          </div>
        </div>
        <div class="kontak-item">
          <div class="kontak-item-icon">⏰</div>
          <div class="kontak-item-text">
            <div class="label">Jam Layanan</div>
            <div class="value">Senin – Jumat: 08.00 – 16.00 WITA</div>
          </div>
        </div>

        <!-- Emergency -->
        <div style="background:rgba(255,255,255,0.08); border-radius:var(--radius); padding:16px; margin-top:8px;">
          <div style="font-size:0.8rem; opacity:0.7; margin-bottom:8px; font-weight:600; text-transform:uppercase; letter-spacing:0.05em;">Kontak Cepat Tim</div>
          <div style="display:flex; flex-direction:column; gap:10px;">
            <div style="display:flex;justify-content:space-between;align-items:center; font-size:0.84rem;">
              <span>🌐 Jaringan & Infrastruktur</span>
              <span style="font-weight:700;">Ext. 101</span>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center; font-size:0.84rem;">
              <span>🔒 Keamanan Sistem</span>
              <span style="font-weight:700;">Ext. 102</span>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center; font-size:0.84rem;">
              <span>🔧 Helpdesk Support</span>
              <span style="font-weight:700;">Ext. 103</span>
            </div>
            <div style="display:flex;justify-content:space-between;align-items:center; font-size:0.84rem;">
              <span>☁️ Server & Data Center</span>
              <span style="font-weight:700;">Ext. 104</span>
            </div>
          </div>
        </div>
      </div>

      <!-- FORM CARD -->
      <div class="form-card fade-in">
        <h3>📝 Formulir Pelaporan / Permintaan Layanan</h3>

        <?php
          $success = false;
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nama'])) {
            // Here you would normally save to database or send email
            $success = true;
          }
        ?>

        <?php if ($success): ?>
        <div style="background:var(--teal-pale); border:1px solid var(--teal); border-radius:var(--radius); padding:20px; margin-bottom:24px; text-align:center;">
          <div style="font-size:2rem; margin-bottom:8px;">✅</div>
          <div style="font-weight:700; color:var(--teal); margin-bottom:4px;">Laporan Berhasil Dikirim!</div>
          <div style="font-size:0.85rem; color:var(--gray-text);">Tim kami akan segera menindaklanjuti permintaan Anda. Nomor tiket: <strong>#<?= strtoupper(substr(md5(time()), 0, 8)) ?></strong></div>
        </div>
        <?php endif; ?>

        <form method="POST" action="kontak.php" onsubmit="return validateForm()">
          <div class="form-row">
            <div class="form-group">
              <label>Nama Lengkap *</label>
              <input type="text" name="nama" id="nama" placeholder="Masukkan nama Anda" required/>
            </div>
            <div class="form-group">
              <label>NIP / NIK</label>
              <input type="text" name="nip" placeholder="Nomor induk pegawai"/>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Nomor Telepon *</label>
              <input type="tel" name="telepon" placeholder="08xx-xxxx-xxxx" required/>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" placeholder="nama@email.com"/>
            </div>
          </div>
          <div class="form-group">
            <label>Unit / Divisi</label>
            <input type="text" name="divisi" placeholder="Contoh: Check-in, Imigrasi, Operasional"/>
          </div>
          <div class="form-group">
            <label>Kategori Laporan *</label>
            <select name="kategori" required>
              <option value="">-- Pilih Kategori --</option>
              <option>Gangguan Jaringan / Internet</option>
              <option>Kerusakan Hardware</option>
              <option>Masalah Software / Aplikasi</option>
              <option>Gangguan CCTV</option>
              <option>Masalah Printer / Scanner</option>
              <option>Permintaan Instalasi</option>
              <option>Keamanan Sistem</option>
              <option>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tingkat Prioritas *</label>
            <select name="prioritas" required>
              <option value="">-- Pilih Prioritas --</option>
              <option>🔴 Kritis — Sistem tidak bisa beroperasi</option>
              <option>🟠 Tinggi — Gangguan berat operasional</option>
              <option>🟡 Sedang — Gangguan sebagian</option>
              <option>🟢 Rendah — Permintaan umum</option>
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi Masalah / Permintaan *</label>
            <textarea name="pesan" id="pesan" placeholder="Jelaskan masalah atau permintaan Anda secara detail. Sertakan lokasi, waktu kejadian, dan langkah yang sudah dicoba..." required></textarea>
          </div>
          <div style="display:flex; gap:12px; flex-wrap:wrap;">
            <button type="submit" class="btn-primary" style="flex:1; justify-content:center; padding:14px; border-radius:10px;">
              📤 Kirim Laporan
            </button>
            <button type="reset" style="padding:14px 24px; border-radius:10px; border:2px solid var(--gray-mid); background:white; font-family:inherit; font-size:0.9rem; font-weight:600; cursor:pointer; color:var(--gray-text); transition:all 0.2s;" onmouseover="this.style.borderColor='var(--navy)'" onmouseout="this.style.borderColor='var(--gray-mid)'">
              🔄 Reset
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header fade-in">
      <div class="section-badge">Pertanyaan Umum</div>
      <h2 class="section-title">FAQ <span>Helpdesk</span></h2>
    </div>
    <div style="max-width:800px; margin:0 auto; display:flex; flex-direction:column; gap:16px;" class="fade-in">
      <?php
        $faqs = [
          ['Berapa lama waktu respons helpdesk?', 'Prioritas Kritis: maks. 1 jam. Prioritas Tinggi: maks. 4 jam. Prioritas Sedang: maks. 1 hari kerja. Prioritas Rendah: maks. 3 hari kerja.'],
          ['Bagaimana cara melaporkan gangguan darurat di luar jam kerja?', 'Untuk gangguan kritis di luar jam kerja, hubungi hotline darurat kami di 0800-123-4567 yang aktif 24 jam atau hubungi petugas jaga melalui radio internal bandara.'],
          ['Apakah ada portal self-service untuk reset password?', 'Ya, staf dapat menggunakan Portal Pegawai di menu atas untuk melakukan reset password mandiri. Jika akses portal bermasalah, hubungi helpdesk melalui formulir ini.'],
          ['Dokumen apa yang perlu disiapkan untuk permintaan pengadaan perangkat baru?', 'Permintaan pengadaan memerlukan: formulir permintaan resmi dari unit terkait, persetujuan kepala divisi, dan justifikasi kebutuhan. Hubungi tim kami untuk panduan lebih lanjut.'],
        ];
        foreach($faqs as $i => $faq):
      ?>
      <div style="background:white; border-radius:var(--radius); border:1px solid var(--gray-mid); overflow:hidden;">
        <button onclick="toggleFAQ(<?= $i ?>)" style="width:100%;text-align:left;padding:18px 24px;border:none;background:none;font-family:inherit;font-size:0.92rem;font-weight:700;color:var(--navy);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:16px;">
          <span><?= $faq[0] ?></span>
          <span id="faq-icon-<?= $i ?>" style="font-size:1.2rem;flex-shrink:0;transition:transform 0.3s;">+</span>
        </button>
        <div id="faq-<?= $i ?>" style="display:none; padding:0 24px 18px; font-size:0.875rem; color:var(--gray-text); line-height:1.7;">
          <?= $faq[1] ?>
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
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Manajemen Jaringan</a></li>
          <li><a href="#">Dukungan Hardware</a></li>
          <li><a href="#">Keamanan Sistem</a></li>
          <li><a href="#">Server & Data Center</a></li>
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
function toggleFAQ(id) {
  const el = document.getElementById('faq-' + id);
  const icon = document.getElementById('faq-icon-' + id);
  const isOpen = el.style.display === 'block';
  el.style.display = isOpen ? 'none' : 'block';
  icon.textContent = isOpen ? '+' : '−';
  icon.style.transform = isOpen ? 'rotate(0)' : 'rotate(45deg)';
}

function validateForm() {
  const nama = document.getElementById('nama').value.trim();
  const pesan = document.getElementById('pesan').value.trim();
  if (!nama || !pesan) {
    alert('Harap lengkapi semua field yang wajib diisi (*)');
    return false;
  }
  return true;
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>
</body>
</html>
