<?php

namespace App\Http\Controllers;

use App\Models\StokJubelio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Clients\JubelioClient;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\LengthAwarePaginator;

class StokJubelioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $curl1 = curl_init();

        // curl_setopt_array($curl1, array(
        //     // CURLOPT_URL => 'https://api.jubelio.com//inventory/?page=50',
        //     CURLOPT_URL => 'https://api.jubelio.com/companies/15628?page=1&pageSize=25&sortDirection=asc',
        //     // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NzU5OTAxMTQwNCwiaWF0IjoxNjc3NTU1ODExfQ.lPGEeDiYJv7uj59wlO4KSaerOhKf-qQQmGVDUrwEf5M'
        //     ),
        // ));

        // $response1 = curl_exec($curl1);

        // curl_close($curl1);

        // //stok

        // $curl2 = curl_init();

        // curl_setopt_array($curl2, array(
        //     CURLOPT_URL => 'https://api.jubelio.com//inventory/?page=1&pageSize=100',
        //     // CURLOPT_URL => 'https://api.jubelio.com/companies/',
        //     // CURLOPT_URL => 'https://api.jubelio.com/inventory/',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NzU5OTAxMTQwNCwiaWF0IjoxNjc3NTU1ODExfQ.lPGEeDiYJv7uj59wlO4KSaerOhKf-qQQmGVDUrwEf5M'
        //     ),
        // ));

        // $response2 = curl_exec($curl2);

        // curl_close($curl2);
        // $results1 = json_decode($response1);
        // $results2 = json_decode($response2);
        // $total_stocks = json_decode($response);


        // $data = DB::table('stoks')->orderBy('data_jubelio_items')->chunk(10000, function ($datas) {
        //         foreach ($datas as $data) {
        //         // dd(json_decode($data->data_jubelio_items));
        //          $jubelio_items = json_decode($data->data_jubelio_items);
        //          $jubelio_tenantss = json_decode($data->data_jubelio_tenant);
        //         // DB::table('order_backup')->insert($data->toArray());
        //     }
        //     // dd($jubelio_items);
        //     // return $jubelio_items;
        //     return view('stok-jubelio.index',['data' => $jubelio_items]);
        //     // return View::make('stok-jubelio.index')->with('data', $jubelio_items);
        // });
        $data = StokJubelio::paginate(50);
        // dd($data[0]->data_ff);
        $results1 = json_decode($data[0]->data_ff_iku);
        $results2 = json_decode($data[0]->data_jubelio_items);
        $results3 = json_decode($data[0]->data_jubelio_channels);
        $results4 = json_decode($data[0]->data_ff_bku);
        $results5 = json_decode($data[0]->data_jubelio_tenant);

        // $page = Paginator::resolveCurrentPage();
        // $perPage = 100;

        // $paginatedResults1 = new Paginator(array_slice($results2, ($page - 1) * $perPage, $perPage), $perPage, $page);
        // $paginatedResults2 = new Paginator(array_slice($results5, ($page - 1) * $perPage, $perPage), $perPage, $page);

        // dd($paginatedResults1);
        return view('stok-jubelio.index',[
            // 'data1' => $paginatedResults1,
            // 'data2' => $paginatedResults2,
            'data1' => $results2,
            'data2' => $results5,

        ]);
        // $array = explode($results2);
        // $explode_id = array_map('intval', explode(',', $results2[0]));
        // $data = json_decode([$results2]);
        // foreach ($results2 as $item) {
            // just process $user as usual
            // dd($item);
            // foreach ($item as $value) {
            //     // dd($value);
            //     // $value = json_decode($data[0]->data_jubelio_items);
            // }
        // }
        // $perPage = 10;
        // $currentPage = request()->get('page', 1);
        // $paginatedData = $data->slice(($currentPage - 1) * $perPage, $perPage)->all();
        // $data = new LengthAwarePaginator($paginatedData, count($data), $perPage, $currentPage, ['path' => url()->current()]);
        // $page = Paginator::resolveCurrentPage();
        // $perPage = 50;

        // $paginatedResults = new Paginator(array_slice($results, ($page - 1) * $perPage, $perPage), $perPage, $page);
        // dd($data);
        // json_decode($response->getBody()->getContents(), true);
        // dd(['data1'=>$data]);
        // return view('stok-jubelio.index',$data);
        // return view('stok-jubelio.index',[
        // 'channels' => $results3,
        // 'locations' => $results2->locations,
        // 'data' =>$results2,
        // 'stock' =>$results2->data[7]->location_stocks,
        // 'tenant' =>$results5,
        // ]);

        // dd($response);
        // echo $response;
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
        //
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

    public function getStudents(Request $request)
    {
        // if ($request->ajax()) {
        //     $data = Student::latest()->get();
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
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
