$(document).ready(function(){
	$("#terminserie").change(function () {
       $('#group-terminserie').toggleClass('in');
    });
	$(".search-type input").change(function () {
       $(".search-group").removeClass("in");
		if( $(this).is(":checked") ){
            var val = $(this).val(); 
			
        }
		$("#search-group-"+val).addClass("in");
    });
	$('[data-toggle="tooltip"]').tooltip();
	$('#datetimepicker').datetimepicker({
		inline:true,
		timepicker:false,
		formatDate:'Y/m/d',
	});
	$('table thead th input[type="checkbox"]').click(function(){
		var current = $(this);
		var index = current.parents('th').index() + 1;
		current.parents('table').find('tbody > tr > td:nth-child(' + index + ')').each(function(){
			if(current.prop('checked')){
				$(this).find('input[type="checkbox"]').prop('checked',true);
			}
			else{
				$(this).find('input[type="checkbox"]').prop('checked',false);
			}
		});
	});

	$('table tbody > tr > td input[type="checkbox"]').click(function(){
		var current = $(this);
		var index = current.parents('td').index() + 1;
		if(!current.prop('checked')){
			current.parents('table').find('thead th:nth-child(' + index + ') input[type="checkbox"]').prop('checked',false);
		}
		else{
			var check = true;
			current.parents('table').find('tbody > tr td:nth-child(' + index + ')').each(function(){
				if($(this).find('input[type="checkbox"]').length > 0){
					if(!$(this).find('input[type="checkbox"]').prop('checked')){
						check = false;
					}
				}
			});
			console.log(check);
			current.parents('table').find('thead  th:nth-child(' + index + ') input[type="checkbox"]').prop('checked',check);
		}
	});
	var current_url = location.href;
	$.each($(".tab-menu li a"),function(){
		if($(this).attr("href") == current_url){
			$(this).addClass("active");
		}
	});
	
	$("#modal-appointment").on('hidden.bs.modal', function() {
	    $("#modal-appointment").find('input[type="text"],input[type="number"],input[type="tel"],input[type="email"]').each(function(){
	    	$(this).val('');
	    });
	    $("#modal-appointment").find('textarea').each(function(){
	    	$(this).val('');
	    });
	    $("#modal-appointment").find('select').each(function(){
	    	$(this).val($(this).find("option:first").val());
	    });
	    $("#modal-appointment").find('input[type="checkbox"],input[type="radio"]').each(function(){
	    	$(this).prop('checked',false);
	    });
	});
});