
@extends('layouts.main')
@section('paymentSuccess')
<!-- paymentSuccess -->
<div class="container">
    <div class="paymentSuccess_title">
        <span>Sự kiện nổi bật</span>
    </div>
    <!-- content -->
    <form action="">
        <div class="paymentSuccess_container line">
            <div class="paymentSuccess_content">
                <a class="previous round" id="previous">&#8249;</a>
    
                <div class="slideshow" style="width: 100%">
                    <div class="row">
                        @foreach ($payments as $item)
                        <?php for($i = 1; $i <= $item->quantity; $i++){ ?>
                        <div class="col l-3">
                            <div class="paymentSuccess_item">
                                <img name="image" src="data:image/png;base64, {{ base64_encode(QrCode::size(500)->format('png')->generate(''.$detail.'')) }}">
                                <div class="paymentSuccess_item--content">
                                    <h3> ALT <?php echo $i; ?></h3>
                                    <span>VÉ CỔNG</span>
                                    <p>---</p>
                                    <div class="paymentSuccess_item--date">
                                        <span>Ngày sử dụng: {{$item->date}}</span>
                                    </div>
                                </div>
                                <i class="paymentSuccess_tick fas fa-solid fa-check"></i>
                            </div>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
    
                <a class="next round" id="next">&#8250;</a>
                <div class="paymentSuccess_total">
                    <span>Số lượng vé: </span>
                    <span>{{$item->quantity}}</span>
                </div>
            </div>
        </div>
        <div class="paymentSuccess_btn">
            <a href="{{route('export_pdf', $item->id)}}" class="btn btn-down">Tải về</a>
            <a href="{{route('send_mail', $item->id)}}" class="btn btn-email">Gửi email</a>
        </div> 
        {{-- <p class="text-danger" style="text-align: left; color: red; margin-top: 5px">@error('email'){{ $message }} @enderror</p> --}}
        <div class="paymentSuccess_image">
            <img class="paymentSuccess_image--item-1" src="../assets/img/Alvin_Arnold_Votay1 1.png" alt="">
        </div>
    </form>
</div>
@endsection