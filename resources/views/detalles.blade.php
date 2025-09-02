<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle del Vehículo</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #0d0d0d; /* Fondo oscuro */
      color: #e0e0e0;
      display: flex;
      justify-content: center;
      padding: 40px;
    }
    .container {
      max-width: 900px;
      background: #141414;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
      overflow: hidden;
      border: 1px solid #222;
    }
    .product-image img {
      width: 100%;
      display: block;
      border-bottom: 1px solid #222;
    }
    .content {
      padding: 25px;
    }
    .title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #fff;
    }
    .price {
      font-size: 24px;
      font-weight: bold;
      color: #00ff99; /* Verde fluorescente estilo gamer */
      margin-bottom: 25px;
    }
    .details {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      margin-bottom: 30px;
    }
    .details div {
      background: linear-gradient(145deg, #1c1c1c, #0f0f0f);
      border: 1px solid #222;
      border-radius: 10px;
      padding: 12px 18px;
      font-size: 15px;
      color: #bbb;
      transition: all 0.3s ease;
    }
    .details div:hover {
      background: #1e1e1e;
      transform: translateY(-3px);
      color: #fff;
    }
    .details b {
      color: #fff;
    }
    .description {
      font-size: 16px;
      color: #ccc;
      line-height: 1.6;
      margin-bottom: 25px;
    }
    .cta {
      display: inline-block;
      background: linear-gradient(90deg, #00ff99, #00ccff);
      color: #000;
      font-weight: bold;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 30px;
      transition: 0.3s;
    }
    .cta:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Imagen del vehículo -->
    <div class="product-image">
      <img src="https://d3bmp4azzreq60.cloudfront.net/fit-in/2000x2000/vendetunave/images/vehiculos/67b51d01511fd.webp" alt="Yamaha DT">
    </div>

    <!-- Información -->
    <div class="content">
      <h1 class="title">Yamaha DT 125</h1>
      <p class="price">$ 9.800.000 COP</p>

      <div class="details">
        <div><b>Año:</b> 2008</div>
        <div><b>Kilometraje:</b> 25,000 km</div>
        <div><b>Combustible:</b> Gasolina</div>
        <div><b>Cilindraje:</b> 125 cc</div>
        <div><b>Transmisión:</b> Mecánica</div>
        <div><b>Color:</b> Azul / Negro</div>
      </div>

      <p class="description">
        Motocicleta Yamaha DT 125 en excelente estado, lista para carretera y ciudad. 
        Cuenta con revisiones al día, motor en perfecto funcionamiento y llantas nuevas. 
        Ideal para quienes buscan potencia, durabilidad y un diseño clásico.
      </p>

      <a href="#" class="cta">Contactar Vendedor</a>
    </div>
  </div>
</body>
</html>
