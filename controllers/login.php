<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staff_id = $_POST['staffId'];
    $password = $_POST['pwd'];
    $phone = $_POST['phone'];

    function authenticate($db, $id, $pwd, $phone)
    {
        $sql = "SELECT * FROM staff WHERE id = '$id' and password = '$pwd'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return true;
        }
        return false;
    }

    $authen_status = authenticate($db, $staff_id, $password, $phone);
    $response = new StdClass();
    $response->success = $authen_status;
    header('Content-Type: application/json');
    echo json_encode($response);
}
