<?php
    function route_class(){
        // 会将当前请求的路由名称转换为css类名称，作用是允许我们对某个页面进行样式定制。
        return str_replace('.', '-', Route::currentRouteName());
    }
?>