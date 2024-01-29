<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startups</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href="../assets/bootstrap/css/bootstrap.min.css"/>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href="../style.css"/>
    <link rel="stylesheet" href="./styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/lity/lity-2.4.1/dist/lity.css"/>
    <script src="../assets/lity/lity-2.4.1/vendor/jquery.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
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
<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

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
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/invoices.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
               <i class="fa fa-folder-open"></i>
               <span class="ms-3">Invoices</span>
            </a>
         </li>
         <li>
            <a href="javascript:window.location.href='http://localhost:81/IMS/finance/reports.php'" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-grey-700 group">
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
    <nav class="navbar navbar-white mb-4  bg-light">
        <a class="navbar-brand" href="#"><span class="text-success">Nirmaan IITM</span> - <span>Finance</span></a>
    </nav>
    <div class="container-fluid">
         <div class="text-m text-secondary">Startups / Overview</div>
         <div class="row mt-3">
               <center>
               <div class="col-md-3 col-lg-3 col-sm-4 pt-1">
                        <div class="bg-success card">
                           <div class="card-body">
                                 <h2 class="card-title">
                                       <center><span class="text-white h6">Startups Details</span><center><br>
                                       <div class="row">
                                             <div class="col-md-4 col-sm-4">
                                                   <span class="text-white h1"><i class='fa fa-rocket'></i></span><br>
                                                   <span class="text-sm text-white">Details</span>
                                             </div>
                                             <div class="col-md-4 a col-sm-4">
                                                   <a href='' class="text-white " data-lity data-lity-target="./analytics.php">
                                                      <span class="text-white h1 startuphover"><i class='fa fa-pie-chart'></i></span>
                                                   </a><br>
                                                   <span class="text-sm text-white">Analytics</span>
                                             </div>
                                             <div class="col-md-4 a col-sm-4">
                                                   <a href=''>
                                                      <span class="text-white h1"><i class='fa fa-book'></i></span>
                                                   </a><br>
                                                   <span class="text-sm text-white">Reports</span>
                                             </div>
                                       </div>
                                       <!-- <span class="text-white pt-2 text-lg"><b><i class="fa fa-building" aria-hidden="true"></i></b></span> -->
                                 </h2>
                           </div>
                        </div>
               </div>
               </center>
               <div class="col-md-12 mt-4">
                     <div class="card">
                           <div class='card-body'>
                                 <div class="card-title">
                                    <div class="row">
                                       <div class="col-md-4">
                                             <h3>STARTUPS</h3>
                                       </div>
                                       <div class="col-md-4">
                                             <span class="d-flex justify-content-end"><input type="text" class="form-control form-control-sm" placeholder="Search Team" value="" id="myInput" onKeyup="searchFun()"/></span>
                                       </div>
                                       <div class="col-md-4">
                                             <span class="d-flex justify-content-end"><button class="btn btn-success btn-sm" data-lity data-lity-target="createfund.php">Create Startup</button></span>
                                       </div>
                                    </div>   
                                 </div><!--card title -->
                                 <div class="pt-3 table-responsive">
                                    <table class="table" id="myTable">
                                       <thead>
                                             <tr class="text-success">
                                                <th scope="col">Team Name</th>
                                                <th scope="col">Cohort</th>
                                                <th scope="col">Funding Disbursed</th>
                                                <th scope="col">Funding Utilized</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col">Action</th>
                                             </tr>
                                       </thead>
                                       <tbody class="tbody">
                                       </tbody>
                                    </table>
                                          <!-- <nav aria-label="..." class="">
                                                <ul class="pagination">
                                                   <li class="page-item disabled">
                                                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                   </li>
                                                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                   <li class="page-item active">
                                                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                   </li>
                                                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                   <li class="page-item">
                                                      <a class="page-link" href="#">Next</a>
                                                   </li>
                                                </ul>
                                          </nav> -->
                                 </div>
                           </div>
                     </div>
               </div>
         </div>
    </div>
</div>
<script src="script.js"></script>
<script src="../assets/lity/lity-2.4.1/dist/lity.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   const searchFun = () => {
      let filter = document.getElementById('myInput').value.toUpperCase();

      let myTable = document.getElementById('myTable');
      let tr = myTable.getElementsByTagName('tr');

      for(var i=0; i<tr.length; i++)
      {
         let td=tr[i].getElementsByTagName('td')[0];
         if(td)
         {
            let textvalue = td.textContent || td.innerHTML;

            if(textvalue.toUpperCase().indexOf(filter) > -1)
            {
               tr[i].style.display = "";
            }else{
               tr[i].style.display = "none";
            }
         }
      }
   }
   const Data = () => {
      fetch('http://localhost:81/IMS/finance/startupdata.php').then((res) => res.json())
      .then(response => {
         console.log(response);
         let output = '';
         for(let i in response)
         {
            output += `<tr>
               <td>${response[i].TeamName}</td>
               <td>${response[i].team_date_of_Joining}</td>
               <td>${response[i].team_funded_amount}</td>
               <td>${response[i].team_date_of_Joining}</td>
               <td>${response[i].team_funded_amount}</td>
               <td>
                     <div class="dropdown">
                        <button type="button" class="btn" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="fas fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                           <li><a class="dropdown-item" href="" data-lity data-lity-target='./bill.php?Tid=${response[i].teamID} '">View</a></li>
                           <li><a class="dropdown-item" href="" data-lity data-lity-target='./bill.php?Tid=${response[i].teamID} '">View Members</a></li>
                        </ul>
                     </div>
               </td>
            </tr>`;
         }
         document.querySelector('.tbody').innerHTML = output;
      }).catch(error => console.log(error))
   }
   setTimeout(Data, 0)
   setInterval(Data, 30000)
</script>
</body>
</html>