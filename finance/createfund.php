<?php 
require "./class.php";

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
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/alertifyjs/alertify.min.js"></script>
    <link rel="stylesheet" href="../assets/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="../assets/alertifyjs/css/themes/default.min.css" />
    <link rel="stylesheet" href="./styles.css"/>
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
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-6 pt-5">
                        <h5 class="text-center text-secondary">Create Startup</h5>
                        <img src="../assets/images/charts.jpg" alt='image' width='100%'></img>
                        <center><span>Designed and Developed by IIT Madras</span></center>
                </div>
                <div class="col-md-6">
                        <form method="post" action="" class="g-3 needs-validation was-validated">
                        <div class="row mt-5">
                            <center><span class="h3"><span class="text-success">NIRMAAN</span> <span>FINANCE</span></center>
                            <div class="col-md-12 pt-3">
                                <input type="text" name="team_name" class="form-control is-valid" id="validationCustome01" placeholder="Team Name" required/>
                                <!-- <div class="valid-feedback">
                                                Looks good!
                                </div> -->
                            </div>
                            <div class="col-md-12 pt-3">
                                        <label for="dateInput" class="text-secondary">Enter Date Of Joining:</label>
                                        <input type="date" id="dateInput" name="date_of_joining" class="form-control is-valid" placeholder="YYYY-MM-DD"  required/>
                            </div>
                            <div class="col-md-12 pt-3">
                                <input type="text" class="form-control is-valid" name="team_contact" placeholder="Team contact Number" required/>
                            </div>
                            <div class="col-md-12 pt-3">
                                <input type="email" class="form-control is-valid" name="team_mentor_email" placeholder="Team Founder Mail" required/>
                            </div>
                            <div class="col-md-12 pt-3">
                                <input type="text" class="form-control is-valid" name="team_amount_funded" placeholder="Amount Funded" required/>
                            </div>
                            <div class="col-md-12 pt-3">
                                <textarea class="form-control is-valid" name="team_details" placeholder="More Details About Team(optional)" required></textarea>
                            </div>
                            <center>
                            <div class="col-md-12 pt-3">
                                <button type="submit" name="submit" class="btn btn-success">Register</button>
                            </div>
                            </center>
                        </div>
                        </form>
                </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    // Enable Bootstrap validation
    (function () {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
    })();
</script>
</html>
<?php 

if(isset($_POST['submit']))
{
    $team_name = $_POST['team_name'];
    $team_doj = $_POST['date_of_joining'];
    $team_contact = $_POST['team_contact'];
    $team_mentor_email=$_POST['team_mentor_email'];
    $team_funded_amount= $_POST['team_amount_funded'];
    $team_details=$_POST['team_details'];
    $create = new Code();
    $create->create_startup($team_name, $team_doj, $team_contact, $team_mentor_email, $team_funded_amount, $team_details);
    echo '<script>alertify.success("Team created Successfully");</script>';
}
?>