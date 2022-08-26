<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<head>
  <script type="text/javascript" src="<?php echo base_url('assets/js/Chart.js')?>"></script>

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
 </head>
      <!-- Main Content -->
         <!-- modal buat pop up yog-->
     
      <!-- -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Survey </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Isi Survey</a></div>
              <div class="breadcrumb-item"><a href="#">Nilai GAP</a></div>
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
                    <h4>Data Nilai GAP  </h4>
                     
                            
                  </div> <div class="col-md-4">   
                                    <div class="form-group"> &nbsp;
                                      <!-- <?php echo $permintaan ;?> -->
               <canvas id="graph"></canvas>
                   <script type='text/javascript'>
 //     $(".tgl11").on("change", function() {
//     this.setAttribute(
//         "data-date",
//         moment(this.value, "YYYY-MM-DD")
//         .format( this.getAttribute("data-date-format") )
//     )
// }).trigger("change");
   var ctx = document.getElementById("graph").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Tidak Puas ", "Kurang Puas ", "Cukup Puas ","Puas ","Sangat Puas "],
        datasets: [{
          label: 'Akumulasi Total Jawaban',
          data: [<?php echo $tp; ?>,<?php echo $kp; ?>,<?php echo $cp; ?>,<?php echo $p; ?>,<?php echo $sp; ?>],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
        </div></div>
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
                             
                            <th>Id Survei</th>
                            <th>Kategori</th>
                            <th>bobot(Persepsi)</th>
                            <th>rata(Persepsi) </th>
                            <th>bobot(Harapan)</th>
                            <th>rata2(Harapan)</th>
                            <th>GAP</th>
                            <th style="display: none;">NID</th>
                            
                             

                            
                            
                            
                          </tr>
                        </thead>
                        <tbody>                                 
                          
                        </tbody>
                        <tfoot>
                          <tr>
                             <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                           <tr>
                             <th></th>
                            <th>Rata-rata</th>
                            <th id='1'></th>
                            <th id='2'></th>
                            <th id='3'></th>
                            <th id='4'></th>
                            <th id='5'></th>
                          </tr>
                           
                        </tfoot>
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
  
        var age =  data[7]; // use data for the age column
        $('#1').text();
          
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
              "footerCallback": function ( row, data, start, end, display,dataIndex ) {

            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total of the complete result 
            var monTotal = api
                .column( 2 , { page: 'current'})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
      var tueTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
            var wedTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
       var thuTotal = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
        
       var friTotal = api
                .column( 6, { page: 'current'})
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
      
        
            // Update footer by showing the total with the reference of the column index 
      $( api.column( 1 ).footer() ).html('Total');
            $( api.column( 2 ).footer() ).html(monTotal);
              
                 
             var table = $('#data-table').DataTable();
              var dataf =table .column( 5, { page: 'current'} ).data().length;
              total = monTotal/dataf;
              total2 = tueTotal/dataf;
              total3 = wedTotal/dataf;
              total4 =  thuTotal/dataf;
              total4a =  friTotal/dataf;
              //gap sebelum
              total5 =  thuTotal-(friTotal);
    
 
 
              if (monTotal>0) {
             $('#1').text(total.toFixed(2));
             $('#2').text(total2.toFixed(2));
               $('#3').text(total3.toFixed(2));
                 $('#4').text(total4.toFixed(2));
                 $('#5').text(total4a.toFixed(2));
               }
            $( api.column( 3 ).footer() ).html(tueTotal);
            $( api.column( 4 ).footer() ).html(wedTotal);
            $( api.column( 5 ).footer() ).html(thuTotal);
            $( api.column( 6 ).footer() ).html(friTotal);
        },

             "pageLength": 25,
                "ajax": {
                    "url": "<?php echo base_url('C_survei/nilaigap') ?>",
                    "dataSrc": ""
                },dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
                "columns": [          
                                           {"data": "id_survei"}, 
                                           {"data": "kategori"},  
                                            {"data": "bobot1"},
                                          {"data": "rata1"},
                                          {"data": "bobot2"},
                                          {"data": "rata2"},
                                          {"data": "gap"},
                                          {"data": "nid"},
                                         ],

                   
                    "columnDefs": [
            {
                "targets": [ 7 ],
                "visible": false,
             
            }, 
             {
                "targets": [ 0 ],
                "orderable": false
             
            },
            {
                "targets": [ 1 ],
                "orderable": false
             
            },
            {
                "targets": [ 2 ],
                "orderable": false
             
            },
            {
                "targets": [3],   
                "orderable": false
             
            },
            {
                "targets": [4],
                "orderable": false
             
            },
            {
                "targets": [ 5 ],
                "orderable": false
             
            },
            {
                "targets":[ 6 ],
                 
                "orderable": false
             
            }]                    
                   
                                         
                 
            
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