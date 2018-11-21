<div class="container-fluid" id="t_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9 bg-white">
                <div class="row mt-3">
                    <div class="col-md-6 mb-3">
                        <div class="position-relative">
                            <img src="{{URL::asset('images/aboutus/accounting_1.jpg')}}" alt="">
                            <h3><a href="">Khán giả đồng loạt bất bình với kết phim qua loa như "trả bài" của "Quỳnh Búp
                                    Bê"</a></h3>
                            <p>Đâu rồi lời đe dọa rất ghê gớm của biên kịch Kim Ngân, nào là cái kết của "Quỳnh Búp Bê"
                                sẽ rất "sát với sự thật" và "không có hậu"?</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="mb-3 pb-3 d-flex align-items-center border-bottom border-light"
                                 style="width: 100%">
                                <div class="pr-2 float-left">
                                    <a href="">
                                        <div class="img-ttlq"
                                             style="background-image:url({{URL::asset('http://webaashi.com/TF/html/aashi-faucets/assets/img/all/wa-blog-detail.jpg')}});">

                                        </div>
                                    </a>
                                </div>
                                <p class="link-p"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        At consequatur
                                        doloremque
                                        earum.</a></p>
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div style="border-bottom: 3px solid #0d95e8;width: 100%">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4 mb-3">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="mb-3 pb-3 d-flex  flex-md-row flex-column align-items-center border-bottom border-light"
                                 style="width: 100%">
                                <div class="pr-2 img-content">
                                    <a href="">
                                        <div class="img-ttlq2"
                                             style="background-image:url({{URL::asset('http://webaashi.com/TF/html/aashi-faucets/assets/img/all/wa-blog-detail.jpg')}});">

                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <h4 class="tt-nav"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. At consequatur
                                            doloremque
                                            earum.</a></h4>
                                    <p class="time">
                                        <span style="font-weight: bold">TIN TỨC</span> - 2 giờ trước
                                    </p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, architecto,
                                        blanditiis culpa debitis dolorum eaque eum minima nisi obcaecati placeat quaerat
                                        quisquam quo rem saepe veritatis. Esse est ex laboriosam.</p>
                                </div>

                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('frontend.common.r-common.dv-lq')
                @include('frontend.common.r-common.tt-lq')
                @include('frontend.common.r-common.tags-lq')
            </div>
        </div>
    </div>
</div>