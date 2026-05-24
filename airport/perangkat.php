<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Perangkat — SIAT Airport Teknologi</title>
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
      <li class="nav-item"><a href="perangkat.php" class="nav-link active">Perangkat</a></li>
      <li class="nav-item"><a href="staf.php" class="nav-link">Staf & Tim</a></li>
      <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
    </ul>
    <div class="navbar-right">
      <div class="search-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" placeholder="Cari perangkat..." id="mainSearch" oninput="filterTable(this.value)"/>
      </div>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Beranda</a> <span>›</span> Perangkat
    </div>
    <h1>Inventaris Perangkat</h1>
    <p>Data lengkap seluruh perangkat teknologi informasi Bandar Udara El Tari Kupang beserta status dan lokasi penempatannya.</p>
  </div>
</div>

<!-- STAT SUMMARY -->
<div class="quick-links" style="padding:20px 0;">
  <div class="container" style="grid-template-columns:repeat(5,1fr);">
    <div class="quick-link-item">
      <div class="quick-link-icon">🗂️</div>
      <div class="quick-link-text"><div class="title">142</div><div class="desc">Total Aset</div></div>
    </div>
    <div class="quick-link-item">
      <div class="quick-link-icon">✅</div>
      <div class="quick-link-text"><div class="title">128</div><div class="desc">Aktif</div></div>
    </div>
    <div class="quick-link-item">
      <div class="quick-link-icon">🔧</div>
      <div class="quick-link-text"><div class="title">10</div><div class="desc">Maintenance</div></div>
    </div>
    <div class="quick-link-item">
      <div class="quick-link-icon">⛔</div>
      <div class="quick-link-text"><div class="title">4</div><div class="desc">Tidak Aktif</div></div>
    </div>
    <div class="quick-link-item">
      <div class="quick-link-icon">📦</div>
      <div class="quick-link-text"><div class="title">6</div><div class="desc">Kategori</div></div>
    </div>
  </div>
</div>

