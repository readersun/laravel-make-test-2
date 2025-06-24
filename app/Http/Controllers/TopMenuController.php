<?php

namespace App\Http\Controllers;

use App\Enums\TopMenuType;
use App\Helpers\EnumHelper;
use App\Config\EnumMappings;
use Illuminate\Http\Request;

class TopMenuController extends Controller
{
    /**
     * Display the menu items with localization
     */
    public function getTopMenuList(Request $request)
    {
        // EnumHelper를 사용해서 기본 enum 정보 가져오기
        $topMenuList = EnumHelper::makeFullEnumData(TopMenuType::class);

        return response()->json([
            'current_locale' => app()->getLocale(),
            'top_menu_list' => $topMenuList,
        ]);
    }
}