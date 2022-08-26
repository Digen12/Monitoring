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
     
      <!-- -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Survey </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Isi Survey</a></div>
              <div class="breadcrumb-item"><a href="#">Nilai Persepsi</a></div>
              <div class="breadcrumb-item">Survey</div>
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
                    <h4>Data Nilai Persepsi</h4>
                     
                            
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       <div class="modal-body">
                
                  <div class="row">
                  
                    <div class="form-group col-6">
                      <select id="min" class="form-control">
                        <option value="">- Filter Dosen -</option>
                         
                        
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
                            <th>Id Survei</th>
                            <th>Kategori</th>
                            <th>TP</th>
                            <th>KP </th>
                            <th>CP</th>
                            <th>P</th>
                            <th>SP</th>
                            <th>NID</th>
                            <th>NIM</th>
                             

                            
                            
                            
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
  
   $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = $('#min').val();
  
        var age =  data[8]; // use data for the age column
       
          
         if (min == age  ) {
       
            return true;
        } else{
          return false;
        }
        
    }
);

   $(document).ready(function () {
               
     $.ajax({
                        url: "<?php echo base_url('C_bimbingan/getdosen2') ?>",
                        method: 'post',
                         
                         async: false,
                        dataType: 'JSON',
                        success: function (data) {
                              $('#min').find('option').not(':first-child').remove();
                               $.each(data, function ( index,data) {
                               
                            
                            $('#min').append('<option value="' + data['nid'] + '">'  + data['nid'] + ' - '  + data['nama_depan'] + '</option>'); 
                           
                           });
                       
                          }               
                    }); 
               
      
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min').change( function() {
        $('#data-table').DataTable().draw();
    } );
    // Event listener to the two range filtering inputs to redraw on input
            
           $('#data-table').DataTable( {
                "ajax": {
                    "url": "<?php echo base_url('C_survei/nilaipresepsi') ?>",
                    "dataSrc": ""
                },
                "columns": [         
                                           {"data": "number"}, 
                                           {"data": "id_survei"}, 
                                           {"data": "kategori"},  
                                            {"data": "tp"},
                                          {"data": "kp"},
                                          {"data": "cp"},
                                          {"data": "p"},
                                          {"data": "sp"},
                                          {"data": "nid"}, 
                                          {"data": "nim"}
                                         ], 
                   
                                         
                 
            
            } );
        

    })   
    
    

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