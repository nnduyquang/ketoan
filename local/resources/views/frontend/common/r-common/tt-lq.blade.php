<div class="dv-lq mb-4" style="background-image:url({{URL::asset('images/bg/box4T-bg.png')}});">
    <h5>TIN TỨC LIÊN QUAN</h5>

    <div class="mt-2 mb-2">
        @for ($i = 0; $i < 5; $i++)

            <div class="p-2 d-flex align-items-center">
                <div class="pr-2 float-left">
                    <a href="">
                        <div class="img-ttlq"
                             style="background-image:url({{URL::asset('http://webaashi.com/TF/html/aashi-faucets/assets/img/all/wa-blog-detail.jpg')}});">
                        </div>
                    </a>
                </div>
                <h6><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur doloremque
                        earum.</a></h6>
            </div>

        @endfor
    </div>

</div>