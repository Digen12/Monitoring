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
                <h5 class="modal-title" id="tbh">Tambah Periode </h5>
                <h5 class="modal-title" id="ubh">Ubah Periode </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_survei/save_periode">
                  <div class="row">
                  
                    <div class="form-group col-12">
                      <label for="kategori">Semester</label>
                      <select class="form-control" name="semester" id="kategori" >
                        <option value=""> - Pilih - </option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                      

                      </select>
                    </div>
                  </div>
                   <div class="row">
                  <div class="form-group col-12">
                    <label for="keterangan">Keterangan</label>
                    <input id="keterangan" type="text"required class="form-control" placeholder="2018/2019 Semester Ganjil" name="keterangan">
                       <input type="hidden" name="kondisi" id="kondisi">
                        <input type="hidden" name="id_periode" id="id_periode">
                  </div>
                   <div class="form-group col-12" style="display: none;" id="stss">
                      <label for="kategori">Status</label>
                      <select class="form-control" name="status" id="status" >
                        <option value="" hidden="true"> - Pilih - </option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Tidak Aktif</option>
                      

                      </select>
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
            <h1>Kelola Data Periode </h1>
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
                    <h4>Data Periode </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="data-table">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Id</th>
                            <th>Semester</th>
                            <th>Keterangan</th>
                            <th>Status</th>
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
              if ($this->session->flashdata('nm')) { ?>
                    <script type="text/javascript">
                      iziToast.error({
                        title: 'Gagal!',
                        message: 'Periode Hanya Boleh 1 yang AKTIF',
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
                    "url": "<?php echo base_url('C_survei/getdata_periode') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "id_periode"}, 
                                           {"data": "semester"}, 
                                           {"data": "keterangan"},  
                                            {"data": "status"},
                                          
                                          {"data": "btt1"},
                                         ], 
                                          
                   
            
            } );

    })   
    $('#add_user').click(function () {
                
            
              
              $('#kondisi').val('new');
              $('#del').hide();
              $('#stss').hide();
                        
                         $("#kategori").val('');
                         $('#keterangan').val('');
                         $('#status').val('');
                         $("#tbh").show();
                          $("#ubh").hide();
          })

     $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
                        $("#ubh").show();
                          $("#tbh").hide();
                          $('#del').hide();
                          $('#stss').show();
                         $('#loading').modal('show');
                         $("#kategori").val(data.semester);
                         $("#keterangan").val(data.keterangan);
                         $('#status').val(data.status);
                          $('#id_periode').val(data.id_periode);
                         
                         $('#kondisi').val('ubah');
                         
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