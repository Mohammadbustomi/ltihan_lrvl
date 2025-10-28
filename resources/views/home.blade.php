<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang di Sistem Tiket Wisata</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: #f0ffe6;
      text-align: center;
      overflow: hidden;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: radial-gradient(circle at 50% 30%, #1b3b1a, #0c1f0d);
      background-image: url('https://i.ibb.co/SdqYpY2/jungle-bg.jpg');
      background-size: cover;
      background-attachment: fixed;
      background-blend-mode: overlay;
    }

    canvas {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
      color: #d4ff8e;
      text-shadow: 0 0 10px #355e3b, 0 0 20px #6b8e23;
    }

    p {
      margin-bottom: 20px;
      font-size: 1.2em;
      color: #e8f5e9;
      text-shadow: 0 0 5px rgba(0,0,0,0.4);
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin: 10px 0;
    }

    a {
      color: #e8f5e9;
      background: rgba(46, 125, 50, 0.3);
      padding: 10px 20px;
      border-radius: 12px;
      text-decoration: none;
      transition: 0.3s;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(200, 255, 155, 0.3);
    }

    a:hover {
      background: linear-gradient(135deg, #3a5f0b, #4caf50);
      color: #f0ffe1;
      box-shadow: 0 0 15px #81c784, 0 0 25px #66bb6a;
    }
  </style>
</head>
<body>
  <canvas id="fireflies"></canvas>

  <h1>🌿 Selamat Datang di Sistem Tiket Wisata 🌲</h1>
  <p>Pilih destinasi favoritmu dan rasakan kesejukan alam!</p>
  <ul>
    <li><a href="/tiket/Papuma/20000">🏖️ Tiket Papuma (Rp 20.000)</a></li>
    <li><a href="/tiket/WatuUlo/15000">🌊 Tiket Watu Ulo (Rp 15.000)</a></li>
    <li><a href="/tiket/PancerPuger/10000">🏞️ Tiket Pancer Puger (Rp 10.000)</a></li>
  </ul>

  <script>
    const canvas = document.getElementById('fireflies');
    const ctx = canvas.getContext('2d');
    let fireflies = [];

    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
      fireflies = [];
      for (let i = 0; i < 60; i++) {
        fireflies.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height,
          radius: Math.random() * 2,
          alpha: Math.random(),
          speedX: (Math.random() - 0.5) * 0.6,
          speedY: (Math.random() - 0.5) * 0.6,
          pulse: Math.random() * 0.03
        });
      }
    }

    function drawFireflies() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (let f of fireflies) {
        ctx.beginPath();
        ctx.arc(f.x, f.y, f.radius, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(173, 255, 47, ${f.alpha})`;
        ctx.shadowBlur = 10;
        ctx.shadowColor = "#adff2f";
        ctx.fill();

        f.x += f.speedX;
        f.y += f.speedY;
        f.alpha += f.pulse;
        if (f.alpha <= 0.2 || f.alpha >= 1) f.pulse = -f.pulse;

        if (f.x < 0) f.x = canvas.width;
        if (f.x > canvas.width) f.x = 0;
        if (f.y < 0) f.y = canvas.height;
        if (f.y > canvas.height) f.y = 0;
      }
      requestAnimationFrame(drawFireflies);
    }

    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();
    drawFireflies();
  </script>
</body>
</html>

