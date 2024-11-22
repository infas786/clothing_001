<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Management</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #ffffff;
            border-right: 1px solid #dee2e6;
        }

        .sidebar a.active {
            background-color: #0d6efd;
            color: white;
        }

        .sidebar a {
            color: #212529;
        }

        .main-content {
            margin-left: 240px;
        }

        .header {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
            padding: 15px 20px;
        }

        .card-hover:hover {
            background-color: #f8f9fa;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar position-fixed h-100 p-3" style="width: 240px;">
        <h4 class="text-center mb-4 text-primary"><i class="bi bi-receipt"></i> Bill Window</h4>
        <a href="#" class="list-group-item list-group-item-action active"><i class="bi bi-border-all"></i> Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-box"></i> Products</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-cart-dash"></i> Orders</a>
        <a href="shipment.php" class="list-group-item list-group-item-action"><i class="bi bi-truck"></i> Shipments</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-cash-stack"></i> Payments</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-arrow-counterclockwise"></i> Returns/Refunds</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header d-flex justify-content-between align-items-center">
            <h5 class="text-primary"><i class="bi bi-house"></i> Dashboard</h5>
            <div>
                <button class="btn btn-outline-primary me-2"><i class="bi bi-gear"></i> Settings</button>
                <button class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="container mt-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-hover shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="text-primary">Total Orders</h6>
                            <h2 class="text-dark"><i class="bi bi-box"></i> 45</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-hover shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="text-primary">Pending Shipments</h6>
                            <h2 class="text-dark"><i class="bi bi-truck"></i> 12</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-hover shadow-sm">
                        <div class="card-body text-center">
                            <h6 class="text-primary">Refunds</h6>
                            <h2 class="text-dark"><i class="bi bi-arrow-counterclockwise"></i> 5</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="container mt-5">
            <h5 class="text-primary mb-3">Order Details</h5>
            <table class="table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Red T-shirt (L)</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>Partial</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Blue Jeans (M)</td>
                        <td><span class="badge bg-success">Shipped</span></td>
                        <td>Full</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
