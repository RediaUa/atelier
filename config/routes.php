<?php
/**
 * Created by PhpStorm.
 * User: temka
 * Date: 25.09.17
 * Time: 22:46
 */

return array(
    'admin/order/([0-9]+)' => 'admin/applyOrder/$1',
    'admin/services' =>'admin/orderService',
    'admin' => 'admin/index',
    'order_service' => 'service/orderService',
    'services' => 'service/service',
    'catalog/([0-9]+)' => 'site/catalog/$1',
    '' => 'site/index',
);