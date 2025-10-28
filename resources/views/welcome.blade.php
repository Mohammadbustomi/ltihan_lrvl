<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #355e3b, #6b8e23);
            text-align: center;
            padding: 80px 20px;
            color: #f0f5e1;
            background-image: url('https://i.ibb.co/SdqYpY2/jungle-bg.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-blend-mode: overlay;
        }

        h1 {
            font-size: 2rem;
            color: #c2f970;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }

        p {
            color: #e4f3ce;
            margin-bottom: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            width: 300px;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            padding: 20px;
            transition: 0.3s;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }

        h3 {
            color: #dfffa0;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            background-color: #3a5f0b;
            color: #f5ffe6;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 10px;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0,0,0,0.3);
        }

        a:hover {
            background-color: #558b2f;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
        }

        footer {
            font-size: 12px;
            color: #e4f3ce;
            margin-top: 60px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <h1>🌿 Selamat Datang di Sistem Tiket Wisata 🌲</h1>
    <p>Pilih tempat wisata favoritmu di bawah ini!</p>

    <div class="card">
        <h3>🏖️ Pantai Papuma</h3>
        <a href="/tiket/Papuma/20000">Lihat Tiket (Rp 20.000)</a>
    </div>

    <div class="card">
        <h3>🌊 Watu Ulo</h3>
        <a href="/tiket/WatuUlo/15000">Lihat Tiket (Rp 15.000)</a>
    </div>

    <div class="card">
        <h3>🏞️ Puncak B29</h3>
        <a href="/tiket/PuncakB29/10000">Lihat Tiket (Rp 10.000)</a>
    </div>

    <footer>© 2025 Tiket Wisata  — Dibuat dengan 🌿 dan Laravel</footer>
</body>
</html>
