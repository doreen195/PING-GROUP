<!DOCTYPE html>
<html>
<body>


<div class="container-fluid">
        <h2>HMS</h2>			
        <div class="col-md-6">                    
        <div class="panel panel-info">
            <div class="panel-heading" style="background:#00796B;color:white;">
                <div class="panel-title">Admin Log In</div>                        
            </div> 
            <div style="padding-top:30px" class="panel-body" >
                <div>login<div> 
                    <div id="login-alert" class="alert alert-danger col-sm-12"></div>                            
                
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="">  

                    
                <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="username" name="username" value="username"placeholder="" required> 

</div>
              <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="email" name="email" value="email"placeholder="email" required>                                   
                    </div>                                
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" value="password"placeholder="password" required>
                    </div>	
                    <label class="radio-inline">
                      <input type="radio" name="loginType" value="admin">Administrator
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="loginType" value="doctor">Doctor
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="loginType" value="patient">Patient
                    </label>
                    
                    <div style="margin-top:10px" class="form-group">                               
                        <div class="col-sm-12 controls">
                          <input type="submit" name="login" value="Login" class="btn btn-info">						  
                        </div>						
                    </div>				
                </form>   
            </div>                     
        </div>  
    </div> 




<table width="1350" height="640" border="1" >
<tr>
    <td colspan="2" style="background-color:#FFF5EE;">
<h1></h1>
<h3>admin panel</h3>
</td></tr>
<tr><td style="background-color:#00FFFF;width:50px;height:400px;">
<table align="center">
    <tr>
        <td>
        <form action="nurse.php" align="center">
<input type="submit" align="center" value=" nurse ">
</form>
</td>
</tr>
<tr>
    <td>
    <form action="patient.php" align="center">
<input type="submit" align="center" value=" patient ">
</form>

</td>
</tr>
<tr>
    <td>
<form action="pharmacist.php" align="center">
<input type="submit" align="center" value=" pharmacist ">
</form>
</td></tr><tr><td>
<form action="laboratorist.php" align="center">
<input type="submit" align="center" value=" laboratorist ">
</form>
</td>
<tr>
    <td>
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
        <th>phone</th>
        <th>gender</th>
        <th>age</th>
        
        
    </tr>
   
    
   <a href ="addpatient.php">Add Patient</a>
</form>
</tr>
<tr>
    <br></br>
    

<a href ="deletepatient.php">delete patient</a>
</form>
</tr>
<tr>
    <br></br>
<a href ="viewcomplete.php">view patient</a>
</form>
</tr>
<tr>
    <br></br>
<a href ="edit.php">edit patient</a>
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
