<?php
include('../controllers/common.php');
if (isset($_GET["acno"])) {
    $acno = $_GET["acno"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vI | Customers-Detail</title>
    <link rel="stylesheet" href="../css/customers.css">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- GOOGLE FONTS ICON -->
    <link style="background-color:#fff;" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <section style="background-image: url('../images/bg.png')">
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
                            <a class="nav-link" href="#container-main-2">Services</a>
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
        $query = "SELECT * FROM CUSTOMERS WHERE acno=$acno";
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($res);

        ?>

        <div class="user">

            <div class="detail" id="user-detail">
                <div class="customer-image">
                    <img id="cust-image" src="../images/vi.jpg" alt="Vadiraj Inamdar">
                </div>
                <div class="details">
                    <img id="name-logo" src="../images/name.png" alt="Name-icon">
                    <h4 id="cust-name"><? echo $row['customer_name']; ?></h4>
                    <img id="name-logo" src="../images/phone.png" alt="Name-icon">
                    <h4 id="cust-name"><? echo $row['contact']; ?></h4>
                    <img id="name-logo" src="../images/location.png" alt="Name-icon">
                    <h4 id="cust-name"><? echo $row['address']; ?></h4>
                    <img id="name-logo" src="../images/email.png" alt="Name-icon">
                    <h4 id="cust-name"><? echo $row['email']; ?></h4>
                </div>
            </div>
        </div>
        <br>
        <br>
        <section>
            <h3 id="transactions">Transactions</h3>
            <br>

            <div class="transact">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $fetch_query = "SELECT * FROM TRANSFER where acc_from=$acno";
                        $results = mysqli_query($conn, $fetch_query);
                        $i = 1;
                        while ($row = mysqli_fetch_array($results)) { ?> <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['amount'] ?></td>
                                <td><?php echo $row['date_of_trans'];?></td>
                                <td><?php echo $row['time_stamp'];
                                    $i++; ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

    <!-- Footer Section -->
    <section class="sec-3">
        <footer>
            <div class="container">
                <p>© vI Bank</p>
                <p>Developed by Vadiraj</p>
            </div>
        </footer>

    </section>
    </section>
<!-- JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>