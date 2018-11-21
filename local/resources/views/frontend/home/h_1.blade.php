<div class="container-fluid" id="h_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h5>CÁC DỊCH VỤ CỦA <span>CHÚNG TÔI</span></h5>
            </div>

            @for ($i = 0; $i < 6; $i++)
                <div class="col-md-4 mb-3">
                    <a href="">
                        <div class="items">
                            {{--<div class="img">--}}
                                {{--<div class="img-link"--}}
                                     {{--style="background-image:url({{URL::asset('images/dichvu/1.jpg')}});">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="text-center icon-dv">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h6 class="text-center">DỊCH VỤ BÁO CÁO THUẾ, DỊCH VỤ KHAI BÁO HẢI QUAN, DỊCH VỤ HOÀN THUẾ</h6>

                            <h4 class="p-3 text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut facilis fuga fugit
                                iure iusto laborum molestiae mollitia, nemo non odit quisquam ratione rem repellat sed
                                similique tenetur, vel vero!</h4>

                            {{--<div class="p-3 text-center mb-3 mt-2">--}}
                                {{--<a class="btn-chitiet" href="">CHI TIẾT</a>--}}
                                {{--<a class="btn-chitiet" href="">BÁO GIÁ DỊCH VỤ</a>--}}
                            {{--</div>--}}
                        </div>
                    </a>
                </div>
            @endfor

            <div class="col-12 text-center mb-3 mt-3">
                <a class="btn-chitiet" href="{{URL::asset('/dich-vu.html')}}">XEM THÊM DỊCH VỤ KHÁC</a>
            </div>
        </div>
    </div>
</div>