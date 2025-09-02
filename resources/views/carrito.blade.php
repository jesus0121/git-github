<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #0d0d0d;
      color: #e0e0e0;
      display: flex;
      justify-content: center;
      padding: 40px;
    }
    .cart {
      width: 900px;
      background: #141414;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
      padding: 25px;
      border: 1px solid #222;
    }
    .cart h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #fff;
    }
    .cart-item {
      display: flex;
      align-items: center;
      background: linear-gradient(145deg, #1c1c1c, #0f0f0f);
      border: 1px solid #222;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 15px;
      transition: all 0.3s ease;
    }
    .cart-item:hover {
      background: #1e1e1e;
      transform: translateY(-3px);
    }
    .cart-item img {
      width: 120px;
      height: auto;
      border-radius: 8px;
      margin-right: 20px;
    }
    .item-info {
      flex: 1;
    }
    .item-info h2 {
      font-size: 20px;
      margin: 0 0 8px;
      color: #fff;
    }
    .item-info p {
      margin: 4px 0;
      color: #bbb;
      font-size: 15px;
    }
    .item-price {
      font-size: 18px;
      font-weight: bold;
      color: #00ff99;
      margin-left: 20px;
    }
    .summary {
      border-top: 1px solid #222;
      padding-top: 20px;
      margin-top: 20px;
      text-align: right;
    }
    .summary p {
      margin: 8px 0;
      font-size: 16px;
      color: #ccc;
    }
    .summary strong {
      color: #fff;
    }
    .checkout-btn {
      display: inline-block;
      background: linear-gradient(90deg, #00ff99, #00ccff);
      color: #000;
      font-weight: bold;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 30px;
      transition: 0.3s;
      margin-top: 15px;
    }
    .checkout-btn:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="cart">
    <h1>🛒 Tu Carrito</h1>

    <!-- Producto 1 -->
    <div class="cart-item">
      <img src="https://d3bmp4azzreq60.cloudfront.net/fit-in/2000x2000/vendetunave/images/vehiculos/67b51d01511fd.webp" alt="Yamaha DT 125">
      <div class="item-info">
        <h2>Yamaha DT 125</h2>
        <p>Cilindraje: 125cc</p>
        <p>Color: Azul / Negro</p>
      </div>
      <div class="item-price">$ 9.800.000</div>
    </div>

    <!-- Producto 2 (ejemplo adicional) -->
    <div class="cart-item">
      <img src="https://comotos.co/wp-content/uploads/2022/06/Yamaha-RX-135-1983--1024x813.jpg" alt="Yamaha RX 135">
      <div class="item-info">
        <h2>Yamaha RX 135</h2>
        <p>Cilindraje: 135cc</p>
        <p>Color: Rojo</p>
      </div>
      <div class="item-price">$ 7.200.000</div>
    </div>

    <!-- Resumen -->
    <div class="summary">
      <p>Subtotal: <strong>$ 17.000.000</strong></p>
      <p>Envío: <strong>$ 200.000</strong></p>
      <p>Total: <strong>$ 17.200.000</strong></p>
      <a href="#" class="checkout-btn">Finalizar Compra</a>
    </div>
  </div>
</body>
</html>
