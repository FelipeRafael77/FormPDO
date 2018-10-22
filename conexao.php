<?php

$con = mysqli_connect("localhost", "root", "", "formulario");

$con = mysqli_query($con, " SELECT * FROM pessoa");

?>