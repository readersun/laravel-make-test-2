<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static Home() 홈
 * @method static static BusStopLookup() 정류소 조회
 * @method static static RealTimeLocation() 실시간 위치
 */
final class TopMenuType extends Enum implements LocalizedEnum
{
    /** @var string 홈 */
    const Home = 'home';

    /** @var string 정류소 조회 */
    const BusStopLookup = 'bus-stop-lookup';

    /** @var string 실시간 위치 */
    const RealTimeLocation = 'real-time-location';
}
