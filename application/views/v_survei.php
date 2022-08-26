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
                <h5 class="modal-title" id="tbh">Tambah Survei  </h5>
                <h5 class="modal-title" id="ubh">Ubah Survei  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_survei/save_survei">
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
                  <div class="form-group col-12">
                    <label for="keterangan">Keterangan</label>
                    <input id="keterangan" type="text"required class="form-control" placeholder="ini menunjukan kinerja dari suatu kegiatan" name="keterangan">
                     <input type="hidden" name="kondisi" id="kondisi">
                     <input type="hidden" name="id_survei" id="id_survei">
                  </div>
                  <div class="form-group col-12">
                    <label for="survei">Survei</label>
                    <textarea   class="form-control" rows="6" name="survei" id="survei" style="position: relative;"> Apakah kinerja baik ? </textarea>
                     
                  </div>
                  

                 
                 
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <div class="btn btn-danger" id="del">Hapus Data</div>
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
            <h1>Kelola Data Survei </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Tata Usaha </a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>
              <div class="breadcrumb-item">Kelola Survei</div>
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
                    <h4>Data Survei </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="data-table">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>ID Survei</th>
                            <th>Kategori</th>
                            <th>Keterangan</th>
                            <th>Survei</th>

                            
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
                    "url": "<?php echo base_url('C_survei/getdata_survei') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "id_survei"}, 
                                           {"data": "kategori"},  
                                            {"data": "keterangan"},
                                          {"data": "survei"},
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
                         $("#id_survei").val(data.id_survei);
                         $("#kategori").val(data.kategori);
                         $('#keterangan').val(data.keterangan);
                         $('#survei').val(data.survei); 
                         $('#kondisi').val('ubah');
                         $('#id_survei').attr('readonly',true);
                         $('#del').show();
                        
//                     

      });

     $("#del").click(function() {
                   var id = $("#id_survei").val();
                    var confirmation = confirm("Yakin akan menghapus data ini ?");
    
    if(confirmation)
    {
                 $.ajax({
                        url: "<?php echo base_url('C_survei/delete') ?>",
                        method: 'post',
                        data: {nim:id},
                        dataType: 'JSON',
                        success: function (data) {
                           iziToast.success({
                          title: 'Berhasil!',
                          message: 'Data Berhasil dihapus.',
                          position: 'topRight'
                        });
                           $("#data-table").DataTable().ajax.reload();
                           $('#loading').modal('hide');
                          }               
                           });
           
           }
//                     

      });
 </script>