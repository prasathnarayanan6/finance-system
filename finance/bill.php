<?php 
    require_once "class.php";
    $code = new Code();
    if(isset($_GET['Tid']))
    {
        $id = $_GET['Tid'];
        $row = $code->bill($id);
    }
    else
    {
        echo "Undefined Issue has been araised please contact IT Team";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bills</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../style.css"/>
    <link rel="stylesheet" href="../assets/lity/lity-2.4.1/dist/lity.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/lity/lity-2.4.1/vendor/jquery.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12">
                <center><h2 class="text-success">Team <?php echo $id; ?></h2></center>
            </div>
            <div class="col-md-4 mt-4">
                    <span class="text-secondary">Reports / Bills</span>
            </div>
            <div class="col-md-4 mt-4">
                    <span>
                        <a href="excel.php" class="btn btn-success btn-sm" data-lity data-lity-target="excel.php">Download Excel</a>
                    </span>
            </div>
            <div class="col-md-4 mt-4 d-flex justify-content-end">
                    <span>
                        <a href="" class="btn btn-primary btn-sm" data-lity data-lity-target="createbill.php">Create Bill</a>
                    </span>
            </div>
            <div class="col-md-12 mt-2">
                        <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <span>Billings of Team : <?php echo $id; ?></span>  
                                        </div>
                                        <div class="mt-4 table-responsive">
                                                <table class="table" id="myTable">
                                                        <thead>
                                                                <tr class="text-secondary">
                                                                    <th scope="col">Student ID</th>
                                                                    <th scope="col">Date of Bill</th>
                                                                    <th scope="col">Purchased Item / Vendor Name</th>
                                                                    <th scope="col">Purchased Amount</th>
                                                                    <th scope="col">Purchased Invoice Number</th>
                                                                    <th scope="col">Way of Purchase</th>
                                                                    <th scope="col">Purchase with</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody class="tbody">
                                                        <?php
                                                                    $sql = "SELECT bills.*, teamdetails.* FROM bills, teamdetails WHERE bills.team_name='". $id."' AND teamdetails.team_name=bills.team_name";
                                                                    // $sql = "SELECT * FROM bills WHERE team_name='Mainto'";
                                                                    $query = $conn->query($sql);
                                                                    while($result = mysqli_fetch_assoc($query))
                                                                    {               
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $result['studentid']; ?></td>
                                                                <td><?php echo $result['date_of_bill']; ?></td>
                                                                <td><?php echo $result['purchased_item']; ?></td>
                                                                <td><?php echo $result['purchased_amount']; ?></td>
                                                                <td><?php echo $result['purchase_invoice_number']; ?></td>
                                                                <td><?php echo $result['way_of_purchase']; ?></td>
                                                                <td><?php echo $result['purchase_with']; ?></td>
                                                                <!-- <td></td> -->
                                                                <td>
                                                                <div class="dropdown">
                                                                            <button type="button" class="btn" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fas fa-ellipsis-vertical"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li><a class="dropdown-item" href="" data-lity data-lity-target='./bill.php?Tid=${response[i].teamID} '">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="" data-lity data-lity-target='./bill.php?Tid=${response[i].teamID} '">Delete</a></li>
                                                                            </ul>
                                                                </div>
                                                                </td>
                                                            </tr>
                                                        <?php }?>
                                                        </tbody>
                                                </table>
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
</body>
</html>