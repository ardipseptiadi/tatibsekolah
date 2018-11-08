
          <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Form Guru</h2>
                </div>
              </div>
            </div>
          </div><br>
          <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered" style="background: #d3fffb;" id="dt">
                    <tbody>
                      <?php echo form_open('admin/guruAct/edit2');?>
                      <tr class="warning">
                        <td style="background: #d3fffb;">Kode Guru</td>
                        <td style="background: #d3fffb;"><input type="text" name="kode" value="<?php echo $edit['kode']; ?>" placeholder="Kode Guru" class="form-control" required=""></td>
                      </tr>
                      <tr class="warning">
                        <td style="background: #d3fffb;">NIP</td>
                        <td style="background: #d3fffb;"><input type="text" name="nip" value="<?php echo $edit['nip']; ?>" placeholder="NIP" class="form-control" required=""></td>
                      </tr> 
                      <tr class="warning">
                        <td style="background: #d3fffb;">Nama</td>
                        <td style="background: #d3fffb;"><input type="text" name="nama" value="<?php echo $edit['nama']; ?>" placeholder="Nama Guru" class="form-control" required=""></td>
                      </tr>
                      <tr class="warning">
                        <td style="background: #d3fffb;">Email</td>
                        <td style="background: #d3fffb;"><input type="email" name="email" value="<?php echo $edit['email']; ?>" placeholder="Email" class="form-control" required=""></td>
                      </tr>                   
                      <tr class="warning">
                        <td style="background: #d3fffb;">Kontak</td>
                        <td style="background: #d3fffb;"><input type="text" name="kontak" value="<?php echo $edit['kontak']; ?>" placeholder="Nama Materi" class="form-control" required=""></td>
                      </tr>
                      <tr class="warning">
                        <td style="background: #d3fffb;">Jabatan</td>
                        <td style="background: #d3fffb;"><select name="id_mapel" class="form-control">
                          <?php foreach ($mapel as $m) {  
                            ?>
                            <option value="<?php echo $m['id']; ?>"><?php echo $m['nama']; ?></option>
                            <?php } ?>
                          </select></td>
                        </tr>
                        <input type="hidden" name="id_user" value="<?php echo $edit['id_user']; ?>">
                        <input type="hidden" name="id" value="<?php echo $edit['id']; ?>">

                        <tr>
                          <td style="background: #d3fffb;"></td>
                          <td style="background: #d3fffb;"><input type="submit" value="Edit" class="btn btn-primary"></td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

