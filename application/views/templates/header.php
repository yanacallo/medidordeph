<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CodeIgniter CRUD with Google Maps API</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">
     <!-- font-awesome-icons -->
    <link href="<?php echo base_url('assets') ?>/css/font-awesome.css" rel="stylesheet">
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
  }

  #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #ffc107;
    color: white;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 4px;
  }

  #myBtn:hover {
    background-color: #555;
  }
  </style>     
  </head>
  <body>