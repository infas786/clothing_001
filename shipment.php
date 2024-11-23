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

        .main-content {
            margin-left: 240px;
        }

        #shipmentForm {
            margin: 50px;
            width: 40%;
            border: solid 1px gray;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .badge{
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar position-fixed h-100 p-3" style="width: 240px;">
        <h4 class="text-center mb-4 text-primary"><i class="bi bi-receipt"></i> Bill Window</h4>
        <!-- Sidebar content omitted for brevity -->
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <form id="shipmentForm" style="margin-left:300px">
            <h3 style="text-align:center">Shipment Details</h3>
            <span id="statusIndicator" class="badge bg-warning text-dark mb-3">Pending</span>
            <div class="form-group mb-2">
                <label for="shipId">Shipping ID</label>
                <input type="text" class="form-control mandatory" id="shipId" name="shipId">
            </div>
            <div class="form-group mb-2">
                <label for="shipNo">Shipping No</label>
                <input type="text" class="form-control mandatory" id="shipNo" name="shipNo">
            </div>
            <div class="form-group mb-2">
                <label for="shipCharge">Shipping Charge</label>
                <input type="text" class="form-control mandatory" id="shipCharge" name="shipCharge">
            </div>
            <div class="form-group mb-2">
                <label for="shipWeight">Shipping Weight</label>
                <input type="text" class="form-control mandatory" id="shipWeight" name="shipWeight">
            </div>
            <div class="form-group mb-2">
                <label for="shipPcs">Shipping Quantity</label>
                <input type="text" class="form-control mandatory" id="shipPcs" name="shipPcs">
            </div>
            <div class="form-group mb-2">
                <label for="abNumber">Airway Bill No</label>
                <input type="text" class="form-control mandatory" id="abNumber" name="abNumber">
            </div>
            <div class="form-group mb-2">
                <label for="trackLink">Tracking Link</label>
                <input type="text" class="form-control mandatory" id="trackLink" name="trackLink">
            </div>
            <button id="saveBtn" class="btn btn-success my-3" style="width: 100%;">Create Shipment</button>
            <button id="closeBtn" class="btn btn-danger my-3" style="width: 100%;" disabled>Close Shipment</button>
        </form>
    </div>

    <script>
        // Function to check if all mandatory fields are filled
        function checkMandatoryFields() {
            let allFilled = true;

            // Loop through all mandatory fields
            $(".mandatory").each(function () {
                if ($(this).val().trim() === "") {
                    allFilled = false;
                }
            });

            // Update button state and indicator
            $("#closeBtn").prop("disabled", !allFilled);
            $("#statusIndicator")
                .text(allFilled ? "Ready" : "Pending")
                .toggleClass("bg-warning", !allFilled)
                .toggleClass("bg-success", allFilled);
        }

        $(document).ready(function () {
            // Listen for input changes to check field states
            $(".mandatory").on("input", function () {
                checkMandatoryFields();
            });

            // Handle Create Shipment button click
            $(document).on("click", "#saveBtn", function (e) {
                e.preventDefault();

                let formData = new FormData($("#shipmentForm")[0]);

                $.ajax({
                    type: "POST",
                    url: "function.php",
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status === "success") {
                            alert(response.message);
                            location.reload();
                        } else {
                            alert("Error: " + response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert("AJAX Error: " + error);
                    }
                });
            });
        });

        // Initial check for mandatory fields
        checkMandatoryFields();
    </script>
</body>

</html>
