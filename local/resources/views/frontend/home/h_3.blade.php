<div class="container-fluid" id="h_3" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h5>VÌ SAO CHỌN <span style="color: #007bff">NGUYỄN THẮNG</span></h5>
            </div>

            <div class="col-md-6">
                <h4>NGUYỄN THẮNG - CHUYÊN NGHIỆP VÀ KINH NGHIỆM</h4>
                <br>

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum hic in iusto
                    maiores, molestias nobis
                    nostrum officiis recusandae. A asperiores deserunt dolores libero molestiae placeat quo sequi
                    tenetur ut veniam.</p>
                <br>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam
                    assumenda beatae harum illo
                    inventore laudantium maiores, minus, mollitia nesciunt nisi pariatur quod, ratione totam ut
                    veritatis
                    vero voluptatem? Eos.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut consequuntur deleniti,
                    doloremque dolorum facilis iste magnam maiores nam natus nemo neque officiis quae quasi, reiciendis
                    sed soluta sunt voluptates?
                </p>
                <br>

                <div class="mt-3 mb-4">
                    <a class="btn-xemthem" href="{{URL::to('gioi-thieu')}}">XEM THÊM</a>
                </div>

            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 col-6 mb-3 img-gt">
                        <img src="{{URL::asset('images/aboutus/accounting_1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 col-6 mb-3 img-gt">
                        <img src="{{URL::asset('images/aboutus/accounting_2.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 col-6 mb-3 img-gt">
                        <img src="{{URL::asset('images/aboutus/accounting_3.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 col-6 mb-3 img-gt">
                        <img src="{{URL::asset('images/aboutus/accounting_4.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 col-6 mb-3 img-gt">
                        <img src="{{URL::asset('images/aboutus/accounting_5.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 col-6 mb-3 img-gt">
                        <img src="{{URL::asset('images/aboutus/accounting_6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center mb-5">
                <h5>CẨM NANG <span style="color: #007bff">DOANH NGHIỆP</span></h5>
            </div>


            <div class="col-12 position-relative">
                <div id="owl-project" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 3; $i++)
                        <div>
                            <a href="">
                                <div class="items">
                                    <div class="img">
                                        <div class="img-link"
                                             style="background-image:url({{URL::asset('images/dichvu/1.jpg')}});">

                                        </div>
                                    </div>
                                    <h6>DỊCH VỤ BÁO CÁO THUẾ, DỊCH VỤ KHAI BÁO HẢI QUAN, DỊCH VỤ HOÀN THUẾ</h6>

                                    <h4 class="p-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Alias aut facilis fuga fugit
                                        iure iusto laborum molestiae mollitia, nemo non odit quisquam ratione rem
                                        repellat sed
                                        similique tenetur, vel vero!</h4>

                                    <div class="p-3 text-center mb-3 mt-2">
                                        <a class="btn-chitiet" href="">CHI TIẾT</a>
                                        {{--<a class="btn-chitiet" href="">BÁO GIÁ DỊCH VỤ</a>--}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>

                <button class="btn_pre"><i class="fas fa-angle-left"></i></button>
                <button class="btn_next"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</div>