

          <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Form Edit Tata Tertib</h2>
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
                    <?php echo form_open('admin/tatibAct/edit2');?>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Tata Tertib</td>
                      <td style="background: #d3fffb;"><input type="text" name="nama" value="<?php echo $edit['nama']; ?>"  class="form-control" required=""></td>
                    </tr>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Kode</td>
                      <td style="background: #d3fffb;"><input type="text" name="kode" value="<?php echo $edit['kode']; ?>"  class="form-control" required=""></td>
                    </tr> 
                    <tr class="warning">
                      <td style="background: #d3fffb;">Poin</td>
                      <td style="background: #d3fffb;"><input type="number" name="poin" value="<?php echo $edit['poin']; ?>"  class="form-control" required=""></td>
                    </tr>                      
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
