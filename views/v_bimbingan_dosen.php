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
                <h5 class="modal-title">Persetujuan  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_bimbingan/save_bimbingan_dosen">
                  <div class="row">
                  
                    <div class="form-group col-12">
                      <label for="setuju">Persetujuan</label>
                      <select class="form-control" name="setuju" id="setuju" >
                        <option value=""> - Pilih - </option>
                        <option value="disetujui">Setujui</option>
                        <option value="ditolak">Tolak</option>
                       

                      </select>
                    </div>
                     
                  </div>
                 
                     <input type="hidden" name="id_bimbingan" id="id_bimbingan">
                 
                  
                  

                 
                 
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
            <h1>Kelola Data Bimbingan </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dosen</a></div>
              <div class="breadcrumb-item"><a href="#">Bimbingan</a></div>
              <div class="breadcrumb-item">Kelola Bimbingan</div>
            </div>
          </div>
       
        
                    
                
              

          <div class="section-body">
 
           <!--  <button class="btn btn-primary" id="add_user" data-toggle="modal" data-target="#loading">Tambah Data </button> -->
            <br><br>
            <!-- <?php echo $this->session->flashdata('nid'); ?> -->
               <button style="display: none;"  class="btn btn-primary" id="toastr-3">Launch</button>
            <button  style="display: none;" class="btn btn-primary" id="toastr-4a">Launch</button>
            <button  style="display: none;" class="btn btn-primary" id="toastr-2">Launch</button>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Mahasiswa</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="data-table">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>ID Bimbingan</th>
                            <th>Mahasiswa</th>
                            <th>Dospem</th>
                            <th>Kategori</th>
                            <th>Keterangan</th>
                            <th>Status</th>

                            
                            <th>Action</th>
                            <th style="display: none;">kat</th>
                            
                            
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
            <?php  
     
              if($this->session->flashdata('ada')) { ?>
                     <script type="text/javascript">
                       iziToast.error({
                          title: 'Gagal!',
                          message: 'Anda Sudah memilih pembimbing .',
                          position: 'topRight'
                        });
                       
                    </script>
            <?php } ?>
 
 <script type="text/javascript">
   $(document).ready(function () {

           $('#data-table').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url('C_bimbingan/getdata_bimbingan') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "id_bimbingan"}, 
                                           {"data": "nim"},  
                                            {"data": "nid"},
                                          {"data": "kategori"},
                                          {"data": "keterangan"},
                                          {"data": "ket"},
                                          {"data": "btt1"},
                                          {"data": "kat"},
                                         ], 
                                          
                   "columnDefs": [
            {
                "targets": [ 8 ],
                "visible": false,
                "searchable": false
            }]
            
            } );

    })   
    
     

     $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
 
                         $('#loading').modal('show');
                         $("#id_bimbingan").val(data.id_bimbingan);
                         
                        
//                     

      });

     
 </script>