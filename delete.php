<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM customer WHERE id='$id'";
$data=mysqli_query($conn,$query);

if($data){
?>
<script>
    alert("Data deleted successfully...");
    window.open("http://localhost/demo/view.php",'_self');
</script>
<?php
}else{
    ?>
    <script>
        alert("Please Try again...");
    </script><?php
}
?>