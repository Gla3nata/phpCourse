      <?php
echo "<hr/>";
	$menu = ['Меню' => ['Home' => 'https://gla3nata.github.io/Fishnet-Chair.github.io/index2.html#'],
		'Продукты' => ['Chair' => 'https://gla3nata.github.io/Fishnet-Chair.github.io/products.html', 'Table'=> 'https://gla3nata.github.io/Fishnet-Chair.github.io/fishnet.html' ],
		'Контакты' => 'https://gla3nata.github.io/Fishnet-Chair.github.io/contact.html#'];
	$str = "<ul>";
	foreach($menu as $item => $subitem) {
		if(is_array($subitem)) {
			$str .= "<li>$item</li><ul>";
			foreach($subitem as $list => $value) {
				$str .= "<a href=$value><li>$list</li></a>";
			}
			$str .= "</ul>";
		} else {
			$str .= "<a href=$subitem><li>$item</li></a>";
		}
	}
	$str .= "</ul>";
	echo $str;

?>