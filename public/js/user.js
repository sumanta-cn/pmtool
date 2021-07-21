var base_url = $('#base_url').val()+'/';
var current = window.location.origin +location.pathname;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
var csrf_token= $("#csrf_token").val();
    $('.nav li').removeClass('active');
    $('.nav a').each(function() {
        var $this = $(this);
        //console.log($this.attr('href'));
        if ($this.attr('href') == current) {
            $this.closest('li').addClass('active');
        }
    });
