<?php
    include 'includes/config.php';
    $q1 = "IF NOT EXISTS (SELECT * FROM information_schema.TRIGGERS WHERE TRIGGER_NAME = 'delete_booking_details') THEN
    DELIMITER $$
CREATE TRIGGER delete_booking_details 
AFTER DELETE ON billing_details
FOR EACH ROW
BEGIN
    DELETE FROM booking_details WHERE BOOKING_ID NOT IN (SELECT BOOKING_ID FROM billing_details);
END $$
DELIMITER ;";
$q1s = $conn->query($q1);
header("Location: index.php");
?>