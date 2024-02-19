<?php 
require "./conn.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
class Code 
{
function mail()
{
    $mail = new PHPMailer(true); 
    try 
    {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'prasathnarayanan6@gmail.com';
        $mail->Password = 'gift huxn psmv lhfg'; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 
        $mail->setFrom('prasathnarayanan6@gmail.com', 'Name');
        $mail->addAddress('prasathnarayanan6@gmail.com', 'Recipient'); 
        $mail->isHTML(true); 
        $mail->Subject = 'Reg - Team Registeration';
        $mail->Body = 'Team Has been Successfully Registered';
        $mail->AddCustomHeader('X-Priority: 1');
        $mail->AddCustomHeader('X-MSMail-Priority: High');
        $mail->send();
        echo '<script>alert("Registered Successfully")</script>';
        //echo 'Email has been sent successfully!';
    } 
    catch (Exception $e) 
    {
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
function encryption()
{

}
function settings()
{
    global $conn;
    $sql = "SELECT id, name, email, contact, designation FROM contact";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
function dashboard()
{

}
function login($email, $password)
{
    global $conn;
    $sql = "SELECT email, password FROM user WHERE email='".$email."' AND password='".$password."'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_fetch_array($result);
    if($num > 0){
        header("Location: dashboard.php");
    }
    else
    {
        echo "Incorrect";
    }
}  
function create_startup($team_name, $team_doj, $team_contact, $team_mentor_email, $team_funded_amount, $team_details)
{
    global $conn;
    $substrphone = substr($team_contact, 0, 5);
    $substremail = substr($team_mentor_email,0, 5);
    $teamid = md5($team_mentor_email);
    $sql="INSERT INTO teamdetails(teamid, team_name, team_doj, team_contact, team_mentor_email, team_funded_amount, team_fund_remaining, team_details) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $teamid, $team_name, $team_doj, $team_contact, $team_mentor_email, $team_funded_amount, $team_funded_amount, $team_details);
    $stmt->execute();
}
function startups_data()
{
    global $conn;
    $sql = "SELECT * FROM teamdetails";
    $result = $conn->query($sql);
    if ($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } 
    else 
    {
        return []; 
    }   
}
function IPAddress()
{
    $client_ip = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client_ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        echo $client_ip;
    }         
}
function bill($id)
{
    global $conn;
    $sql = "SELECT * FROM teamdetails WHERE teamid='".$id."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
function create_bill($studentid, $student_team, $bill_date, $purchaseditem, $purchased_amount, $purchased_invoice_number, $way_of_purchase, $purchase_with)
{
    global $conn;
    $sql = "INSERT INTO bills(studentid, team_name, date_of_bill, purchased_item, purchased_amount, purchase_invoice_number, way_of_purchase, purchase_with) VALUES(?,?,?,?,?,?,?,?)";
            
    $sql1 = "SELECT team_name, team_mentor_email, team_fund_remaining FROM teamdetails WHERE team_name='".$student_team."'";
    $query = $conn->query($sql1);
    $result = mysqli_fetch_assoc($query);
    $amount = $result['team_fund_remaining'];
    //select query execution ends here
    $amount_remaining = $amount-$purchased_amount; // lil bit select query

    $sql2 = "UPDATE teamdetails SET team_fund_remaining='".$amount_remaining."' ";
    $query2 = $conn->query($sql2);
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $studentid, $student_team, $bill_date, $purchaseditem, $purchased_amount, $purchased_invoice_number, $way_of_purchase, $purchase_with);
    $stmt->execute();
}
function total_teams()
{
    global $conn;
    $sql = "SELECT COUNT(teamid) AS team_count FROM teamdetails";
    $query = $conn->query($sql);
    $result = mysqli_fetch_assoc($query);
    $row = $result['team_count'];
    echo $row;
}
function external_funding($external_funding_id, $external_funding_organization, $teamid, $funded_amount)
{
    global $conn;
    $sql = "INSERT INTO external_funding(external_funding_id, external_funding_organization, teamid, funded_amount) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $external_funding_id, $external_funding_organization, $teamid, $funded_amount);
    $stmt->execute();    
}
}
// $code = new Code();
// $code->external_funding("1","t", "ee", "fin");
?>