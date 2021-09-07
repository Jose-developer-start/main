<?php

    function setActive($routeName){
        return request()->routeIs($routeName) ? 'active' : '';
    }

    function calPercentaje($porcentaje, $price){
        $finalPrice = ($price * $porcentaje) / 100;
        return $price - $finalPrice;
    }
?>