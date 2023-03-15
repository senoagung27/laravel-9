<?php

namespace App\Http\Controllers;

use stdClass;
use Carbon\Carbon;
use App\Models\StokFF;
use App\Models\StokJubelio;
use App\Models\warehouse_locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

/**
 * Summary of DashboardController
 */
class DashboardController extends Controller
{
    public function index()
    {
        // $data = DB::table('stok_jubelios')
        //     ->select(
        //         'data_ff',
        //         'data_jubelio',
        //         DB::raw('json_extract(data_jubelio, "$.data") as number'),
        //         'created_at'
        //     )->get();
        // $links = $data->links();
        // $data = $data->toArray();
        // $post["links"] = $links;
        // dd($data);
        // SELECT JSON_EXTRACT(@data, '$.Person.Name', '$.Person.Age', '$.Person.Hobbies[1]') AS 'Result';
        // dd($data);
        // foreach ($data as $item) {
        //     // $results1[] = [
        //     //     'id' => $item->id,
        //     // ];
        //     dd($data);
        // }
        // $postsData = [];
        // foreach ($posts as $post) {
        //     $postsData[] = [
        //         'id' => $post->id,
        //         'title' => $post->title,
        //         'content' => $post->content,
        //         'user_id' => $post->user_id,
        //     ];
        // }
        // $data = [
        //     'users' => $results1,
        // ];
        // dd($data[0]->data_ff);
        // dd($data);
        // return $data;
        // foreach ($results2 as $item) {
        //     foreach ($results1 as $post) {
        //         dd($item);
        //         $gropingdata= $results1;
        //         $gropingdata = array_merge($results1, $results2);
        //         dd($item);
        //         if ($post->skuNumber == $item->item_code) {
        //             $groping = $post->skuNumber;
        //             array_push($gropingdata,$item);
        //             array_push($gropingdata,$post);
        //              $groping = [
        //                     'skuNumber' => $post->skuNumber,
        //                 ];
        //             return $groping;
        //         }
        //     }
        // }
        // foreach ($results1 as $item) {
        //     $groping = [
        //         // 'sku_number' => $item = "FMA06292001",
        //         'skuNumber' => $item->skuNumber,
        //         'product_name' => $item->productName,
        //         'stock' => $item->stock,
        //     ];
        // }
        // foreach ($results2 as $item) {
        //     $groping = [
        //         // 'sku_number' => $item = "FMA06292001",
        //         'item_code' => $item->item_code,
        //         'product_name' => $item->item_name,
        //     ];
        //     foreach ($item->location_stocks as $item) {
        //         // dd($item);
        //         $groping = [
        //             'location_code' => $item->location_code,
        //             'stock' => $item->available,
        //         ];
        //     }
        // }
        // // dd($groping);
        // usort($groping, function($a, $b) {
        //     // dd($groping);
        //     return $a['skuNumber'] - $b['item_code'];
        // });
        // print_r($groping);
        // dd($data);
        // $sku_number = array();
        // $name = array();
        // $remaining_time = array();
        // $city = array();
        // foreach ($results3 as $objects)
        //     $group = new stdClass();
        //     if (array_key_exists($objects, $sku_number)) {
        //         $objects->sku_number;
        //         $objects->remaining_time;
        //         $objects->city;
        //     }
        //     else if(array_key_exists($objects, $sku_number)){
        //     }
        // $page = Paginator::resolveCurrentPage();
        // $perPage = 100;
        // $paginatedResults1 = new Paginator(array_slice($gropingdata, ($page - 1) * $perPage, $perPage), $perPage, $page);
        // $data = StokJubelio::all();
        // $grouped_data = [];
        // foreach ($data as $item) {
        //     // dd($item->data_jubelio_items);
        //     $jubelio = json_decode($item->data_jubelio_items, true);
        //     $ff = json_decode($item->data_ff_iku, true);
        //         // dd($jubelio);
        // }
        // //  $grouped_items = [];
        // foreach ($ff as $data) {
        //     // dd($data);
        //     $sku = $data['skuNumber'];
        //     // dd($sku);
        //     // $stock =  intval($data['stock']);
        //     $product =  $data['productName'];
        //     $stok =  $data['stock'];
        //     $grouped_items[$sku]['sku_number'] = $sku;
        //     $grouped_items[$sku]['product_name'] = $product;
        //     // $grouped_items[$sku]['stock'] = $stock;
        //     $grouped_items[$sku]['stock'] = $stok;
        // }
        // // dd($grouped_items);
        // // $grouped = [];
        // $grouped= array();
        // foreach ($jubelio as $item) {
        //     $code = $item['item_code'];
        //     // $stock =  $data['stock'];
        //     // $lokcode = $row['location_code'];
        //     // $stoks = $row['available'];
        //     // dd($item);
        //     $product = $item['item_name'];
        //     $stok = $item['location_stocks'];
        //     // if ($stok == 'JKS') {
        //     //     $stok = 'JKS';
        //     //     dd($stok);
        //     // }
        //     // dd($stok == "JKS");
        //     // dd($item['item_code'] == 'FMA00255001');
        //     // dd($stoks);
        //     //
        //     // $grouped_items[$code]['available'] =  $stoks;
        //     // // dd($stoks);
        //     // $grouped_items[$code]['location_code'] = $lokcode;
        //     // $grouped_items[$code]['available'] = $stok;
        //     $grouped[$code]['location_stocks'] = $item['location_stocks'];
        //     // dd($stok);
        //     // $grouped_items[$code]['stok'] = $stok;
        //     $grouped[$code]['sku_number'] = $code;
        //     // $grouped_items[$code]['company_name'] = $kode;
        //     $grouped[$code]['product_name'] = $product;
        //     // dd($kelompok);
        // }
        // dd($grouped_items);
        $data = StokJubelio::all();
        $warehouse_locations = Warehouse_locations::all();
        // dd($warehouse_locations);
        $results_warehouse = json_decode($warehouse_locations);
        // dd($results_warehouse);
        $results1 = json_decode($data[0]->data_ff_iku);
        $results2 = json_decode($data[0]->data_jubelio_items);
        $results3 = json_decode($data[0]->data_jubelio_channels);
        $results4 = json_decode($data[0]->data_ff_bku);
        $results5 = json_decode($data[0]->data_jubelio_tenant, true);
        // dd($warehouse_locations);
        // $data = [];
        $array1 = json_decode($data[0]->data_ff_iku, true);
        $array3 = json_decode($data[0]->data_jubelio_tenant, true);
        $array2 = json_decode($data[0]->data_jubelio_items, true);
        // dd(collect($data->data_jubelio_tenant));
        // dd(collect([$array2]));
        // $results = json_decode($data->getBody()->getContents(), true);
        // dd([$warehouse_locations]);
        $grouped_items = [];
        foreach ($results1 as $item) {
            $sku = $item->skuNumber;
            $stock = $item->stock;
            $grouped_items[$sku]['sku_number'] = $sku;
            $grouped_items[$sku]['stock'] = $stock;
        // }
        foreach ($results2 as $body) {
            $code = $body->item_code;
            $lokcode = $body->location_stocks;
            // dd($lokcode);
            $grouped_items[$code]['sku_number'] = $code;
            // $grouped_items[$code]['available'] = intval($body->location_stocks[0]->available);
            // $grouped_items[$code]['code_warehouse'] = $lokcode;
            // $code = $body->item_code;
            foreach ($results_warehouse as $row) {
                // dd($row);
                // $code_lok = intval($row->jubelio_locations_id);
                // dd($code_lok);
                // $warehouse = array_push($code);
                // $grouped_items[$code]['warehouse_id_jb'] = $warehouse;
                $grouped_items[$code]['warehouse_id_jb'] = intval($row->jubelio_locations_id);
                $grouped_items[$code]['warehouse_name_jb'] = $row->jubelio_locations_name;
                $grouped_items[$code]['ff_warehouse_id'] = $row->ff_warehouse_id;
            }
        }
        }
        dd($grouped_items);
        // $grouped_items will contain the items grouped by skuNumber/item_code with stock and on_hand values merged
        //        foreach ($array2 as $item) {
        //            $code = $item['item_code'];
        //            $grouped_items[$code]['skuNumber'] = $code;
        //            $grouped_items[$code]['available'] = intval($item['location_stocks'][0]['available']);
        //        }
        //    dd($grouped_items);
        // $page = Paginator::resolveCurrentPage();
        // $perPage = 50;
        // $paginatedResults1 = new Paginator(array_slice($results1, ($page - 1) * $perPage, $perPage), $perPage, $page);
        //    dd($grouped_items[$code]['available'] = $item['location_stocks'][0]['available']);
        // dd($grouped);
        return view('dashboard', [
            'grouped_items' => $grouped_items,
            // 'grouped_data' => $grouped_data,
            // 'data1' => $results2,
            // 'paginatedResults1' => $paginatedResults1,
            // 'array3' => $array3,
        ]);
        // return view('dashboard', compact('data'));
    }
    public function getstok(Request $request)
    {
        // $curl1 = curl_init();
        // curl_setopt_array($curl1, array(
        //     // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
        //     CURLOPT_URL => 'https://api.freshfactory.id/v1/inventories?status=stored&limit=0&tenant_id=31e0787f-d1a0-4737-b4f7-770191407d4a',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC92MVwvYWRtaW5cL2xvZ2luIiwiaWF0IjoxNjc3NjQ1NTQ4LCJuYmYiOjE2Nzc2NDU1NDgsImp0aSI6ImFHanowb0dqdFVFTTZ2cloiLCJzdWIiOiIwNjU0MWU5My04MzMxLTQ0N2EtOTdlMC0zNmZhZGYyNWY4YmUiLCJwcnYiOiI0MWQzNGZjYTA3NzllOTBmOThiZTM4ODdmYmYwYWM0NzQwYzc3MDNmIn0.lfLRjpWjKL9x7jZ5siuWOeTRerxkYCknuhGM5x7SsCE'
        //     ),
        // ));
        // $response1 = curl_exec($curl1);
        // curl_close($curl1);
        // $curl2 = curl_init();
        // curl_setopt_array($curl2, array(
        //     // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
        //     CURLOPT_URL => 'https://api.freshfactory.id/v1/inventories-bku?status=stored&limit=0&tenant_id=31e0787f-d1a0-4737-b4f7-770191407d4a',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC92MVwvYWRtaW5cL2xvZ2luIiwiaWF0IjoxNjc3NjQ1NTQ4LCJuYmYiOjE2Nzc2NDU1NDgsImp0aSI6ImFHanowb0dqdFVFTTZ2cloiLCJzdWIiOiIwNjU0MWU5My04MzMxLTQ0N2EtOTdlMC0zNmZhZGYyNWY4YmUiLCJwcnYiOiI0MWQzNGZjYTA3NzllOTBmOThiZTM4ODdmYmYwYWM0NzQwYzc3MDNmIn0.lfLRjpWjKL9x7jZ5siuWOeTRerxkYCknuhGM5x7SsCE'
        //     ),
        // ));
        // $response2 = curl_exec($curl2);
        // curl_close($curl2);
        $curl1 = curl_init();
        curl_setopt_array($curl1, array(
            // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
            CURLOPT_URL => 'https://api.freshfactory.id/v1/products/d5e490a9-8873-4405-853f-a039561bf46e/stock',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC9cL3YxXC9sb2dpbiIsImlhdCI6MTY3NzgzODAyNiwibmJmIjoxNjc3ODM4MDI2LCJqdGkiOiJlS0tjMXZOTnlkTkoxYlJ6Iiwic3ViIjoiMzQyZDhjY2MtODJiYi00N2Y2LTlmYjQtMDhjN2NkOWQ4Njk3IiwicHJ2IjoiNWQ5MGY5MDI3YTM4NzFmMDQyYTI2MzYxMzA4YzZmMDZkNmIyZDMyOCJ9.pFLD8RqRCW8JJhGTKtkrh8K2qtLznrJuTEINCTOl0us'
            ),
        ));
        $response1 = curl_exec($curl1);
        curl_close($curl1);
        //Jubelio Stok
        $curl2 = curl_init();
        curl_setopt_array($curl2, array(
            // CURLOPT_URL => 'https://api.jubelio.com//inventory/?page=50',
            CURLOPT_URL => 'https://api.jubelio.com/companies/7599?page=1&pageSize=25&sortDirection=asc',
            // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6bGFycnkucmlkd2FuQGZyZWV6eWZyZXNoLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3ODQ2Mjk3ODY5NiwiaWF0IjoxNjc4NDE5Nzc4fQ.36-fekZC71HIT8jcn6STzMnkRcxfNw-3jU2IhpVL5GU'
            ),
        ));
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        $curl3 = curl_init();
        curl_setopt_array($curl3, array(
            CURLOPT_URL => 'https://api2.jubelio.com/inventory/',
            // CURLOPT_URL => 'https://api.jubelio.com/companies/15628?page=1&pageSize=25&sortDirection=asc',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6bGFycnkucmlkd2FuQGZyZWV6eWZyZXNoLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3ODQ2Mjk3ODY5NiwiaWF0IjoxNjc4NDE5Nzc4fQ.36-fekZC71HIT8jcn6STzMnkRcxfNw-3jU2IhpVL5GU'
            ),
        ));
        $response3 = curl_exec($curl3);
        curl_close($curl3);
        // $results = json_decode($response2->getBody()->getContents(), true);
        $results1 = json_decode($response1);
        $results2 = json_decode($response2);
        $results2 = json_decode($response2);
        $results3 = json_decode($response3, true);
        // $groupedData = collect(['data'=>$results2]);
        // $string = implode("data", $results2);
        // dd(json_encode($results4->data, true));
        // dd(json_decode($response4));
        // $results = json_decode($response4->getBody()->getContents(), true);
        // $warehouse = json_encode($results3->data);
        // dd($results3['data']);
        // // $test['data'] = json_encode($results3, true);
        // // $test['data'] = json_encode($results3->channels, true);
        // // $test['data_ff_iku'] = json_encode($results1->data);
        // // dd(json_encode(json_decode($response4->content(), true)));
        // // dd($results3[0]);
        // // $test['data_ff_bku'] = json_encode( $results1->data,true);
        // // $test['data_jubelio_stok'] = json_encode($results4->data, true);
        // // $test['data_jubelio_location'] = json_encode($results2->data[0]->location_stocks);
        // dd($results3['data']);
        $test['name_data'] = 'Jubelio Stok';
        $test['created_at'] = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        $test['data_ff_iku'] = json_encode($results1->data, true);
        $test['data_jubelio_tenant'] = json_encode($results2->data, true);
        $test['data_jubelio_items'] = json_encode($results3['data']);
        // $test['data_jubelio_tenant'] = json_encode($results2);
        // $test = new StokJubelio;
        // $test['data_jubelio_items']= $results3['data'];
        // $test['data_ff_iku']= $results1['data'];
        // $test['name_data']= 'Jubelio Stok';
        // $test['created_at']= Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        // $test->save();
        // $test['data_jubelio_location'] = json_encode($results4->locations);
        StokJubelio::insert($test);
        dd($test);
        // return Redirect::to('dashboard')->withSuccess('Great! Successfully store data in json format in datbase');
    }
    /**
     * Summary of getwarehouse
     * @param Request $request
     * @return void
     */
    public function getwarehouse(Request $request)
    {
        $curl3 = curl_init();
        curl_setopt_array($curl3, array(
            CURLOPT_URL => 'https://api2.jubelio.com/inventory/',
            // CURLOPT_URL => 'https://api.jubelio.com/companies/15628?page=1&pageSize=25&sortDirection=asc',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6bGFycnkucmlkd2FuQGZyZWV6eWZyZXNoLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3ODQ2Mjk3ODY5NiwiaWF0IjoxNjc4NDE5Nzc4fQ.36-fekZC71HIT8jcn6STzMnkRcxfNw-3jU2IhpVL5GU'
            ),
        ));
        $response3 = curl_exec($curl3);
        curl_close($curl3);
        $results3 = json_decode($response3, true);
        //Jaksel
        // dd($results3['locations'][22]);
        // $test1['jubelio_locations_name'] = json_encode($results3['locations'][25]['location_name'], true);
        $test1['jubelio_locations_name'] = json_encode($results3['locations'][22]['location_name'], true);
        // $test1['ff_warehouse_id'] = 'd5e490a9-8873-4405-853f-a039561bf46e';
        $test1['ff_warehouse_id'] = 'd904f910-0e21-46e6-81ac-ebb5105ed75a';
        $test1['jubelio_locations_id'] = json_encode($results3['locations'][22]['location_id'], true);
        warehouse_locations::insert($test1);
        dd($test1);
        // return Redirect::to('dashboard')->withSuccess('Great! Successfully store data in json format in datbase');
    }
}
