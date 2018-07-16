<?php

$arr = array([
          'variant_id'=> rand(1,10),
          'product_id'=> random_int(4,12),
          'product_title'=>str_shuffle(10),
          'title'=>str_shuffle(12),
          'price'=>rand(700, 1400),
          'inventory_quantity'=>rand(1,10),
          'sku'=>('ABCDI008')
        ]);

	foreach ($arr as $value) {
	 	echo "<pre>";
				print_r($value);
	 } 