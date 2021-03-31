<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Timotius Haniel | Show Data</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/showdata.css">
    </head>
    <body>
        <div class="content">
        <h1 style="text-align: center;">User Data</h1>
            <table class="content-table">
                <?php 
                    require_once "dbh.php";
                    $read_data = "SELECT * FROM user";
                    if($result = mysqli_query($conn, $read_data)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>";
                            echo "<tbody>";
                            $no = 0;
                            while($data = mysqli_fetch_array($result)){
                                $no = $no + 1;
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td>" . $data['fullname'] . "</td>";
                                echo "<td>" . $data['email'] . "</td>";
                                echo "<td>" . $data['address'] . "</td>";
                                echo "<td>" . $data['phone_number'] . "</td>";
                                echo "<td>" . $data['department'] . "</td>";
                                echo "</tr>";
                            }
                            // Free result set
                            mysqli_free_result($result);

                            echo "</tbody>";
                        } else{
                            echo "<p class='lead'><em>No data records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $read_data. " . mysqli_error($conn);
                    }// Close connection
                    mysqli_close($conn);
                ?>
            </table>
        </div>
    </body>
</html>