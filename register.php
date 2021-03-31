<?php
    require_once "dbh.php";

    // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['fullname'], $_POST['email'], $_POST['address'], $_POST['phone_number'], $_POST['department'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the registration form!');
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Email is not valid!');
    }

    // Username doesnt exists, insert new account
    if ($stmt = $conn->prepare('INSERT INTO user (fullname, email, address, phone_number, department) VALUES (?, ?, ?, ?, ?)')) {
        $stmt->bind_param('sssss', $_POST['fullname'], $_POST['email'], $_POST['address'], $_POST['phone_number'], $_POST['department']);
        $stmt->execute();
        header("Location: ./mainmenu.php");
    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
    }
    $stmt->close();
    $conn->close();
?>