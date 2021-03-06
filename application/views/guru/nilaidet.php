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
      <h3>Detail Nilai<small></small></h3>
      

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">         
         <table class="table table-bordered" style="color:black; background: #d3fffb;" id="dt">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Siswa</th>
              <th>Nama Nilai</th>
              <th>Nilai</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1;foreach($nilai as $list){ ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $list['namasiswa']; ?></td>
              <td><?php echo $list['namaheader']; ?></td>
              <td><?php echo $list['nilai']; ?></td>
              <td>
                <a href="<?php echo base_url('guru/nilaiAct/set/'.$list['id']);?>" title=""><button class="btn btn-primary" ><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>&nbsp; Edit Nilai</button></a>
                <a onclick="deletes(<?php echo $list['id']; ?>)" title=""><button class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true" ></span></button></a>
              </td>                      
            </tr>
            <?php } ?>
          </tbody>
          <script type="text/javascript">
            var url="<?php echo site_url();?>";
            function deletes(id){
              swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data again!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
              },
              function(){
                window.location = url+"guru/nilaiAct/del2/"+id;
              });
            }
          </script>                     
        </table>            
      </div>
      
    </div>

    
  </div>
</div>
<!-- /page content -->

