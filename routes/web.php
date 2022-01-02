<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bannerdata', function () {
    $product = [[
                'product_id' => '16',
                'prodduct_type' => '1',
                'date' => '12-14-2021',
                'color_type' => null,
                'quantity'=>null,
                'location_id'=>1
                ],[
                'product_id' => '16',
                'prodduct_type' => '1',
                'date' => '12-14-2021',
                'color_type' => null,
                'quantity'=>'Single',
                'location_id'=>2
                ],
                [
                'product_id' => '16',
                'prodduct_type' => '1',
                'date' => '12-14-2021',
                'color_type' => null,
                'quantity'=>'Multiple',
                'location_id'=>2
                ],
                [
                'product_id' => '16',
                'prodduct_type' => '1',
                'date' => '12-15-2021',
                'color_type' => null,
                'quantity'=>'Single',
                'location_id'=>2
                ],[
                'product_id' => '16',
                'prodduct_type' => '1',
                'date' => '12-15-2021',
                'color_type' => null,
                'quantity'=>'Multiple',
                'location_id'=>2
                ]
            ];
                $disabledata = [];
                $o_color = [null,'Single','Multiple'];
                $color = array_unique(array_column($product,'color_type'));
                $diff = array_diff($o_color,$color);
                foreach($product as $key=>$p){
                   array_push($disabledata,$p);
                }
                dd($disabledata);
                die;
                // $disabledata = []
                // for ($i=0; $i < $j ; $i++) { 
                //     ship date
                //     disable product
                //     color 
                //     quantity
                //     enable location id
                //     disable location 


                     
                // }
}); 