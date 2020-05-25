//click all button, which have id = clickedOnLoad
window.onload = function(){
	for(button of $("#clicked")){
		button.click();
	}
}