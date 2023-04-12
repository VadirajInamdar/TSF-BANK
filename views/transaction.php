<?php
include('../controllers/common.php');
// if($succesful==false)
// {
//     echo "alert('Transaction unsuccesful')";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vI | Transfers</title>
    <link rel="stylesheet" href="../css/transaction.css">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- GOOGLE FONTS ICON -->
    <link style="background-color:#fff;" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        input[type="number"].error,
        input[type="text"].error {
            border-color: red;
        }

        .error-message {
            display: none;
            color: red;
        }

        #submit {
            margin-left: 130px;
            width: 100px;
        }
        @media only screen and (max-width: 768px) {
            #submit {
            margin-left: 100px;
            width: 100px;
        }
        }
    </style>
</head>

<body>
    <section class="banner" style="background-image: url('../images/bg.png')">
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
                            <a class="nav-link" href="../views/about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php if (isset($_SESSION['message'])) : ?>
            <div class="msg">
                <?php
                echo ($_SESSION['message']);
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>

        <!-- TRANSFER CARD -->
        <div class="par">
            <div class="card-main">
                <div class="hero-man">
                    <img class="hero" src="../images/laptop-man.png" alt="Laptop-man">
                </div>
                <div class="transfer-card">
                    <h1 id="trans-title" style="color:#fff;">Make a transaction</h1>
                    <br>
                    <form action="../controllers/transfer.php" method="post">
                        <div class="form-group">
                            <label for="sender" ><b>Sender's Account Number</b></label>
                            <br>
                            <input type="number" id="sender" type="text" id="myInput" name="sender" class="form-control">
                            <span class="error-message" id="sender-error">Field can't be kept blank.</span>
                            <br>
                            <label for="receiver"><b>Receiver's Account Number</b></label>
                            <br>
                            <input type="number" id="receiver" name="receiver" class="form-control">
                            <span class="error-message" id="receiver-error">Field can't be kept blank.</span>
                            <br>
                            <label for="amount"><b>Amount to be transferred</b></label>
                            <br>
                            <input type="number" id="amount" name="amount" min="0" class="form-control">
                            <span class="error-message" style="display:none;">Field can't be kept blank.</span>
                            <br>
                            <button class="btn btn-success" type="submit" value="submit" name="submit" id="submit">Transfer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section -->
    <section class="sec-3">
        <footer>
            <div class="container">
                <p>© vI Bank</p>
                <p>Developed by Vadiraj Inamdar</p>
            </div>
        </footer>
    </section>
    <script>
        //validate amount input
        var amountInput = document.getElementById("amount");
        var amountErrorMessage = document.getElementById("amount-error");
        amountInput.addEventListener("input", function(event) {
            if (isNaN(event.target.value)) {
                event.target.classList.add("error");
                amountErrorMessage.style.display = "inline";
            } else {
                event.target.classList.remove("error");
                amountErrorMessage.style.display = "none";
            }
        });

        //validate all input fields on submit
        var submitButton = document.getElementById("submit");
        submitButton.addEventListener("click", function(event) {
            var senderInput = document.getElementById("sender");
            var receiverInput = document.getElementById("receiver");
            var senderErrorMessage = document.getElementById("sender-error");
            var receiverErrorMessage = document.getElementById("receiver-error");

            if (senderInput.value === "") {
                senderInput.classList.add("error");
                senderErrorMessage.style.display = "inline";
                event.preventDefault();
            } else {
                senderInput.classList.remove("error");
                senderErrorMessage.style.display = "none";
            }

            if (receiverInput.value === "") {
                receiverInput.classList.add("error");
                receiverErrorMessage.style.display = "inline";
                event.preventDefault();
            } else {
                receiverInput.classList.remove("error");
                receiverErrorMessage.style.display = "none";
            }

            if (isNaN(amountInput.value)) {
                amountInput.classList.add("error");
                amountErrorMessage.style.display = "inline";
                event.preventDefault();
            } else {
                amountInput.classList.remove("error");
                amountErrorMessage.style.display = "none";
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('myInput');
            input.addEventListener('input', function(event) {
                const value = event.target.value;
                if (value.length === 6 && /^\d+$/.test(value)) {
                    input.classList.add('valid');
                } else {
                    input.classList.remove('valid');
                }
            });
        });
    </script>




    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>