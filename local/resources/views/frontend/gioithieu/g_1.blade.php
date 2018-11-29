<div class="container-fluid" id="g_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9 bg-white shadow-sm">
                <h1 class="p-3">{{$data['post']->title}}</h1>
                {{--<h4>NỘI DUNG TRANG BẢNG GIÁ để làm màu xanh và font khác</h4>--}}
                {!! $data['post']->content !!}
                <div class="text-center">
                    {!! $listFrontendCommon['contact'] !!}
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