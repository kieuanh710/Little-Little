@extends('layouts.main')
@section('detailEvent')
<!-- detailEvent -->
<div class="container">
    <div class="detailEvent_title">
        <span>Sự kiện x</span>
    </div>
    <!-- content -->
    <div class="detailEvent_container">
        <div class="detailEvent_content line">
            <div class="detailEvent_content--item">
                <div class="row">
                    <div class="col l-6">

                        <div class="row">
                            <div class="col l-7">
                                <div class="detailEvent_item">
                                    <img src="../assets/img/Frame 47.png" alt="">
                                    <div class="detailEvent_item--content">
                                        <div class="detailEvent_item--date">
                                            <i class="fas fa-calendar"></i>
                                            <span> {{$detail->start}} - {{$detail->end}}</span>
                                            
                                        </div>
                                        <span>{{$detail->nameEvent}}</span>
                                        <div class="detailEvent_item--price">
                                            <span>{{$detail->priceEvent}}  VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col l-5">
                                <div class="detailEvent_item">
                                    <div class="detailEvent_context">
                                        <span>Lorem Ipsum</span>
                                        <p>{{$detail->desEvent}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="col l-6">
                        <div class="row">
                            <div class="col l-6">
                                <div class="detailEvent_item">
                                    <img src="../assets/img/Frame 48.png" alt="">
                                    <span>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, </span>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="detailEvent_item reserve">
                                    <img src="../assets/img/Frame 48.png" alt="">
                                    <span>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, </span>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <div class="detailEvent_image">
        <img class="detailEvent_image--item-1"  src="../assets/img/Frame (3).png" alt="">
        <img class="detailEvent_image--item-2"  src="../assets/img/Frame (2).png" alt="">
        <img class="detailEvent_image--item-3"  src="../assets/img/Group (1).png" alt="">   
    </div>
</div>
@endsection