<?php
    $Name = $_POST['Name'];
    $EMail = $_POST['EMail'];
    $Password = $_POST['Password'];

    // Database Connection

    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(Name, Email, Password)
        values(?,?,?)");
        $stmt->bind_param("sss", $Name, $EMail, $Password);
        $stmt->execute();
        echo "<script> location.href='login.php'; </script>";
        $stmt->close();
        $conn->close();
    }

    session_start();
    if (isset($_POST['Login'])) {
        $EMail = $_POST['EMail'];
        $Password = $_POST['Password'];

        $query = "SELECT * FROM registration WHERE `EMail` = `$EMail` AND `Password` = `$Password`";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if (mysqli_num_rows($result) == 1) {
            header("location :Employee.php");
        }
        else {
            $error = 'Email ID or Password is incorrect';
        }
    }

    $cname = $_POST['cname'];
    $ctc = $_POST['ctc'];
    $position = $_POST['position'];
    $description = $_POST['description'];
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into jobs(cname, ctc, position, description) values (?,?,?,?)");
        $stmt->bind_param("siss", $cname, $ctc, $position, $jobdesc);
        $stmt->execute();
        echo "<script> location.href='index.php'; </script>";
        $stmt->close();
        $conn->close();
    }
    mysqli_close($conn);
?>


