<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tumbao 2T</title>
  <meta name="description" content="Landing page de e‑commerce para motos DT: modelos, accesorios y financiación. HTML + CSS puro, sin funcionalidades." />
  <link rel="preconnect" href="https://images.unsplash.com" />
  <style>
    :root{
      --bg: #0b0c10;
      --card: #111218;
      --muted: #a7b1c2;
      --text: #eaf0ff;
      --brand: #21d07a;
      --brand-2: #00b3ff;
      --warning: #ffd166;
      --danger: #ef476f;
      --ring: 0 0 0 4px color-mix(in oklab, var(--brand) 25%, transparent);
      --radius: 16px;
      --shadow: 0 10px 30px rgba(0,0,0,.35);
      --shadow-soft: 0 8px 20px rgba(0,0,0,.25);
      --maxw: 1200px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;background:linear-gradient(180deg,#090a0f, #0e1118 40%, #0b0c10);color:var(--text);font-family:system-ui, -apple-system, Segoe UI, Roboto, Inter, Ubuntu, Cantarell, Noto Sans, sans-serif;line-height:1.45}
    img{max-width:100%;display:block}
    a{color:inherit;text-decoration:none}
    .container{max-width:var(--maxw);margin-inline:auto;padding: clamp(16px, 3vw, 28px)}
    .pill{display:inline-flex;align-items:center;gap:.5rem;background:color-mix(in oklab, var(--brand) 10%, #121521);border:1px solid color-mix(in oklab, var(--brand) 25%, #1b1f2a);padding:.4rem .75rem;border-radius:999px;color:color-mix(in oklab, var(--text) 80%, white)}
    .btn{display:inline-flex;align-items:center;justify-content:center;gap:.6rem;padding:.9rem 1.1rem;border-radius:12px;border:1px solid #222531;background:linear-gradient(180deg, #151826, #121421);color:var(--text);box-shadow:var(--shadow-soft);transition:transform .15s ease, box-shadow .2s ease, border-color .2s ease}
    .btn:hover{transform:translateY(-2px);border-color:color-mix(in oklab, var(--brand) 35%, #222531);box-shadow:0 14px 30px rgba(0,0,0,.35)}
    .btn.brand{background:linear-gradient(180deg, color-mix(in oklab, var(--brand) 35%, #0f1422), #0d121f);border-color:color-mix(in oklab, var(--brand) 55%, #1a2133)}
    .btn.ghost{background:transparent;border-color:#2a2f41}
    .badge{font-size:.75rem;padding:.25rem .6rem;border:1px solid #2b3043;border-radius:999px;opacity:.9}

    /* Header */
    header{position:sticky;top:0;backdrop-filter:blur(10px);background:color-mix(in oklab, #0b0c10 70%, transparent);border-bottom:1px solid #151826;z-index:50}
    .nav{display:flex;align-items:center;justify-content:space-between;gap:1rem}
    .logo{display:flex;align-items:center;gap:.6rem;font-weight:700;letter-spacing:.4px}
    .logo-mark{width:28px;height:28px;border-radius:8px;background:conic-gradient(from 140deg, var(--brand), var(--brand-2));box-shadow:0 0 40px color-mix(in oklab, var(--brand) 60%, transparent)}
    nav a{opacity:.85}
    nav a:hover{opacity:1}
    .nav-links{display:flex;gap:1rem;align-items:center}

    /* Hero */
    .hero{position:relative;overflow:clip}
    .hero-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:clamp(20px, 4vw, 40px);align-items:center}
    .hero h1{font-size:clamp(2rem, 4vw, 3.2rem);line-height:1.1;margin:0 0 .6rem}
    .hero p{color:var(--muted);font-size:clamp(1rem, 2.2vw, 1.1rem)}
    .hero-card{background:radial-gradient(1200px 600px at 0% 0%, rgba(33,208,122,.15), transparent 45%), radial-gradient(800px 400px at 100% 100%, rgba(0,179,255,.12), transparent 35%), #0d0f15;border:1px solid #1a1f2d;border-radius:var(--radius);padding:clamp(18px,3vw,30px);box-shadow:var(--shadow)}
    .hero-actions{display:flex;flex-wrap:wrap;gap:.8rem;margin-top:1rem}
    .trust{display:flex;gap:1.2rem;align-items:center;margin-top:1rem}
    .trust .logo-mini{width:26px;height:26px;border-radius:6px;background:linear-gradient(135deg, #3d445b, #1c2032);border:1px solid #2a2f46;display:inline-block}
    .hero-media{position:relative}
    .mock{border-radius:18px;border:1px solid #1b1f2c;overflow:hidden;box-shadow:0 30px 60px rgba(0,0,0,.45)}
    .mock img{aspect-ratio:16/10;object-fit:cover}
    .price-tag{position:absolute;right:10px;bottom:10px;background:rgba(8,10,16,.7);backdrop-filter:blur(6px);border:1px solid #223; padding:.5rem .7rem;border-radius:12px}

    /* Highlights */
    .highlights{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,2vw,18px);margin-top:clamp(18px,2vw,26px)}
    .hl{background:linear-gradient(180deg,#111420,#0e121b);border:1px solid #1a2031;border-radius:14px;padding:16px;display:grid;grid-template-columns:auto 1fr;gap:.8rem;align-items:flex-start}
    .hl .icon{width:36px;height:36px;border-radius:10px;display:grid;place-items:center;background:linear-gradient(135deg, #182036, #121728);border:1px solid #262d45}
    .hl strong{display:block;margin-bottom:.25rem}

    /* Section titles */
    .section{padding: clamp(30px, 6vw, 72px) 0}
    .section h2{font-size:clamp(1.6rem, 3.2vw, 2.2rem);margin:0 0 .4rem}
    .section p.lead{color:var(--muted);max-width:60ch}

    /* Products */
    .grid{display:grid;grid-template-columns:repeat(4,1fr);gap:clamp(14px,2.2vw,22px)}
    .card{background:linear-gradient(180deg,#10131d,#0d1018);border:1px solid #1a1f2b;border-radius:16px;overflow:hidden;box-shadow:var(--shadow-soft);display:flex;flex-direction:column}
    .card .thumb{position:relative}
    .card .thumb img{aspect-ratio:4/3;object-fit:cover}
    .card .thumb .tag{position:absolute;left:10px;top:10px}
    .card .body{padding:14px}
    .card h3{font-size:1.05rem;margin:.2rem 0}
    .meta{display:flex;gap:.6rem;align-items:center;color:var(--muted);font-size:.9rem}
    .price{margin-left:auto;font-weight:700;color:var(--text)}
    .actions{display:flex;gap:.6rem;margin-top:.8rem}

    /* Banner */
    .banner{border-radius:18px;border:1px solid #1a1f2b;background:linear-gradient(120deg, rgba(0,179,255,.12), rgba(33,208,122,.12));padding:clamp(18px,3vw,28px);display:grid;grid-template-columns:1.5fr .5fr;align-items:center}

    /* Testimonials */
    .testimonials{display:grid;grid-template-columns:repeat(3,1fr);gap:clamp(14px,2vw,18px)}
    .quote{background:linear-gradient(180deg,#0f1220,#0c0f17);border:1px solid #1a1f2c;border-radius:16px;padding:18px}
    .quote footer{display:flex;align-items:center;gap:.7rem;margin-top:1rem;color:var(--muted)}
    .avatar{width:36px;height:36px;border-radius:50%;background:#1b2236;border:1px solid #29314b}

    /* Footer */
    footer{border-top:1px solid #151826;background:#0a0c12}
    .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:clamp(16px,3vw,28px)}
    .footer-grid ul{list-style:none;margin:0;padding:0;display:grid;gap:.35rem}
    .footer-grid a{color:var(--muted)}
    .copyright{color:#8c95a8;font-size:.9rem;border-top:1px solid #131624;margin-top:1.2rem;padding-top:1rem}

    /* Responsive */
    @media (max-width: 1024px){
      .hero-grid{grid-template-columns:1fr}
      .grid{grid-template-columns:repeat(2,1fr)}
      .banner{grid-template-columns:1fr}
      .footer-grid{grid-template-columns:1.2fr 1fr 1fr}
    }
    @media (max-width: 640px){
      .highlights{grid-template-columns:1fr}
      .grid{grid-template-columns:1fr}
      .testimonials{grid-template-columns:1fr}
      .footer-grid{grid-template-columns:1fr 1fr}
      .nav-links{display:none}
    }
    /* Focus styles */
    :where(a,button,.btn){outline:none}
    :where(a,button,.btn):focus-visible{box-shadow:var(--ring)}
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="container nav">
      <a class="logo" href="#top" aria-label="DT Motos">
        <span class="logo-mark"></span>
        <span>DT<span style="color:var(--brand)">Motos</span></span>
      </a>
      <nav class="nav-links" aria-label="Principal">
        <a href="#modelos">Modelos</a>
        <a href="#accesorios">Accesorios</a>
        <a href="#financiacion">Financiación</a>
        <a href="#opiniones">Opiniones</a>
      </nav>
      <div class="nav-cta">
        <a class="btn ghost" href="#catalogo" aria-label="Ver catálogo">Catálogo</a>
      </div>
    </div>
  </header>

  <!-- Hero -->
  <section class="section hero" id="top" aria-labelledby="title-hero">
    <div class="container hero-grid">
      <div class="hero-card">
        <span class="pill">🚀 Entrega inmediata • Garantía 12 meses</span>
        <h1 id="title-hero">DT que te mueve: potencia, estilo y libertad</h1>
        <p>Descubre la nueva generación DT. Diseñadas para ciudad y aventura, con consumo optimizado y repuestos disponibles. Pide cotización y estrena hoy.</p>
        <div class="hero-actions">
          <a class="btn brand" href="#catalogo">Explorar modelos</a>
          <a class="btn" href="#financiacion">Simular financiación</a>
        </div>
        <div class="highlights" role="list">
          <div class="hl" role="listitem">
            <div class="icon" aria-hidden="true">🏁</div>
            <div>
              <strong>2T legendaria</strong>
              <span class="muted">Respuesta instantánea y peso ligero.</span>
            </div>
          </div>
          <div class="hl" role="listitem">
            <div class="icon" aria-hidden="true">🛡️</div>
            <div>
              <strong>Garantía oficial</strong>
              <span class="muted">Cobertura y red de talleres autorizados.</span>
            </div>
          </div>
          <div class="hl" role="listitem">
            <div class="icon" aria-hidden="true">💸</div>
            <div>
              <strong>Crédito flexible</strong>
              <span class="muted">Cuotas a tu medida y aprobación rápida.</span>
            </div>
          </div>
        </div>
        <div class="trust" aria-label="Marcas y medios que confían">
          <span class="logo-mini" title="MotorPress"></span>
          <span class="logo-mini" title="Riders Co."></span>
          <span class="logo-mini" title="SpeedLab"></span>
          <span class="badge">+10k clientes</span>
        </div>
      </div>
      <div class="hero-media">
        <div class="mock">
          <img alt="Moto DT negra sobre fondo urbano" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIYOAnO4anSP9g-9GPoPRVvZISWUiy7Qfbzg&s"/>
        </div>
        <div class="price-tag">Desde <strong>$8.990.000</strong> COP</div>
      </div>
    </div>
  </section>

  <!-- Productos destacados -->
  <section class="section" id="catalogo" aria-labelledby="title-catalogo">
    <div class="container">
      <h2 id="title-catalogo">Modelos destacados</h2>
      <p class="lead">Explora nuestra línea DT: agilidad urbana, carácter off‑road y ediciones limitadas. Precios referenciales e imágenes ilustrativas.</p>
      <div class="grid" id="modelos">
        <!-- Card 1 -->
        <article class="card">
          <div class="thumb">
            <span class="badge tag">Nuevo 2025</span>
            <img src="https://d3bmp4azzreq60.cloudfront.net/fit-in/2000x2000/vendetunave/images/vehiculos/67b51d01511fd.webp" alt="DT Urban 125 sobre fondo nocturno"/>
          </div>
          <div class="body">
            <h3>DT Urban 125</h3>
            <div class="meta">
              <span>125 cc</span>
              <span>•</span>
              <span>2T</span>
              <span class="price">$7.490.000</span>
            </div>
            <div class="actions">
              <a class="btn brand" href="#">Ver detalles</a>
              <a class="btn ghost" href="#">Añadir a lista</a>
            </div>
          </div>
        </article>
        <!-- Card 2 -->
        <article class="card">
          <div class="thumb">
            <span class="badge tag">Top ventas</span>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaQxx2TtKAT-f87-1QSkLJj0h1yMvOTvjVWA&s" alt="DT Trail 175 en ruta de tierra"/>
          </div>
          <div class="body">
            <h3>DT Trail 175</h3>
            <div class="meta">
              <span>175 cc</span>
              <span>•</span>
              <span>Mixta</span>
              <span class="price">$9.990.000</span>
            </div>
            <div class="actions">
              <a class="btn brand" href="#">Ver detalles</a>
              <a class="btn ghost" href="#">Añadir a lista</a>
            </div>
          </div>
        </article>
        <!-- Card 3 -->
        <article class="card">
          <div class="thumb">
            <span class="badge tag" style="border-color:#2b3348">Edición limitada</span>
            <img src="https://i0.wp.com/mundomotor.bike/wp-content/uploads/2024/09/Diseno-sin-titulo-_7_.webp?resize=1000%2C600&ssl=1" alt="DT Rally 200 edición limitada"/>
          </div>
          <div class="body">
            <h3>DT Rally 200</h3>
            <div class="meta">
              <span>200 cc</span>
              <span>•</span>
              <span>ABS</span>
              <span class="price">$12.490.000</span>
            </div>
            <div class="actions">
              <a class="btn brand" href="#">Ver detalles</a>
              <a class="btn ghost" href="#">Añadir a lista</a>
            </div>
          </div>
        </article>
        <!-- Card 4 -->
        <article class="card">
          <div class="thumb">
            <span class="badge tag" style="border-color:#2b3348">Ahorra 10%</span>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWzrK7GuP9xx3K5mD_TQGIsFOXCZCGrWip5g&s" alt="DT Street 150 color azul"/>
          </div>
          <div class="body">
            <h3>DT Street 150</h3>
            <div class="meta">
              <span>150 cc</span>
              <span>•</span>
              <span>Inyección</span>
              <span class="price">$8.790.000</span>
            </div>
            <div class="actions">
              <a class="btn brand" href="#">Ver detalles</a>
              <a class="btn ghost" href="#">Añadir a lista</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Accesorios / Banner -->
  <section class="section" id="accesorios">
    <div class="container">
      <div class="banner">
        <div>
          <h2>Protege tu DT y súmale estilo</h2>
          <p class="lead">Cascos, sliders, maleteros y escapes homologados. Combos con instalación incluida.</p>
          <div class="hero-actions">
            <a class="btn brand" href="#">Ver accesorios</a>
            <a class="btn" href="#">Combos recomendados</a>
          </div>
        </div>
        <div>
          <img src="https://d3bmp4azzreq60.cloudfront.net/fit-in/2000x2000/vendetunave/images/vehiculos/67ccd0fe84d36.webp" alt="Accesorios para moto: casco y guantes" style="border-radius:14px;border:1px solid #1a1f2b;box-shadow:var(--shadow)"/>
        </div>
      </div>
    </div>
  </section>

  <!-- Financiación -->
  <section class="section" id="financiacion" aria-labelledby="title-fin">
    <div class="container">
      <h2 id="title-fin">Financiación a tu medida</h2>
      <p class="lead">Simula tu cuota estimada con enganche desde el 20% y plazos hasta 36 meses. Sin costos ocultos.</p>
      <div class="grid" style="grid-template-columns:repeat(3,1fr)">
        <article class="card" aria-label="Plan Esencial">
          <div class="body">
            <span class="badge">Esencial</span>
            <h3>Desde $399.000/mes</h3>
            <p class="muted">Ideal para tu primera DT. Aprobación en minutos*</p>
            <a class="btn brand" href="#">Quiero este plan</a>
          </div>
        </article>
        <article class="card" aria-label="Plan Plus">
          <div class="body">
            <span class="badge" style="border-color:#2b3348">Plus</span>
            <h3>Desde $489.000/mes</h3>
            <p class="muted">Mantenimiento incluido el primer año</p>
            <a class="btn brand" href="#">Quiero este plan</a>
          </div>
        </article>
        <article class="card" aria-label="Plan Pro">
          <div class="body">
            <span class="badge" style="border-color:#2b3348">Pro</span>
            <h3>Desde $589.000/mes</h3>
            <p class="muted">Seguro full + accesorios premium</p>
            <a class="btn brand" href="#">Quiero este plan</a>
          </div>
        </article>
      </div>
      <p class="muted" style="margin-top:.6rem;font-size:.85rem">*Aplican políticas de crédito. Valores referenciales.</p>
    </div>
  </section>

  <!-- Testimonios -->
  <section class="section" id="opiniones" aria-labelledby="title-op">
    <div class="container">
      <h2 id="title-op">Lo que dicen nuestros riders</h2>
      <div class="testimonials">
        <figure class="quote">
          <blockquote>La DT Trail 175 es una bestia en la ciudad. Ligera y con salida impresionante. ¡La amo!</blockquote>
          <footer>
            <span class="avatar" aria-hidden="true"></span>
            <span>Camila R. — Medellín</span>
          </footer>
        </figure>
        <figure class="quote">
          <blockquote>Excelente servicio y entrega rápida. Me asesoraron con el plan ideal.</blockquote>
          <footer>
            <span class="avatar" aria-hidden="true"></span>
            <span>Juan D. — Bogotá</span>
          </footer>
        </figure>
        <figure class="quote">
          <blockquote>Los repuestos y accesorios están a buen precio. La experiencia fue 10/10.</blockquote>
          <footer>
            <span class="avatar" aria-hidden="true"></span>
            <span>Luisa M. — Bucaramanga</span>
          </footer>
        </figure>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer aria-labelledby="title-foot">
    <div class="container">
      <h2 id="title-foot" style="position:absolute;left:-10000px">Información del sitio</h2>
      <div class="footer-grid">
        <div>
          <div class="logo" style="margin-bottom:.6rem">
            <span class="logo-mark"></span>
            <span>DT<span style="color:var(--brand)">Motos</span></span>
          </div>
          <p class="muted">Pasión por las dos tiempos. Ensamblaje certificado y servicio experto.</p>
        </div>
        <div>
          <strong>Compañía</strong>
          <ul>
            <li><a href="#">Quiénes somos</a></li>
            <li><a href="#">Prensa</a></li>
            <li><a href="#">Trabaja con nosotros</a></li>
          </ul>
        </div>
        <div>
          <strong>Soporte</strong>
          <ul>
            <li><a href="#">Centros de servicio</a></li>
            <li><a href="#">Garantías</a></li>
            <li><a href="#">Políticas</a></li>
          </ul>
        </div>
        <div>
          <strong>Contacto</strong>
          <ul>
            <li><a href="#">WhatsApp</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Facebook</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">© <span id="y">2025</span> DT Motos. Todos los derechos reservados.</div>
    </div>
  </footer>
</body>
</html>
