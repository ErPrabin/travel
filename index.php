<?php
// include('db.php');
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

    // if (isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     $sql = "SELECT * From traveluser INNER JOIN traveluserdetails ON traveluser.UID=traveluserdetails.UID  where traveluser.UID='$id';";
    //     $results = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_array($results);
    // }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Travel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <?php include('nav.php') ?>

        <div class="container">
            <div class="profile border mt-5">
                <h2 class="text-center pt-1">My Profile</h2>
                <div class="detail pl-5 pr-5">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Email: <?php echo $row['Email'] ?></p>
                            <p>First Name: <?php echo $row['FirstName'] ?></p>
                            <p>Last Name: <?php echo $row['LastName'] ?></p>
                            <p>City: <?php echo $row['City'] ?></p>

                        </div>
                        <div class="col-md-6">
                            <p>State: <?php echo $row['State'] ?></p>
                            <p>Region: <?php echo $row['Region'] ?></p>
                            <p>Country: <?php echo $row['Country'] ?></p>
                            <p>Postal: <?php echo $row['Postal'] ?></p>
                            <p>Phone: <?php echo $row['Phone'] ?></p>

                        </div>
                    </div>

                </div>

            </div>


        </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </html>
<?php
} else {
    header("Location: login.php");
}
?>