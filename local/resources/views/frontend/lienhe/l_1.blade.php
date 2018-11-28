<style>

</style>
<div class="container-fluid" id="l_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9 justify-content-center">
                <h1 class="text-center main-title" style="font-size: 22px"><span class="text-dark">LIÊN HỆ VỚI</span>
                    CHÚNG TÔI</h1>
                <p>Công ty chúng tôi nhận tư vấn kế toán miễn phí. Các bạn liên hệ form bên dưới, chúng tôi sẽ tư vấn kế
                    toán vào mail cho các bạn ngay khi có thể</p>

                <div class="row mt-4 mb-4 p-4 bg-white" style="border-radius: 8px;">
                    <div class="col-12 text-center">

                    </div>
                    <div class="col-md-6">
                        <h4 class="mt-3 text-center">FORM LIÊN HỆ:</h4>
                        <div style="width: 100%;margin: auto">
                            <span class="fr-title">Tên của bạn:</span><br>
                            <input type="text" placeholder="Tên của bạn"><br>
                            <span class="fr-title">Email:</span><br>
                            <input type="text" placeholder="Email của bạn"><br>
                            <span class="fr-title">Nội dung liên hệ:</span><br>
                            <textarea placeholder="Nội dung liên hệ" name="" id="" cols="30" rows="10"></textarea><br>
                            <button class="send-lh">
                                <img src="{{URL::asset('images/button/Send-Email-Button-Transparent-PNG.png')}}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3 text-center">
                        {{--<img src="{{URL::asset('images/button/emailbg.png')}}" alt="">--}}
                        <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
                        <h3 class="mb-3">CÔNG TY TNHH <span style="color: red">NGUYỄN</span> THẮNG <br>
                            DỊCH VỤ KẾ TOÁN UY TÍN</h3>

                        <p class="mb-2"><span style="color: red">ĐỊA CHỈ</span>: 189 Đường Tây Thạnh, Phường Tây Thạnh, Quận Tân Phú, TP.HCM</p>
                        <p class="mb-2" style="word-break: break-all;"><span style="color: red">EMAIL</span>: ketoanuytinnguyenthang@gmail.com</p>
                        <p class="mb-2"><span style="color: red">PHÒNG KINH DOANH</span>: 0909 64 85 80</p>
                        <p class="mb-2"><span style="color: red">HOTLINE</span>: 0977 77-66-55</p>
                        <p class="mb-2"><span style="color: red">PHONE</span>: 028.38 15-50-61</p>
                        <p class="mb-2"><span style="color: red">FAX</span>: (028) 38.15.64.10</p>
                        <p class="mb-2"><span style="color: red">MÃ SỐ THUẾ</span>: 03 04 33 95 88</p>

                        <img src="{{URL::asset('images/button/emailbg1.png')}}" alt="" style="width: 300px;height: auto">

                    </div>
                </div>


                <h4 class="mt-3">BẢN ĐỒ TỚI DOANH NGHIỆP:</h4>
                @include('frontend.common.maps-google')
            </div>
            <div class="col-md-3">
                @include('frontend.common.r-common.dv-lq')
                @include('frontend.common.r-common.tt-lq')
                @include('frontend.common.r-common.tags-lq')
            </div>
        </div>
    </div>
</div>