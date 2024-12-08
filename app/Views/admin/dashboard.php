<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Sistem Tiket Pertandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #0a4d2e;
            --secondary-color: #1a8d44;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fa;
        }

        .sidebar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #fff;
            transition: background-color 0.3s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .main-content {
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
        }

        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .navbar {
            background-color: var(--primary-color);
            color: white;
            padding: 10px;
        }

        .navbar .navbar-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .navbar .navbar-brand:hover {
            color: var(--secondary-color);
        }

        .navbar .nav-item .nav-link {
            color: white;
        }

        .navbar .nav-item .nav-link:hover {
            color: #f8f9fa;
        }

        .dropdown-menu {
            right: 0;
            left: auto;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-futbol me-2"></i>Admin Dashboard</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link">Hello, <?= session()->get('username') ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <h2 class="text-center mb-4"><i class="fas fa-futbol me-2"></i>E-Ticket</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#dashboard">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kelola-user">
                                <i class="fas fa-users me-2"></i>Kelola User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jadwal">
                                <i class="fas fa-calendar-alt me-2"></i>Jadwal Pertandingan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#status-pemesanan">
                                <i class="fas fa-ticket-alt me-2"></i>Status Pemesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#konfirmasi-pesanan">
                                <i class="fas fa-check-circle me-2"></i>Konfirmasi Pesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#laporan-penjualan">
                                <i class="fas fa-chart-bar me-2"></i>Laporan Penjualan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <h1 class="mt-4 mb-4">Dashboard Admin</h1>

                <!-- Kelola User -->
                <div class="card" id="kelola-user">
                    <div class="card-header">
                        <h5><i class="fas fa-users me-2"></i>Kelola User</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>No. Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customers as $customer): ?>
                                    <tr>
                                        <td><?= $customer['id'] ?></td>
                                        <td><?= $customer['username'] ?></td>
                                        <td><?= $customer['email'] ?></td>
                                        <td><?= $customer['no_telp'] ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-custom">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

             

                <!-- Status Pemesanan -->
                <div class="card" id="status-pemesanan">
                    <div class="card-header">
                        <h5><i class="fas fa-ticket-alt me-2"></i>Status Pemesanan</h5>
                    </div>
                    <div class="card-body">
                        <p>Berisi status pemesanan tiket.</p>
                    </div>
                </div>

                <!-- Konfirmasi Pesanan -->
                <div class="card" id="konfirmasi-pesanan">
                    <div class="card-header">
                        <h5><i class="fas fa-check-circle me-2"></i>Konfirmasi Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <p>Berisi konfirmasi pesanan tiket.</p>
                    </div>
                </div>

               <!-- Laporan Penjualan -->
<div class="card" id="laporan-penjualan">
    <div class="card-header">
        <h5><i class="fas fa-chart-bar me-2"></i>Laporan Penjualan</h5>
    </div>
    <div class="card-body">
        <canvas id="salesChart" width="400" height="200"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sample data for Chart.js
    const salesData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Penjualan Tiket',
            backgroundColor: 'rgba(0, 123, 255, 0.5)',
            borderColor: 'rgba(0, 123, 255, 1)',
            borderWidth: 2,
            fill: false, // Set to false for line chart
            data: [120, 150, 180, 200, 170, 190],
        }]
    };

    const config = {
        type: 'line', // Change type to 'line'
        data: salesData,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah Penjualan'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
            }
        }
    };

    const salesChart = new Chart(
        document.getElementById('salesChart'),
        config
    );
</script>

</body>

</html>