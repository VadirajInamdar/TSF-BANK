<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vI|Home</title>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- GOOGLE FONTS ICON -->
    <link style="background-color:#fff;" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body{
  background-image: url('../images/bg\ copy\ 2.png');
  background-size: cover;
  background-position: center;
}
    </style>
</head>

<body>
    <!-- NAVBAR -->
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

    <!-- Basic information section -->
    <section>
        <section class="sec-1">
            <div class="container-main">
                <div class="container-1">
                    <h1 id="bank-name" style="color:#fff;"><b>VI</b></h1>
                    <h1 id="bank-name" style="color:#fff;"><b>Bank</b></h1>
                    <h3>Secure your tomorrow, today.</h3>
                    <p>We prioritize customer satisfaction and care, and invest in the latest technology to make banking as easy and hassle-free as possible. Our knowledgeable staff will guide you through the process with care and attention to detail, while our cutting-edge services enable you to manage your finances from anywhere. We tailor our services to meet your needs and help you achieve your financial goals. Choose us for a banking experience that truly cares about you.</p>
                </div>
                <div class="container-2">
                    <img id="bank-pic" src="../images/bank_.png" alt="bank_image">
                </div>
            </div>
        </section>

        <!-- Transfers Section -->
        <section class="sec-2">
            <div class="container-main-2" id="container-main-2">
                <h2 id="operation"><b>Services</b></h2>
                <div class="cards">
                    <div class="card-1">
                        <img id="image-1" src="../images/customers.png" alt="customers">
                        <br>
                        <br>
                        <a href="../views/customers.php"><button class="btn btn-primary card-1-btn">View Customers</button></a>
                    </div>
                    <div class="card-2">
                        <img id="image-2" src="../images/transfer.png" alt="customers">
                        <br>
                        <br>
                        <a href="../views/transaction.php"><button class="btn btn-success card-2-btn">Transfer Money</button></a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Footer Section -->
    <section class="sec-3">
        <footer style="margin-top: 150px;">
            <div class="container">
                <p>© vI Bank</p>
                <p>Developed by Vadiraj Inamdar</p>
            </div>
        </footer>

    </section>


    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>