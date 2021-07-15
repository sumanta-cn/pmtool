var base_url = $('#base_url').val()+'/';
var current = window.location.origin +location.pathname;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var csrf_token= $("#csrf_token").val();
    $('.nav a').removeClass('active');
    $('.nav a').each(function() {
        var $this = $(this);
        console.log($this.attr('href'));
        if ($this.attr('href') == current) {
            $this.addClass('active');
        }
    });
    $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#userlist').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
    });
    $("#userlist").on('click','.approve',function(){
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: base_url+"approveuser",
            data: { id: id },
            dataType: "json",
            success: function (data) {
                console.log('11');
                swal({
                    title:"User successfully approved",
                    type:"success",
                    showConfirmButton: false,
                    timer:1500,
                });
            }
        })
    });
