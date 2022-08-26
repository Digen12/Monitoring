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
                <h5 class="modal-title" id="tbh">Tambah Mahasiswa  </h5>
                <h5 class="modal-title" id="ubh">Ubah Mahasiswa  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <form method="POST" action="<?php echo base_url(); ?>C_mhs/save_mhs">
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
                    <label for="nim">NIM</label>
                    <input id="nim" type="text" onkeypress="return isnumber(event)" required class="form-control" name="nim">
                     
                  </div>
                  <div class="form-group col-6">
                    <label for="hp">No Hp(Aktif)</label>
                    <input id="hp" type="text" class="form-control" onkeypress="return isnumber(event)"  required name="hp">
                     
                  </div>
                </div>

                  <div class="row">
                    <div class="form-group col-12">
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
                    <label for="sebagai">Angkatan</label>
                    <select class="form-control"  required id="angkatan" name="angkatan">
                      <option value="" selected> - Pilih  - </option>
                     <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
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
            <h1>Kelola Akses Mahasiswa </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Tata Usaha </a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>
              <div class="breadcrumb-item">Kelola Mahasiswa</div>
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
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Hp(Aktif)</th>
                            <th>Alamat</th>

                            <th>Angkatan</th>
                            <th>Action</th>
                            <th style="display: none;">Password</th>
                            <th style="display: none;">jenis</th>
                            
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
                    "url": "<?php echo base_url('C_mhs/getdata_mhs') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "nim"}, 
                                           {"data": "nama"},  
                                            {"data": "hp"},
                                          {"data": "alamat"},
                                          {"data": "angkatan"},
                                          {"data": "btt1"},
                                          {"data": "password"},
                                          {"data": "jenis_kelamin"},
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
            } ]
            
            } );

    })
    $('#nim').change(function () {
        var nim = $(this).val();
        if (nim.length==10) {
          var res = nim.slice(4, 6);
          if (res >=10 && res <=28) {
            var str =20+res;
              $("#angkatan").val(str);
              $("#angkatan").attr("readonly",true);
          }else{
             $("#angkatan").val("");
              $("#angkatan").attr("readonly",false);
              $("#nim").val("");
              $("#nim").focus();
              alert("tidak terdaftar pada periode");
          }
        }else{
            $("#nim").val("");
             $("#nim").focus();
            alert("NIM Harus 10 karakter ");

        }
         
    })   
    $('#add_user').click(function () {
                
            
              $('#nim').attr('readonly',false);
              $('#kondisi').val('new');
              $('#del').hide();
                        $("#frist_name").val('');
                         $("#last_name").val('');
                         $('#nim').val('');
                         $('#angkatan').val('');
                          $('#password').val('');
                         $('#hp').val('');
                         $('#alamat').val('');
                         $("#tbh").show();
                          $("#ubh").hide();
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
                         $('#nim').val(data.nim);
                         $('#angkatan').val(data.angkatan);
                          $('#password').val(data.password);
                          $('#jk').val(data.jenis_kelamin);
                         $('#hp').val(data.hp);
                         $('#alamat').val(data.alamat);
                         $('#kondisi').val('ubah');
                         $('#nim').attr('readonly',true);
                         $('#del').show();
                        
//                     

      });

     $("#del").click(function() {
                   var id = $("#nim").val();
                    var confirmation = confirm("Yakin akan menghapus data ini ?");
    
    if(confirmation)
    {
                 $.ajax({
                        url: "<?php echo base_url('C_mhs/delete') ?>",
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