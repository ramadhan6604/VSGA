<?php
include "koneksi.php"; 

// Check if POST data is set
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Prepare SQL query
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    // Execute SQL query
    $result = mysqli_query($connect, $query);

    // Check if query execution was successful
    if ($result) {
        $fetchResult = mysqli_fetch_assoc($result);

        // Check if a result was returned and has the 'role' field
        if ($fetchResult && isset($fetchResult['role'])) {
            if ($fetchResult['role'] == 'admin') {
                echo "Anda berhasil login "; 
                echo "<a href='adminDashboard.html'>Admin</a>"; 
            } elseif ($fetchResult['role'] == 'user') {
                echo "Anda berhasil login "; 
                echo "<a href='userDashboard.html'>User Dashboard</a>"; 
            } else {
                echo "Anda gagal login "; 
                echo "<a href='loginForm.html'>Login Form</a>"; 
            }
        } else {
            echo "Role tidak tersedia. Anda mungkin belum login.";
        }
    } else {
        // Output error if query execution failed
        echo "Terjadi kesalahan saat melakukan query: " . mysqli_error($connect);
    }
} else {
    echo "Username atau password tidak tersedia.";
}

// Close the database connection
mysqli_close($connect);
?>
