<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan E-Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .success-message {
            color: #4CAF50;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pemesanan E-Ticket</h1>
        
        <div id="step1" class="step active">
            <h2>1. Data Tiket</h2>
            <label for="jumlah_tiket">Jumlah Pesanan Tiket:</label>
            <input type="number" id="jumlah_tiket" required>
            
            <label for="total_harga">Total Harga:</label>
            <input type="number" id="total_harga" required>
            
            <label for="tanggal_nota">Tanggal Nota:</label>
            <input type="date" id="tanggal_nota" required>
            
            <label for="pembayaran">Pembayaran:</label>
            <input type="text" id="pembayaran" required>
            
            <button onclick="nextStep(2)">Next</button>
        </div>
        
        <div id="step2" class="step">
            <h2>2. Data Pribadi</h2>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" required>
            
            <label for="nik">NIK:</label>
            <input type="text" id="nik" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" required>
            
            <label for="klub">Klub:</label>
            <input type="text" id="klub" required>
            
            <label for="tanggal_waktu">Tanggal & Waktu:</label>
            <input type="datetime-local" id="tanggal_waktu" required>
            
            <button onclick="nextStep(3)">Next</button>
        </div>
        
        <div id="step3" class="step">
            <h2>3. Pilih Kategori</h2>
            <label for="tribun">Pilih Tribun:</label>
            <select id="tribun" required>
                <option value="">Pilih Tribun</option>
                <option value="utara">Tribun Utara</option>
                <option value="selatan">Tribun Selatan</option>
                <option value="timur">Tribun Timur</option>
                <option value="barat">Tribun Barat</option>
            </select>
            
            <button onclick="nextStep(4)">Next</button>
        </div>
        
        <div id="step4" class="step">
            <h2>4. Konfirmasi Pesanan</h2>
            <label for="tanggal_pesanan">Tanggal Pesanan:</label>
            <input type="date" id="tanggal_pesanan" required>
            
            <label for="email_konfirmasi">E-mail:</label>
            <input type="email" id="email_konfirmasi" required>
            
            <label for="kode_keamanan">Kode Keamanan:</label>
            <input type="text" id="kode_keamanan" required>
            
            <button onclick="konfirmasiPesanan()">Kirim</button>
        </div>
        
        <div id="success" class="step">
            <p class="success-message">Berhasil mengonfirmasi pesanan!</p>
            <p>E-ticket Anda akan segera dikirim ke alamat email yang telah didaftarkan.</p>
        </div>
    </div>

    <script>
        function nextStep(step) {
            document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
            document.getElementById('step' + step).classList.add('active');
        }

        function konfirmasiPesanan() {
            document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
            document.getElementById('success').classList.add('active');
        }
    </script>
</body>
</html>