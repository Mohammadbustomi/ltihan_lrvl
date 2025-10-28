<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Produk</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(180deg, #fff8f0 0%, #ffe4ec 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px 35px;
      border-radius: 25px;
      box-shadow: 0 6px 20px rgba(255, 182, 193, 0.3);
      width: 350px;
      text-align: center;
      border: 2px dashed #ffc5d0;
    }

    h2 {
      color: #ff7ca3;
      margin-bottom: 25px;
      font-weight: 700;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
      color: #555;
      font-size: 14px;
      font-weight: 500;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 2px solid #ffd6e0;
      border-radius: 12px;
      font-size: 14px;
      background-color: #fffafc;
      transition: 0.3s;
    }

    input:focus, select:focus {
      border-color: #ff9fcf;
      outline: none;
      box-shadow: 0 0 5px rgba(255, 143, 179, 0.3);
      background-color: #fff0f6;
    }

    button {
      background-color: #ffb6c1;
      color: white;
      border: none;
      padding: 10px 25px;
      border-radius: 25px;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #ff85a2;
      transform: scale(1.05);
    }

    .emoji {
      font-size: 45px;
      margin-bottom: 10px;
    }

    .note {
      color: #ff7ca3;
      font-size: 13px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="emoji">🍰</div>
    <h2>Edit Data Produk Makanan</h2>
    <form onsubmit="return updateProduk()">
      <label>Nama Produk:</label>
      <input type="text" id="nama" value="Kue Stroberi Lembut 🍓">

      <label>Harga Produk:</label>
      <input type="number" id="harga" value="25000">

      <label>Kategori:</label>
      <select id="kategori">
        <option value="Makanan" selected>Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Snack">Snack</option>
      </select>

      <button type="submit">✨ Perbarui Data ✨</button>
    </form>
    <p class="note">Terima kasih sudah menjaga kualitas rasa 💕</p>
  </div>

  <script>
    function updateProduk() {
      const nama = document.getElementById("nama").value;
      const harga = document.getElementById("harga").value;
      const kategori = document.getElementById("kategori").value;

      alert("Produk berhasil diperbarui!\n\n🍩 Nama: " + nama + 
            "\n💰 Harga: Rp" + parseInt(harga).toLocaleString() + 
            "\n📦 Kategori: " + kategori);
      return false;
    }
  </script>
</body>
</html>
