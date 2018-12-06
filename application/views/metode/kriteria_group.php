<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Tabel Kriteria</h2>
      </div>
    </div>
  </div>
</div><br>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <table class="table table-bordered" style="color:black; background: #d3fffb;" id="dt">
          <thead>
            <tr>
              <td>No</td>
              <td>Kode</td>
              <td>Keterangan</td>
              <td>Nama Kriteria</td>
              <td>Bobot</td>
              <td>Kriteria</td>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($kriteria_group as $val_kriteria){?>
            <tr>
              <td><?=$no?></td>
              <td><?=@$val_kriteria['kode_group_tatib']?></td>
              <td><?=@$val_kriteria['nama_group']?></td>
              <td><?=@$val_kriteria['nama_kriteria']?></td>
              <td><?=@$val_kriteria['bobot']?></td>
              <td><?=@$val_kriteria['kriteria_bobot']?></td>
            </tr>
            <?php
                $no++;
              }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
