<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div class="top-address">

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <p>Email: ketoanuytinnguyenthang@gmail.com</p>
                    <p>

                        <div class="d-flex align-items-center">

                            <a href=""><i class="fab fa-facebook-square mr-2" style="font-size: 25px"></i>
                            </a>
                    <p style="font-size: 10px">Find us on: <br>
                        <span style="font-size: 15px">Facebook</span></p>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="middle-logo" style="background-image:url({{URL::asset('images/bg/abpf8.png')}});">

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{URL::asset('images/logo/logo.png')}}" alt="">
                    <div class="slogan" style="color: #055f93">
                        <p class="mb-1">CÔNG TY TNHH NGUYỄN THẮNG</p>
                        <p>DỊCH VỤ KẾ TOÁN UY TÍN</p>
                    </div>
                </div>
                <div class="address d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>189 Đường Tây Thạnh, Phường Tây Thạnh,<br>
                            Quận Tân Phú, TP. Hồ Chí Minh</p>
                    </div>
                    <div class="ml-5 d-flex align-items-center">
                        <i class="fas fa-phone-square"></i>
                        <p>0978-77-66-55<br>
                            02838-155-061</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
<div class="menu-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">TRANG CHỦ</a></li>
                    <li><a class="{{ request()->is('dich-vu.html') ? 'active' : '' }}"
                           href="{{url('/dich-vu.html')}}">DỊCH VỤ</a></li>
                    <li><a class="{{ request()->is('bao-gia.html') ? 'active' : '' }}"
                           href="{{url('/bao-gia.html')}}">BẢNG GIÁ</a></li>
                    <li><a class="{{ request()->is('gioi-thieu.html') ? 'active' : '' }}"
                           href="{{url('/gioi-thieu.html')}}">GIỚI THIỆU</a></li>
                    <li><a class="{{ request()->is('tin-tuc*') ? 'active' : '' }}"
                           href="{{url('/tin-tuc.html')}}">TIN TỨC</a></li>
                    <li><a class="{{ request()->is('lien-he.html') ? 'active' : '' }}"
                           href="{{url('/lien-he.html')}}">LIÊN HỆ TƯ VẤN</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
