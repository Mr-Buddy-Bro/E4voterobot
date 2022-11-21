<?php 

include('database_conn.php');

$voter_email = $_POST['voter_email'];
$cand_id = $_POST['cand_id'];
$role = $_POST['role'];

$msql = "SELECT * FROM candidate WHERE id=$cand_id";
    $mresult = $conn->query($msql);
    $mrow = $mresult->fetch_assoc();
 $vote = $mrow['vote'];
 $new_vote = $vote+1;

$sql = "UPDATE candidate SET vote=$new_vote WHERE id=$cand_id";

if ($conn->query($sql) === TRUE) {
  //on success
} else {
  echo "Error updating candidate: " . $conn->error;
}

//update voter
$sql = "UPDATE voter SET $role=$cand_id WHERE email='$voter_email'";

if ($conn->query($sql) === TRUE) {
  //on success
} else {
  echo "Error updating voter: " . $conn->error;
}


print_r($voter_email);

?>