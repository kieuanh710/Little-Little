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
            <a href="#" class="previous round">&#8249;</a>
            <div class="row">
                <div class="col l-3">
                    <div class="paymentSuccess_item">
                        <img src="./assets/img/image 3.png" alt="">
                        <div class="paymentSuccess_item--content">
                            <h3>LAR28732432</h3>
                            <span>VÉ CỔNG</span>
                            <p>---</p>
                            <div class="paymentSuccess_item--date">
                                <span>Ngày sử dụng:</span>
                                <span>sád</span>
                            </div>
                            {{-- <img src="./assets/img/tick 1.png" alt="" class="paymentSuccess_tick"> --}}
                            {{-- <i class="paymentSuccess_tick fa-regular fa-circle-check"></i> --}}
                            <i class="paymentSuccess_tick fas fa-solid fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="next round">&#8250;</a>
            <div class="paymentSuccess_total">
                <span>Số lượng vé: </span>
                <span>dsfs</span>
            </div>
        </div>
    </div>
    <div class="paymentSuccess_btn">
        <button class="btn btn-down">Tải về</button>
        <button class="btn btn-email">Gửi email</button>
    </div>
    <div class="paymentSuccess_image">
        <img class="paymentSuccess_image--item-1"  src="./assets/img/Alvin_Arnold_Votay1 1.png" alt="">
       
    </div>
</div>
@endsection