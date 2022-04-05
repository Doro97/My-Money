<?php
    $eallocate=$_POST["eallocate"];
    $esip=$_POST["esip"];
    $echange=$_POST["echange"];
    $dallocate=$_POST["dallocate"];
    $dsip=$_POST["dsip"];
    $dchange=$_POST["dchange"];
    $gallocate=$_POST["gallocate"];
    $gsip=$_POST["gsip"];
    $gchange=$_POST["gchange"];

    if(isset($_POST['submit'])){
        $eresult=($eallocate+$esip)*(1+$echange);
        $dresult=($dallocate+$dsip)*(1+$dchange);
        $gresult=($gallocate+$gsip)*(1+$gchange);
        echo "Balance: ", $eresult, "\t" ,$dresult,"\t", $gresult;
}

?>