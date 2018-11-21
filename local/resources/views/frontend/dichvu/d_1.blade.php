<div class="container-fluid" id="d_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1 class="mb-4"><span class="text-dark">DỊCH VỤ CỦA</span> CHÚNG TÔI</h1>
                        <p style="line-height: 20px;width: 80%;margin: auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam debitis enim est
                            exercitationem illum laboriosam nemo quasi repudiandae? Atque enim illum molestias nihil
                            odit. Expedita fugit pariatur quae sapiente!</p>
                    </div>

                    @for ($i = 0; $i < 12; $i++)
                        <div class="col-md-4 mb-3">
                            <a href="{{URL::asset('dich-vu-chi-tiet.html')}}">
                                <div class="items">
                                    {{--<div class="img">--}}
                                    {{--<div class="img-link"--}}
                                    {{--style="background-image:url({{URL::asset('images/dichvu/1.jpg')}});">--}}

                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="text-center icon-dv">
                                        <i class="fas fa-gavel"></i>
                                    </div>
                                    <h6 class="text-center">DỊCH VỤ BÁO CÁO THUẾ, DỊCH VỤ KHAI BÁO HẢI QUAN, DỊCH VỤ
                                        HOÀN THUẾ</h6>

                                    <p class="p-3 text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Alias aut facilis fuga fugit
                                        iure iusto laborum molestiae mollitia, nemo non odit quisquam ratione rem
                                        repellat sed
                                        similique tenetur, vel vero!</p>

                                    {{--<div class="p-3 text-center mb-3 mt-2">--}}
                                    {{--<a class="btn-chitiet" href="">CHI TIẾT</a>--}}
                                    {{--<a class="btn-chitiet" href="">BÁO GIÁ DỊCH VỤ</a>--}}
                                    {{--</div>--}}
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-3">
                @include('frontend.common.r-common.tt-lq')
                @include('frontend.common.r-common.dv-lq')
                @include('frontend.common.r-common.tags-lq')
            </div>
        </div>
    </div>
</div>