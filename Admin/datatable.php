<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Data Table Apartment</title>
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
            <li class="active">
                <a href="datatable.html">
                    <span>Data Table</span>
                </a>
            </li>
            <li>
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
        <div class="header--wrapper">
            <div class ="header--title">
                <h2>Data Penyewa</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="./image/img.jpg" alt=""/>
            </div>            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Data Penyewa</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Penyewa</th>
                            <th>No. Identitas</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>No. Unit</th>
                            <th>Kategori</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Harga</th>
                            <th>Status Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                           <tr>
                            <td>1</td>
                            <td>Naufal Bagas</td>
                            <td>222410103030</td>
                            <td>JL. Jambu</td>
                            <td>089776556555</td>
                            <td>1A</td>
                            <td>1BR</td>
                            <td>20/10/2024</td>
                            <td>20/10/2025</td>
                            <td>Rp.10.000.000</td>
                            <td>Lunas</td>
                            <td>
                                <button >Edit</button>
                                <button >Delete</button>
                            </td>
                           </tr> 
                           <tr>
                            <td>1</td>
                            <td>Aqil Sabil</td>
                            <td>2224101030323</td>
                            <td>JL. Jambu</td>
                            <td>089779956555</td>
                            <td>1A</td>
                            <td>1BR</td>
                            <td>20/10/2024</td>
                            <td>20/10/2025</td>
                            <td>Rp.10.000.000</td>
                            <td>Lunas</td>
                                <button >Edit</button>
                                <button >Delete</button>
                            </td>
                           </tr> 
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
