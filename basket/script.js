//craete busket elem
$(window).on('load', function () {
	var formData = new FormData(); // Currently empty
	var basketCont = $(".basketCont")[0];//div for cloth in basket
	var basketPrice = $(".basketPrice")[0];//div for basket price
	var basket = JSON.parse(sessionStorage.getItem('basket'));
	var xhttp = new XMLHttpRequest();
	if(basket.length <= 0 ){
		basketCont.innerHTML = "KOSZYK PUSTY";
		return;
	}
	formData.append('basket', basket.join(','));
	
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var response = JSON.parse(this.responseText);
			basketCont.innerHTML = response.innerHTML;
			basketPrice.innerHTML = response.price;
		}
	};
	xhttp.open("POST", "server.php", true);
	xhttp.send(formData);
});

$('#buy').on("click", function(){
	var formData = new FormData(); // Currently empty
	var result = $("#result")[0];//div for result of buing
	var basket = JSON.parse(sessionStorage.getItem('basket'));
	var xhttp = new XMLHttpRequest();
	if(basket.length <= 0 ){
		result.innerHTML= "BASKET IS EMPTY";
		return;
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			url = this.responseText;
			window.location.href = url;
			
		}
	};
	formData.append('basket', basket.join(','));
	//buy.php return url to order site
	xhttp.open("POST", "buy.php", true);
	xhttp.send(formData);
});