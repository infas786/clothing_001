<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ship_no = $_POST['shipNo'];
    $ship_charge = $_POST['shipCharge'];
    $ship_weight = $_POST['shipWeight'];
    $ship_pcs = $_POST['shipPcs'];
    $ship_abnumber = $_POST['abNumber'];
    $ship_track = $_POST['trackLink'];

    $rDateTime = date("Y-m-d H:i:s");
    $user_id = 1;

    $stmt = $conn->prepare("INSERT INTO shipment (ship_no, ship_date, ship_charge, ship_weight, ship_pcs, track_no, track_link, rDateTime, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssddisssi", $ship_no, $rDateTime, $ship_charge, $ship_weight, $ship_pcs, $ship_abnumber, $ship_track, $rDateTime, $user_id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Shipment details saved successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
