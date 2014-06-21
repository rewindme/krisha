function load_section(param){
	if (!param){return false;}
	$.each(param,function(idx,value){
		var sID = value.section, fName = value.fileName;
		$.get("./"+fName,function(data){
			$(sID).html($(data).find(sID).html())
			console.log($(data).find(sID))
		}).success(function(){
			console.log(sID)
		}).fail(function(){
			console.log('못불러왔쪄욤 뿌잉뿌잉')
		});
	});	
}

function get_param(t){
	var loc = window.location.search.substring(1)	
	var loc_var = loc.split('&');
    for (var i = 0; i < loc_var.length; i++){        
        var param = loc_var[i].split('=');
        if (param[0] == t) return param[1];
    }
}

$(document).ready(function(){
	
})