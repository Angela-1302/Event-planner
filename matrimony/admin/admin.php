<?php

include('db.php');
$query = "SELECT * FROM `contact_form`";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Admin Panel</h2>
                    </div>
                    <div class="card-body">
                        <table id="customers">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Plan</th>
                                <th>Address</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['number']; ?></td>
                                    <td><?php echo $row['plan']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>

                            </tr>

                        <?php
                                }



                        ?>






                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>