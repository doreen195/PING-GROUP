<?php

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS patient(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT,birth_date DATE,
age INT, blood_group TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS nurse(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS laboratorist(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS phamarcist(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS account(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS doctor(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT,
department_id SERIAL)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS appointment(Appointment_id SERIAL,Appointment_timestamp TINYTEXT,Doctor_id SERIAL,Patient_id SERIAL)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS payment(payment_id SERIAL,payment_type TINYTEXT,TRANSACTION_id SERIAL,invoice_id SERIAL,
patient_id SERIAL,method TINYTEXT,description TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS blood_bank(blood _group_id SERIAL,blood group TINYTEXT,status TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS medicine(medicine_id SERIAL,name TINYTEXT,medicine_category TINYTEXT,description 
 TINYTEXT,manufacturing_company TINYTEXT,status TINYTEXT)";
$db->exec($sql);

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS bed_alloted(bed_alloted_id SERIAL,bed_id SERIAL,patient_id SERIAL,
alloted_timestamp TINYTEXT,discharge_timestamp TINYTEXT)";
$db->exec($sql);

?>