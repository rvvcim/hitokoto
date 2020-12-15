//别问写的为啥这么烂，问就是不会写！
function ihitokoto(){
	var yy = new XMLHttpRequest();
	yy.open('get', 'https://yourdomain/hitokoto/');
	yy.send();
	yy.onreadystatechange = function() {
		if (yy.readyState === 4) {
			hitokoto.innerText = yy.responseText;
		}
	}
}
ihitokoto()