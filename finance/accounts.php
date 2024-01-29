<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startups</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href="../assets/bootstrap/css/bootstrap.min.css"/>
    <link rel='stylesheet' href="../style.css"/>
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="../assets/lity/lity-2.4.1/dist/lity.css"/>
    <script src="../assets/lity/lity-2.4.1/vendor/jquery.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    .a:hover {
      transform: scale(1.2); /* Scale the element to 1.5 times its size */
      transition: transform 0.3s ease; /* Add a smooth transition effect */
    }
  </style>
</head>
<body>
<div class="spinner-wrapper">
   <div class="spinner-border text-success" role="status">
      <span class="sr-only">Loading...</span>
   </div>
</div>
   
<!-- <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button> -->

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
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/accounts.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa fa-credit-card"></i>
               <span class="ms-3">Accounts</span>
            </a>
         </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/accounts.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa fa-folder-open"></i>
               <span class="ms-3">Invoices</span>
            </a>
         </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/reports.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa fa fa-book"></i>
               <span class="ms-3">Reports</span>
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
<div class="p-1 sm:ml-64">
    <nav class="navbar navbar-white mb-4 bg-light">
        <a class="navbar-brand" href="#"><span class="text-success">Nirmaan IITM</span> - <span>Finance</span></a>
        <span class="d-flex justify-content-end">
            Welcome 
        </span>
    </nav>
    <div class="container-fluid">
        <span class="text-secondary">Dashboard / Accounts</span> 
         <div class="row mt-5">
            <div class="col-md-12">
                        <div class="card">
                           <div class='card-body'>
                                 <div class="card-title">
                                    <div class="row">
                                       <div class="col-md-6">
                                             <h3>Accounts</h3>
                                       </div>
                                       <div class="col-md-6">
                                             <span class="d-flex justify-content-end"><button class="btn btn-success btn-sm" data-lity data-lity-target="createfund.php">Create Funding</button></span>
                                       </div>
                                    </div>   
                                 </div><!--card title -->
                                 <div class="pt-3 table-responsive">
                                    <table class="table">
                                       <thead>
                                             <tr class="text-success">
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Departmemt</th>
                                                <th scope="col">Bank Name</th>
                                                <th scope="col">Bank Account No:</th>
                                                <th scope="col">IFSC Code</th>
                                                <th scope="col">Action</th>
                                             </tr>
                                       </thead>
                                       <tbody>
                                             <tr id="myTable">
                                                <td scope="row"><span>IC395589</span></td>
                                                <td>Prasath Narayanan</td>
                                                <td>prasathnarayanan6@gmail.com</td>
                                                <td>Mechanical</td>
                                                <td>HDFC</td>
                                                <td>56798765432</td>
                                                <td>HDFC00012</td>
                                                <td class="text-secondary"><a href="javascript:alert('Admin approval required to make action.')"><i class="fa fa-ellipsis-v"></i></a></td>
                                             </tr>
                                             <tr id="myTable">
                                                <td scope="row"><span>IC395589</span></td>
                                                <td>Prasath Narayanan</td>
                                                <td>prasathnarayanan6@gmail.com</td>
                                                <td>Mechanical</td>
                                                <td>HDFC</td>
                                                <td>56798765432</td>
                                                <td>HDFC00012</td>
                                                <td class="text-secondary"><a href="javascript:alert('Admin approval required to make action.')"><i class="fa fa-ellipsis-v"></i></a></td>
                                             </tr>
                                             <tr id="myTable">
                                                <td scope="row"><span>IC395589</span></td>
                                                <td>Prasath Narayanan</td>
                                                <td>prasathnarayanan6@gmail.com</td>
                                                <td>Mechanical</td>
                                                <td>HDFC</td>
                                                <td>56798765432</td>
                                                <td>HDFC00012</td>
                                                <td class="text-secondary"><a href="javascript:alert('Admin approval required to make action.')"><i class="fa fa-ellipsis-v"></i></a></td>
                                             </tr>
                                       </tbody>
                                    </table>
                                 </div>
                           </div>
                        </div>
            </div>
         </div>
    </div>
</div>
<script src="./script.js"></script>
</body>
</html>