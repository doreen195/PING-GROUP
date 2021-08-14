<?php
    require_once './database.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {;
        $name = $_POST['id'];
        $id = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        $sql = "INSERT INTO nurse(id,name,email,phone,address) VALUES(?,?,?,?,?)";
        $data = array($name,$email);
        $cmd = $db->prepare($sql);
        $cmd->execute($data);
    }
?>

<form action="" method="post">
    <div>
        <label for="">nurse_id</label>
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
        <label for="">address</label>
        <input type="number" name="address">
    </div>
    <div>
        <label for="">gender</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>