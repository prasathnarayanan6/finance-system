<?php 
require "./class.php";
$code = new Code();
if(isset($_POST['submit']))
{
   $external_funding_organization = $_POST['funding_org'];
   $unded_amount = $_POST['ext_fund_amount'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Funding</title>
    <link rel="stylesheet" href="../style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"/>
    <script src="../assets/alertifyjs/alertify.min.js"></script>
    <link rel="stylesheet" href="../assets/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="../assets/alertifyjs/css/themes/default.min.css" />
    <link rel="stylesheet" href="./styles.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
     @font-face 
        {
            font-family: 'myFirstFont';
            src: url('../assets/font/static/JosefinSans-Medium.ttf');
        }
    body
    {
        font-family: 'myFirstFont';
    }   
    </style>
</head>
<body>
<div class="spinner-wrapper">
   <div class="spinner-border text-success" role="status">
      <span class="sr-only">Loading...</span>
   </div>
</div>  
<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-green-700">
      <ul class="space-y-2 font-medium">
        <li>
            <a href="#" class="flex items-center ps-5 pb-4 text-gray-900  rounded-lg dark:text-white group">
               <img src="../assets/images/nirmaaniitm.svg" width="130px"></img>
            </a>
        </li>
        <li>
            <span class="flex items-center ps-4 text-bold pb-4 text-gray-900 rounded-lg dark:text-white group">
               <center>Nirmaan - IIT Madras</center>
            </span>
        </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/dashboard.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa fa-dashboard"></i>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/startup.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa fa-graduation-cap"></i>
               <span class="ms-3">Startups</span>
            </a>
         </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/externalfunding.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa-solid fa-circle-dollar-to-slot"></i>               
               <span class="ms-3">External Funding</span>
            </a>
         </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/settings.php'" class="flex items-center mb-2 p-2 text-gray-900 transition duration-75 rounded-lg hover:bg-green-100 dark:hover:bg-grey-700 dark:text-white group">
               <i class="fa fa-gear"></i>
               <span class="ms-3">Settings</span>
            </a>
         </li>
      </ul>
      <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
         <li>
            <span class="flex items-center mb-2 ps-5 text-gray-900 transition duration-75 rounded-lg dark:text-white group">
               <img src='../assets/images/nirmaaniitm.svg' width='100px'></img>
            </span>
         </li>
      </ul>
   </div>
</aside>
<div class="p-0 sm:ml-64">
    <nav class="navbar navbar-white mb-4 bg-light">
        <a class="navbar-brand" href="#"><span class="text-success">Nirmaan IITM</span> - <span>Finance</span></a>
        <span class="d-flex justify-content-end">
            Welcome Finance 
        </span>
    </nav>
    <div class="container-fluid">
        <span class="text-secondary">Add External Funding organization</span> 
        <div class="row mt-2">
            <div class="col">
                 <span><a href="externalfunding.php"><i class="fas fa-backward"></i></a></span>
            </div>
        </div>
         <div class="row mt-5">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                        <div class="card-body">
                           <form action="" method="post">
                                <input type="text" placeholder="Funding organization Name" class="form-control form-control-sm" name="funding_org"/> <br>
                                <select class="form-select form-select-sm" name="team">
                                        <option>--</option>
                                        <option>Nirmaan-seed</option>
                                        <option>External-Funding</option>
                                </select><br>
                                <input type="text" placeholder="Funded Amount" class="form-control form-control-sm" name="ext_fund_amount"/> <br/>
                                <button type="submit" class="btn btn-success btn-sm text-dark">Add</button>
                           </form>
                        </div>
                </div>
            </div>
         </div>
    </div>
</div>
</body>
<script src="script.js"></script>
</html>