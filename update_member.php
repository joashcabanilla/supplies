<?php
include('connection.php');
$id = $_POST['id'];
$voters_id = $_POST['voters_id'];
$memid = $_POST['memid'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$branch = $_POST['branch'];
$regs_date = $_POST['regs_date'];
$giveaway_received = $_POST['giveaway_received'];
$date_received = $_POST['date_received'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$comp_name = $host;
$give_away_cnt = "1";
$regs_face2face_cnt = "1";
$sql = "UPDATE `voters` SET  `voters_id`='$voters_id', `memid`='$memid', `lastname`='$lastname', `firstname`='$firstname', `middlename`='$middlename', `branch`='$branch', `regs_date`='$regs_date', `giveaway_received`='$giveaway_received', `date_received`= '$date_received', `comp_name`= '$comp_name', `give_away_cnt`= '$give_away_cnt', `regs_face2face_cnt`='$regs_face2face_cnt' WHERE id='$id' ";
// $sql = "UPDATE `voters` SET  `voters_id`='$voters_id', `memid`='$memid', `lastname`='$lastname', `firstname`='$firstname', `middlename`='$middlename', `branch`='$branch', `regs_date`='$regs_date', `giveaway_received`='$giveaway_received', `date_received`= '$date_received', `comp_name`= '$comp_name', `regs_face2face_cnt`='$regs_face2face_cnt' WHERE id='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $data = array(
        'status'=>'true',
    );
    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
    );
    echo json_encode($data);
}
?>
