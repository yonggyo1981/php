<?php
$productList = [
	["name" => "상품명1", "price" => 2000],
	["name" => "상품명2", "price" => 3000],
	["name" => "상품명3", "price" => 4000],
	["name" => "상품명4", "price" => 5000]
];

foreach ($productList as $item) {
	printf("상품명 : %s, 가격 : %d <br>", $item['name'], $item['price']);
}