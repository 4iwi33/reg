<?php

$connection = mysqli_connect(
    "localhost",
    "root",
    "root",
    "registr"
);

$select_db = mysqli_select_db($connection, "registr");

