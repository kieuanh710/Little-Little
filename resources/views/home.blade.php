@extends('layouts.main')
@section('home')
<!-- Home -->
<div class="container">
    <!-- logo -->
    <div class="home_logo">
        <div class="row">
            <div class="col l-4">
                <img src="./assets/img/image 2.png" alt="">
            </div>
            <div class="col l-8">
                <span>Đầm Sen Park</span>
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="home_container">
        <div class="home_content">
            <div class="row">
                <div class="col l-8">
                    <div class="home_infomation">
                        <div class="home_information--detail">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Sapiente officia earum
                                consequatur nemo ullam id ea illo voluptatum voluptas.</p>
                            <p>Nisi totam enim soluta minus voluptas, magni, alias adipisci sit harum consequatur ut
                                necessitatibus nostrum facilis ex quam nulla aliquid distinctio nihil!</p>
                            <ul class="home_information--list">
                                <li class="home_information--item">
                                    <span>
                                        <i class="fas fa-solid fa-star star-1"></i>
                                        <i class="fas fa-solid fa-star star-2"></i>
                                    </span>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </li>
                                <li class="home_information--item">
                                    <span>
                                        <i class="fas fa-solid fa-star star-1"></i>
                                        <i class="fas fa-solid fa-star star-2"></i>
                                    </span>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </li>
                                <li class="home_information--item">
                                    <span>
                                        <i class="fas fa-solid fa-star star-1"></i>
                                        <i class="fas fa-solid fa-star star-2"></i>
                                    </span>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </li>
                                <li class="home_information--item">
                                    <span>
                                        <i class="fas fa-solid fa-star star-1"></i>
                                        <i class="fas fa-solid fa-star star-2"></i>
                                    </span>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col l-4">
                    <div class="home_reservation">
                        <div class="home_reservation--title">
                            <span>Vé của bạn</span>
                        </div>
                        @include('layouts.alert')
                        <div class="home_reservation-form">
                            <form action="{{route('addOrder')}}" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="form-group">
                                                <select name="idTypeTicket" id="idTypeTicket" class="form-control">
                                                    @foreach ($tickets as $list)
                                                    <option selected="selected" value="{{$list->idTicket}}">{{$list->nameTicket}}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-5">
                                            <div class="form-group">
                                                <input type="text" name="quantity" class="form-control"
                                                    placeholder="Số lượng vé" value="">
                                            </div>
                                        </div>
                                        <div class="col l-7">
                                            <div class="form-group" style="flex-flow: row">
                                                <input type="date" name="date" id="date" class="form-control" 
                                                placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Họ và tên" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Số điện thoại" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l-12">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Địa chỉ email" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-submit">Đặt vé</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- item image --}}
    <div class="home_image">
        <img class="home_image--item-1" src="./assets/img/18451 [Converted]-03 1.png" alt="">
        <img class="home_image--item-2"  src="./assets/img/18451 [Converted]-03 2.png" alt="">
        <img class="home_image--item-3"  src="./assets/img/18451 [Converted]-04 1.png" alt="">
        <img class="home_image--item-4"  src="./assets/img/18451 [Converted]-05 1.png" alt="">
        <img class="home_image--item-5"  src="./assets/img/18451 [Converted]-06 1.png" alt="">
        <img class="home_image--item-6"  src="./assets/img/Lisa_Arnold_Lay_Do_F2 3.png" alt="">
        <img class="home_image--item-7"  src="./assets/img/render fix hair 1.png" alt="">
    </div>
</div>
@endsection
