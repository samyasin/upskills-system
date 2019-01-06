<?php
//open connection to DB
//    $link = mysqli_connect("pdb25.runhosting.com","2719221_upskills","upskills900","2719221_upskills");
    $link = mysqli_connect("localhost","root","","upskills");
    if(!$link){
        die("cannot connect to server");
    }
   