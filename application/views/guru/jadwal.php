<body>
  <div class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><span>E-Learning</span></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?php echo site_url('guru/'); ?>">Laporan Pembelajaran</a>
          </li>
          <li>
            <a href="<?php echo site_url('guru/kategori'); ?>">Kategori</a>
          </li>
          <li class="active">
            <a href="<?php echo site_url('guru/jadwal'); ?>">Jadwal</a>
          </li>
          <li>
            <a href="<?php echo site_url('guru/kelompok'); ?>">Laporan Kelompok</a>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Guru<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('guru/changePass'); ?>"><i class="glyphicon glyphicon-cog"></i>&nbsp;&nbsp;Change Pass</a></li>
              <li><a href="<?php echo site_url('home/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- page content -->
  <div class="section">
    <div class="container">
      <h3>Jadwal Ajar <small>Jadwal Ajar Semester</small></h3>
      <br>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
         <table class="table table-bordered" style="color:black; background: #d3fffb;">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Kelas</th>
              <th>Hari / Jam</th>
              <th>KKM</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1;foreach($jadwal as $list){ ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $list['namakelas']; ?></td>
              <td><?php echo $list['hari'].' ; '.$list['jam']; ?></td>
              <td><?php echo $list['kkm1'].'/'.$list['kkm2']; ?></td>
              <td>
                <a href="<?php echo site_url('guru/materi/'.$list['idk']);?>" title="Materi"><button class="btn btn-primary" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;Materi</button></a>
                <a href="<?php echo site_url('guru/tugas/'.$list['idk']);?>" title="Tugas"><button class="btn btn-success" ><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;Tugas</button></a>
                <a href="<?php echo site_url('guru/nilai/'.$list['idk']);?>" title="Nilai"><button class="btn btn-warning" ><span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span>&nbsp;Nilai</button></a> 
                <a href="<?php echo site_url('guru/kuis/'.$list['idk']);?>" title="Nilai"><button class="btn btn-info" ><span class="glyphicon glyphicon-queen" aria-hidden="true"></span>&nbsp;Kuis Online</button></a>                                            
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>            
      </div>

    </div>


  </div>
</div>
<!-- /page content -->

