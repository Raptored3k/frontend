if(sessionStorage.getItem('basket') === null){
	sessionStorage.setItem('basket', "[]");
}

var elemInBasket = JSON.parse(sessionStorage.getItem('basket'));
for(basket of $('.basket')){
	basket.addEventListener('click', function(e){
		id = this.id;
		if(!elemInBasket.includes(id)){
			this.innerHTML = remove;
			elemInBasket.push(id);
		}else{
			
		}
		sessionStorage.setItem("basket",JSON.stringify(elemInBasket));
	});
}