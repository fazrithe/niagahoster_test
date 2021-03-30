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
  <select class="browser-default" id="paket" name="packet_id" required>
    <option value="" disabled selected>Choose your option</option>
    @foreach($paket as $value)
    @if($value->id == $packet_id)
    <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
    @else
    <option value="{{ $value->id }}">{{ $value->name }}</option>
    @endif
    @endforeach
  </select>

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
        <a href="{{ url('/chackout') }}"><i class="waves-effect waves-teal btn-flat blue white-text">Lanjutkan</i></a>
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
  <h5>Pilih Domain</h5>
    <input type="text">
    <input type="hidden" name="user_id" value="{{ auth()->user()->id ?? null}}" required>
    <button class="waves-effect waves-teal btn-flat blue white-text" type="submit" name="action">Add Cart
    <i class="material-icons right">send</i>
    </button>
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
                        }
            });
}
</script>