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
        #shipmentForm{
            margin: 50px;
            width: 40%;
            border: solid 1px gray;
            padding: 15px;
            border-radius: 5px;
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
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-truck"></i> Shipments</a>
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


        <form id="shipmentForm">
            <h3 style="text-align:center">Shipment Details</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Shipping Id</label>
                <input type="shipId" class="form-control" id="shipId" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shipping No</label>
                <input type="shipNo" class="form-control" id="shipNo" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shipping Charge</label>
                <input type="shipCharge" class="form-control" id="shipCharge" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shipping Weight</label>
                <input type="shipWeight" class="form-control" id="shipWeight" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shipping Quantity</label>
                <input type="shipPcs" class="form-control" id="shipPcs" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Airway Bill No</label>
                <input type="abNumber" class="form-control" id="abNumber" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tracking link</label>
                <input type="trackLink" class="form-control" id="trackLink" aria-describedby="emailHelp">

            </div>
            <button class="btn btn-success my-3" style="width: 100%;">Save</button>
            <button class="btn btn-danger my3" style="width: 100%;">Cancel</button>

        </form>


</html>