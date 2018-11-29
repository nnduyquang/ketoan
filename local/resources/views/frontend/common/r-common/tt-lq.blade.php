<div class="dv-lq mb-4" style="background-image:url({{URL::asset('images/bg/box4T-bg.png')}});">
    <h5>TIN TỨC LIÊN QUAN</h5>

    <div class="mt-2 mb-2">
        @foreach($listFrontendCommon['news'] as $key=>$item)

            <div class="p-2 d-flex align-items-center">
                <div class="pr-2 float-left">
                    <a href="">
                        <div class="img-ttlq"
                             style="background-image:url({{URL::to($item->image)}});">
                        </div>
                    </a>
                </div>
                <h6><a href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a></h6>
            </div>

        @endforeach
    </div>

</div>