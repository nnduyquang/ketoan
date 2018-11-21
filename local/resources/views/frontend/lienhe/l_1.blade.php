<div class="container-fluid" id="l_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9 justify-content-center">
                <h1 class="text-center main-title" style="font-size: 22px"><span class="text-dark">LIÊN HỆ VỚI</span>
                    CHÚNG TÔI</h1>
                <p>Công ty chúng tôi nhận tư vấn kế toán miễn phí. Các bạn liên hệ form bên dưới, chúng tôi sẽ tư vấn kế
                    toán vào mail cho các bạn ngay khi có thể</p>

                <div class="row p-0 mt-4 mb-4">
                    <div class="col-6">
                        <h4 class="mt-3 text-center">FORM LIÊN HỆ:</h4>
                        <div style="width: 100%;margin: auto">
                            <span class="fr-title">Tên của bạn:</span><br>
                            <input type="text" placeholder="Tên của bạn"><br>
                            <span class="fr-title">Email:</span><br>
                            <input type="text" placeholder="Email của bạn"><br>
                            <span class="fr-title">Nội dung liên hệ:</span><br>
                            <textarea placeholder="Nội dung liên hệ" name="" id="" cols="30" rows="10"></textarea><br>
                            <button class="send-lh">GỞI LIÊN HỆ</button>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mt-3">THÔNG TIN DOANH NGHIỆP:</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aperiam aspernatur
                            excepturi facere, ipsam necessitatibus odio perferendis porro quas quasi quia quisquam quo
                            rem repellendus reprehenderit sapiente tempora velit vero!</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum delectus dolorum
                            ducimus, earum esse facilis fugit in libero minus mollitia natus nobis obcaecati optio
                            perspiciatis quasi sapiente, sit vel.Amet, architecto asperiores aspernatur atque culpa
                            debitis dicta dolores eligendi fugit illo incidunt natus nemo neque odit, omnis placeat quod
                            reiciendis, similique soluta tempora totam unde ut vitae voluptatem voluptatum?
                        </p>
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