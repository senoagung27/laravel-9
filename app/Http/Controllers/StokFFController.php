<?php

namespace App\Http\Controllers;

use DateTime;
use stdClass;
use Carbon\Carbon;
use App\Models\StokFF;
use App\Models\StokJubelio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokFFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
        //     CURLOPT_URL => 'https://api.freshfactory.id//v1/inventories?status=stored&warehouse_id=d5e490a9-8873-4405-853f-a039561bf46e&limit=0&tenant_id=31e0787f-d1a0-4737-b4f7-770191407d4a',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC92MVwvYWRtaW5cL2xvZ2luIiwiaWF0IjoxNjc2ODY2MDIyLCJuYmYiOjE2NzY4NjYwMjIsImp0aSI6InFHVGs1SHE0RWdiVVhYRGwiLCJzdWIiOiIwNjU0MWU5My04MzMxLTQ0N2EtOTdlMC0zNmZhZGYyNWY4YmUiLCJwcnYiOiI0MWQzNGZjYTA3NzllOTBmOThiZTM4ODdmYmYwYWM0NzQwYzc3MDNmIn0.Y8SpJS0Ct8dFYno9v5dm8wcd2I6Ot2PDERzO2pVAmls'
        //     ),
        // ));

        // $response1 = curl_exec($curl);

        // curl_close($curl);

        // //BKU

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
        //     CURLOPT_URL => 'https://api.freshfactory.id/v1/inventories-bku?status=stored&tenant_id=31e0787f-d1a0-4737-b4f7-770191407d4a&warehouse_id=d5e490a9-8873-4405-853f-a039561bf46e&limit=0',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC92MVwvYWRtaW5cL2xvZ2luIiwiaWF0IjoxNjc2ODY2MDIyLCJuYmYiOjE2NzY4NjYwMjIsImp0aSI6InFHVGs1SHE0RWdiVVhYRGwiLCJzdWIiOiIwNjU0MWU5My04MzMxLTQ0N2EtOTdlMC0zNmZhZGYyNWY4YmUiLCJwcnYiOiI0MWQzNGZjYTA3NzllOTBmOThiZTM4ODdmYmYwYWM0NzQwYzc3MDNmIn0.Y8SpJS0Ct8dFYno9v5dm8wcd2I6Ot2PDERzO2pVAmls'
        //     ),
        // ));
        // $response2 = curl_exec($curl);
        // curl_close($curl);


        // $jsonObj= array();
        // $results1 = collect(json_decode($data[0]->data_ff_iku));
        // $results2 = collect(json_decode($data[0]->data_ff_bku));
