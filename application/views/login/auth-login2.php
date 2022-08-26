<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/ifunjani.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url(); ?>login/loginMe" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Username tidak boleh kosong
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                       
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Password tidak boleh kosong 
                    </div>
                    <br>
                    <label for="password" class="control-label">Sebagai</label>
                     <select class="form-control selectric" name="level" required>
                        <option value="mhsw">Mahasiswa</option>
                        <option value="dsn">Dosen</option>
                        <option value="tu">Tata Usaha</option>
                         
                      </select>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                     
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <button style="display: none;" class="btn btn-primary" id="toastr-4c">Launch</button>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum Punya Akun ? <a href="<?php echo base_url(); ?>login/auth_register">Daftar disini</a>
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
              if ($this->session->flashdata('er2')) { ?>
                    <script type="text/javascript">
                       
                        $("#toastr-4c").click(); 
                        // alert('alert atas');
                    </script>
                  <?php } ?>