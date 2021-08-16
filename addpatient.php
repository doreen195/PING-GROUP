<?php
    require_once './database.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {;
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $sql = "INSERT INTO patient(id,name,email,phone,age,gender) VALUES(?,?,?,?,?,?)";
        $data = array($name,$email);
        $cmd = $db->prepare($sql);
        $cmd->execute($data);
    }
?>

<form action="" method="post">
    <div>
        <label for="">patient_id</label>
        <input type="text" name="id">
    </div>
    <div>
        <label for="">name</label>
        <input type="text"name="name">
    </div>
    <div>
        <label for="">email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">phone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="">age</label>
        <input type="number" name="age">
    </div>
    <div>
        <label for="">gender</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
    </div>
    <div>
        <input type="submit" value="Add">
    </div>
</form>