<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $username;?> Selamat Datang</title> 

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/admin/'); ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('assets/admin/'); ?>css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url('assets/admin/'); ?>css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/admin/'); ?>css/startmin.css" rel="stylesheet">

        <?php if(isset($chart)) {?>
            <!-- Morris Charts CSS -->
        <link href="<?php echo base_url('assets/admin/'); ?>css/morris.css" rel="stylesheet">
        
        <?php } ?>
        
        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/admin/'); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="<?php echo base_url('assets/'); ?>bersalaman_kecil.ico" type="image/icon"/>
        
        <?php if(isset($datagrid)){
            ?>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/'); ?>easyui19/themes/bootstrap/easyui.css">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/'); ?>easyui19/themes/icon.css">
            <?php
        } ?>
        <?php if(isset($tabel_data)) {?>
        <style>
            .pagination {
                display: inline-block;
            }

            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
            }

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
            }

            .pagination a:hover:not(.active) {background-color: #ddd;}
        </style>
        
        <?php }?>
    </head>
    <body>

        <div id="wrapper">  