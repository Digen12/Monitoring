<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>

<SCRIPT language=Javascript>
      <!--
      function isnumber(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
 
 
   </SCRIPT>
 
      <!-- Main Content -->
         <!-- modal buat pop up yog-->
        <section style="width: 100%;" >
                <div class="modal " tabindex="-1" role="dialog" id="loading" style="width: 100%;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tbh">Tambah Nilai Harapan  </h5>
                <h5 class="modal-title" id="ubh">Ubah Nilai Harapan  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_survei/save_harapan">
                  <div class="row">
                  
                    <div class="form-group col-12">
                      <label for="kategori">Kategori</label>
                      <select class="form-control" name="kategori" id="kategori" >
                        <option value=""> - Pilih - </option>
                        <option value="tangibles">Tangibles</option>
                        <option value="reability">Reability</option>
                        <option value="responsiveness">Responsiveness</option>
                        <option value="assurance">Assurance</option>
                        <option value="empathy">Empathy</option>

                      </select>
                    </div>
                  </div>
                   <div class="row">
                  <div class="form-group col-4">
                    <label for="keterangan">Sangat Puas</label>
                    <input id="sangatpuas" type="text"required class="form-control" placeholder="ex:5"  onkeypress="return isnumber(event)" maxlength="2" name="sangatpuas">
                     <input type="hidden" name="kondisi" id="kondisi">
                     <input type="hidden" name="id_survei" id="id_survei">
                  </div>
                   <div class="form-group col-4">
                    <label for="keterangan">Puas</label>
                     <input id="puas" type="text"required class="form-control" placeholder="ex:2"  onkeypress="return isnumber(event)" maxlength="2" name="puas">
                
                  </div>
                  <div class="form-group col-4">
                    <label for="keterangan">Cukup Puas</label>
                     <input id="cukuppuas" type="text"required class="form-control" placeholder="ex:1"  onkeypress="return isnumber(event)" maxlength="2" name="cukuppuas">
                
                  </div>
                  <div class="form-group col-6">
                    <label for="keterangan">Kurang Puas</label>
                     <input id="kurangpuas" type="text"required class="form-control" placeholder="ex:5"  onkeypress="return isnumber(event)" maxlength="2" name="kurangpuas">
                
                  </div>
                  <div class="form-group col-6">
                    <label for="keterangan">Tidak Puas</label>
                     <input id="tidakpuas" type="text"required class="form-control" placeholder="ex:5"  onkeypress="return isnumber(event)" maxlength="2" name="tidakpuas">
                
                  </div>

                  
                  

                 
                 
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <!-- <div class="btn btn-danger" id="del">Hapus Data</div> -->
                 <input type="submit" class="btn btn-primary " value="Simpan Data">
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        </section>
      <!-- -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kelola Nilai Harapan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Kajur</a></div>
              <div class="breadcrumb-item"><a href="#">Survey</a></div>
              <div class="breadcrumb-item">Nilai Harapan</div>
            </div>
          </div>
       
        
                    
                
              

          <div class="section-body">
 
            <button class="btn btn-primary" id="add_user" data-toggle="modal" data-target="#loading">Tambah Data </button>
            <br><br>
            <!-- <?php echo $this->session->flashdata('nid'); ?> -->
               <button style="display: none;"  class="btn btn-primary" id="toastr-3">Launch</button>
            <button  style="display: none;" class="btn btn-primary" id="toastr-4a">Launch</button>
            <button  style="display: none;" class="btn btn-primary" id="toastr-2">Launch</button>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Nilai Harapan </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="data-table">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Kategori</th>
                            <th>Mhsw Sangat Puas</th>
                            <th>Mhsw Puas</th>
                            <th>Mhsw Cukup Puas</th>
                            <th>Mhsw Kurang Puas</th>
                            <th>Mhsw Tidak Puas</th>

                            
                            <th>Action</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody>                                 
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
        </section>
      </div>
   
<?php $this->load->view('dist/_partials/footer'); ?>
 
  <?php  
              $this->load->helper('form');
              if ($this->session->flashdata('nim')) { ?>
                    <script type="text/javascript">
                      iziToast.error({
                        title: 'Gagal!',
                        message: 'Data Sudah di gunakan',
                        position: 'topRight'
                      });
                    </script>
                 <?php } ?>   
                  <?php  
     
              if($this->session->flashdata('suc')) { ?>
                     <script type="text/javascript">
                       iziToast.success({
                          title: 'Berhasil!',
                          message: 'Data Berhasil disimpan.',
                          position: 'topRight'
                        });
                       
                    </script>
            <?php } ?>
 
 <script type="text/javascript">
   $(document).ready(function () {

           $('#data-table').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url('C_survei/getdata_harapan') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "kategori"}, 
                                           {"data": "sangatpuas"},  
                                            {"data": "puas"},
                                          {"data": "cukuppuas"},
                                          {"data": "kurangpuas"},
                                          {"data": "tidakpuas"},
                                          {"data": "btt1"},
                                         ], 
                                          
                   
            
            } );

    })   
    $('#add_user').click(function () {
                
            
              $('#id_survei').attr('readonly',false);
              $('#kondisi').val('new');
              $('#del').hide();
                        $("#id_survei").val('');
                         $("#kategori").val('');
                         $('#keterangan').val('');
                         $('#survei').val('');
                         $("#tbh").show();
                          $("#ubh").hide();
          })

     $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
                        $("#ubh").show();
                          $("#tbh").hide();
                         $('#loading').modal('show');
                         $("#sangatpuas").val(data.sangatpuas);
                         $("#cukuppuas").val(data.cukuppuas);
                         $("#puas").val(data.puas);
                         $("#kurangpuas").val(data.kurangpuas);
                         $("#tidakpuas").val(data.tidakpuas);
                         $("#kategori").val(data.kategori);
                          
                        
//                     

      });

   
 </script>