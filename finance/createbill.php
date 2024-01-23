<?php 
require "class.php";
$code = new Code();
$rows = $code->startups_data();
if(isset($_POST['submit'])) {
        $studentid = $_POST['studentid'];
        $student_team = $_POST['team_name'];
        $bill_date = $_POST['dob'];
        $purchaseditem = $_POST['purchaseitem'];
        $purchased_amount = $_POST['pamount'];
        $purchased_invoice_number = $_POST['pinvoicenumber']; 
        $way_of_purchase = $_POST['wayofpurchase'];
        $purchase_with = $_POST['pwith'];
        $code->create_bill($studentid, $bill_date, $purchaseditem, $purchased_amount, $purchased_invoice_number, $way_of_purchase, $purchase_with, $invoice_file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bill</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container-fluid">
            <center><h5 class="mt-5"><span>CREATE BILL</span></h5></center>
            <form method="post">
            <div class="row mt-5">
                    <div class="col-md-12">
                         <span class="text-dark">Reports / Create Bill</span>
                    </div>
                    <div class="col-md-6 pt-3">
                            <select id="categorySelect" class="form-select" name="team_name">
                            <option>Select Team</option>
                                 <?php foreach($rows as $row) { ?>
                                    <option><?php echo $row['team_name']; ?></option>
                                <?php } ?>
                            </select>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Student ID" name="studentid" required/>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Date of Bill" name="dob" required/>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Purchased Item" name="purchaseitem" required/>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Purchased Amount" name="pamount" required/>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Purchased Invoice Number" name="pinvoicenumber" required/>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Way of Purchase" name="wayofpurchase" required/>
                    </div>
                    <div class="col-md-6 pt-3">
                            <input type="text" class="form-control" placeholder="Purchase with" name="pwith" required/>
                    </div>
                    <center>
                    <div class="col-md-6 pt-3">
                            <button class="btn btn-primary" name="submit">Create Bill</button>
                    </div>
                    </center>
            </div>
            </form>
    </div>
</body>
</html>