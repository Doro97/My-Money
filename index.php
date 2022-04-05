<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMoney| Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <div class="select" style="width: 200px; ">
            <select id ="ddlModels" class="form-select" aria-label="Default select example">
                <option selected>Select Month</option>
                <option value="Jan">January</option>
                <option value="Feb">February</option>
                <option value="Mar">March</option>
                <option value="Apr">April</option>
                <option value="May">May</option>
                <option value="Jun">June</option>
                <option value="Jul">July</option>
                <option value="Aug">August</option>
                <option value="Sept">September</option>
                <option value="Oct">October</option>
                <option value="Nov">November</option>
                <option value="Dec">December</option>
            </select>
        </div>
       
        <form action="processing.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <h4>EQUITY</h4>
                    <div class="form-group">
                        <label for="inputeAllocate">ALLOCATE</label>
                        <input type="text" class="form-control"  name="eallocate" placeholder="Enter initial investment amount">     
                    </div>
                    <div class="form-group">
                        <label for="inputeSIP">SIP</label>
                        <input type="text" class="form-control" name="esip" placeholder="Enter monthly SIP payments ">     
                    </div>
                    <div class="form-group">
                        <label for="inputeChange">CHANGE</label>
                        <input type="text" class="form-control" name="echange" placeholder="Enter monthly rate of change">     
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>DEBT</h4>
                    <div class="form-group">
                        <label for="inputdAllocate">ALLOCATE</label>
                        <input type="text" class="form-control"  name="dallocate" placeholder="Enter initial investment amount">     
                    </div>
                    <div class="form-group">
                        <label for="inputdSIP">SIP</label>
                        <input type="text" class="form-control" name="dsip" placeholder="Enter monthly SIP payments ">     
                    </div>
                    <div class="form-group">
                        <label for="inputdChange">CHANGE</label>
                        <input type="text" class="form-control" name="dchange" placeholder="Enter monthly rate of change">     
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>GOLD</h4>
                    <div class="form-group">
                        <label for="inputgAllocate">ALLOCATE</label>
                        <input type="text" class="form-control"  name="gallocate" placeholder="Enter initial investment amount">     
                    </div>
                    <div class="form-group">
                        <label for="inputgSIP">SIP</label>
                        <input type="text" class="form-control" name="gsip" placeholder="Enter monthly SIP payments ">     
                    </div>
                    <div class="form-group">
                        <label for="inputgChange">CHANGE</label>
                        <input type="text" class="form-control" name="gchange" placeholder="Enter monthly rate of change">     
                    </div>
                </div>
            </div>           
                
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
<?php
// if(isset($_POST['submit'])){
//     $eallocate=$_POST["eallocate"];
//     $esip=$_POST["esip"];
//     $echange=$_POST["echange"];
//     $dallocate=$_POST["dallocate"];
//     $dsip=$_POST["dsip"];
//     $dchange=$_POST["dchange"];
//     $gallocate=$_POST["gallocate"];
//     $gsip=$_POST["gsip"];
//     $gchange=$_POST["gchange"];

//     $eresult=($eallocate+$esip)*(1+$echange);
//     $dresult=($dallocate+$dsip)*(1+$dchange);
//     $gresult=($gallocate+$gsip)*(1+$gchange);
//     echo "BALANCE: ", $eresult, "\t", $dresult, "\t", $gresult;
// }

?>
    </div>


    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      

</body>
</html>