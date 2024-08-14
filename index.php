<?php include 'connection.php'; ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Info</title>
    <script>
        function loadViewData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("viewData").innerHTML = this.responseText;
                }
            };
            xhttp.open('GET', 'view.php', true);
            xhttp.send();
        }
    </script>
</head>
<body>
    <h1>Customer Information </h1>
    <div>
        <form action="" method="POST">
            <input type="text" name="firstname" placeholder="firstname"><br><br>
            <input type="text" name="lastname" placeholder="lastname"><br><br>
            <input type="number" name="age" placeholder="age"><br><br>
            <input type="text" name="city" placeholder="city"><br><br>
            
            
            <input type="number" name="number" placeholder="number"><br><br>
            
            <!-- Dropdown list for Gender -->
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br><br>
            <input type="submit" name="save_btn" value="Submit">
            <!-- Changed to a button that triggers JavaScript function -->
            <button type="button" onclick="loadViewData()">View</button>
        </form>
    </div>
    <div id="viewData"></div>

    <?php
    if(isset($_POST['save_btn'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];

        $query = "INSERT INTO customer (firstname, lastname, age, city, number, gender) 
                  VALUES('$fname', '$lname', '$age', '$city', '$number', '$gender')";

        $data = mysqli_query($conn, $query);

        if ($data) {
            ?>
            <script>
                alert("Data saved successfully...");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Please try again later...");
            </script>
            <?php
        }
    }
    ?>

</body>
</html>