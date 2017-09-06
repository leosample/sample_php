<?php
    if(!isset($_POST['name']))
        header("location: sample23.php?forname=3");
    echo $_POST['name'];
