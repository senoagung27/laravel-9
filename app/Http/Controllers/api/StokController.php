<?php

namespace App\Http\Controllers\api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;

class StokController extends Controller
{
    public function getData()
    {
        $client = new Client();
        // $response = $client('/file/jubeliostokrespon.json');
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NjU5NjkxMDk1NSwiaWF0IjoxNjc2NTUzNzEwfQ._ZF7fmaofdnpCLxWRtDNC-Og0t40cXfxv6HLinFKbgk'
          ];
        $response = $client->request('GET', 'https://api.jubelio.com/inventory/', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVTRVI6ZnJlc2hmYWN0b3J5anViZWxpby5tb25pdG9yaW5nQGdtYWlsLmNvbToxMDMuMTY1LjM2LjE3OCIsImV4cCI6MTY3NjMzODAyNjc3MSwiaWF0IjoxNjc2Mjk0ODI2fQ.TpKP_fi5C1PzzgVwoovy3PgslC_S_ZnlSzJwG4iFXzQ',
            ]
        ]);
        // $response = $client('/file/jubeliostokrespon.json',$headers);
        $results = json_decode($response->getBody()->getContents(), true);
        $results['item_name'];
        dd($response);
        // return response()->json(['code' => 200, 'message' => 'List Data Stok', 'data' => $results]);
        // return response()->json(['code' => 200, 'message' => 'List Data Stok', 'data' => $results]);

        $page = Paginator::resolveCurrentPage();
        $perPage = 50;

        $paginatedResults = new Paginator(array_slice($results, ($page - 1) * $perPage, $perPage), $perPage, $page);
        // dd($paginatedResults);

        return response()->json(['code' => 200, 'message' => 'List Data Stok', 'data' => $paginatedResults]);
    }
    public function getStok()
    {

        // $response = Http::withOptions(['timeout' => 120])->get('https://api.freshfactory.id/v1/inventories?status=stored',
        //     );
        // $client = new Client();
        // $response = $client->get('https://api.freshfactory.id/v1/inventories', [
        //     'headers' => [
        //         'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuZnJlc2hmYWN0b3J5LmlkXC92MVwvYWRtaW5cL2xvZ2luIiwiaWF0IjoxNjc2MzU3OTg1LCJuYmYiOjE2NzYzNTc5ODUsImp0aSI6InBIcnlYZzVjODRPY1FGZ3ciLCJzdWIiOiIwNjU0MWU5My04MzMxLTQ0N2EtOTdlMC0zNmZhZGYyNWY4YmUiLCJwcnYiOiI0MWQzNGZjYTA3NzllOTBmOThiZTM4ODdmYmYwYWM0NzQwYzc3MDNmIn0.jDqbT3KGgpovYXy5lMqS9-GJZ1ZkZcHXFCsogYsfHTw',
        //     ]
        // ]);
        // $results = json_decode($response->getBody()->getContents(), true);

        // $page = Paginator::resolveCurrentPage();
        // $perPage = 50;

        // $paginatedResults = new Paginator(array_slice($results, ($page - 1) * $perPage, $perPage), $perPage, $page);

        // return response()->json(['code' => 200, 'message' => 'List Data Stok', 'data' => $paginatedResults]);
    }
}
