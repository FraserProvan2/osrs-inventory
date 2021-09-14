<?php

namespace App\Http\Controllers;

use App\Http\Helper;
use Illuminate\Http\Request;

class OldSchoolItemController extends Controller
{
    const BASE_URL = 'http://services.runescape.com/m=itemdb_oldschool/api/catalogue/detail.json';

    /**
     * Url to get item img src

     * @param Int $item id
     * @return JSON response
     */
    public function getItemIconSrc($item_id)
    {
        $response = Helper::curlRequest(Self::BASE_URL . '?item=' . $item_id);
        $response = json_decode($response, true);

        if ($response == null) {
            return response()->json([
                'message' => "Item doesn't exist"
            ], 400);
        }

        return response()->json([
            'imgSrc' => $response['item']['icon']
        ], 200);
    }
}
