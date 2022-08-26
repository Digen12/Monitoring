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
                <h5 class="modal-title">Isi Materi Bimbingan </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_bimbingan/save_materi">
                  <div class="row">
                  
                    <div class="form-group col-12">
                      <label for="setuju">Pertemuan</label>
                      <select class="form-control" required="true" name="pertemuan" id="pertemuan" >
                        <option value=""> - Pilih - </option>
                        <option value="1">Pertemuan 1</option>
                        <option value="2">Pertemuan 2</option>
                        <option value="3">Pertemuan 3</option>
                        <option value="4">Pertemuan 4</option>
                        <option value="5">Pertemuan 5</option>
                        <option value="6">Pertemuan 6</option>
                        <option value="7">Pertemuan 7</option>
                        <option value="8">Pertemuan 8</option>
                       

                      </select>
                    </div>
                    <div class="form-group col-12">
                      <label for="setuju">Pembimbing</label>
                      <select class="form-control" required="true" name="pembimbing" id="pembimbing" >
                        <option value=""> - Pilih - </option>
                        <option value="pembimbing1">Pembimbing 1</option>
                        <option value="pembimbing2">Pembimbing 2</option>
                       
                       

                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label for="setuju">Dosen</label>
                      <input type="text" readonly  class="form-control" name="nama" id="nama" >
                      <input type="hidden"  class="form-control" name="nid" id="nid" >
                      
                    </div> 
                   <div class="form-group col-6">
                      <label for="setuju">Tanggal Pertemuan</label>
                      <input type="date" required="true"  class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl" id="tgl" >
                      
                    </div> 
                     <div class="form-group col-12">
                      <label for="setuju">Judul Bahasan</label>
                      <input type="text" required="true"  class="form-control" name="ket" id="ket" >
                      
                    </div>   
                     <div class="form-group col-12">
                    <label for="survei">Isi Bahasan</label>
                    <textarea   class="form-control" required="true" rows="6" name="materi" id="materi" style="position: relative;">  </textarea>
                     
                  </div>
                  </div>
                 
                     <input type="hidden" name="id_bimbingan" id="id_bimbingan">
                      <input type="hidden" name="kondisi" id="kondisi">
                 
                  
                  

                 
                 
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
            <h1>Kelola Data Bimbingan </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Materi</a></div>
              <div class="breadcrumb-item"><a href="#">Bimbingan</a></div>
              <div class="breadcrumb-item">Isi Bimbingan</div>
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
                    <h4>Input  Bimbingan</h4>
                     
                            
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
                            <th>Progress</th>
                            <th>Aktivitas</th>
                            <th>Pertemuan </th>
                            <th>Tgl Pertemuan</th>
                            <th>Judul Bahasan</th>
                            <th>Materi</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th style="display: none;">pertemuan</th>
                            <th style="display: none;">nid</th>
                             <th style="display: none;">keterangan</th>
                             <th style="display: none;">tgl1</th>

                            
                            
                            
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
     
              if($this->session->flashdata('kosong')) { ?>
                     <script type="text/javascript">
                       iziToast.error({
                          title: 'Gagal!',
                          message: 'Inputan Materi Harus Berurutan.',
                          position: 'topRight'
                        });
                       
                    </script>
            <?php } ?>
            <?php  
     
              if($this->session->flashdata('ada')) { ?>
                     <script type="text/javascript">
                       iziToast.error({
                          title: 'Gagal!',
                          message: 'Pertemuan & Materi sudah di input sebelumnya.',
                          position: 'topRight'
                        });
                       
                    </script>
            <?php } ?>
 
 <script type="text/javascript">
   $(document).ready(function () {

           $('#data-table').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url('C_bimbingan/getdata_materi') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "id_bimbingan"}, 
                                           {"data": "progress"},  
                                            {"data": "acti"},
                                          {"data": "pertemuan"},
                                          {"data": "tgl_pertemuan"},
                                          {"data": "ket_pertemuan"},
                                          {"data": "materi_pertemuan"},
                                          {"data": "status"}, 
                                          {"data": "btt1"}, 
                                           {"data": "pertemuan2"},
                                           {"data": "nid"},
                                           {"data": "keterangan"},
                                           {"data": "tgl1"},
                                         ], 
                   
                    "columnDefs": [
            {
                "targets": [ 10 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 11 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 12 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 13 ],
                "visible": false,
                "searchable": false
            },
             ]                        
                 
            
            } );

    })   
     $('#add_user').click(function () {
                
            
              
              $('#kondisi').val('new');
              $('#del').hide();
                $("#pertemuan").val('');
                         $("#pembimbing").val('');
                         $('#nid').val('');
                         $('#nama').val('');
                          $('#ket').val('');
                          $('#materi').val('');
                         
          })
      $('#pembimbing').change(function () {
                  var id = $(this).val();
                  
                $.ajax({
                        url: "<?php echo base_url('C_bimbingan/getdosbim') ?>",
                        method: 'post',
                        data: {id:id},
                        
                        dataType: 'JSON',
                        success: function (data) {
                            if (data!='') {
                               $('#nid').val(data[0].ni);
                               $('#nama').val(data[0].nd);
                                $('#id_bimbingan').val(data[0].id_bimbingan);
                             }else{
                                $('#nid').val('');
                               $('#nama').val('');
                               $('#id_bimbingan').val('');
                             }
                          }               
                    });
               
          })

      $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
                        var dum = data.nid.split(' ');
                         $('#loading').modal('show');
                         $("#pertemuan").val(data.pertemuan2);
                         $("#id_bimbingan").val(data.id_bimbingan);
                         $("#pembimbing").val(data.keterangan);
                         $('#nid').val(dum[0]);
                         $('#nama').val(dum[1]);
                         $('#tgl').val(data.tgl1);
                         $('#ket').val(data.ket_pertemuan);
                          $('#materi').val(data.materi_pertemuan);
                         
                         $('#kondisi').val('ubah');
                        
                         $('#del').show();
                        
//                     

      });
       $("#del").click(function() {
                   var id = $("#id_bimbingan").val();
                   var id3 = $("#nid").val();
                    var id2 = $("#pertemuan").val();
                    var confirmation = confirm("Yakin akan menghapus data ini ?");
    
    if(confirmation)
    {
                 $.ajax({
                        url: "<?php echo base_url('C_bimbingan/delete_materi') ?>",
                        method: 'post',
                        data: {id:id,id2:id2,id3:id3},
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