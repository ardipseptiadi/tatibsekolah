      

          <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2>Form Tata Tertib</h2>
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
                    <?php echo form_open('admin/tatibAct/add2');?>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Tata Tertib</td>
                      <td style="background: #d3fffb;"><input type="text" name="nama" value=""  class="form-control" required=""></td>
                    </tr>
                    <tr class="warning">
                      <td style="background: #d3fffb;">Kode</td>
                      <td style="background: #d3fffb;"><input type="text" name="kode" value=""  class="form-control" required=""></td>
                    </tr> 
                    <tr class="warning">
                      <td style="background: #d3fffb;">Poin</td>
                      <td style="background: #d3fffb;"><input type="number" name="poin" value="" class="form-control" required=""></td>
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
