<?php
    require_once './database.php';
    if($_SERVER['REQUEST_MMETHOD'] == 'POST') {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO patient(name,email) VALUES(?,?)";
        $data = array($name,$email);
        $cmd = $db->prepare($sql);
        $cmd->execute($data);
    }
?>

<form action="" method="post">
    <div>
        <label for="">Patient Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Patient ID</label>
        <input type="text"name="id">
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">Phone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="">Age</label>
        <input type="number" name="age">
    </div>
    <div>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
    </div>
    <div>
        <input type="submit" value="Add">
    </div>
</form>