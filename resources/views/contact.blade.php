@extends('layouts.main')
@section('contact')
<!-- contact -->
<div class="container">
    <div class="contact_title">
        <span>Liên hệ</span>
    </div>
    <!-- content -->
    <div class="contact_container">
        <div class="contact_content">
            <div class="row">
                <div class="col l-8">
                    <div class="contact_form line">
                        <div class="contact_form--content">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</span>
                            <form action="" method="post" class="form-contact">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col l-5">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Tên" value="">
                                            </div>
                                        </div>
                                        <div class="col l-7">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col l-5">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Số điện thoại" value="">
                                            </div>
                                        </div>
                                        <div class="col l-7">
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Địa chỉ" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="" cols="100" rows="5" placeholder="Lời nhắn" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="myBtn" class="btn btn-submit"  data-bs-toggle="modal" data-bs-target="#exampleModal">Đặt vé</button>
                                @csrf
                               
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col l-4">
                        <div class="contact_list">
                            <div class="contact_item line" >
                                <div class="contact_item--content">
                                    <img src="./assets/img/adress 1.png" alt="">
                                    <div class="contact_item--content-title">
                                        <h3>Địa chỉ:</h3>
                                        <span>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item line" >
                                <div class="contact_item--content">
                                    <img src="./assets/img/mail-inbox-app 1.png" alt="">
                                    <div class="contact_item--content-title">
                                        <h3>Email:</h3>
                                        <span>investigate@your-site.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_item line" >
                                <div class="contact_item--content">
                                    <img src="./assets/img/Group (2).png" alt="">
                                    <div class="contact_item--content-title">
                                        <h3>Điện thoại</h3>
                                        <span>+84 145 689 798</span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <!-- The Modal -->
    <div id="myModal" class="modal alert alert-success">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            {{session('success')}}
          </div>
      </div>
    @endif
                {{-- <!-- The Modal -->
                <div id="myModal" class="modal">
                  <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Gửi liên hệ thành công. Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!</p>
                    </div>
                </div> --}}
    <div class="contact_image">
        <img class="contact_image--item-1" src="./assets/img/Alex_AR_Lay_Do shadow 1.png" alt="">
    </div>
</div>
@endsection