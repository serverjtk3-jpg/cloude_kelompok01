<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoMBG — Pasar Limbah Makan Bergizi Gratis</title>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
  <style>
    :root {
      --green-deep: #1a3a2a;
      --green-mid: #2d6a4f;
      --green-bright: #52b788;
      --green-light: #95d5b2;
      --lime: #b7e4c7;
      --cream: #f0f4e8;
      --gold: #e9c46a;
      --terracotta: #c77a3a;
      --off-white: #fafcf7;
      --text-dark: #0f2318;
      --text-mid: #3a5a48;
      --text-light: #6b9080;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--off-white);
      color: var(--text-dark);
      overflow-x: hidden;
    }

    /* NAV */
    nav {
      position: sticky; top: 0; z-index: 100;
      background: var(--green-deep);
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 2rem;
      height: 64px;
      box-shadow: 0 2px 20px rgba(0,0,0,.3);
    }
    .nav-logo {
      font-family: 'Syne', sans-serif;
      font-weight: 800; font-size: 1.4rem;
      color: var(--green-light);
      display: flex; align-items: center; gap: .5rem;
    }
    .nav-logo span { color: var(--gold); }
    .nav-links { display: flex; gap: 1.5rem; }
    .nav-links a {
      font-size: .85rem; font-weight: 500;
      color: var(--lime); text-decoration: none;
      letter-spacing: .04em;
      transition: color .2s;
    }
    .nav-links a:hover { color: var(--gold); }
    .nav-right { display: flex; align-items: center; gap: 1rem; }
    .btn-cart {
      background: var(--green-bright); color: var(--green-deep);
      border: none; border-radius: 50px;
      padding: .45rem 1.2rem;
      font-family: 'Syne', sans-serif; font-weight: 700; font-size: .82rem;
      cursor: pointer; display: flex; align-items: center; gap: .4rem;
      transition: background .2s, transform .1s;
    }
    .btn-cart:hover { background: var(--gold); transform: scale(1.04); }

    /* HERO */
    .hero {
      background: linear-gradient(135deg, var(--green-deep) 0%, #0e2a1c 60%, #163322 100%);
      min-height: 520px;
      display: grid; grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 3rem 3rem 3rem 4rem;
      position: relative; overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(ellipse at 70% 50%, rgba(82,183,136,.15) 0%, transparent 65%);
    }
    .hero-badge {
      display: inline-flex; align-items: center; gap: .5rem;
      background: rgba(233,196,106,.15); border: 1px solid rgba(233,196,106,.4);
      color: var(--gold); border-radius: 50px;
      padding: .3rem .9rem; font-size: .75rem; font-weight: 600;
      letter-spacing: .08em; text-transform: uppercase;
      margin-bottom: 1.2rem;
    }
    .hero h1 {
      font-family: 'Syne', sans-serif;
      font-size: 3rem; font-weight: 800; line-height: 1.1;
      color: #fff; margin-bottom: 1rem;
    }
    .hero h1 em { color: var(--green-light); font-style: normal; }
    .hero p {
      color: var(--lime); font-size: 1rem; line-height: 1.7;
      max-width: 420px; margin-bottom: 2rem; font-weight: 300;
    }
    .hero-btns { display: flex; gap: 1rem; flex-wrap: wrap; }
    .btn-primary {
      background: var(--green-bright); color: var(--green-deep);
      border: none; border-radius: 50px;
      padding: .7rem 2rem;
      font-family: 'Syne', sans-serif; font-weight: 700; font-size: .9rem;
      cursor: pointer; transition: all .2s;
    }
    .btn-primary:hover { background: var(--gold); transform: translateY(-2px); box-shadow: 0 6px 20px rgba(82,183,136,.4); }
    .btn-outline {
      background: transparent; color: var(--lime);
      border: 1.5px solid rgba(149,213,178,.4);
      border-radius: 50px; padding: .7rem 1.8rem;
      font-family: 'Syne', sans-serif; font-weight: 600; font-size: .9rem;
      cursor: pointer; transition: all .2s;
    }
    .btn-outline:hover { border-color: var(--green-bright); color: var(--green-bright); }

    /* Hero visual */
    .hero-visual {
      display: flex; justify-content: center; align-items: center;
      position: relative;
    }
    .hero-card-stack {
      position: relative; width: 280px; height: 320px;
    }
    .hero-card {
      position: absolute;
      width: 220px; border-radius: 18px;
      padding: 1.2rem;
      font-size: .8rem;
    }
    .hc1 {
      background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(12px);
      top: 30px; left: 40px;
      transform: rotate(-6deg);
      color: #fff;
    }
    .hc2 {
      background: var(--green-mid); border: 1px solid rgba(149,213,178,.25);
      top: 60px; left: 10px;
      transform: rotate(2deg);
      color: var(--lime);
      box-shadow: 0 16px 40px rgba(0,0,0,.35);
    }
    .hc-label { font-size: .65rem; text-transform: uppercase; letter-spacing: .1em; opacity: .6; margin-bottom: .3rem; }
    .hc-title { font-family: 'Syne', sans-serif; font-weight: 700; font-size: .95rem; margin-bottom: .6rem; }
    .hc-price { font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1.2rem; color: var(--gold); }
    .hc-tag {
      display: inline-block; background: rgba(82,183,136,.25);
      color: var(--green-light); border-radius: 50px;
      padding: .15rem .6rem; font-size: .6rem; font-weight: 600;
      letter-spacing: .06em; text-transform: uppercase; margin-top: .4rem;
    }
    .hero-stats {
      position: absolute; bottom: 0; right: 0;
      background: var(--gold); border-radius: 14px;
      padding: .8rem 1.1rem; text-align: center;
      color: var(--green-deep);
    }
    .hero-stats-num { font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1.4rem; }
    .hero-stats-label { font-size: .65rem; font-weight: 600; letter-spacing: .06em; }

    /* STATS STRIP */
    .stats-strip {
      background: var(--cream);
      display: flex; justify-content: center; gap: 0;
      border-bottom: 1px solid #d4e6d0;
    }
    .stat-item {
      padding: 1.2rem 2.5rem;
      border-right: 1px solid #d4e6d0;
      text-align: center;
    }
    .stat-item:last-child { border-right: none; }
    .stat-num {
      font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1.5rem;
      color: var(--green-mid);
    }
    .stat-desc { font-size: .75rem; color: var(--text-light); margin-top: .15rem; }

    /* MAIN LAYOUT */
    .main { display: grid; grid-template-columns: 240px 1fr; gap: 0; min-height: calc(100vh - 64px); }

    /* SIDEBAR */
    .sidebar {
      background: #fff; border-right: 1px solid #e2ede8;
      padding: 1.5rem 1.2rem;
      position: sticky; top: 64px; height: calc(100vh - 64px);
      overflow-y: auto;
    }
    .sidebar-section { margin-bottom: 1.8rem; }
    .sidebar-title {
      font-family: 'Syne', sans-serif; font-weight: 700; font-size: .75rem;
      text-transform: uppercase; letter-spacing: .1em;
      color: var(--text-light); margin-bottom: .8rem;
    }
    .cat-item {
      display: flex; align-items: center; justify-content: space-between;
      padding: .5rem .7rem; border-radius: 8px;
      cursor: pointer; margin-bottom: .2rem;
      transition: background .15s;
      font-size: .85rem; color: var(--text-mid);
    }
    .cat-item:hover { background: var(--cream); }
    .cat-item.active {
      background: var(--green-deep); color: var(--lime);
      font-weight: 600;
    }
    .cat-count {
      font-size: .72rem; background: var(--lime);
      color: var(--green-deep); border-radius: 50px;
      padding: .1rem .5rem; font-weight: 700;
    }
    .cat-item.active .cat-count { background: var(--green-bright); }

    .price-range { margin-top: .5rem; }
    .range-row { display: flex; justify-content: space-between; font-size: .8rem; color: var(--text-light); margin-bottom: .3rem; }
    input[type=range] {
      width: 100%; accent-color: var(--green-bright); height: 4px;
    }

    .filter-tags { display: flex; flex-wrap: wrap; gap: .4rem; }
    .ftag {
      border: 1.5px solid #c8dfd0; border-radius: 50px;
      padding: .25rem .7rem; font-size: .72rem; color: var(--text-mid);
      cursor: pointer; transition: all .15s; font-weight: 500;
    }
    .ftag:hover, .ftag.active { background: var(--green-bright); color: var(--green-deep); border-color: var(--green-bright); }

    /* CONTENT */
    .content { padding: 1.5rem 2rem; }
    .content-header {
      display: flex; align-items: center; justify-content: space-between;
      margin-bottom: 1.5rem;
    }
    .content-header h2 {
      font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1.2rem;
      color: var(--text-dark);
    }
    .content-header span { font-size: .82rem; color: var(--text-light); font-weight: 400; }
    .sort-select {
      border: 1.5px solid #c8dfd0; border-radius: 8px;
      padding: .4rem .8rem; font-family: 'DM Sans', sans-serif;
      font-size: .82rem; color: var(--text-mid); background: #fff;
      cursor: pointer;
    }

    /* PROMO BANNER */
    .promo-banner {
      background: linear-gradient(90deg, var(--green-mid) 0%, var(--green-deep) 100%);
      border-radius: 14px; padding: 1rem 1.4rem;
      display: flex; align-items: center; justify-content: space-between;
      margin-bottom: 1.5rem; gap: 1rem;
    }
    .promo-text h3 {
      font-family: 'Syne', sans-serif; font-weight: 700; font-size: .95rem; color: #fff;
    }
    .promo-text p { font-size: .78rem; color: var(--lime); margin-top: .2rem; }
    .btn-promo {
      background: var(--gold); color: var(--green-deep);
      border: none; border-radius: 50px;
      padding: .4rem 1.1rem; font-family: 'Syne', sans-serif; font-weight: 700;
      font-size: .78rem; white-space: nowrap; cursor: pointer;
      flex-shrink: 0;
    }

    /* PRODUCT GRID */
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 1.2rem;
    }

    .product-card {
      background: #fff; border-radius: 16px;
      border: 1px solid #e4ede8;
      overflow: hidden; cursor: pointer;
      transition: transform .2s, box-shadow .2s;
      position: relative;
    }
    .product-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(45,106,79,.15); }

    .pc-img {
      width: 100%; height: 140px;
      display: flex; align-items: center; justify-content: center;
      font-size: 3rem;
      position: relative;
    }
    .pc-badge {
      position: absolute; top: .6rem; left: .6rem;
      background: var(--green-bright); color: var(--green-deep);
      border-radius: 50px; padding: .15rem .6rem;
      font-size: .6rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em;
    }
    .pc-badge.urgent { background: var(--terracotta); color: #fff; }
    .pc-fav {
      position: absolute; top: .6rem; right: .6rem;
      background: rgba(255,255,255,.85); border-radius: 50%;
      width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
      font-size: .8rem; border: none; cursor: pointer;
    }

    .pc-body { padding: .9rem; }
    .pc-seller { font-size: .68rem; color: var(--text-light); margin-bottom: .25rem; }
    .pc-name { font-family: 'Syne', sans-serif; font-weight: 700; font-size: .88rem; color: var(--text-dark); margin-bottom: .3rem; line-height: 1.3; }
    .pc-meta { display: flex; align-items: center; gap: .5rem; margin-bottom: .6rem; flex-wrap: wrap; }
    .pc-weight { font-size: .72rem; color: var(--text-light); }
    .pc-star { font-size: .72rem; color: var(--gold); }
    .pc-price-row { display: flex; align-items: center; justify-content: space-between; }
    .pc-price { font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1rem; color: var(--green-mid); }
    .pc-unit { font-size: .7rem; color: var(--text-light); }
    .btn-add {
      background: var(--green-bright); color: var(--green-deep);
      border: none; border-radius: 50px; width: 30px; height: 30px;
      font-size: 1.1rem; font-weight: 700; cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      transition: background .15s, transform .1s;
      flex-shrink: 0;
    }
    .btn-add:hover { background: var(--green-mid); color: #fff; transform: scale(1.12); }

    /* BG accents */
    .pc-img.green-bg { background: linear-gradient(135deg, #d8f3dc, #b7e4c7); }
    .pc-img.lime-bg { background: linear-gradient(135deg, #f0f4e8, #d8f3dc); }
    .pc-img.warm-bg { background: linear-gradient(135deg, #fef9ef, #fcedc7); }
    .pc-img.teal-bg { background: linear-gradient(135deg, #caf0e4, #95d5b2); }

    /* SECTION HEADING */
    .section-heading {
      font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1rem;
      color: var(--text-dark);
      display: flex; align-items: center; gap: .5rem;
      margin: 1.8rem 0 1rem;
    }
    .section-heading::after {
      content: ''; flex: 1; height: 1px; background: #e2ede8;
    }

    /* PAGINATION */
    .pagination {
      display: flex; justify-content: center; align-items: center;
      gap: .4rem; margin-top: 2rem; padding-bottom: 2rem;
    }
    .pg-btn {
      width: 34px; height: 34px; border-radius: 8px;
      border: 1.5px solid #d0e5d8;
      background: #fff; color: var(--text-mid);
      font-family: 'Syne', sans-serif; font-weight: 600; font-size: .82rem;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      transition: all .15s;
    }
    .pg-btn:hover { border-color: var(--green-bright); color: var(--green-bright); }
    .pg-btn.active { background: var(--green-mid); color: #fff; border-color: var(--green-mid); }

    /* FLOATING CHAT */
    .fab {
      position: fixed; bottom: 2rem; right: 2rem;
      background: var(--green-mid); color: #fff;
      width: 52px; height: 52px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.4rem; box-shadow: 0 6px 24px rgba(45,106,79,.4);
      cursor: pointer; border: none;
      transition: background .2s, transform .2s;
    }
    .fab:hover { background: var(--green-deep); transform: scale(1.1); }

    /* Responsive hint */
    @media (max-width: 820px) {
      .hero { grid-template-columns: 1fr; }
      .hero-visual { display: none; }
      .main { grid-template-columns: 1fr; }
      .sidebar { display: none; }
      nav .nav-links { display: none; }
    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-logo">🌿 Eco<span>MBG</span></div>
    <div class="nav-links">
      <a href="#">Beranda</a>
      <a href="#">Pasar Limbah</a>
      <a href="#">Program MBG</a>
      <a href="#">Mitra Dapur</a>
      <a href="#">Tentang Kami</a>
    </div>
    <div class="nav-right">
      <span style="color:var(--lime);font-size:.82rem;">Halo, Budi 👋</span>
      <button class="btn-cart">🛒 Keranjang <strong style="background:var(--green-deep);border-radius:50%;width:18px;height:18px;display:inline-flex;align-items:center;justify-content:center;font-size:.7rem;">3</strong></button>
    </div>
  </nav>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-badge">♻️ &nbsp;Program Makan Bergizi Gratis</div>
      <h1>Jual & Beli<br><em>Limbah MBG</em><br>Jadi Berkah</h1>
      <p>Platform e-commerce untuk mendistribusikan sisa bahan makanan program MBG ke tangan yang tepat — peternak, pengomposan, dan pengolah pangan.</p>
      <div class="hero-btns">
        <button class="btn-primary">Mulai Jual Limbah</button>
        <button class="btn-outline">Cari Bahan Baku →</button>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-card-stack">
        <div class="hero-card hc1">
          <div class="hc-label">Listing Terbaru</div>
          <div class="hc-title">Sisa Nasi & Sayur MBG</div>
          <div class="hc-price">Rp 800/kg</div>
          <span class="hc-tag">Pakan Ternak</span>
        </div>
        <div class="hero-card hc2">
          <div class="hc-label">⚡ Segera Habis</div>
          <div class="hc-title">Kulit & Biji Buah Mix</div>
          <div class="hc-price">Rp 500/kg</div>
          <span class="hc-tag">Kompos Organik</span>
        </div>
        <div class="hero-stats">
          <div class="hero-stats-num">12 T</div>
          <div class="hero-stats-label">Diselamatkan<br>Hari Ini</div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-strip">
    <div class="stat-item">
      <div class="stat-num">4.820</div>
      <div class="stat-desc">Dapur MBG Terdaftar</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">38,4 T</div>
      <div class="stat-desc">Limbah Tersalurkan / Bulan</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">1.260</div>
      <div class="stat-desc">Mitra Pembeli Aktif</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">Rp 2,1M</div>
      <div class="stat-desc">Total Transaksi Bulan Ini</div>
    </div>
  </div>

  <div class="main">

    <aside class="sidebar">
      <div class="sidebar-section">
        <div class="sidebar-title">Kategori Limbah</div>
        <div class="cat-item active">🥬 Sisa Sayur & Buah <span class="cat-count">184</span></div>
        <div class="cat-item">🍚 Nasi & Biji-bijian <span class="cat-count">97</span></div>
        <div class="cat-item">🍗 Sisa Protein <span class="cat-count">53</span></div>
        <div class="cat-item">🫙 Minyak Goreng Bekas <span class="cat-count">29</span></div>
        <div class="cat-item">🪵 Ampas & Serat <span class="cat-count">42</span></div>
        <div class="cat-item">💧 Air Rebusan & Kaldu <span class="cat-count">18</span></div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Rentang Harga (Rp/kg)</div>
        <div class="price-range">
          <div class="range-row"><span>Rp 0</span><span>Rp 5.000</span></div>
          <input type="range" min="0" max="5000" value="3000">
          <div style="font-size:.8rem;color:var(--green-mid);font-weight:600;margin-top:.4rem;">Maks: Rp 3.000</div>
        </div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Peruntukan</div>
        <div class="filter-tags">
          <span class="ftag active">Pakan Ternak</span>
          <span class="ftag">Kompos</span>
          <span class="ftag">Biogas</span>
          <span class="ftag">Pangan Olahan</span>
          <span class="ftag">Pupuk Cair</span>
          <span class="ftag">Riset</span>
        </div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Lokasi Dapur MBG</div>
        <div class="filter-tags">
          <span class="ftag active">Jabodetabek</span>
          <span class="ftag">Jawa Barat</span>
          <span class="ftag">Jawa Tengah</span>
          <span class="ftag">Jawa Timur</span>
          <span class="ftag">Sumatera</span>
          <span class="ftag">Kalimantan</span>
        </div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Kondisi</div>
        <div class="filter-tags">
          <span class="ftag active">Segar (&lt; 6 jam)</span>
          <span class="ftag">&lt; 12 jam</span>
          <span class="ftag">&lt; 24 jam</span>
          <span class="ftag">Kering/Preserved</span>
        </div>
      </div>
    </aside>

    <div class="content">

      <div class="promo-banner">
        <div>🌾</div>
        <div class="promo-text">
          <h3>Gratis Ongkir untuk Pembelian ≥ 50 kg</h3>
          <p>Berlaku untuk mitra peternak & unit pengomposan terdaftar. Berakhir Minggu ini.</p>
        </div>
        <button class="btn-promo">Klaim Sekarang</button>
      </div>

      <div class="content-header">
        <div>
          <h2>Sisa Sayur & Buah <span>(184 produk)</span></h2>
        </div>
        <select class="sort-select">
          <option>Terbaru</option>
          <option>Harga Terendah</option>
          <option>Terlaris</option>
          <option>Segera Kadaluarsa</option>
        </select>
      </div>

      <div class="product-grid">

        <div class="product-card">
          <div class="pc-img green-bg">
            🥦
            <span class="pc-badge">Segar</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Cilincing</div>
            <div class="pc-name">Sisa Potongan Brokoli & Kol</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 20 kg</span>
              <span class="pc-star">★ 4.8</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 600</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img warm-bg">
            🍌
            <span class="pc-badge urgent">2 jam lagi</span>
            <button class="pc-fav">❤️</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Bekasi Barat</div>
            <div class="pc-name">Kulit & Sisa Pisang Matang</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 15 kg</span>
              <span class="pc-star">★ 4.6</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 400</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img teal-bg">
            🥕
            <span class="pc-badge">Organik</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Tangerang</div>
            <div class="pc-name">Potongan Wortel & Timun</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 25 kg</span>
              <span class="pc-star">★ 4.9</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 750</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img lime-bg">
            🍅
            <span class="pc-badge">Segar</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Depok</div>
            <div class="pc-name">Sisa Tomat & Cabai Merah</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 10 kg</span>
              <span class="pc-star">★ 4.7</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 900</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img green-bg">
            🌽
            <span class="pc-badge">Bundel</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Bogor</div>
            <div class="pc-name">Kelobot & Rambut Jagung</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 50 kg</span>
              <span class="pc-star">★ 4.5</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 300</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img teal-bg">
            🥬
            <span class="pc-badge urgent">4 jam lagi</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Jakarta Utara</div>
            <div class="pc-name">Tangkai & Daun Kangkung</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 30 kg</span>
              <span class="pc-star">★ 4.4</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 350</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img warm-bg">
            🍊
            <span class="pc-badge">Segar</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Serpong</div>
            <div class="pc-name">Kulit Jeruk & Pepaya Mix</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 20 kg</span>
              <span class="pc-star">★ 4.6</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 450</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="pc-img lime-bg">
            🫘
            <span class="pc-badge">Premium</span>
            <button class="pc-fav">🤍</button>
          </div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Karawang</div>
            <div class="pc-name">Ampas & Sisa Kacang Panjang</div>
            <div class="pc-meta">
              <span class="pc-weight">📦 Min. 15 kg</span>
              <span class="pc-star">★ 4.8</span>
            </div>
            <div class="pc-price-row">
              <div>
                <div class="pc-price">Rp 550</div>
                <div class="pc-unit">per kg</div>
              </div>
              <button class="btn-add">+</button>
            </div>
          </div>
        </div>

      </div>

      <div class="section-heading">Produk Limbah Terlaris Minggu Ini</div>

      <div class="product-grid">
        <div class="product-card">
          <div class="pc-img green-bg">🍚<span class="pc-badge">Terlaris</span><button class="pc-fav">🤍</button></div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Bekasi Timur</div>
            <div class="pc-name">Nasi Sisa & Beras Aron</div>
            <div class="pc-meta"><span class="pc-weight">📦 Min. 50 kg</span><span class="pc-star">★ 4.9</span></div>
            <div class="pc-price-row"><div><div class="pc-price">Rp 700</div><div class="pc-unit">per kg</div></div><button class="btn-add">+</button></div>
          </div>
        </div>
        <div class="product-card">
          <div class="pc-img teal-bg">🫙<span class="pc-badge urgent">Hot</span><button class="pc-fav">🤍</button></div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Cibitung</div>
            <div class="pc-name">Minyak Goreng Bekas Tersaring</div>
            <div class="pc-meta"><span class="pc-weight">📦 Min. 20 L</span><span class="pc-star">★ 4.7</span></div>
            <div class="pc-price-row"><div><div class="pc-price">Rp 2.800</div><div class="pc-unit">per liter</div></div><button class="btn-add">+</button></div>
          </div>
        </div>
        <div class="product-card">
          <div class="pc-img warm-bg">🍗<span class="pc-badge">Segar</span><button class="pc-fav">🤍</button></div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Cikarang</div>
            <div class="pc-name">Tulang & Sisa Ayam Matang</div>
            <div class="pc-meta"><span class="pc-weight">📦 Min. 10 kg</span><span class="pc-star">★ 4.6</span></div>
            <div class="pc-price-row"><div><div class="pc-price">Rp 1.200</div><div class="pc-unit">per kg</div></div><button class="btn-add">+</button></div>
          </div>
        </div>
        <div class="product-card">
          <div class="pc-img lime-bg">💧<span class="pc-badge">Organik</span><button class="pc-fav">🤍</button></div>
          <div class="pc-body">
            <div class="pc-seller">🏭 Dapur MBG Ciputat</div>
            <div class="pc-name">Kaldu & Air Rebusan Sayur</div>
            <div class="pc-meta"><span class="pc-weight">📦 Min. 30 L</span><span class="pc-star">★ 4.5</span></div>
            <div class="pc-price-row"><div><div class="pc-price">Rp 250</div><div class="pc-unit">per liter</div></div><button class="btn-add">+</button></div>
          </div>
        </div>
      </div>

      <div class="pagination">
        <button class="pg-btn">‹</button>
        <button class="pg-btn active">1</button>
        <button class="pg-btn">2</button>
        <button class="pg-btn">3</button>
        <span style="color:var(--text-light);font-size:.85rem;padding:0 .3rem">…</span>
        <button class="pg-btn">12</button>
        <button class="pg-btn">›</button>
      </div>

    </div>
  </div>

  <button class="fab" title="Hubungi Kami">💬</button>

  <script>
    // Category interaction
    document.querySelectorAll('.cat-item').forEach(el => {
      el.addEventListener('click', () => {
        document.querySelectorAll('.cat-item').forEach(c => c.classList.remove('active'));
        el.classList.add('active');
      });
    });
    // Tag toggle
    document.querySelectorAll('.ftag').forEach(el => {
      el.addEventListener('click', () => el.classList.toggle('active'));
    });
    // Add to cart
    document.querySelectorAll('.btn-add').forEach(btn => {
      btn.addEventListener('click', e => {
        e.stopPropagation();
        btn.textContent = '✓';
        btn.style.background = 'var(--green-mid)';
        btn.style.color = '#fff';
        setTimeout(() => { btn.textContent = '+'; btn.style.background = ''; btn.style.color = ''; }, 1200);
      });
    });
  </script>

</body>
</html>