<!-- CATEGORY TABS -->
<section class="section">
  <div class="container">
    <!-- Tab Buttons -->
    <div style="display:flex; gap:10px; flex-wrap:wrap; margin-bottom:28px;">
      <?php
        $tabs = [
          ['id'=>'semua','label'=>'Semua Perangkat','icon'=>'🗂️'],
          ['id'=>'hardware','label'=>'Hardware','icon'=>'🖥️'],
          ['id'=>'jaringan','label'=>'Jaringan','icon'=>'🌐'],
          ['id'=>'server','label'=>'Server','icon'=>'☁️'],
          ['id'=>'cctv','label'=>'CCTV','icon'=>'📹'],
        ];
        foreach($tabs as $i => $tab):
      ?>
      <button onclick="filterCategory('<?= $tab['id'] ?>', this)"
        style="display:flex; align-items:center; gap:8px; padding:10px 20px; border-radius:30px; font-family:inherit; font-size:0.85rem; font-weight:700; border:2px solid <?= $i===0 ? 'var(--teal)' : 'var(--gray-mid)' ?>; background:<?= $i===0 ? 'var(--teal)' : 'white' ?>; color:<?= $i===0 ? 'white' : 'var(--dark-text)' ?>; cursor:pointer; transition:all 0.2s;" class="tab-btn <?= $i===0 ? 'active-tab' : '' ?>">
        <?= $tab['icon'] ?> <?= $tab['label'] ?>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Table -->
    <?php
      $devices = [
        // Hardware
        ['SIAT-PC-001','Workstation Dell OptiPlex','Hardware','Terminal Keberangkatan','Aktif','Divisi Check-in','Dell','2022'],
        ['SIAT-PC-002','Workstation HP ProDesk','Hardware','Terminal Kedatangan','Aktif','Divisi Imigrasi','HP','2021'],
        ['SIAT-PC-003','Laptop Lenovo ThinkPad','Hardware','Ruang Operasional','Aktif','Manajer Operasi','Lenovo','2023'],
        ['SIAT-PC-004','Printer Epson LX-350','Hardware','Counter Check-in','Maintenance','Divisi Tiket','Epson','2020'],
        ['SIAT-PC-005','Scanner Barcode Honeywell','Hardware','Gate A1','Aktif','Divisi Boarding','Honeywell','2022'],
        ['SIAT-PC-006','PC All-in-One Asus','Hardware','Ruang Admin','Tidak Aktif','Administrasi','Asus','2019'],
        // Jaringan
        ['SIAT-NET-001','Router Cisco ISR 4331','Jaringan','Ruang Server Utama','Aktif','Divisi TI','Cisco','2021'],
        ['SIAT-NET-002','Switch Cisco Catalyst 2960','Jaringan','Terminal Keberangkatan','Aktif','Divisi TI','Cisco','2021'],
        ['SIAT-NET-003','Access Point Ubiquiti UAP','Jaringan','Hall Utama','Aktif','Divisi TI','Ubiquiti','2022'],
        ['SIAT-NET-004','Access Point Ubiquiti UAP','Jaringan','Area Parkir','Maintenance','Divisi TI','Ubiquiti','2022'],
        ['SIAT-NET-005','Firewall Fortinet FortiGate','Jaringan','Ruang Server','Aktif','Divisi TI','Fortinet','2023'],
        // Server
        ['SIAT-SRV-001','Server HP ProLiant DL380','Server','Data Center Lt.2','Aktif','Divisi TI','HP','2021'],
        ['SIAT-SRV-002','Server Dell PowerEdge R740','Server','Data Center Lt.2','Aktif','Divisi TI','Dell','2022'],
        ['SIAT-SRV-003','NAS Synology RS3621','Server','Data Center Lt.2','Aktif','Divisi TI','Synology','2023'],
        ['SIAT-SRV-004','UPS APC Smart-UPS 3000','Server','Ruang Server','Maintenance','Divisi TI','APC','2020'],
        // CCTV
        ['SIAT-CAM-001','IP Camera Hikvision DS-2CD','CCTV','Terminal Utama','Aktif','Divisi Keamanan','Hikvision','2022'],
        ['SIAT-CAM-002','IP Camera Dahua N85BG3','CCTV','Area Parkir','Aktif','Divisi Keamanan','Dahua','2022'],
        ['SIAT-CAM-003','IP Camera Axis P3245','CCTV','Landasan Pacu','Aktif','Divisi Keamanan','Axis','2023'],
        ['SIAT-CAM-004','DVR Hikvision DS-7216','CCTV','Ruang Control','Aktif','Divisi Keamanan','Hikvision','2021'],
        ['SIAT-CAM-005','IP Camera Hikvision PTZ','CCTV','Gate Keberangkatan','Tidak Aktif','Divisi Keamanan','Hikvision','2020'],
      ];
    ?>

    <div class="table-wrapper fade-in">
      <div class="table-toolbar">
        <h3>Daftar Inventaris Perangkat <span style="color:var(--gray-text); font-weight:400">(<?= count($devices) ?> item)</span></h3>
        <div style="display:flex;gap:12px;align-items:center;flex-wrap:wrap;">
          <div class="table-search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" placeholder="Cari perangkat..." oninput="filterTable(this.value)" id="tableSearch"/>
          </div>
          <button onclick="window.print()" style="background:var(--navy);color:white;border:none;padding:8px 16px;border-radius:8px;font-family:inherit;font-size:0.82rem;cursor:pointer;font-weight:600;">🖨 Cetak</button>
        </div>
      </div>
      <div style="overflow-x:auto;">
        <table id="deviceTable">
          <thead>
            <tr>
              <th>ID Aset</th>
              <th>Nama Perangkat</th>
              <th>Kategori</th>
              <th>Lokasi</th>
              <th>Status</th>
              <th>Unit Pengguna</th>
              <th>Merek</th>
              <th>Tahun</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($devices as $d): ?>
            <tr data-category="<?= strtolower($d[2]) ?>">
              <td><strong style="color:var(--navy); font-family:monospace; font-size:0.8rem;"><?= $d[0] ?></strong></td>
              <td><?= $d[1] ?></td>
              <td>
                <span style="display:inline-flex;align-items:center;gap:4px;font-size:0.8rem;font-weight:600;color:var(--navy);">
                  <?php
                    $icons = ['Hardware'=>'🖥️','Jaringan'=>'🌐','Server'=>'☁️','CCTV'=>'📹'];
                    echo ($icons[$d[2]] ?? '📦') . ' ' . $d[2];
                  ?>
                </span>
              </td>
              <td style="font-size:0.84rem;"><?= $d[3] ?></td>
              <td>
                <?php
                  $cls = ['Aktif'=>'badge-active','Maintenance'=>'badge-maintenance','Tidak Aktif'=>'badge-inactive'];
                  echo '<span class="badge ' . ($cls[$d[4]] ?? '') . '">' . $d[4] . '</span>';
                ?>
              </td>
              <td style="font-size:0.84rem;"><?= $d[5] ?></td>
              <td style="font-size:0.84rem;"><?= $d[6] ?></td>
              <td style="font-size:0.84rem;"><?= $d[7] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
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
        <h4>Kategori Perangkat</h4>
        <ul>
          <li><a href="#hardware">🖥️ Hardware</a></li>
          <li><a href="#jaringan">🌐 Jaringan</a></li>
          <li><a href="#server">☁️ Server</a></li>
          <li><a href="#cctv">📹 CCTV</a></li>
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
function filterTable(query) {
  const rows = document.querySelectorAll('#deviceTable tbody tr');
  query = query.toLowerCase();
  rows.forEach(r => {
    r.style.display = r.textContent.toLowerCase().includes(query) ? '' : 'none';
  });
}

function filterCategory(cat, btn) {
  document.querySelectorAll('.tab-btn').forEach(b => {
    b.style.background = 'white';
    b.style.color = 'var(--dark-text)';
    b.style.borderColor = 'var(--gray-mid)';
  });
  btn.style.background = 'var(--teal)';
  btn.style.color = 'white';
  btn.style.borderColor = 'var(--teal)';

  const rows = document.querySelectorAll('#deviceTable tbody tr');
  rows.forEach(r => {
    if (cat === 'semua' || r.dataset.category === cat) {
      r.style.display = '';
    } else {
      r.style.display = 'none';
    }
  });
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>
</body>
</html>
