//var base_url = window.location.origin + '/';
var current = window.location.origin +location.pathname;
console.log(current);
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
