@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if($header_transaction)
                <div class="card-body">
                @foreach($header_transaction as $value )
                <h5>INV. {{ $value->header_transaction_id }}</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Paket</th>
                        <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php 
                    $totalPrice = 0;
                    @endphp
                    @foreach($transaction as $value1)
                    @if($value1->header_transaction_id == $value->header_transaction_id )
                        <tr>
                        <th scope="row">{{ $value1->name }}</th>
                        <td>{{ number_format($value1->price) }}</td>
                        </tr>
                        @php
                            $totalPrice += $value1->price;
                        @endphp
                    @endif
                    @endforeach
                    </tbody>
                    </table>
                    <div align="right"><h5>Rp. {{ number_format($totalPrice) }}</h5></div>
                @endforeach
                </div>
                @else
                <div align="center"><p>Anda belum melakukan transaksi</p></div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
