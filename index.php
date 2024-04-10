<?php
include './header.php'
?>
<link rel="stylesheet" href="./index.css"/>
<div id="formdiv">
    <form id="formid" action="bill.php" method="get">
        <input id="rrnoinput" type="number" name="rrno" placeholder="Enter Account ID">
        <input class="btn btn-success" type="submit" value="Submit">
    </form>
</div>
<?php
include './aboutus.php'
?>