//         $collection = collect($results1);
//         $collection2 = collect($results2);
// $grouped = $collection->groupBy('iku_id');
// $grouped1 = $collection2->groupBy('bku_id');
//             dd($grouped, $grouped1);

        // dd($results1Grouped);
        // $results1 = collect(json_decode($data[0]->data_ff_iku, true));
        // $results2 = collect(json_decode($data[0]->data_ff_bku, true));
        // $grouped = ($results1->groupBy($results2));
        // $grouped = $results1->groupBy($results2);
        // $collection = collect($results1,$results2);
        // $results = json_decode($data[0]->data_ff_iku && $data[0]->data_ff_bku);
        // $grouped = $results->groupBy('data');
        // dd($results2);
        //  $results3 = array();
        //  $results2 = array();
        // $name = array();
        // $remaining_time = array();
        // $city = array();
        // foreach ($results3 as $objects)
        //     $group = new stdClass();
        //     if (array_key_exists($objects, $results3)) {
        //         $objects->sku_number;
        //         $objects->remaining_time;
        //         $objects->city;
        //     }
        //     else if(array_key_exists($objects, $results2)){

        //     }
        // dd($results3);
        // $jubelioff = array($group);
        // dd(['data3' => $results2[7]->location_stocks]);
            // dd($grouped);
            // $data = DB::table('stoks')
            // ->select(
            //     'data_ff_iku',
            //     DB::raw("JSON_EXTRACT(data_ff_iku,'$.sku_number') = 'FDA00037001' as sku"),
            //     'created_at'
            // )->get();
            // $data = StokJubelio::whereRaw("JSON_EXTRACT(data_ff_bku, '$.sku_number') = 'FDA00037001'")->get();
            // SELECT JSON_EXTRACT(
            //     '{ "firstName":"Peter", "lastName":"Parker" }' ,
            //     '$.firstName') AS firstName;
            // $data = StokJubelio::where('sku_number','=','FDA00037001')->get();
            // $data = DB::table('stoks')->select('data_ff_bku','data_ff_iku')->where('sku_number''=''FDA00037001')->get();
            // $results1 = json_decode($data[0]->data_ff_iku);
            // $results2 = json_decode($data[0]->data_ff_bku);

            // dd(array_merge($results1, $results2));
            // dd(array_merge_recursive($results2,$results1));
            // $grouped = array_merge($results2, $results1);
            // $jsonObj= array();
            // foreach($grouped as $item){
                    // $item = new stdClass();
                    // $stok = $barang->stok - $terjual;
                    // $n = (float)str_replace(",", "", $grouped[0]->bku_id * $grouped[0]->boxContain);
                    // $interval = $grouped[0]->bku_id * $grouped[0]->boxContain;
			        // $days = $interval->format('%a');//now do whatever you like with $days
                    // if ($fdate < $tdate) {
                    //     $selisih = $days;
                    //     $pesan = 'Hari';
                    // } else {
                    //     $selisih = '-'.$days;
                    //     $pesan = 'Hari';
                    // }
                    // $item['jumlah'] = $data->isiRincian->count('berkas_id');
                    // $data->sku_number;
                    // $row['data_ff_iku'] = $data->data_ff_iku;
                    // $data->data_ff_iku = "some data";
                    // $fdate = $data->tanggal_kembali_berkas;
                    // $tdate = Carbon::now('Asia/Jakarta')->format('Y-m-d');
                    // $datetime1 = new DateTime($fdate);
                    // $datetime2 = new DateTime($tdate);
                    // $interval = $datetime1->diff($datetime2);
                    // $days = $interval->format('%a');//now do whatever you like with $days

                    // if ($fdate < $tdate) {
                    // 	$selisih = $days;
                    // 	$pesan = 'Hari';
                    // } else {
                    // 	$selisih = '-'.$days;
                    // 	$pesan = 'Hari';
                    // }

                    // $row['tanggal_reminder'] = $selisih.' '.$pesan;
                    // $row['jumlah'] = $data->isiRincian->count('berkas_id');
                    //     dd($item);
                	// array_push($jsonObj);
                // }
                $data = StokJubelio::get();

                $results1 = json_decode($data[0]->data_ff_iku);
                $results2 = json_decode($data[0]->data_jubelio_items);
                $results3 = json_decode($data[0]->data_jubelio_channels);
                $results4 = json_decode($data[0]->data_ff_bku);
                $results5 = json_decode($data[0]->data_jubelio_tenant);
                // dd($results1);
            //     foreach($results1 as $item){
            //         echo $item->skuNumber;
            //         echo $item->productName;
            //         echo $item->stock;
            //     }
            //     $jsonObj= array();
            //     foreach($results1 as $data) {
            //         $row = $data->skuNumber;
            //         $row = $data->productName;
            //         $row = $data->stock;
            //         dd($row);
            //         array_push($jsonObj,$row);
            // }
                // $results2 = json_decode($data[0]->data_ff_bku);
            // dd( $results1);
        // return view('stok-ff.index', compact('grouped'));
        // return view('stok-ff.index', compact('results1'));
        // $datastok = StokFF::get();
        return view('stok-ff.index', [
            'data1' => $results1,
            'data3' => $results5,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
            CURLOPT_URL => 'https://api.freshfactory.id/v1/inventories?status=stored&limit=0&tenant_id=31e0787f-d1a0-4737-b4f7-770191407d4a',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC92MVwvYWRtaW5cL2xvZ2luIiwiaWF0IjoxNjc3MTI4ODUwLCJuYmYiOjE2NzcxMjg4NTAsImp0aSI6IjhPOUNoeUlpYkFGT2lzYTgiLCJzdWIiOiIwNjU0MWU5My04MzMxLTQ0N2EtOTdlMC0zNmZhZGYyNWY4YmUiLCJwcnYiOiI0MWQzNGZjYTA3NzllOTBmOThiZTM4ODdmYmYwYWM0NzQwYzc3MDNmIn0.6hGCSE-i7iaV2u2pNQQWjh0H454jwVYdpKRekakDzMw'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $results = json_decode($response);
        // $results3 = json_decode($response3->getBody()->getContents(), true);

        // $item = Item::create($input);
        // $item = StokJubelio::create($results3);
        // $item = StokJubelio::create([

        //     'data' => $results3->data
        // ]);
        dd($results->data[0]);
        $test['name_data'] = 'Jubelio Stok';
        $test['created_at'] = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        // $test['data'] = json_encode($results3, true);
        // $test['data'] = json_encode($results3->channels, true);
        $test['data_ff'] = json_encode($results->data, true);
        // $test['data'] = json_encode($results3->locations, true);
        StokJubelio::insert($test);

        // return Redirect::to('dashboard')->withSuccess('Great! Successfully store data in json format in datbase');
        // dd($item->data);
        dd($test);
        // $headers =[
        //     'headers' => [
        //     'Authorization' => 'Bearer bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NzA4MjY1NjE5MCwiaWF0IjoxNjc3MDM5NDU2fQ.Dn_80pv_1H-D6ek8s48sXo5iloKW3g6u8OQa9eFE_7A'
        //     ]
        // ];
        // $data = Http::get('https://api.jubelio.com//inventory/',[
        //     'Authorization' => 'Bearer bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NzA4MjY1NjE5MCwiaWF0IjoxNjc3MDM5NDU2fQ.Dn_80pv_1H-D6ek8s48sXo5iloKW3g6u8OQa9eFE_7A'
        // ]);
        // $accessToken = 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NzA4MjY1NjE5MCwiaWF0IjoxNjc3MDM5NDU2fQ.Dn_80pv_1H-D6ek8s48sXo5iloKW3g6u8OQa9eFE_7A';
        // $data = Http::withHeaders([
        //     'Authorization' =>  'Bearer' . $accessToken
        // ])->get('https://api.jubelio.com//inventory/');
        // $response_body = $data->collect();
        // $response = $data->json();
        // // var_dump($response_body);
        // // dd($response_body->data);
        // $test['name_data'] = 'Jubelio Stok';
        // $test['created_at'] = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
        // // $test['data'] = json_encode($results3->data);
        // StokJubelio::insert($response_body);

        // // return Redirect::to('dashboard')->withSuccess('Great! Successfully store data in json format in datbase');
        // dd($response_body);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
