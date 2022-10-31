
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
                        <button class="previous round "><i class="fas fa-arrow-left fa-2x"></i></button>
                        <button class="next round"><i class="fas fa-arrow-right fa-2x"></i></button>
                      </div>
                    </div>
                  </div>
                <div class="carousel-container">
                    <div class="inner-carousel">
                        <div class="track">
                            @foreach ($payments as $item)
                            <?php for($i = 1; $i <= $item->quantity; $i++){ ?>
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
                              
                            <?php } ?>
                            @endforeach

                        </div>
                     
                        <a class="previous round " href="#theCarousel" data-slide="prev">&#8249;</a>
                        <a class="next round" href="#theCarousel" data-slide="next">&#8250;</a>
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
        {{-- <p class="text-danger" style="text-align: left; color: red; margin-top: 5px">@error('email'){{ $message }} @enderror</p> --}}
        <div class="paymentSuccess_image">
            <img class="paymentSuccess_image--item-1" src="../assets/img/Alvin_Arnold_Votay1 1.png" alt="">
        </div>
   
</div>

@endsection