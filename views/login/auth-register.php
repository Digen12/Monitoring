
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
   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"></div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url(); ?>login/save_regis">
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
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" required data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Ulang</label>
                      <input id="password2" type="password" class="form-control" name="password2" required name="password-confirm">
                    </div>
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
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Alamat</label>
                      <input type="text" class="form-control" required name='alamat'>
                    </div>
                     <div class="form-group col-3">
                      <label>Jenis Kelamin</label>
                      <select class="form-control selectric" name="jk" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group col-3">
                      <label>Angkatan</label>
                      <select class="form-control selectric" name="angkatan" required>
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
                  </div>

                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                 
              </div>
            </div>

            <button style="display: none;" class="btn btn-primary" id="toastr-4">Launch</button>
            <button style="display: none;" class="btn btn-primary" id="toastr-4a">Launch</button>
            <button style="display: none;" class="btn btn-primary" id="toastr-2">Launch</button>
              
             <div class="mt-5 text-muted text-center">
              Sudah Punya Akun ? <a href="<?php echo base_url(); ?>login/auth_login">Login disini</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Monitoring Bimbingan 2020
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
                       
                        $("#toastr-4a").click(); 
                        // alert('alert atas');
                    </script>
                  <?php } ?>
            <?php  if ($this->session->flashdata('pass')) { ?>
                     <script type="text/javascript">
                        $("#toastr-4").click();
                        // alert('alert bawah');
                       
                    </script>
            <?php } ?>
             <?php  if ($this->session->flashdata('suc')) { ?>
                     <script type="text/javascript">
                        $("#toastr-2").click();
                        // alert('alert bawah');
                       
                    </script>
            <?php } ?>