@extends('layouts.main')
@section('payment')
<!-- payment -->
<div class="container">
    <div class="payment_title">
        <span>Thanh toán</span>
    </div>
    <!-- content -->
    <div class="payment_container">
        <div class="payment_content">
            <form 
                role="form" 
                action="{{route('paymentSuccess', ['id'=>$orders->id])}}" 
                method="post" 
                class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{env('STRIPE_KEY')}}"
                id="payment-form">
                @csrf
            <div class="row">
                <div class="col l-8">
                    <div class="payment_form line">
                        <div class="payment_form--content">
                            <div class="payment_info--title">
                                <span>Vé cổng - Vé gia đình</span>
                            </div>
                            {{-- <form action="" method="post" class="form-payment"> --}}
                           
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">Số tiền thanh toán</label>
                                                <input type="text" name="totalPrice" class="form-control"
                                            value="{{$orders->quantity * $orders->priceTicket}}">
                                            </div>
                                        </div>
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">Số lượng vé</label>
                                                <input type="text" name="" class="form-control"
                                                     value="{{$orders->quantity}}">
                                            </div>
                                        </div>
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">Ngày sử dụng</label>
                                                <input type="text" name="" class="form-control"
                                                     value="{{$orders->date}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col l-6">
                                            <div class="form-group">
                                                <label for="">Thông tin liên hệ</label>
                                                <input type="text" name="name" class="form-control"
                                                     value="{{$orders->name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">Điện thoại</label>
                                                <input type="text" name="" class="form-control"
                                                    value="{{$orders->phone}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="" class="form-control"
                                                     value="{{$orders->email}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="payment_detail line">
                        <div class="payment_detail--title">
                            <span>Thông tin thanh toán</span>
                        </div>
                        <div class="payment_detail--form">
                            <div class='row'>
                                <div class="col l-12">
                                    <div class='form-group card required'>
                                        <label class='control-label'>Số thẻ</label> 
                                        <input
                                            autocomplete='off' class='form-control card-number' size='20'
                                            type='text' name="cardNumber">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col l-12">
                                    <div class='form-group required'>
                                        <label class='control-label'>Họ và tên chủ thẻ</label> 
                                        <input class='form-control' size='4' type='text' placeholder='Ex: NGUYEN VAN A' name="cardName">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col l-6">
                                    <div class='form-group expiration required'>
                                        <label class='control-label'>Tháng hết hạn</label> 
                                        <input class='form-control card-expiry-month' placeholder='MM' size='2'
                                            type='text' name="expiryMonth">
                                    </div>
                                </div>
                                <div class="col l-6">
                                    <div class='form-group expiration required'>
                                        <label class='control-label'>Năm hết hạn</label> 
                                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                            type='text' name="expiryYear">
                                    </div>
                                </div>
                               
                            </div>
                            <div class='row'>
                                <div class="col l-4">
                                    <div class='form-group cvc required'>
                                        <label class='control-label'>CVV/CVC</label> 
                                        <input autocomplete='off' class='form-control card-cvc' placeholder='Ex: 311' size='4'
                                            type='text' name="cvv">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-payment">Thanh toán</button>
                            {{-- <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>   --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            {{-- </div> --}}
        </div>
    </div>
    <div class="payment_image">
        <img class="payment_image--item-1" src="./assets/img/Trini_Arnold_Votay1 2.png" alt="">
        <img class="payment_image--item-2" src="./assets/img/Vector (1).png" alt="">

    </div>
</div>
@endsection

