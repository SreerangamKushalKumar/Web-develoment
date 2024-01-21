Details_entry1.php
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "kk_university";

    $conn = mysqli_connect ($servername, $username, $password, $database_name);
    if (!$conn) {
        dies("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $course = $_POST['course'];
        $department = $_POST['department'];
        $contactnumber = $_POST['contactnumber'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $parent = $_POST['parent'];
        $year = $_POST['year'];
        $gpa = $_POST['gpa'];

        $sqli_query = "INSERT INTO details_entry (name, id, course, department, contactnumber, email, dob, gender, parent, year, gpa)
        VALUES ('$name', '$id', '$course', '$department', '$contactnumber', '$email', '$dob', '$gender', '$parent', '$year', '$gpa')";

        if (mysqli_query($conn, $sqli_query)) {
            echo "New Details Entry Inserted Successfully";
        } else {
            echo "Error! " . $sql_query . " " . mysqli_connect_error($conn);
        }
        mysqli_close($conn);
    }
?>
