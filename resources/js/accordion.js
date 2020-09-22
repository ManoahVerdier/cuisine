/* accordion.js */

function getAccordion(element_id,screen) 
{
	console.log('Hello');
    $(window).on('resize',function () { location.reload(); });

	if ($(window).width() < screen) 
	{
		var concat = '';
		obj_tabs = $( element_id + " li" ).toArray();
		obj_cont = $( ".tab-content .tab-pane" ).toArray();
		jQuery.each( obj_tabs, function( n, val ) 
		{
			concat += '<div id="' + n + '" class="panel panel-default">';
			concat += '<div class="panel-heading mb-3" role="tab" id="heading' + n + '">';
			if(n>0)
				concat += '<div class="panel-title text-center"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + n + '" aria-expanded="false" aria-controls="collapse' + n + '">' + val.innerText + '</a></div>';
			else 
				concat += '<div class="panel-title text-center"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + n + '" aria-expanded="true" aria-controls="collapse' + n + '">' + val.innerText + '</a></div>';
			concat += '</div>';
			if(n>0)
				concat += '<div id="collapse' + n + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading' + n + '">';
			else 
				concat += '<div id="collapse' + n + '" class="show panel-collapse collapse" role="tabpanel" aria-labelledby="heading' + n + '">';
			concat += '<div class="panel-body">' + obj_cont[n].innerHTML + '</div>';
			concat += '</div>';
			concat += '</div>';
		});
		$("#accordion").html(concat);
		$("#accordion").find('.panel-collapse:first').addClass("in");
		$("#accordion").find('.panel-title a:first').attr("aria-expanded","true");
		$(element_id).remove();
		$(".tab-content").remove();
	}	
}

if($('#tabs')){
	getAccordion("#tabList",767);
	var $group = $('#accordion');
	$group.on('show.bs.collapse','.collapse', function() {
		console.log('test');
    	$group.find('.collapse.in').collapse('hide');
	});
}