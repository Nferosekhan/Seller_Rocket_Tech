<?php 
include 'con.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    if (isset($_GET['id'])) {

        $id = htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8');

        $stmt = $con->prepare("DELETE FROM contact WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: admin.php?success=Deleted!");
            exit();
        }
        else {
            header("Location: admin.php?error=Unable to Proceed Right Now, Try again");
            exit();
        }

        $stmt->close();
    }
    else {
        echo "Invalid Attempt";
    }
}
?>