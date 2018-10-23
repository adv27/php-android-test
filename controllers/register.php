<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staff_id = $_POST['staffId'];
    $name = $_POST['name'];
    $password = $_POST['pwd'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    function check_staff_id_duplicated($db, $id)
    {
        $sql = "SELECT * FROM staff WHERE id = '$id'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return true;
        }
        return false;
    }

    function create_staff($db, $id, $name, $pwd, $phone)
    {
        $is_duplicated = check_staff_id_duplicated($db, $id);
        if ($is_duplicated) {
            return false;
        }
        $sql = "INSERT INTO staff(id, name, password, phone, company)
                VALUES ('$id','$name','$pwd','$phone','$company')";
        return $db->query($sql) === true;
    }

    $create_status = create_staff($db, $staff_id, $name, $password, $phone, $company);
    $response = new StdClass();
    $response->success = $create_status;
    header('Content-Type: application/json');
    echo json_encode($response);
}
