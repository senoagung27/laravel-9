@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            @if (('session')('edit'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                    {{-- {{ session('edit') }} --}}
                </div>
            @endif
            @if (('session')('tambah'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil!!!!</h5>
                    {{-- {{ session('tambah') }} --}}
                </div>
            @endif
            <div class="section-header">
                <h1>Data Stok FF</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Stok FF</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h5>Fresh Factory</h5>
                                    <h4>Data</h4>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h5>Jubelio</h5>
                                    <h4>Data</h4>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> <strong>{{ $message }}</strong></h5>
                        {{-- {{ session('tambah') }} --}}
                    </div>
                @endif
                {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <strong>{{ $message }}</strong>
                </div>
                <br>
                    @endif --}}
                <form id="laravel_json" method="post" action="{{ url('/store-json') }}">
                    @csrf
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrows-rotate">Refresh
                                Data</i></button>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-6">
                                    <a href="#" class="btn btn-icon btn-primary"><i class="far fa-file">
                                            export</i></a>
                                </div>
                            </div> --}}
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    {{-- <table class="table table-bordered table-striped mb-0"> --}}
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>SKU</th>
                                                {{-- <th>Nama Barang</th> --}}
                                                {{-- <th>Nama Tenant</th> --}}
                                                <th>Total Stok FF</th>
                                                <th>Total Stok Jubelio</th>
                                                <th>Lokasi Gudang</th>
                                                <th>Selisih Stok Jubelio FF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($data as $item) --}}
                                            @foreach ($grouped_items as $item)
                                                {{-- @foreach ($grouped as $row)
                                                    @foreach ($row['location_stocks'] as $body) --}}
                                                {{-- @foreach ($row as $body) --}}
                                                {{-- @foreach ($item['location_stocks'] as $row) --}}
                                                {{-- @foreach ($data1 as $row) --}}
                                                {{-- @foreach ($row['location_stocks'] as $itemstock) --}}
                                                {{-- @foreach ($paginatedResults1 as $itemdata) --}}
                                                {{-- @foreach ($itemdata->location_stocks as $itemstok) --}}
                                                {{-- @foreach ($array3 as $itemtenant) --}}
                                                {{-- @if ($row['sku_number'] == 'FMA00255001' && $body['location_code'] == 'JKS') --}}
                                                {{-- @if ($item['sku_number'] == 'FMA00255001') --}}
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    {{-- <td>{{ dd($item) }}</td> --}}
                                                    {{-- <td>{{ dd( $row['sku_number']) }}</td> --}}
                                                    {{-- <td>{{ dd($item['product_name']) }}</td> --}}
                                                    {{-- <td>{{ dd($itemdata['stock']) }}</td> --}}
                                                    <td>{{ $item['sku_number'] }}</td>
                                                    {{-- <td>{{ $item['warehouse_name_jb'] }}</td> --}}
                                                    <td>{{ $item['stock'] }}</td>
                                                    {{-- <td>{{ $body['location_code'] }}</td> --}}
                                                    {{-- <td>{{ $item['sku_number'] }}</td> --}}
                                                    {{-- <td>{{ $item['sku_number'] }}</td>
                                                    <td>{{ $item['stock'] }}</td> --}}
                                                    {{-- <td class="{{ $item['available'] > $item['stock'] ? 'text-success' : ($item['available'] < $item['stock'] ? 'text-danger' : '') }}">
                                                            @php
                                                                $stokAwal = (int) $item['stock'] ;
                                                                $stokAkhir = (int)$item['available'];
                                                                $selisihStok = (int) $item['stock'] - (int) $item['available'];
                                                            @endphp
                                                                {{ (int)$selisihStok }}
                                                                {{  $item['available'] }}
                                                            @if ($item['available'] > $item['stock'])
                                                                <i class="fas fa-arrow-up ml-2"></i>
                                                            @elseif ( $item['available'] < $item['stock'])
                                                                <i class="fas fa-arrow-down ml-2"></i>
                                                            @endif
                                                        </td> --}}
                                                    {{-- <td>{{ $item['product_name'] }}</td> --}}
                                                    {{-- <td>{{ $itemtenant['company_name'] }}</td> --}}
                                                    {{-- <td></td>
                                                    <td></td>
                                                    <td></td> --}}
                                                    {{-- <td>{{ $itemstock['location_code'] }}</td> --}}
                                                    {{-- <td>{{ $itemstock['available'] }}</td> --}}
                                                    {{-- <td>{{ $itemdata->productName }}</td> --}}
                                                    {{-- <td>{{  $item->stock }}</td> --}}
                                                    {{-- <td>{{ $itemtenant->company_name }}</td> --}}
                                                    {{-- <td>{{  $item['location_code'] }}</td> --}}
                                                    {{-- <td>{{  $item->stock }}</td> --}}
                                                    {{-- <td></td> --}}
                                                    {{-- <td>{{ $item->ikubku }}</td> --}}
                                                    {{-- <td>{{ $item->place }}</td>
                                                <td>{{ $item->tenant }}</td> --}}
                                                    {{-- <td> <a href="" class="btn btn-primary btn-action mr-1"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-danger btn-action"><i
                                                            class="fas fa-trash"></i></a>
                                                </td> --}}
                                                    {{-- <td
                                                            class="{{ $data->stokjbresult->total_stok > $data->total_stok ? 'text-success' : ($data->stokjbresult->total_stok < $data->total_stok ? 'text-danger' : '') }}">
                                                            {{ $data->stokjbresult->total_stok }}
                                                            @if ($data->stokjbresult->total_stok > $data->total_stok)
                                                                <i class="fas fa-arrow-up ml-2"></i>
                                                            @elseif ($data->stokjbresult->total_stok < $data->total_stok)
                                                                <i class="fas fa-arrow-down ml-2"></i>
                                                            @endif
                                                        </td> --}}
                                                    {{-- <td
                                                            class="{{ $data->total_stok > $data->stokjbresult->total_stok ? 'text-success' : ($data->total_stok < $data->stokjbresult->total_stok ? 'text-danger' : '') }}">
                                                            {{ $data->total_stok }}
                                                            @if ($data->total_stok > $data->stokjbresult->total_stok)
                                                                <i class="fas fa-arrow-up ml-2"></i>
                                                            @elseif ($data->total_stok < $data->stokjbresult->total_stok)
                                                                <i class="fas fa-arrow-down ml-2"></i>
                                                            @endif
                                                        </td> --}}
                                                    {{-- <td>
                                                            @php
                                                                $stokAwal = $data->total_stok;
                                                                $stokAkhir = $data->stokjbresult->total_stok;
                                                                $selisihStok =  $data->total_stok - $data->stokjbresult->total_stok;
                                                            @endphp
                                                                {{ $selisihStok }}
                                                        </td> --}}
                                                    {{-- <td>
                                                            @php
                                                                $stokAwal = $data->stokjbresult->total_stok;
                                                                $stokAkhir = $data->total_stok;
                                                                $selisihStok =  $data->stokjbresult->total_stok - $data->total_stok;
                                                            @endphp
                                                                {{ $selisihStok }}
                                                        </td> --}}
                                                </tr>
                                                {{-- @endif --}}
                                                {{-- @endif --}}
                                                {{-- @endforeach --}}
                                                {{-- @endforeach --}}
                                                {{-- @endforeach --}}
                                            @endforeach
                                            {{-- @endforeach --}}
                                        </tbody>
                                    </table>
                                    {{-- {{ $dataPegawai->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('ff')
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
@endsection
