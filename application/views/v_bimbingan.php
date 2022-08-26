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
                <h5 class="modal-title" id="tbh">Tambah bimbingan  </h5>
                <h5 class="modal-title" id="ubh" style="display: none;">Ubah bimbingan  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_bimbingan/save_bimbingan">
                  <div class="row">
                  
                    <div class="form-group col-6">
                      <label for="kategori">Kategori</label>
                      <select class="form-control" name="kategori" id="kategori" >
                        <option value=""> - Pilih - </option>
                        <option value="TA1">TA 1</option>
                        <option value="TA2">TA 2</option>
                       

                      </select>
                    </div>
                     <div class="form-group col-6">
                      <label for="keterangan">Pembimbing</label>
                      <select class="form-control" name="keterangan" id="keterangan" >
                        <option value=""> - Pilih - </option>
                        <option value="pembimbing1">Pembimbing 1 </option>
                        <option value="pembimbing2">Pembimbing 2</option>
                       

                      </select>
                    </div>
                  </div>
                   <div class="row">
                    <div class="form-group col-12">
                      <label for="keterangan">Dosen</label>
                      <select class="form-control" name="nid" id="nid" >
                          <option value=""> - Pilih - </option>
                      </select>
                      </div>  
                  
                     <input type="hidden" name="kondisi" id="kondisi">
                     <input type="hidden" name="id_bimbingan" id="id_bimbingan">
                 
                  
                  

                 
                 
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <div class="btn btn-danger" id="del">Hapus Data</div>
                 <input type="submit" class="btn btn-primary " id="simpan" value="Simpan Data">
                
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
              <div class="breadcrumb-item active"><a href="#">Mahasiswa </a></div>
              <div class="breadcrumb-item"><a href="#">Bimbingan</a></div>
              <div class="breadcrumb-item">Kelola Bimbingan</div>
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
                    <h4>Data Pembimbing</h4>
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
    $('#add_user').click(function () {
                  $("#tbh").show();
                          $("#ubh").hide();
            
              $('#id_bimbingan').attr('readonly',false);
              $('#kondisi').val('new');
              $('#del').hide();
                        $("#id_bimbingan").val('');
                         $("#kategori").val('');
                         $('#keterangan').val('');
                         $('#nid').val('');
          })
      $('#keterangan').change(function () {
                  var id = $(this).val();
                  console.log(id);
                $.ajax({
                        url: "<?php echo base_url('C_bimbingan/getdosen') ?>",
                        method: 'post',
                        data: {id:id},
                         async: false,
                        dataType: 'JSON',
                        success: function (data) {
                              $('#nid').find('option').not(':first-child').remove();
                               $.each(data, function ( index,data) {
                               
                            
                            $('#nid').append('<option value="' + data['nid'] + '">'  + data['nid'] + ' - '  + data['nama_depan'] + '</option>'); 
                           
                           });
                       
                          }               
                    });
               
          })

     $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
                          // alert(data.kat);
                          var dum = data.nid.split(' ');
                          $("#ubh").show();
                          $("#tbh").hide();
                         $('#loading').modal('show');
                         $("#id_bimbingan").val(data.id_bimbingan);
                         $("#kategori").val(data.kat);
                         $('#keterangan').val(data.keterangan);
                         $('#keterangan').trigger('change');
                         // $('#nid').val(data.nid); 
                          // $('#nid').find('option').val(data.nid).remove();
                          $('#nid').append('<option value="' + dum[0] + '" selected>'  + dum[0] + ' - '  + dum[1] + '</option>'); 
                         $('#kondisi').val('ubah');
                         $('#id_bimbingan').attr('readonly',true);
                         $('#del').show();
                         $('#simpan').show();
                         if (data.status=='disetujui') {
                             $('#del').hide();
                             $('#simpan').hide();
                         }
                        
//                     

      });

     $("#del").click(function() {
                   var id = $("#id_bimbingan").val();
                    var confirmation = confirm("Yakin akan menghapus data ini ?");
    
    if(confirmation)
    {
                 $.ajax({
                        url: "<?php echo base_url('C_bimbingan/delete') ?>",
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