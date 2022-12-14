
@extends('layouts.main')
@section('paymentSuccess')
<!-- paymentSuccess -->
<div class="container">
    <div class="paymentSuccess_title">
        <span>Sự kiện nổi bật</span>
    </div>
    <!-- content -->

        <div class="paymentSuccess_container line">
            <div class="paymentSuccess_content">
                @if(session('success'))
            <div class="alert alert-success" style="text-align: center; color:#14A44D; font-size:20px">
                {{session('success')}}
            </div>
            @endif
                <div class="carousel-container">
                    <div class="inner-carousel">
                      <div class="track">
                        @foreach ($payments as $item)
                        <?php for($i = 1; $i <= $item->quantity; $i++){ ?>
                            <div class="card-container">
                                <div class="card">
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
                            </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="nav">
                        <button class="prev round"><i class="icon fas fa-solid fa-caret-left"></i></button>
                        <button class="next round"><i class="icon fas fa-solid fa-caret-right"></i></button>
                    </div>
                </div>
            </div>
            

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
       
        <div class="paymentSuccess_image">
            <img class="paymentSuccess_image--item-1" src="../assets/img/Alvin_Arnold_Votay1 1.png" alt="">
        </div>
   
</div>

@endsection