<?php 
require "./class.php";
$code = new Code();
$rows = $code->startups_data();
$data = [];
foreach ($rows as $row) {
    $rowData = [
        'teamID' => isset($row['teamid']) ? $row['teamid'] : null,
        'TeamName' => isset($row['team_name']) ? $row['team_name'] : null,
        'team_date_of_Joining' => isset($row['team_doj']) ? $row['team_doj'] : null,
        'team_contact' => isset($row['team_contact']) ? $row['team_contact'] : null,
        'team_mentor_email' => isset($row['team_mentor_email']) ? $row['team_mentor_email'] : null,
        'team_funded_amount' => isset($row['team_funded_amount']) ? $row['team_funded_amount'] : null,
        'team_details' => isset($row['team_details']) ? $row['team_details'] : null,
    ];
    $data[] = $rowData;
}
echo json_encode($data);
?>