@extends('frontend.index')

@section('title', __('Home'))

@section('content')
<form action="{{ url('/addcart') }}" method="post">
@csrf
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <div class="row">
    <div class="col s6">
  <h5>Paket Hosting</h5>
  <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" />
        <span><img src="{{ asset('images/bca.png') }}" width="80"></span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span><img src="{{ asset('images/mandiri.png') }}" width="80"></span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span><img src="{{ asset('images/indomaret.svg') }}" width="80"></span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span><img src="{{ asset('images/alfamart.png') }}" width="80"></span>
      </label>
    </p>
  </form>
</div>
<div class="col s6">
       <h4>CART
</h4>
        </div>
    <div class="col s6">
    @if($carts)
    @foreach($carts as $value)
        <div class="col s6">
        {{ $value['packet_name'] }}
        </div>
        <div class="col s6">
        Rp. {{ number_format($value['packet_price']) }} <a href="{{ url('/del_cart') }}/{{ $value['packet_id']}}"> <i class="material-icons">delete</i></a>
        </div>
    @endforeach
        <div class="col s6">
        Pajak & Biaya Tambahan
        PPN 10%
        </div>
        <div class="col s6">
        Rp. {{ number_format($ppn) }}
        </div><br>
        <div class="col s7">
        TOTAL
        </div>
        <div class="col s4">
        Rp. {{ number_format($subtotal) }}
        </div>
        <div class="col s7">
        </div>
      @endif
    </div>
    
</div>

</div>
</div>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
    <div class="row">
    <div class="col s6">
  <h5>Informasi Anda</h5>
  @if(auth()->user())
  <div class="row">
      <div class="col s8"> 
        <div class="col s4">
            Nama 
        </div>
        <div class="col s4">
        {{ auth()->user()->name ?? null}}
        </div>
        </div>
  </div>
  <div class="row">
      <div class="col s8"> 
        <div class="col s4">
            Email
        </div>
        <div class="col s4">
        {{ auth()->user()->email ?? null}}
        </div>
        </div>
  </div>
  <a href="{{ url('/buy_order') }}" class="btn waves-effect waves-light" type="submit" name="action">Chackout
  @else
<a href="{{ route('login') }}" class="btn waves-effect waves-light" type="submit" name="action">Login
@endif
</a>
</div>
</div>

</div>
</div>
</form>


@endsection
<script>
function show(){
   $('.modal-trigger').leanModal();
    }
function tampilkan(){
    var id = document.getElementById("paket").value;

    $.ajax({
                  url: `{{ url('paket') }}/` + id,
                   type: "GET",
                   cache: false,
                   dataType: "JSON",
                      success: function(data){
                        var ppn = data.price * 10 / 100;
                         console.log(data.price); 
                         document.getElementById("packet_id").value=id;
                        }
            });
}
</script>