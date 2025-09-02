<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tumbao 2T</title>
  <style>
    :root{
      --bg: #0b0c10;
      --card: #111218;
      --muted: #a7b1c2;
      --text: #eaf0ff;
      --brand: #21d07a;
      --brand-2: #00b3ff;
      --radius: 16px;
      --shadow: 0 10px 30px rgba(0,0,0,.35);
      --shadow-soft: 0 8px 20px rgba(0,0,0,.25);
    }
    body{
      margin:0;
      background:var(--bg);
      color:var(--text);
      font-family:system-ui,Segoe UI,Roboto,Inter,sans-serif;
      display:flex;
      justify-content:center;
      align-items:center;
      min-height:100vh
    }
    .cart{
      background:linear-gradient(180deg,#10131d,#0d1018);
      border:1px solid #1a1f2b;
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      width:90%;
      max-width:1200px;
      padding:20px;
      display:flex;
      flex-direction:column;
      gap:20px
    }
    .cart h2{margin:0;font-size:1.6rem}
    .items{
      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
      gap:20px
    }
    .item{
      background:linear-gradient(180deg,#111420,#0e121b);
      border:1px solid #1a2031;
      border-radius:var(--radius);
      box-shadow:var(--shadow-soft);
      padding:14px;
      display:flex;
      flex-direction:column;
      align-items:center;
      transition:.25s
    }
    .item:hover{
      transform:translateY(-5px);
      box-shadow:0 14px 30px rgba(0,0,0,.45)
    }
    .item img{
      width:100%;
      height:200px; /* 📌 Todas iguales */
      border-radius:12px;
      border:1px solid #1a1f2b;
      object-fit:cover; /* 📌 Recorta y centra */
    }
    .item h3{margin:.6rem 0 .2rem;font-size:1.05rem;text-align:center}
    .meta{color:var(--muted);font-size:.9rem;text-align:center}
    .price{margin-top:.5rem;font-weight:700;color:var(--brand)}
    .footer{
      border-top:1px solid #1a1f2b;
      padding-top:14px;
      display:flex;
      justify-content:space-between;
      align-items:center
    }
    .btn{
      background:linear-gradient(180deg, color-mix(in oklab, var(--brand) 35%, #0f1422), #0d121f);
      border:1px solid color-mix(in oklab, var(--brand) 55%, #1a2133);
      padding:.8rem 1.2rem;
      border-radius:12px;
      color:var(--text);
      font-weight:600;
      cursor:pointer;
      transition:.2s
    }
    .btn:hover{
      transform:translateY(-2px);
      box-shadow:0 14px 30px rgba(0,0,0,.35)
    }
  </style>
</head>
<body>
  <div class="cart">
    <h2>Lista de productos</h2>
    <div class="items">
      <!-- Moto 1 -->
      <div class="item">
        <img src="https://d3bmp4azzreq60.cloudfront.net/fit-in/2000x2000/vendetunave/images/vehiculos/67b51d01511fd.webp" alt="DT Urban 125">
        <h3>DT Urban 125</h3>
        <div class="meta">125 cc • 2T</div>
        <div class="price">$7.490.000</div>
      </div>
      <!-- Moto 2 -->
      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaQxx2TtKAT-f87-1QSkLJj0h1yMvOTvjVWA&s" alt="DT Trail 175">
        <h3>DT Trail 175</h3>
        <div class="meta">175 cc • Mixta</div>
        <div class="price">$9.990.000</div>
      </div>
      <!-- Moto 3 -->
      <div class="item">
        <img src="https://i0.wp.com/mundomotor.bike/wp-content/uploads/2024/09/Diseno-sin-titulo-_7_.webp?resize=1000%2C600&ssl=1" alt="DT Rally 200">
        <h3>DT Rally 200</h3>
        <div class="meta">200 cc • ABS</div>
        <div class="price">$12.490.000</div>
      </div>
      <!-- Moto 4 -->
      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqi4O-Uy650M-uMSDql0yPtcVCHt8PC4Zedg&s" alt="DT Classic 100">
        <h3>DT Classic 100</h3>
        <div class="meta">100 cc • Vintage</div>
        <div class="price">$6.990.000</div>
      </div>
      <!-- Moto 5 -->
      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKh0ZYO1nMD0q0BNB6HKAWe85e2MqxXAtfGA&s" alt="DT Sport 150">
        <h3>DT Sport 150</h3>
        <div class="meta">150 cc • Racing</div>
        <div class="price">$8.990.000</div>
      </div>
      <!-- Moto 6 -->
      <div class="item">
        <img src="https://carlosenmoto.com/wp-content/uploads/2025/02/Hero-Xtreme-250R-1024x683.jpg" alt="DT Extreme 250">
        <h3>DT Extreme 250</h3>
        <div class="meta">250 cc • Off-road</div>
        <div class="price">$14.490.000</div>
      </div>
    </div>
    <div class="footer">
      <span>Total: <strong>$60.440.000</strong></span>
      <button class="btn">Finalizar compra</button>
    </div>
  </div>
</body>
</html>
