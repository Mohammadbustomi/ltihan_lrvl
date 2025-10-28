<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Harga Produk</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fffaf3;
      color: #444;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background: #ffffff;
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(255, 182, 193, 0.3);
      text-align: center;
      width: 360px;
      border: 2px dashed #ffcccb;
    }

    h2 {
      color: #ff8fab;
      margin-bottom: 20px;
    }

    p {
      font-size: 15px;
      margin: 8px 0;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
      color: #ff7f7f;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 2px solid #ffd6e0;
      outline: none;
      text-align: center;
      transition: 0.3s;
      background-color: #fff9fa;
    }

    input[type="number"]:focus {
      border-color: #ffb6c1;
      background-color: #fff0f6;
    }

    button {
      margin-top: 20px;
      padding: 10px 25px;
      border: none;
      border-radius: 25px;
      background-color: #ffb6c1;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #ff85a2;
      transform: scale(1.05);
    }

    b {
      color: #ff69b4;
    }

    .heart {
      font-size: 20px;
      color: #ff85a2;
      margin-top: 10px;
    }

    .emoji {
      font-size: 40px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="emoji">🍩</div>
    <h2>Form Ubah Harga Produk</h2>
    <p>Nama Produk: <b>Donat Cokelat</b></p>
    <p>Kategori: <b>Makanan Ringan</b></p>
    <p>Harga Saat Ini: <b>Rp10.000</b></p>

    <form onsubmit="return updateHarga()">
      <label>Harga Baru:</label>
      <input type="number" id="hargaBaru" value="10000" required>
      <button type="submit">✨ Perbarui Harga ✨</button>
    </form>

    <p class="heart">Terima kasih sudah memperbarui</p>
  </div>

  <script>
    function updateHarga() {
      const harga = document.getElementById('hargaBaru').value;
      alert("Harga Donat Cokelat berhasil diperbarui menjadi Rp" + parseInt(harga).toLocaleString());
      return false;
    }
  </script>
</body>
</html>
