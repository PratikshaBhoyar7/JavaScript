<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operation = $_POST['operation'];

    if ($operation == "create") {
        $fullName = $_POST['full_name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $stmt = $conn->prepare("INSERT INTO users (full_name, email, age) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $fullName, $email, $age);
        if ($stmt->execute()) {
            echo "User added successfully!";
        } else {
            echo "Failed to add user.";
        }
    } elseif ($operation == "read") {
        $result = $conn->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo json_encode($users);
    } elseif ($operation == "update") {
        $id = $_POST['id'];
        $fullName = $_POST['full_name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $stmt = $conn->prepare("UPDATE users SET full_name = ?, email = ?, age = ? WHERE id = ?");
        $stmt->bind_param("ssii", $fullName, $email, $age, $id);
        if ($stmt->execute()) {
            echo "User updated successfully!";
        } else {
            echo "Failed to update user.";
        }
    } elseif ($operation == "delete") {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "User deleted successfully!";
        } else {
            echo "Failed to delete user.";
        }
    }
}
?>
