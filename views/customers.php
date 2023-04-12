<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vI | Customers</title>
    <link rel="stylesheet" href="../css/customers.css">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- GOOGLE FONTS ICON -->
    <link style="background-color:#fff;" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    


        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: linear-gradient(to right, rgba(106, 17, 203, 0.9), rgba(37, 117, 252, 0.9)); width: auto;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="margin-left: 5px;">
                    <img src="../images/logo.png" alt="Bootstrap" width="30" height="30">
                </a>
                <a class="navbar-brand bank-name" href="index.php">VI Bank</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active-link" aria-current="page" href="../views/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        include('../controllers/common.php')
        ?>
        <section style="background-image: url('../images/bg.png')">
        <br>
        <div class="customer-table">
            <br>
            <h2 id="cust-details" style="color:#fff;"><b>Customer Details</b></h2>
            <br>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Customer Name</th>
                        <!-- <th scope="col">Account Number</th> -->
                        <th scope="col">Balance</th>
                        <th scope="col">View More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qry = "SELECT * FROM CUSTOMERS";
                    $result = mysqli_query($conn, $qry);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['customer_name']; ?></td>
                            <!-- <td><?php echo $row['acno']; ?></td> -->
                            <td><?php echo $row['balance']; ?></td>
                            <td><a href="../views/customer_detail.php?acno=<?php echo $row['acno'] ?> "><img src="../images/view-more.png" alt="view-more" style="height:30px;width:30px;"></a></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
</section>
    <!-- Footer Section -->
    <section class="" style="margin-top:-100px;">
        <footer>
            <div class="container">
                <p>© vI Bank</p>
                <p>Developed by Vadiraj</p>
            </div>
        </footer>

    </section>
    

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>