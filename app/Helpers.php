<?php

namespace app;

function is_active($url, $active = 'active', $passive = null){
        return request()->is($url) ? $active : $passive;
}
