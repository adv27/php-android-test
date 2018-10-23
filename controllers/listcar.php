<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function get_cars($db)
    {
        $sql = "SELECT * FROM carinfo";
        $result = $db->query($sql);
        $cars = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
               $cars[] = $row;
            }
        }
        return $cars;
    }

    $cars = get_cars($db);
    header('Content-Type: application/json');
    echo json_encode($cars);
}
