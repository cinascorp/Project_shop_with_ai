
<?php
session_start();
include "model/connection.php";
$sql = "SELECT id, pname, image FROM products";
$result = $mysql->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include "includes/header.php"; ?>
    <br>
    <div class="container">
        <h2>Product List</h2>
        <br>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()): ?>
            <div class="col-md-3 mb-3">
                <a href="details.php?id=<?php echo $row['id']; ?>">
                    <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                </a>
                <p><?php echo $row['pname']; ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include "includes/footer.php"; ?>
</body>
</html>
