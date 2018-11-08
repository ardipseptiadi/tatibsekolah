      

          <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Daftar Sanksi</h2>
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
                    <?php echo form_open('admin/sanksiAct/add2');?>
                    <tr class="warning">
                      <td style="background: #d3fffb;">No</td>
                      <td style="background: #d3fffb;"><input type="number" name="id" value=""  class="form-control" required=""></td>
                    </tr>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Total Poin</td>
                      <td style="background: #d3fffb;"><input type="text" name="total_poin" value=""  class="form-control" required=""></td>
                    </tr> 
                    <tr class="warning">
                      <td style="background: #d3fffb;">Tindak Lanjut</td>
                      <td style="background: #d3fffb;"><input type="text" name="tindak_lanjut" value="" class="form-control" required=""></td>
                    </tr>                      
                    <tr>
					<tr class="warning">
                      <td style="background: #d3fffb;">Sanksi</td>
                      <td style="background: #d3fffb;"><input type="text" name="sanksi" value="" class="form-control" required=""></td>
                    </tr>                      
                    <tr>
                      <td></td>
                      <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
                    </tr>                        
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
