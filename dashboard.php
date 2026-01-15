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
            <div class="card shadow-sm">
                <div class="card-header fw-semibold">
                    Latest Transactions
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Type</th>
                                <th>Qty</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Printer Epson</td>
                                <td>OUT</td>
                                <td>2</td>
                                <td>2026-01-15</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kertas A4</td>
                                <td>IN</td>
                                <td>10</td>
                                <td>2026-01-15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</div>

</body>
</html>
