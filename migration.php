<?php

require_once './database.php';
$sql = "CREATE TABLE IF NOT EXISTS patient(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT,birth_date DATE,
age INT, blood_group TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS nurse(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS laboratorist(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS phamarcist(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS account(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS doctor(id SERIAL,name TINYTEXT,email TINYTEXT,password TINYTEXT,Address TEXT, Phone TINYTEXT,
department_id BIGINT UNSIGNED)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS appointment(Appointment_id SERIAL,Appointment_timestamp TINYTEXT,Doctor_id BIGINT UNSIGNED,Patient_id bigint unsigned)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS payment(payment_id SERIAL,payment_type TINYTEXT,TRANSACTION_id BIGINT UNSIGNED,invoice_id BIGINT UNSIGNED,
patient_id BIGINT UNSIGNED,method TINYTEXT,description TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS blood_bank(blood_group_id SERIAL,blood_group TINYTEXT,status TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS medicine(medicine_id SERIAL,name TINYTEXT,medicine_category TINYTEXT,description 
 TINYTEXT,manufacturing_company TINYTEXT,status TINYTEXT)";
$db->exec($sql);


$sql = "CREATE TABLE IF NOT EXISTS bed_alloted(bed_alloted_id SERIAL,bed_id BIGINT UNSIGNED,patient_id BIGINT UNSIGNED,
alloted_timestamp TINYTEXT,discharge_timestamp TINYTEXT)";
$db->exec($sql);

?>