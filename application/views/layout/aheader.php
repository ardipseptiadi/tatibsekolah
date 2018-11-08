<html>
<head>

    <!-- Custom Theme Style -->
   
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.css">
    <script src="<?php echo base_url(); ?>assets/css/sweetalert/sweetalert.min.js"></script>    
 
	<title>Sistem tata tertib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/font-awesome.min.css"> 

	<style>
		.dropdown-submenu {
			position: relative;
		}

		.dropdown-submenu .dropdown-menu {
			top: 0;
			left: 100%;
			margin-top: -1px;
		}
		body {
			background: #fffdd8;
		}
	</style>

</head>
     <body>
	   <div class="navbar navbar-default navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><span>Sistem Tata Tertib</span></a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="<?php echo site_url('admin/'); ?>">Beranda</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('admin/guru'); ?>">Guru</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('admin/kelas'); ?>">Kelas</a>
                  </li>
				  <li>
                    <a href="<?php echo site_url('admin/pelanggaran'); ?>">Pelanggaran</a>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Siswa<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Tingkat 1<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <?php foreach($kelasheader as $list){ ?>
                          <?php if($list['tingkat'] == 1){?>
                          <li><a href="<?php echo site_url('admin/siswa/'.$list['id']); ?>"><?php echo $list['nama']; ?></a></li>
                          <?php }} ?>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Tingkat 2<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <?php foreach($kelasheader as $list){ ?>
                          <?php if($list['tingkat'] == 2){?>
                          <li><a href="<?php echo site_url('admin/siswa/'.$list['id']); ?>"><?php echo $list['nama']; ?></a></li>
                          <?php }} ?>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Tingkat 3<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <?php foreach($kelasheader as $list){ ?>
                          <?php if($list['tingkat'] == 3){?>
                          <li><a href="<?php echo site_url('admin/siswa/'.$list['id']); ?>"><?php echo $list['nama']; ?></a></li>
                          <?php }} ?>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a class="test" tabindex="-1" href="#">Tingkat 4<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <?php foreach($kelasheader as $list){ ?>
                          <?php if($list['tingkat'] == 4){?>
                          <li><a href="<?php echo site_url('admin/siswa/'.$list['id']); ?>"><?php echo $list['nama']; ?></a></li>
                          <?php }} ?>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Peraturan<span class="caret"></span></a>
                    <ul class="dropdown-menu">
					  <li><a href="<?php echo site_url('admin/tatib'); ?>">Tata Tertib</a></li>
					   <li><a href="<?php echo site_url('admin/sanksi'); ?>">Sanksi</a></li> 
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo site_url('admin/changePass'); ?>"><i class="glyphicon glyphicon-cog"></i>&nbsp;&nbsp;Change Pass</a></li>
                      <li><a href="<?php echo site_url('home/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i>&nbsp;&nbsp;Log Out</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>


        <!-- /top navigation -->