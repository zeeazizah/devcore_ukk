<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Sistem Gudang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
        <span class="navbar-brand fw-semibold">DevCore Warehouse</span>
        <div class="text-white">Admin</div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-2 sidebar p-0">
            <ul class="nav flex-column pt-4">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Logout</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="col-md-10 px-4 py-4">

            <h4 class="mb-4 fw-semibold">Dashboard Overview</h4>

            <!-- Statistic Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Total Items</h6>
                            <h3>128</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Stock Available</h6>
                            <h3>1,245</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Incoming Today</h6>
                            <h3>14</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Outgoing Today</h6>
                            <h3>9</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
         <tbody>
<?php if (mysqli_num_rows($query) > 0): ?>
    <?php $no = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['item'] ?></td>
            <td><?= $row['type'] ?></td>
            <td><?= $row['qty'] ?></td>
            <td><?= $row['tanggal'] ?></td>
        </tr>
    <?php endwhile; ?>
<?php else: ?>
    <tr>
        <td colspan="5" class="text-center">Belum ada transaksi</td>
    </tr>
<?php endif; ?>
</tbody>


        </main>
    </div>
</div>

</body>
</html>
