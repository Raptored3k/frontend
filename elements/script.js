//click all button, which have id = clickedOnLoad
window.onload = function(){
	for(button of $("#clicked")){
		button.click();
	}
	
	$("#search")[0].addEventListener('click', function(e){
		search();
	});
}

function search(){
	var query = $("#query")[0].value;
	var home = "http://"+window.location.hostname;
	window.location.href = home+"/filter/?query="+query;
}

$(function() {
    $(".custom-close").on('click', function() {
        $('#logowanie').modal('hide');
    });
});