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
    <style>
.circle
{
  height: 78px;
  width: 78px;
  background-color: green;
  border-radius: 50%;
  display: inline-block; 
  box-shadow: 0px 5px 12px rgba(0,0,0.7);
}
.circle:hover
{
    transform: scale(1.2);
    transition : 
}
    </style>
</head>
<body>
    <div class="container-fluid">
         <div class="row mt-5">
                <center><span class="h3"><span class="text-success">NIRMAAN</span> <span>FINANCE</span></center>
                <div class="col-md-6">
                    <img src="../assets/images/charts.jpg" alt='image' width='100%'></img>
                    <center><span>Designed and Developed by IIT Madras</span></center>
                </div>
                <div class="col-md-6 mt-5">
                    <center><span class="h3">Analytics</span><center>
                    <center><span class="h6">Get a Data in two steps</span><center>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <a href="">
                                <div class="pt-3">
                                    <input class="form-control form-control-sm" placeholder="date" type="date"/>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 mb-1">
                            <a href="">
                                <div class="pt-3">
                                    <span class="text-dark text-center">To</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 mb-1">
                            <a href="">
                                <div class="pt-3">
                                    <input class="form-control form-control-sm" placeholder="date" type="date"/>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="">
                                <div class="pt-3">
                                    <button class="btn btn-outline-success btn-success" placeholder="date" type="submit">View</button>
                                </div>
                            </a>
                        </div>
                        <center>
                            <div class="progress mt-5" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class='mt-2'>Step 2 / Step 2</span>
                        </center>
                    </div>
                </div>
            </div>     
    </div>
</body>
<script src="../assets/lity/lity-2.4.1/dist/lity.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>