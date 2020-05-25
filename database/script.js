if(sessionStorage.getItem('basket') === null){
	sessionStorage.setItem('basket', "[]");
}

for(heart of $('.heart')){
	heart.addEventListener('click', function(e){
		id = this.id;
		id = "#" + id;
		$(id)[0].style.opacity = '1';
		$(id)[0].style.animationName = 'pulse';
	});
}

for(basket of $('.basket')){
	basket.addEventListener('click', function(e){
		var basket = JSON.parse(sessionStorage.getItem('basket'));
		id = this.id;
		basket.push(id);
		sessionStorage.setItem("basket",JSON.stringify(basket));
	});
}