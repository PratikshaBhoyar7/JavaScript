<?php include 'connection.php'; ?>
<a href="index.php">Home</a>

<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Number</th>
        <th>Gender</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php
    $query="SELECT * FROM customer";
    $data=mysqli_query($conn,$query);
    $result=mysqli_num_rows($data);
    if($result){
        while($row=mysqli_fetch_array($data)){
            ?>
             <tr>
                <td><?php echo $row['firstname']?></td>
                <td><?php echo $row['lastname']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['city']?></td>
                <td><?php echo $row['number']?></td>
                <td><?php echo $row['gender']?></td>
             <td><a href="update.php ?id=<?php  echo $row['id'];?>">Edit</a></td>
                
                <td>
                    <a onclick="return confirm('Are you sure, you want to delete data')"
                     href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
             </tr>
             
            <?php

        }
    }
    mysqli_close($conn);
    ?>
</table>


</script>