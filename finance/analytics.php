<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href="../assets/bootstrap/css/bootstrap.min.css"/>
    <link rel='stylesheet' href="../style.css"/>
    <link rel="stylesheet" href="../assets/lity/lity-2.4.1/dist/lity.css" />
    <script src="../assets/lity/lity-2.4.1/vendor/jquery.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container-fluid">
         <div class="row mt-5">
                <center><span class="h3"><span class="text-success">NIRMAAN</span> <span>FINANCE</span></center>
                <div class="col-md-6">
                    <img src="../assets/images/6224584.jpg" alt='image' width='100%'></img>
                    <center><span>Designed and Developed by IIT Madras</span></center>
                </div>
                <div class="col-md-6 mt-5">
                    <center><span class="h3">Analytics</span><center>
                    <center><span class="h6">Please select a Data to Proceed</span><center>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <a href="" data-lity data-lity-target="./analyticsoptions.php">
                            <div class="card analyticscard">
                                <div class="card-body">
                                    <span class="h1 text-dark"><i class="fa fa-keyboard" aria-hidden="true"></i></span>
                                    <div class="card-title text-dark h5">By Cohort</div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="" data-lity data-lity-target="./analyticstime.php">
                            <div class="card analyticscard">
                                <div class="card-body">
                                    <span class="h1 text-dark"><i class="fa-solid fa-clock"></i></span>
                                    <div class="card-title text-dark h5">By Year</div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <center>
                        <div class="col-md-6 mt-4">
                            <a href="" data-lity data-lity-target="./analyticsteam.php">
                            <div class="card analyticscard">
                                <div class="card-body">
                                    <span class="h1 text-dark"><i class="fa-solid fa-users"></i></span>
                                    <div class="card-title text-dark h4">By Team</div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="progress mt-3" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class='mt-2'>Step 1 / Step 2</span>
                        </center>
                    </div>
                </div>
         </div>
    </div>
</body>
<script src="../assets/lity/lity-2.4.1/dist/lity.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>