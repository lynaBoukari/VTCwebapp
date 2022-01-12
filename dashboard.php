<?php

require_once('.\controller\backend.php');
session_start();
$_SESSION['session']=session_id();
$c=new Back_controller();
$c->afficher_page_dashboard();
