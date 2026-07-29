<?php
include "pgdb_inc.php";

try {
    $sql = "INSERT INTO contact_msgs 
    (full_name, email_id, mobile_no, msg_type, subject, message, status, req_date, is_active) 
    VALUES 
    (:full_name, :email_id, :mobile_no, :msg_type, :subject, :message, :status, :req_date, :is_active)";
    $stmt = $pdo->prepare($sql);
    
    // Execute with associative array parameters
    $stmt->execute([
      ':full_name'  => $_POST["full_name"], 
      ':email_id'   => $_POST["email_id"], 
      ':mobile_no'  => $_POST["mobile_no"], 
      ':msg_type'   => $_POST["msg_type"], 
      ':subject'    => $_POST["subject"], 
      ':message'    => $_POST["message"], 
      ':status'     => "Pending", 
      ':req_date'   => date("Y-m-d"), 
      ':is_active'  => "true"
    ]);
    
    $iid = $pdo->lastInsertId();
    //echo "Record inserted successfully.";
    header("location: contact.php?req=done&success=true");
    exit;
} catch (PDOException $e) {
    $err = $e->getMessage();
    //echo "Record inserted failed. ".$err;
    header("location: contact.php?err=true&success=false");
    exit;
}
?>