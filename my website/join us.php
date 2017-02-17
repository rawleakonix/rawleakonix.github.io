<?php

$txtfname = $_post['txtfname'];
$txtlname = $_post['txtlname'];
$txtign = $_post['txtign'];
$txtskype = $_post['txtskype'];
$txtage = $_post['txtage'];
$txttimezone = $_post['txttimezone'];
$rdchoose = $_post['rdchoose'];
$txtwork = $_post['txtwork'];
$to = "teamlaviant@gmail.com"
$subject = "New Message"
mail ($to, $subject, $txtwork, $rdchoose, $txttimezone, $txtage, $txtskype, $txtign, "from" . $txtfname . $txtlname);
echo "Your message has been sent";
  ?>