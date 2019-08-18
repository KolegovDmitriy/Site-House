var cart = {}; //моя корзина

$('document').ready(function(){
    loadGoods();
});

function loadGoods(){
	// Функция загрузки товаров
	// В переменную data переносим информацию из json файла
	$.getJSON('goods.json', function(data){
		console.log(data);
		var out = '';

//  

		for (var key in data) {
			out += '<div class="singl-goods" >';
			out += '<a class="add-to-cart" data-art="'+key+'"  href="project_detailed.php">' ;
			out += '<h1>' + data[key]['name'] + '</h1>';
			out += '<p> Цена: ' + data[key]['cost'] + '</p>';
			out += '<img src="'+data[key].image+'"></a> ';
			// out += '<button   class="add-to-cart" data-art="'+key+'" ><a href="project_detailed.php">Перейти</a></button>'; // кнопка отрабатывает артикул товара
 			out += '</div>'
		}
        
		$('#goods').html(out); // вывод в div с идентификатором goods переменную out
		// $('button.add-to-cart').on('click', addToCart);// Событие на кнопку при клике 
	});

}

function addToCart(){
	// // Добавляем товар в корзину
	// var articul = $(this).attr('data-art'); //this - конкретная кнопка с конкретным артикулом товара присваивает переменной артикул
	// // Если при нажатии кнопки есть артикул то суммируем
	// if(cart[articul]!=undefined){
	// 	cart[articul]++
	// }
	// else{
	// 	cart[articul] = 1;
	// }

	// localStorage.setItem('cart', JSON.stringify(cart) );
	
	// console.log(cart);

}


