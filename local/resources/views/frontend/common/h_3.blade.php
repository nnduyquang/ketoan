<div class="container-fluid" id="h_3" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">

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
                                        <a class="btn-chitiet" href="">BÁO GIÁ DỊCH VỤ</a>
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