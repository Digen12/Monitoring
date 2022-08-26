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
                <h5 class="modal-title" id="tbh">Tambah Dosen  </h5>
                 <h5 class="modal-title" id="ubh">Ubah Dosen  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_dosen/save_dosen">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Nama Depan</label>
                      <input id="frist_name" type="text" class="form-control" required="true" name="frist_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama Belakang</label>
                      <input id="last_name" type="text" class="form-control" required name="last_name">
                    </div>
                  </div>
                   <div class="row">
                  <div class="form-group col-6">
                    <label for="nid">NID</label>
                    <input id="nid" type="text" onkeypress="return isnumber(event)" required class="form-control" name="nid">
                     
                  </div>
                  <div class="form-group col-6">
                    <label for="hp">No Hp(Aktif)</label>
                    <input id="hp" type="text" class="form-control" onkeypress="return isnumber(event)"  required name="hp">
                     
                  </div>
                </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="text" class="form-control pwstrength" required data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                     <div class="form-group col-6">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" id="jk" name="jk">
                      <option value="Laki-laki"> Laki-laki</option>
                      <option value="perempuan"> Perempuan</option>
                    </select>


                     
                  </div>
                  <div class="form-group col-6">
                    <label for="sebagai">Sebagai</label>
                    <select class="form-control"  required id="sebagai" name="sebagai">
                      <option value="" selected> - Pilih  - </option>
                      <option value="pembimbing1">Pembimbing 1</option>
                       <option value="pembimbing2">Pembimbing 2</option>
                      <option value="P1jugaP2">Keduanya</option>
                      
                    </select>


                     
                  </div>
                    <div class="form-group col-6">
                    <label for="sebagai">Struktur</label>
                    <select class="form-control"  required id="struktur" name="struktur">
                      <option value="" selected> - Pilih  - </option>
                      <option value="pembimbing">Hanya Pembimbing</option>
                       
                      <option value="koordinator">Koordinator</option>
                      <option value="kajur">Kajur</option>
                    </select>


                     
                  </div>
                   <div class="form-group col-12">
                    <label for="hp">Alamat</label>
                    <input id="alamat" type="text" class="form-control"   required name="alamat">
                    <input type="hidden" id="kondisi" name="kondisi">
                  </div>
                     

                 <!--  <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control selectric">
                        <option>Indonesia</option>
                        <option>Palestine</option>
                        <option>Syria</option>
                        <option>Malaysia</option>
                        <option>Thailand</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Province</label>
                      <select class="form-control selectric">
                        <option>West Java</option>
                        <option>East Java</option>
                      </select>
                    </div>
                  </div> -->
                  

                  

                 
                 
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
            <h1>Kelola Akses Dosen </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Tata Usaha </a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>
              <div class="breadcrumb-item">Kelola Dosen</div>
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
                    <h4>Data Dosen </h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="data-table">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>NID</th>
                            <th>Nama</th>
                            <th>Hp(Aktif)</th>
                            <th>Struktur</th>

                            <th>Keterangan</th>
                            <th>Action</th>
                            <th style="display: none;">Password</th>
                            <th style="display: none;">jenis</th>
                            <th style="display: none;">alamat</th>

                            
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
              if ($this->session->flashdata('nid')) { ?>
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
                    "url": "<?php echo base_url('C_dosen/getdata_dosen') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "nid"}, 
                                           {"data": "nama"},  
                                            {"data": "hp"},
                                          {"data": "struktur"},
                                          {"data": "keterangan"},
                                          {"data": "btt1"},
                                          {"data": "password"},
                                          {"data": "jenis_kelamin"},
                                          {"data": "alamat"}, 
                ],
                    "columnDefs": [
            {
                "targets": [ 7 ],
                "visible": false,
                "searchable": false
            },
              
            {
                "targets": [ 8 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 9 ],
                "visible": false,
                "searchable": false
            } ]
            
            } );

    })   
    $('#add_user').click(function () {
                $("#tbh").show();
                          $("#ubh").hide();
            
              $('#nid').attr('readonly',false);
              $('#kondisi').val('new');
              $('#del').hide();
                $("#frist_name").val('');
                         $("#last_name").val('');
                         $('#nid').val('');
                         $('#sebagai').val('');
                          $('#struktur').val('');
                          $('#password').val('');
                         $('#hp').val('');
                         $('#alamat').val('');
          })

     $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
                        var dum = data.nama.split(' ');
                        $("#ubh").show();
                          $("#tbh").hide();
                         $('#loading').modal('show');
                         $("#frist_name").val(dum[0]);
                         $("#last_name").val(dum[1]);
                         $('#nid').val(data.nid);
                         $('#sebagai').val(data.keterangan);
                         $('#struktur').val(data.struktur);
                          $('#password').val(data.password);
                          $('#jk').val(data.jenis_kelamin);
                         $('#hp').val(data.hp);
                         $('#alamat').val(data.alamat);
                         $('#kondisi').val('ubah');
                         $('#nid').attr('readonly',true);
                         $('#del').show();
                        
//                     

      });

     $("#del").click(function() {
                   var id = $("#nid").val();
                    var confirmation = confirm("Yakin akan menghapus data ini ?");
    
    if(confirmation)
    {
                 $.ajax({
                        url: "<?php echo base_url('C_dosen/delete') ?>",
                        method: 'post',
                        data: {nid:id},
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