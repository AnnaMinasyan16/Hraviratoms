<?php
// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$guestCount = $_POST['guestCount'];

// Check if any fields are empty
if (empty($firstName) || empty($lastName) || empty($guestCount)) {
	echo "<script>alert('Խնդրում ենք լրացնել բոլոր դաշտերը։'); window.location.href ='index.php';</script>";
    exit();
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'invitation');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO guests (firstName, lastName, guestCount) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $firstName, $lastName, $guestCount);
    $execval = $stmt->execute();
    if ($execval) {
        echo "<script>alert('Ձեր տվյալները հաջողությամբ ուղարկված են'); window.location.href ='index.php';</script>";
    } else {
        echo "<script>alert('Տվյալները չհաջողվեցին ուղարկել։ Խնդրում ենք կրկին փորձել։'); window.location.href ='index.php';</script>";
    }
    $stmt->close();
    $conn->close();
}
?>
