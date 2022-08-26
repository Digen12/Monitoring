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
                 <form method="POST" action="<?php echo base_url(); ?>C_bimbingan/save_materi_dosen">
                  <div class="row">
                  
                    <div class="form-group col-12">
                      <label for="setuju">Pertemuan</label>
                      <input type='text' class="form-control" readonly required="true" name="pertemuan" id="pertemuan" >
                        
                     
                    </div>
                    <div class="form-group col-12">
                      <label for="setuju">Pembimbing</label>
                      <input type="text" class="form-control" required="true" name="pembimbing" id="pembimbing" >
                       
                    </div>
                    <div class="form-group col-6">
                      <label for="setuju">Dosen</label>
                      <input type="text" readonly  class="form-control" name="nama" id="nama" >
                      <input type="hidden"  class="form-control" name="nid" id="nid" >
                      <input type="hidden"  class="form-control" name="nim" id="nim" >
                      
                    </div> 
                   <div class="form-group col-6">
                      <label for="setuju">Tanggal Pertemuan</label>
                      <input type="date"  class="form-control" required="true" value="<?php echo date('Y-m-d'); ?>" name="tgl" id="tgl" >
                      
                    </div> 
                     <div class="form-group col-12">
                      <label for="setuju">Judul Bahasan</label>
                     <input type='text' readonly class="form-control" required="true" name="ket" id="ket" >
                      
                    </div>   
                     <div class="form-group col-12">
                    <label for="survei">Isi Bahasan</label>
                    <textarea   readonly='true' class="form-control" rows="6" name="materi" required="true" id="materi" style="position: relative;">  </textarea>
                     
                  </div>

                    
                  </div>
                 
                     <input type="hidden" name="id_bimbingan" id="id_bimbingan">
                      <input type="hidden" name="kondisi" id="kondisi">
                 
                  
                  

                 
                 
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <!-- <div class="btn btn-danger" id="del">Hapus Data</div> -->
                 <!-- <input type="submit" class="btn btn-primary " value="Simpan Data"> -->
                
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
 
            <!-- <button class="btn btn-primary" id="add_user" data-toggle="modal" data-target="#loading">Tambah Data </button> -->
            <br><br>
            <!-- <?php echo $this->session->flashdata('nid'); ?> -->
               <button style="display: none;"  class="btn btn-primary" id="toastr-3">Launch</button>
            <button  style="display: none;" class="btn btn-primary" id="toastr-4a">Launch</button>
            <button  style="display: none;" class="btn btn-primary" id="toastr-2">Launch</button>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Sudah Bimbingan</h4>
                     
                            
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       <div class="modal-body">
                    
                  <div class="row">
                  
                    
                    <div class="form-group col-6">
                      <select id="max" class="form-control">
                        <option value="">- Filter berdasarkan Pembimbing -</option>
                          <option value="pembimbing1">Pembimbing 1 </option>
                        <option value="pembimbing2">Pembimbing 2</option>
                        
                      </select>
                    </div>
                   </div>
                   </div> 
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
                            <th style="display: none;">nim</th>
                             <th style="display: none;">keterangan</th>
                             <th style="display: none;">tgl1</th>
                              <th style="display: none;">ta</th>
                              <th style="display: none;">angkatan</th>
                              <th style="display: none;">kosong</th>

                            
                            
                            
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
                          message: 'Pertemuan & Materi sudah di input sebelumnya.',
                          position: 'topRight'
                        });
                       
                    </script>
            <?php } ?>
 
 <script type="text/javascript">
  

   $(document).ready(function () {
               
    
               
      
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min,#max').change( function() {
        $('#data-table').DataTable().draw();
    } );
    // Event listener to the two range filtering inputs to redraw on input
            
           $('#data-table').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url('C_bimbingan/getdata_materi_detail') ?>",
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
                                            {"data": "nim"},
                                           {"data": "keterangan"},
                                           {"data": "tgl1"},
                                           {"data": "kategori"},
                                           {"data": "angkatan"},
                                           {"data": "kosong"},
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
                
            },
             {
                "targets": [ 14 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 15 ],
                "visible": false 
            },
            {
                "targets": [ 16 ],
                "visible": false 
            },
            {
                "targets": [ 17],
                "visible": false 
            },
             
             ]                        
                 
            
            } );

    })   
     $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
     
         var max = $('#max').val();
         var kosong = '';
        var age =  data[13]; // use data for the age column
        var age2 = data[17];
          
         if (max==kosong  ) {
       
            if (kosong==age2) {
              return true;
            }
        } else if (max!=kosong) {
            if (max==age) {
              return true;
            }
        }else{

          return false;
           
        }


        
    }
);
    

      $('#data-table').on('click','.edit_record',function(){
                     var table = $('#data-table').DataTable();
                        var data = table.row( $(this).parents('tr') ).data();
                         var dataf = table.rows().data();
                        var dum = data.nid.split(' ');
                        var dumi = data.nim.split(' ');
                         $('#loading').modal('show');
                         $("#pertemuan").val(data.pertemuan2);
                         $("#id_bimbingan").val(data.id_bimbingan);
                         $("#pembimbing").val(data.keterangan);
                         $('#nid').val(dum[0]);
                          $('#nim').val(dumi[0]);

                         $('#nama').val(dum[1]);
                         $('#tgl').val(data.tgl1);
                         $('#ket').val(data.ket_pertemuan);
                          $('#materi').val(data.materi_pertemuan);
                         
                         $('#kondisi').val('ubah');
                        
                         $('#del').show();
                        
//                     

      });
       

     
 </script>