<style>

</style>
<div class="container-fluid" id="l_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">

        <div class="row">
            <div class="col-12 pl-lg-0 pl-0 pr-lg-3 pr-0 mb-4">
                @include('frontend.common.marquee')
            </div>
        </div>

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
                            <div class="ip-name input-group">
                                <span class="fr-title">Tên của bạn:</span><br>
                                <input class="form-control input-text" name="name" type="text"
                                       placeholder="Tên của bạn">
                                <div class="invalid-feedback" style="font-size: 15px;font-weight:  bold;">
                                    Please choose a username.
                                </div>
                            </div>
                            <br>
                            <div class="ip-email input-group">
                                <span class="fr-title">Email:</span><br>
                                <input class="form-control input-text" name="email" type="text"
                                       placeholder="Email của bạn">
                                <div class="invalid-feedback" style="font-size: 15px;font-weight:  bold;">
                                    Please choose a username.
                                </div>
                            </div>
                            <br>
                            <span class="fr-title">Nội dung liên hệ:</span><br>
                            <textarea name="contentmail" placeholder="Nội dung liên hệ" name="" id="" cols="30"
                                      rows="10"></textarea><br>
                            <div class="button-group">
                                <button id="btnSendMail" type="button" class="send-lh">
                                    <img src="{{URL::asset('images/button/Send-Email-Button-Transparent-PNG.png')}}"
                                         alt=""><i
                                            class="fa fa-spinner fa-spin fa-3x fa-fw loadingSending" style="
    font-size: 15px;display: none"></i><i
                                            class="fa fa-check-circle successSending" aria-hidden="true"
                                            style="display: none"></i>
                                </button>
                                <span style="display: none;color:  green;font-weight:  bold;margin-top:  5px;">Chúng tôi đã nhận được mail và sẽ phản hồi quý khách trong 24h. Xin cảm ơn.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3 text-center">
                        {{--<img src="{{URL::asset('images/button/emailbg.png')}}" alt="">--}}
                        {!! $listFrontendCommon['contact'] !!}

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