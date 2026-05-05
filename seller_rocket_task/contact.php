<?php 
include 'con.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    if (isset($_POST['submit'])) {

        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $platform = htmlspecialchars($_POST['platform'], ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

        $stmt = $con->prepare("INSERT INTO contact (name, phone, email, platform, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $phone, $email, $platform, $message);

        if ($stmt->execute()) {
            header("Location: index.php?success=We Will Contact You Soon, Thanks!");
            exit();
        }
        else {
            header("Location: index.php?error=Unable to Proceed Right Now, Try again Later, Thanks!");
            exit();
        }

        $stmt->close();
    }
    else {
        echo "Invalid Attempt";
    }
}
?>