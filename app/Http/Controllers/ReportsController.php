<?php

namespace App\Http\Controllers;

use App\SaleReportsDaily;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dailySales()
    {

        $daily = SaleReportsDaily::all();
//        $day = array();
//        $totals = array();
//        foreach ($daily as $value) {
//            $day[] = $value->$day;
//            $totals[] = $value->$totals;
//        }

        $days = $daily->pluck('day');
        $totals = $daily->pluck('total');
        return view('reports.daylySales', compact("days", "totals"));
    }
}
