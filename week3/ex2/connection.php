﻿<?php
//creating a database connection - $link is a variable use for just connection class
$link=mysqli_connect("localhost","root","03012004") or die(mysqli_error($link));
mysqli_select_db($link,"LaptopShop") or die(mysqli_error($link));

