<?php

use App\Enums\TopMenuType;

return [
    TopMenuType::class => [
        TopMenuType::Home => '홈',
        TopMenuType::BusStopLookup => '정류소 조회',
        TopMenuType::RealTimeLocation => '실시간 위치',
    ],
];
