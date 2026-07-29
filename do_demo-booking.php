<?php
include "pgdb_inc.php";

$email  = isset($_POST['email_id']) ? trim($_POST['email_id']) : '';
$mobile = isset($_POST['mobile_no']) ? trim($_POST['mobile_no']) : '';

// Validate that at least one identifier is provided
if (empty($email) && empty($mobile)) {
    header("location: demo.php?err=Please provide an email, a mobile no, or both&success=false");
    exit;
}

$sql = "SELECT * FROM demo_requests WHERE (:email != '' AND email_id = :email) OR (:mobile != '' AND mobile_no = :mobile) LIMIT 1";
$stmt = $pdo->prepare($sql);
// Execute by binding both parameters securely
$stmt->execute([
    ':email'  => $email,
    ':mobile' => $mobile
]);
$demoReq = $stmt->fetch();

if($demoReq) {
    header("location: demo.php?err=Mobile or Email id already exist&success=false");
    exit;
}

// 1. Define your fields and data in one single place
$data = [
    'inst_name'     => $_POST["inst_name"] ?? null,
    'inst_type'     => $_POST["inst_type"] ?? null,
    'inst_website'  => $_POST["inst_website"] ?? null,
    'full_name'     => $_POST["full_name"] ?? null,
    'designation'   => $_POST["designation"] ?? null,
    'email_id'      => $_POST["email_id"] ?? null,
    'mobile_no'     => $_POST["mobile_no"] ?? null,
    'address'       => $_POST["address"] ?? null,
    'city'          => $_POST["city"] ?? null,
    'state'         => $_POST["state"] ?? null,
    'pincode'       => $_POST["pincode"] ?? null,
    'student_counts'=> $_POST["student_counts"] ?? null,
    'source'        => $_POST["source"] ?? null,
    'pref_date'     => $_POST["pref_date"] ?? null,
    'pref_time'     => isset($_POST["pref_time"]) ? '{' . $_POST["pref_time"] . '}' : null,
    'message'       => $_POST["message"] ?? null,
    'status'        => "Pending",
    'req_date'      => date("Y-m-d"),
    'is_active'     => "true"
];

try {
    // 2. Automatically build the SQL string columns and placeholders
    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    
    $sql = "INSERT INTO demo_requests ($columns) VALUES ($placeholders)";
    
    // 3. Prepare and directly execute with the data array
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    
    header("location: demo.php?req=done&success=true");
    exit;

} catch (PDOException $e) {
    // URL-encode the error message to safely pass it through the header
    $err = urlencode($e->getMessage());
    header("location: demo.php?err=" . $err . "&success=false");
    exit;
}
?>
