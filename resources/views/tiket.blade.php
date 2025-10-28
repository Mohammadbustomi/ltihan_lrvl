<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #2e5339, #4f7942);
            background-image: url('https://i.ibb.co/SdqYpY2/jungle-bg.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-blend-mode: overlay;
            text-align: center;
            padding: 80px 20px;
            color: #e8f5e9;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            width: 350px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.4);
            padding: 25px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        h2 {
            color: #c8ff9b;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
        }

        .harga {
            color: #b4ff7b;
            font-weight: bold;
            font-size: 1.2em;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #2e7d32;
            color: #e8f5e9;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(0,0,0,0.3);
            transition: 0.3s;
        }

        a:hover {
            background-color: #4caf50;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }

        .emoji {
            font-size: 40px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }

        p {
            color: #f0ffe1;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="emoji">🌲</div>
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <span class="harga">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>
        <a href="/">⟵ Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
