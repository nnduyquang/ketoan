<div class="container-fluid" id="footer"
     style="background-image:url({{URL::asset('images/bg/bg_commercialista.jpg')}});">

    <div class="container" style="position: relative;z-index: 1">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12 instro">
                <img class="mr-3" src="{{URL::asset('images/logo/logo.png')}}" alt=""
                     style="width: 118px;height:auto;float:left;">
                <p class="text-center">
                    GIỚI THIỆU VỀ CÔNG TY TNHH <span style="color: #0d95e8;">NGUYỄN THẮNG</span><br><br>
                    <span>CÔNG TY KẾ TOÁN UY TÍN</span> <br><br>
                </p>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque hic libero nesciunt.</p>
                <br>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ex fuga ratione recusandae? Aliquid
                    aspernatur atque consequatur delectus earum incidunt molestiae nostrum tempora unde voluptates!
                    Adipisci eum ipsa nostrum odio?</p>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h5 style="background-image:url({{URL::asset('images/bg/footer-bg-title-new.png')}});">DỊCH VỤ KẾ
                    TOÁN</h5>
                <ul class="middle">

                    @for ($i = 0; $i < 8; $i++)
                        <li>
                            <a href="">Dịch vụ kế toán và tài chính</a>
                        </li>
                    @endfor

                </ul>

            </div>
            <div class="col-md-4 col-sm-6 col-12" id="contact">
                <h5 style="background-image:url({{URL::asset('images/bg/footer-bg-title-new.png')}});">LIÊN HỆ CHÚNG
                    TÔI</h5>
                <ul>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Địa chỉ: 189 Đường Tây Thạnh, Phường Tây Thạnh,
                            Quận Tân Phú, TP. Hồ Chí Minh</p>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fas fa-phone"></i>
                        <p>0978-77-66-55 <br>
                            02838-15-50-61</p>
                    </li>

                    <li class="d-flex align-items-center">
                        <i class="far fa-envelope"></i>
                        <p style="width: 100%;overflow-wrap: break-word;">ketoanuytinnguyenthang@gmail.com

                        </p>
                    </li>


                </ul>
            </div>

        </div>
    </div>

</div>
<div class="copy-right">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-3">
                <p class="text-white" style="font-size: 13px">Copyright © Phát triển bởi Smartlinks.vn</p>
            </div>
        </div>
    </div>
</div>