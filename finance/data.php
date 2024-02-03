<?php
    require_once "conn.php";
    $sql = "SELECT COUNT(team_name) as count_name, SUM(team_funded_amount) as team_fund_amount, SUM(team_fund_remaining) as funding_utilized FROM teamdetails";
    $query = $conn->query($sql);
    $row = mysqli_fetch_assoc($query);
    $data = [
        'team_count' => $row['count_name'],
        'funding_utilized' => $row['funding_utilized'],
        'funded_amount' => $row['team_fund_amount']
    ];
    echo json_encode($data);
?>