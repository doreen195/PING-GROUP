<!DOCTYPE html>
<html>
<body>
<table width="1350" height="640" border="1" >
<tr><td colspan="2" style="background-color:#FFF5EE;">
<h1></h1>
<h3>patient panel</h3>
</td></tr>
<tr><td style="background-color:#00FFFF;width:50px;height:400px;">
<table align="center"><tr><td>
<form action="nurse.php" align="center">
<input type="submit" align="center" value=" nurse ">
</form>
</td></tr><tr><td>
<form action="patient.php" align="center">
<input type="submit" align="center" value=" patient ">
</form>

</td></tr><tr><td>
<form action="pharmacist.php" align="center">
<input type="submit" align="center" value=" pharmacist ">
</form>
</td></tr><tr><td>
<form action="laboratorist.php" align="center">
<input type="submit" align="center" value=" laboratorist ">
</form></td>
<tr><td>
<form action="accountant.php" align="center">
<input type="submit" align="center" value=" accountant ">
</form>
</td>
</tr>
</table>
</td>
<td style="background-color:#eeeeee;height:200px;width:400px;height:400px;">
<table border=1align=center>
    <tr>
        <th>patient_id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>address</th>
        <th>phone</th>
        <th>sex</th>
        <th>birth_date</th>
        <th>age</th>
        <th>blood_group</th
        
    </tr>
   
            <form action="addpatient.php" align="center">
    <input type="submit" align="center" value=" add new patient">
   <a href ="addpatient.php">Add Patient</a>
</form>
</tr>
<tr>
    <form action="deletepatient.php" align="center">
        
<input type="submit" align="center" value=" delete patient ">
</form>
</tr>
<tr>
<form action="view completepatient.php" align="center">
<input type="submit" align="center" value=" view complete ">
</form>
</tr>
<tr>
<form action="admin.html" align="center">
<input type="submit" align="center" value=" home ">
<br></br>
</form>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="2" style="background-color:#9ACD32;text-align:center;">
    <table align="right">
        <th>
            <tr>
<form action="appointment.php" align="center">
<input type="submit" align="center" value=" appointment ">
</form>
</tr>
<tr>
<form action="payment.php" align="center">
    <input type="submit" align="center" value=" payment ">
<tr>
<form action="bloodbank.php" align="center">
    <input type="submit" align="center" value=" bloodbank ">
</form>
</tr>
<tr>
    <form action="medicine.php" align="center">
        <input type="submit" align="center" value=" medicine ">
</form>
 
</tr>
<tr>
<form action="operations.php" align="center">
    <input type="submit" align="center" value=" operations ">
</form>
</tr>
<tr>
<form action="birthreport.php" align="center">
    <input type="submit" align="center" value=" birthreport ">
</form>
</tr>
<tr>
<form action="deathreport.php" align="center">
<input type="submit" align="center" value=" deathreport ">
</form>
</tr>
<tr>
<form action="bedallotment.php" align="center">
    <input type="submit" align="center" value=" bedallotment ">
</form>
</tr>
</th> 
</table>
</td>
</tr>
</table>
</body>
</html>
