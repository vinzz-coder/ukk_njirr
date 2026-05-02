@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@include('dashboard.saldo', ['totalSaldo' => $totalSaldo])


<div class="container py-4">

    @if(count($dataByDate) > 0)

        @foreach($dataByDate as $date => $info)
            @include('dashboard.card-tanggal', ['date' => $date, 'info' => $info])
        @endforeach

    @else
        <div class="alert alert-info text-center rounded-4">
            Belum ada transaksi
        </div>
    @endif

</div>


@endsection
