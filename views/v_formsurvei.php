<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Isi Kuisioner</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Mahasiswa</a></div>
              <div class="breadcrumb-item"><a href="#">Survey</a></div>
              <div class="breadcrumb-item">Isi Survey</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Survey</h2>
            <p class="section-lead">Data yang anda isi / kirimkan terjamin terjaga privasi nya.Terima kasih.</p>
             <form method="POST" action="<?php echo base_url(); ?>C_survei/save_formsurvei">
               <div class="row"> 
             
                      <label for="setuju">Pembimbing</label>
                      <select class="form-control" required="true" required="true" name="pembimbing" id="pembimbing" >
                        <option value=""> - Pilih - </option>
                        <option value="pembimbing1">Pembimbing 1</option>
                        <option value="pembimbing2">Pembimbing 2</option>
                       
                       

                      </select>
                  
                  </div> 
                  <br>
            <div class="row" id="row" style="display: none;"  >
              
                <div class="col-12"  id="bodi" > 
                 
                    
                <input type="hidden" id="total" >
                </div>
                <div class="form-group col-12">
                    <label for="survei">Saran</label>
                    <textarea   class="form-control" required="true" rows="6" name="saran"     style="position: relative;">  </textarea>
                     
                  </div>
                    <div class="col-lg-4 col-md-6 text-right">  
                    <!-- <div  class="btn btn-icon icon-right btn-primary" id="post">Simpan <i class="fas fa-arrow-right"></i></div> -->
                    <input type="submit"  class="btn btn-icon icon-right btn-primary" value="simpan">
                  </div>
                   </form>
             
             
             </div>
                 
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>
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
  $.ajax({
                        url: "<?php echo base_url('C_survei/getdata_survei2') ?>",
                        method: 'post',
                        
                        
                        dataType: 'JSON',
                        success: function (data) {
                          cols='';
                           var total=0;
                             $.each(data, function ( i,data) {
                             total =i;
                               cols+='       <div class="card">                  <div class="card-header">                    <h5>'+data['kategori']+'<br>'+data['keterangan']+'</h5>                  </div>                  <div class="card-body">                    <div class="form-group">                      <div class="control-label"><h5>'+data['survei']+'</h5></div>                      <div class="custom-switches-stacked mt-2">                       <label class="custom-switch">    <input type="hidden" name="kode[]" value="'+data['id_survei']+'">                      <input type="radio" name="option[]'+i+'" value="1" class="custom-switch-input" checked="">                         <span class="custom-switch-indicator"></span>                          <span class="custom-switch-description">Tidak Puas</span>                        </label>                        <label class="custom-switch">                          <input type="radio" name="option[]'+i+'" value="2" class="custom-switch-input">                          <span class="custom-switch-indicator"></span>                          <span class="custom-switch-description">Kurang Puas</span>                        </label>                        <label class="custom-switch">                          <input type="radio" name="option[]'+i+'" value="3" class="custom-switch-input">                          <span class="custom-switch-indicator"></span>                          <span class="custom-switch-description">Cukup Puas</span>                        </label>   <label class="custom-switch">                          <input type="radio" name="option[]'+i+'" value="4" class="custom-switch-input">                          <span class="custom-switch-indicator"></span>                          <span class="custom-switch-description">Puas</span>                        </label>  <label class="custom-switch">                          <input type="radio" name="option[]'+i+'" value="5" class="custom-switch-input">                          <span class="custom-switch-indicator"></span>                          <span class="custom-switch-description">Sangat Puas</span>                        </label>                     </div>                    </div>         </div></div>                          ';
          
             
                             })
                             $('#total').val(total);
                             
          $('#bodi').append(cols);
                          }               
                    });
    $('#pembimbing').change(function () {
               $('#row').show();
           

              })
  })
    
        
           
             
</script>