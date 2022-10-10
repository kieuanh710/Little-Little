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
            <div class="row">
                <div class="col l-8">
                    <div class="payment_form line">
                        <div class="payment_form--content">
                            <div class="payment_info--title">
                                <span>Vé cổng - Vé gia đình</span>
                            </div>
                            <form action="" method="" class="form-payment">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">Số tiền thanh toán</label>
                                                <input type="text" name="" class="form-control"
                                            value="">
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
                                                     value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col l-6">
                                            <div class="form-group">
                                                <label for="">Thông tin liên hệ</label>
                                                <input type="text" name="" class="form-control"
                                                     value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">Điện thoại</label>
                                                <input type="text" name="" class="form-control"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="" class="form-control"
                                                     value="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col l-4">
                    <div class="payment_detail line">
                        <div class="payment_detail--title">
                            <span>Thông tin thanh toán</span>
                        </div>
                        <div class="payment_detail--form ">
                            <form action="" >
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="form-group">
                                                <label for="">Số thẻ</label>
                                                <input type="text" name="" class="form-control"
                                                     value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="form-group">
                                                <label for="">Họ và tên chủ thẻ</label>
                                                <input type="text" name="" class="form-control"
                                                     value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-10">
                                            <div class="form-group">
                                                <label for="">Ngày hết hạn</label>
                                                <input type="text" name="" class="form-control"
                                                     value="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col l-4">
                                            <div class="form-group">
                                                <label for="">CVV/CVC</label>
                                                <input type="text" name="" class="form-control"
                                                     value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('paymentSuccess')}}" type="submit" class="btn btn-payment">Thanh toán</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="payment_image">
        <img class="payment_image--item-1" src="./assets/img/Trini_Arnold_Votay1 2.png" alt="">
        <img class="payment_image--item-2" src="./assets/img/Vector (1).png" alt="">

    </div>
</div>
@endsection