

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
                    <?php echo form_open('admin/sanksiAct/edit2');?>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Kode</td>
                      <td style="background: #d3fffb;"><input type="text" name="Kode" value="<?php echo $edit['kode']; ?>"  class="form-control" required=""></td>
                    </tr>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Total Poin</td>
                      <td style="background: #d3fffb;"><input type="text" name="total_poin" value="<?php echo $edit['total_poin']; ?>"  class="form-control" required=""></td>
                    </tr> 
                    <tr class="warning">
                      <td style="background: #d3fffb;">Tindak Lanjut</td>
                      <td style="background: #d3fffb;"><input type="text" name="tindak_lanjut" value="<?php echo $edit['tindak_lanjut']; ?>"  class="form-control" required=""></td>
                    </tr>   
					<tr class="warning">
                      <td style="background: #d3fffb;">Sanksi</td>
                      <td style="background: #d3fffb;"><input type="text" name="sanksi" value="<?php echo $edit['sanksi']; ?>"  class="form-control" required=""></td>
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
