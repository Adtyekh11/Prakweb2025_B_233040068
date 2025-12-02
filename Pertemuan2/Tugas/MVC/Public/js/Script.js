$(function(){
  
    
  $('.TampilModalUbah').on('click', function(){
    $('#JudulModal').html('Ubah Data Pelanggan');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/Pertemuan2/Tugas/MVC/Public/user/ubah');

    const id = $(this).data('id');
   
    $.ajax({
      url: 'http://localhost/Pertemuan2/Tugas/MVC/Public/user/getUbah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        $('#name').val(data.name);
        $('#email').val(data.email);
        $('#id').val(data.id);

      }
    });
  }); 

  $('.TombolTambahData').on('click', function(){
   $('#JudulModal').html('Tambah Data Pelanggan');
   $('.modal-footer button[type=submit]').html('Tambah Data');
 });
});