<?php
    require_once './database.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {;
        $name = $_POST['appointment_id'];
        $id = $_POST['appointment_timestamp'];
        $email = $_POST['doctor_id'];
        $phone = $_POST['patient_id'];
        

        $sql = "INSERT INTO patient(appointment_id,appointment_timestamp,doctor_id,patient_id) VALUES(?,?,?,?)";
        $data = array($name,$email);
        $cmd = $db->prepare($sql);
        $cmd->execute($data);
    }
?>

<form action="" method="post">
    <div>
        <label for="">appointment_id</label>
        <input type="text" name="id">
    </div>
    <div>
        <label for="">appointment_timestamp</label>
        <input type="text"name="timestamp">
    </div>
    <div>
        <label for="">doctor_id</label>
        <input type="email" name="id">
    </div>
    <div>
        <label for="">Patient_id</label>
        <input type="text" name="id">
    </div>
    <div>
        
    </div>
    <div>
       
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>
