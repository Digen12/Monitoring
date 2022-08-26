<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Monitoring Bimbingan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
              
                <li class="<?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index"> Dashboard</a></li>
              </ul>
            </li>
            
              <?php if ($level=='tu') { ?>
            <li class="menu-header">Tata Usaha</li>
             <li  >
              <a href="<?php echo base_url(); ?>C_survei/periode"><i class="far fa-file-alt"></i> <span>Kelola Periode</span></a>
             
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Kelola User</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>C_dosen">Kelola Dosen</a></li> 
                 <li><a href="<?php echo base_url(); ?>C_mhs">Kelola Mahasiswa</a></li> 
                 

                
              </ul>
            </li> <?php } ?> 
            <li class="dropdown">  <?php if ($level=='tu'|| $level=='dsn' && $ket=='kajur' || $ket=='koordinator') { ?>
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Kelola Survei</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>C_survei">Kelola Survei</a></li> 
                 <li><a href="<?php echo base_url(); ?>C_survei/harapan">Kelola Nilai Harapan</a></li> 
                <li><a href="<?php echo base_url(); ?>C_survei/presepsinya">Kelola Nilai Persepsi</a></li>  
                <li><a href="<?php echo base_url(); ?>C_survei/gap">Kelola Nilai GAP</a></li>  
                
              </ul>
            </li><?php } ?> 
          </li>
            <?php if ($level=='mhsw') { ?>
           <li class="menu-header">Mahasiswa</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Kelola Bimbingan</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>C_bimbingan">Kelola Dospem</a></li> 
                <li><a href="<?php echo base_url(); ?>C_bimbingan/v_materi">Kelola Materi Bimbingan</a></li> 
                <li><a href="<?php echo base_url(); ?>C_bimbingan/v_materi_mhs_detail">Data Sudah Bimbingan</a></li> 
                 <li><a class="nav-link beep beep-sidebar" href="<?php echo base_url(); ?>C_survei/form"><font color='red'>Isi Survey</font></a></li> 
               
               
                
              </ul>
            </li><?php } ?> <?php if ($level=='dsn' || $ket=='koordinator' || $ket=='kajur' ) { ?>
             <li class="menu-header">Dosen</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Kelola Bimbingan</span></a>
              <ul class="dropdown-menu">
                
                
               
                <li><a href="<?php echo base_url(); ?>C_bimbingan/get_mhs">Kelola Mahasiswa</a></li> 
                  <li><a href="<?php echo base_url(); ?>C_bimbingan/v_materi_dosen">Approve Bimbingan</a></li> 
                <li><a href="<?php echo base_url(); ?>C_bimbingan/v_materi_dosen_rekap">Data Rekap Bimbingan</a></li>  
                <li><a href="<?php echo base_url(); ?>C_bimbingan/v_materi_dosen_detail">Data Detail Bimbingan</a></li> 
             
               
                
              </ul>
            </li> <?php } ?>   <?php if ($level=='dsn' && $ket=='koordinator'||$ket=='kajur') { ?>
             <li class="menu-header">Kajur/Koordinator</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Kelola Bimbingan</span></a>
              <ul class="dropdown-menu">
                
             
               
                <li><a href="<?php echo base_url(); ?>C_bimbingan/get_mhs_v">Daftar Status Mahasiswa</a></li> 
                <li><a href="<?php echo base_url(); ?>C_bimbingan/v_materi_rekap">Data Rekap Bimbingan</a></li> 
               
          
               
                
              </ul>
            </li>
                 <?php } ?>
          </li>
           
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo base_url(); ?>login/logout" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i>Logout
            </a>
          </div>
        </aside>
      </div>
