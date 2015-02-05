<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Sistem Monitoring Siswa</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="<?= base_url().'asset/images/logo.png'?>"/>
   
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/css/bootstrap.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/bootflat/css/bootflat.min.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/css/footable.core.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/css/footable.metro.css';?>"/>
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'asset/fontawesome/css/font-awesome.min.css';?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url().'asset/css/zabuto_calendar.css';?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'asset/css/jquery.gritter.css';?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'asset/css/lineiconstyle.css';?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url().'asset/css/pagestyle.css';?>" rel="stylesheet">
    <link href="<?= base_url().'asset/css/pagestyle-responsive.css';?>" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url().'asset/js/jquery.autocomplete.js'?>"></script>

        <script type="text/javascript">

          $(function() {
          $( "#query" ).autocomplete({ //the recipient text field with id #username
          source: function( request, response ) {
            $.ajax({
                url: "<?= base_url().'data/siswa';?>",
                dataType: "json",
                data: request,
                success: function(data){
                    if(data.response == 'true') {
                       response(data.message);
                    }
                }
            });
        }
    });
});

        </script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                   <li><a class="logout tooltips" href="<?php echo base_url();?>login/logout" data-placement="left" data-original-title="Keluar">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->




      
    