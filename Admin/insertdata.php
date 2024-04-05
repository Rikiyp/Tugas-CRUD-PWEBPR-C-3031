<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Insert Data I-Care</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="index.html">
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="datatable.html">
                    <span>Data Table</span>
                </a>
            </li>
            <li  class="active">
                <a href="insertdata.html">
                    <span>Tambah Data</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        
        <form>
            <!-- Elemen formulir untuk ID -->
            

            <!-- Elemen formulir untuk Nama Pasien -->
            <label for="nama">Nama Penyewa:</label>
            <input type="text" id="nama" name="nama" required>

            <!-- Elemen formulir untuk TTL -->
            <label for="ttl">No. Identitas:</label>
            <input type="text" id="ttl" name="ttl" required>

            <!-- Elemen formulir untuk Alamat -->
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <!-- Elemen formulir untuk Poli -->
            <label for="poli">No. Telepon:</label>
            <input type="text" id="Telepon" name="Telepon" required>

            <label for="poli">No. Unit:</label>
            <input type="text" id="Unit" name="Unit" required>
            
            <label for="Status">Kategori</label>
                <select class="form-select" id="Status" name="Status" aria-label="Default select example" required>
                    <option value="1BR" selected>1BR</option>
                    <option value="2BR">2BR</option>
                    <option value="3BR">3BR</option>
                </select>

            <label for="poli">Tanggal Mulai:</label>
            <input type="text" id="Tanggal Sewa" name="Tanggal Sewa" required>

            <label for="poli">Tanggal Selesai:</label>
            <input type="text" id="poli" name="poli" required>

            <label for="poli">Harga:</label>
            <input type="text" id="Harga" name="Harga" required>

            <label for="Status">Status Pembayaran</label>
                <select class="form-select" id="Status" name="Status" aria-label="Default select example" required>
                    <option value="Lunas" selected>Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                </select>

            <!-- Tombol Submit -->
            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>
