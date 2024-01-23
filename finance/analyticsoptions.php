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
                    <center><span class="h6">Please select a Data to Proceed</span><center>
                    <div class="row pt-4">
                        <div class="col-md-4">
                            <a href="">
                                <div class="circle pt-3">
                                    <span class="h5 text-white">3 Cohort</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <div class="circle pt-3">
                                    <span class="h5 text-white">6 Cohort</span>
                                </div>
                            </a>
                        </div>
                        <!-- <center> -->
                        <div class="col-md-4 mb-4">
                            <a href="">
                                <div class="circle pt-3">
                                    <span class="h5 text-white">10 Cohort</span>
                                </div>
                            </a>
                        </div><br>
                        <div class="col-md-12 mt-5">
                            <form>
                                <input type="text" class="form-control form-control-sm" placeholder="Enter the Number of Data"></input><br>
                                <button type="submit" class="btn btn-outline-success">View</button>
                            </form>
                        </div>
                        <center>
                            <div class="progress mt-3" style="height: 6px;">
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