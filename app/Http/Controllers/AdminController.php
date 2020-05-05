<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
    public function getHomePage()
    {
        return view('admin.pages.index');
    }

    public function getVisitorAnalytic()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        return response()->json($analyticsData);
    }

    public function getBrowserAnalytic()
    {
        $analyticsData = Analytics::fetchTopBrowsers(Period::days(7));
        return response()->json($analyticsData);
    }

    public function getCountryAnalytic()
    {
        $analyticsData = Analytics::performQuery(Period::days(7),'ga:sessions',['dimensions' => 'ga:country']);
        return response()->json($analyticsData['rows']);
    }

    public function getProductPage()
    {
        return view('admin.pages.product');
    }
}
