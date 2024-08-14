<?php include 'connection.php';
$id=$_GET['id'];
$query="SELECT * FROM customer WHERE id='$id'";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_array($data);
?>
<div>
        <form action="" method="POST">
            <input type="text" value="<?php echo $row['firstname'] ?>" name="firstname" placeholder="firstname"><br><br>
            <input type="text" value="<?php echo $row['lastname']?>" name="lastname" placeholder="lastname"><br><br>
            <input type="number" value="<?php echo $row['age']?>" name="age" placeholder="age"><br><br>
            <input type="text" value="<?php echo $row['city'] ?>" name="city" placeholder="city"><br><br>
            
            <!-- Manually input number -->
            <input type="number" value="<?php $row['number'] ?>" name="number" placeholder="number"><br><br>
            
            <!-- Dropdown list for Gender -->
            <select name="gender" value="<?php echo $row['gender'] ?>">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br><br>

            <input type="submit" name="update_btn" value="Update">
            <button><a href="view.php">Back</a></button>
        </form>
    </div>


    <?php
    if(isset($_POST['update_btn'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];

        $query = "UPDATE customer SET firstname='$fname',
    lastname='$lname', age='$age', city='$city', number='$number', gender='$gender'
    WHERE id='$id'";

        $data = mysqli_query($conn, $query);

        if ($data) {
            ?>
            <script>
                alert("Data updated successfully...");
                window.open("http://localhost/demo/view.php","_self");
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


