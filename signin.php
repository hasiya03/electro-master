<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="css/signin.css">
</head>

<body>


    <?php include 'header.php'; ?>


    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class=" a1 mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class=" a2 mb-4 pb-3">Log In</h4>
                                            <div class="col-12 d-none" id="msgdiv">
                                                <div class="alert alert-danger" role="alert" id="msg">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="loginemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="loginpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="#" class="btn mt-4">submit</a>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="a2 mb-4 pb-3">Sign Up</h4>
                                            <div class="col-12 d-none" id="msgdiv">
                                                <div class="alert alert-danger" role="alert" id="msg">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="text" name="logmobile" class="form-style" placeholder="Your Mobile No" id="logmobile" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">

                                                <i class="input-icon uil uil-user"></i>
                                                <select class="form-select form-style" name="loggender" id="loggender">
                                                    <option selected>Select Your Gender</option>
                                                    <?php
                                                    $rs = Database::search("SELECT * FROM `gender`");
                                                    $num = $rs->num_rows;

                                                    for ($x = 0; $x < $num; $x++) {
                                                        $data = $rs->fetch_assoc();
                                                    ?>
                                                        <option value="<?php echo $data["gender_id"]; ?>">
                                                            <?php echo $data["gender_name"]; ?>

                                                        </option>
                                                    <?php
                                                    }

                                                    ?>


                                                </select>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="#" class="btn mt-4" onclick="signin();">submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--watchlist-->
    <div class="offcanvas offcanvas-end  text-bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">watchlist
                <i class="bi bi-bookmark-heart-fill"></i>
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">item image</th>
                            <th scope="col">item name</th>
                            <th scope="col">price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="pics/products/price drop for a limited time.jpg" class="cartimg rounded-circle " alt="product image"></td>
                            <td>tablet</td>
                            <td>Rs:2000</td>
                            <td><i class="bi bi-x-circle-fill"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img src="pics/products/Should You Use an XLR or USB Mic for Content Creation_ - FilterGrade.jpg" class="cartimg rounded-circle " alt="product image"></td>
                            <td>tablet</td>
                            <td>Rs:2000</td>
                            <td><i class="bi bi-x-circle-fill"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <img src="pics/products/JBL Headphones.jpg" class="cartimg rounded-circle " alt="product image">
                            </td>
                            <td>tablet</td>
                            <td>Rs:2000</td>
                            <td><i class="bi bi-x-circle-fill"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

     <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>