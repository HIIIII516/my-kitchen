<?php

function cwpai_my_kitchen_products() {
    $products = array();
    for ($i = 1; $i <= 50; $i++) {
        $products[] = array(
            'post_title' => 'My Kitchen Product ' . $i,
            'post_content' => 'My Kitchen Product ' . $i . ' description',
            'post_status' => 'publish',
            'post_type' => 'product',
            'meta_input' => array(
                '_regular_price' => '10.00',
                '_price' => '10.00',
                '_sku' => 'mykitchen' . $i,
                '_stock_status' => 'instock',
                '_visibility' => 'visible',
                '_stock' => '10',
                '_product_attributes' => array(
                    'pa_color' => array(
                        'name' => 'pa_color',
                        'value' => '',
                        'is_visible' => '1',
                        'is_variation' => '0',
                        'is_taxonomy' => '1'
                    ),
                    'pa_size' => array(
                        'name' => 'pa_size',
                        'value' => '',
                        'is_visible' => '1',
                        'is_variation' => '0',
                        'is_taxonomy' => '1'
                    )
                )
            )
        );
    }
    return $products;
}
function cwpai_create_my_kitchen_products() {
    $products = cwpai_my_kitchen_products();
    foreach ($products as $product) {
        wp_insert_post($product);
    }
}
add_action('init', 'cwpai_create_my_kitchen_products');
