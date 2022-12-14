@extends('layouts.main')
@section('event')
<!-- event -->
<div class="container">
    <div class="event_title">
        <span>Sự kiện nổi bật</span>
    </div>
    <!-- content -->
    <div class="event_container">
        <div class="event_content">
            <div class="carousel-container" style="width: 1260px;">
                <div class="inner-carousel">
                    <div class="track">
                        @foreach($listEvent as $key => $item)
                        <div class="card-container event">
                            <div class="card">
                                <div class="event_item">
                                    <img src="./assets/img/Rectangle 1.png" alt="">
                                    <div class="event_item--content">
                                        <h3>Sự kiện {{$item->idEvent}}  </h3>
                                        <span>{{$item->nameEvent}}</span>
                                        <div class="event_item--date">
                                            <i class="fas fa-calendar"></i>
                                            <span>{{$item->start}} - {{$item->end}}</span>
                                            
                                        </div>
                                        <div class="event_item--price">
                                            <span>{{$item->priceEvent}} VNĐ</span>
                                        </div>
                                        <a href="{{route('detail', ['id'=>$item->idEvent])}}" class="btn btn-detail">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                <div class="nav">
                    <button class="prev round"><i class="icon fas fa-solid fa-caret-left"></i></button>
                    <button class="next round"><i class="icon fas fa-solid fa-caret-right"></i></button>
                </div>
            </div>

            {{-- <div class="row">
                @foreach($listEvent as $key => $item)
                <div class="col l-3">
                    <div class="event_item">
                        <img src="./assets/img/Rectangle 1.png" alt="">
                        <div class="event_item--content">
                            <h3>Sự kiện</h3>
                            <span>{{$item->nameEvent}}</span>
                            <div class="event_item--date">
                                <i class="fas fa-calendar"></i>
                                <span>{{$item->start}} - {{$item->end}}</span>
                                
                            </div>
                            <div class="event_item--price">
                                <span>{{$item->priceEvent}} VNĐ</span>
                            </div>
                            <a href="{{route('detail', ['id'=>$item->idEvent])}}" class="btn btn-detail">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> --}}
        </div>
    </div>
    <div class="event_image">
        <img class="event_image--item-1"  src="./assets/img/Frame (3).png" alt="">
        <img class="event_image--item-2"  src="./assets/img/Frame (2).png" alt="">
        <img class="event_image--item-3"  src="./assets/img/Group (1).png" alt="">
    </div>
</div>
@endsection