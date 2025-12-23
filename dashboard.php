<?php
<<<<<<< HEAD
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>


=======
require_once "config/database.php";

// Proteksi halaman
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

require_once "config/database.php";

// Ambil data statistik
$totalItems = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM items")
)['total'];

$totalStock = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT SUM(stock) AS total FROM items")
)['total'];

$incomingToday = mysqli_fetch_assoc(
    mysqli_query($conn, "
        SELECT COUNT(*) AS total 
        FROM transactions 
        WHERE transaction_type = 'IN' 
        AND DATE(transaction_date) = CURDATE()
    ")
)['total'];

$outgoingToday = mysqli_fetch_assoc(
    mysqli_query($conn, "
        SELECT COUNT(*) AS total 
        FROM transactions 
        WHERE transaction_type = 'OUT' 
        AND DATE(transaction_date) = CURDATE()
    ")
)['total'];
?>
>>>>>>> fbc7e4656efd8b1a85c9164db4b36f0fa07c181d
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
                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="items/index.php">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transactions/index.php">Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
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
                            <h3><?= $totalItems ?></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Stock Available</h6>
                            <h3><?= $totalStock ?></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Incoming Today</h6>
                            <h3><?= $incomingToday ?></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card stat-card shadow-sm">
                        <div class="card-body">
                            <h6>Outgoing Today</h6>
                            <h3><?= $outgoingToday ?></h3>
                        </div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
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

=======
            <!-- Latest Transactions -->
            <div class="card shadow-sm">
                <div class="card-header fw-semibold">
                    Latest Transactions
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Type</th>
                                <th>Qty</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($conn, "
                            SELECT items.name, transactions.transaction_type,
                                   transactions.quantity, transactions.transaction_date
                            FROM transactions
                            JOIN items ON transactions.item_id = items.id
                            ORDER BY transactions.transaction_date DESC
                            LIMIT 6
                        ");

                        while ($row = mysqli_fetch_assoc($query)):
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['transaction_type'] ?></td>
                                <td><?= $row['quantity'] ?></td>
                                <td><?= $row['transaction_date'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
>>>>>>> fbc7e4656efd8b1a85c9164db4b36f0fa07c181d

        </main>
    </div>
</div>

</body>
</html>
