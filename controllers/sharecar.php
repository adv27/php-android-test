<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staff_id = $_POST['staffId'];
    $departure_place = $_POST['departurePlace'];
    $departure_date = $_POST['departureDate'];
    $departure_time = $_POST['departureTime'];
    $arrive_place = $_POST['arrivePlace'];
    $seats = $_POST['seats'];

    function share_care($db, $id, $departure_place, $departure_date, $departure_time, $arrive_place, $seats)
    {
        $sql = "INSERT INTO carinfo(departure_place, date, time, arrive_place, share_seats, staff_id)
                VALUES ('$departure_place', '$departure_date','$departure_time', '$arrive_place', '$seats', '$id')";
        return $db->query($sql) === true;
    }

    $create_status = share_care($db, $staff_id, $departure_place, $departure_date, $departure_time, $arrive_place, $seats);
    $response = new StdClass();
    $response->success = $create_status;
    header('Content-Type: application/json');
    echo json_encode($response);
}
