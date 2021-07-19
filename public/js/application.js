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
        //console.log($this.attr('href'));
        if ($this.attr('href') == current) {
            $this.addClass('active');
        }
    });
    $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#userlist,#unapprovelist').DataTable({
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
                $('.tr'+id).hide();            // console.log('11');
                Swal.fire({
                    title:data.msg,
                    icon: data.icon,
                    showConfirmButton: false,
                    timer:1500,
                });
                $( "#userlist" ).load( base_url+'user_list #userlist' );
            },
            error : function(data){
                Swal.fire({
                    title:data.msg,
                    icon: data.icon,
                    showConfirmButton: false,
                    timer:1500,
                });
            }
        })
    });
    $("#userlist").on('click','.delete',function(){
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: base_url+"approveuser",
            data: { id: id },
            dataType: "json",
            success: function (data) {
                console.log('11');
                Swal.fire({
                    title:"User Successfully Deleted",
                    icon: 'success',
                    showConfirmButton: false,
                    timer:1500,
                });
            }
        })
    });
    $( 'body' ).on('change','.roleselect',function() {
        var role= parseInt($(this).val());
        var id= $(this).data('id');
        if ( $.isNumeric(role) || role != undefined || role !="" || role > 0) {
            var html= '<a href="javascript:void(0)" class="btn btn-sm btn-success assign" data-role-id="'+role+'" data-id="'+id+'" title="Assign Role"><i class="fas fa-check"></i></a>';
            $('.td'+id).empty().append(html);
        }
        if(!$.isNumeric(role)){
            $('.td'+id).empty();
        }
    })
    $("#unapprovelist").on('click','.assign',function(){
        var id = $(this).data('id');
        var role_id = $(this).data('role-id');
        $.ajax({
            type: 'POST',
            url: base_url+"addrole",
            data: { 'id': id ,'role_id': role_id},
            dataType: "json",
            success: function (data) {
                //onsole.log('11');
                Swal.fire({
                    title:"Role Assigned Successfully",
                    icon: 'success',
                    showConfirmButton: false,
                    timer:1500,
                });
            },
            error : function(data){
                Swal.fire({
                    title:data.msg,
                    icon: data.icon,
                    showConfirmButton: false,
                    timer:1500,
                });
            }
        })
    });

