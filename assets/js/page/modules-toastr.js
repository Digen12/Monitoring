"use strict";
 
$("#toastr-1").click(function() {
  iziToast.info({
    title: 'Hello, world!',
    message: 'This awesome plugin is made iziToast toastr',
    position: 'topRight'
  });
});

$("#toastr-2").click(function() {
  iziToast.success({
    title: 'Berhasil!',
    message: 'Data Berhasil disimpan.',
    position: 'topRight'
  });
});

$("#toastr-3").click(function() {
  iziToast.warning({
    title: 'Hello, world!',
    message: 'This awesome plugin is made by iziToast',
    position: 'topRight'
  });
});

$("#toastr-4").click(function() {
  iziToast.error({
    title: 'Gagal!',
    message: 'Password Tidak sama, Inputan Yang anda masukan salah ',
    position: 'topRight'
  });
});
$("#toastr-4c").click(function() {
  iziToast.error({
    title: 'Gagal!',
    message: 'Username/Password, Yang anda masukan salah ',
    position: 'topRight'
  });
});
$("#toastr-4a").click(function() {
  iziToast.error({
    title: 'Gagal!',
    message: 'Data Sudah di gunakan',
    position: 'topRight'
  });
});

$("#toastr-5").click(function() {
  iziToast.show({
    title: 'Hello, world!',
    message: 'This awesome plugin is made by iziToast',
    position: 'bottomRight' 
  });
});

$("#toastr-6").click(function() {
  iziToast.show({
    title: 'Hello, world!',
    message: 'This awesome plugin is made by iziToast',
    position: 'bottomCenter' 
  });
});

$("#toastr-7").click(function() {
  iziToast.show({
    title: 'Hello, world!',
    message: 'This awesome plugin is made by iziToast',
    position: 'bottomLeft' 
  });
});

$("#toastr-8").click(function() {
  iziToast.show({
    title: 'Hello, world!',
    message: 'This awesome plugin is made by iziToast',
    position: 'topCenter' 
  });
});
