<div class="container-fluid" id="t_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-9 bg-white">
                <div class="row">
                    <div class="col-12 mt-4 mb-3">
                        <h1>CÓ TỔNG LÀ 12 KẾT QUẢ TRẢ VỀ</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4 mb-3">
                        {{--@foreach($data['news'] as $key=>$item)--}}
                            {{--@if($key>=6)--}}
                        @foreach( $data['posts'] as $key=>$item)
                                <div class="mb-3 pb-3 d-flex  flex-md-row flex-column align-items-center border-bottom border-light"
                                     style="width: 100%">
                                    <div class="pr-2 img-content">
                                        <a href="{{URL::to('dich-vu/'.$item->path)}}">
                                            <div class="img-ttlq2"
                                                 style="background-image:url({{URL::to($item->image)}});">
                                                 {{--style="background-image:url({{URL::to($item->image)}});">--}}

                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <h4 class="tt-nav"><a href="{{URL::to('dich-vu/'.$item->path)}}">{{$item->title}}</a></h4>
                                        {{--<h4 class="tt-nav"><a href="">{{$item->title}}</a></h4>--}}
                                        <p class="time">
                                            <span style="font-weight: bold">TIN TỨC</span> - 01-01-2019
                                            {{--<span style="font-weight: bold">TIN TỨC</span> - {{$item->created_at}}--}}
                                        </p>

                                        <p>{!! $item->description!!}</p>
                                        {{--<p>{{$item->title}}</p>--}}
                                    </div>

                                </div>
                        @endforeach
                            {{--@endif--}}
                        {{--@endforeach--}}
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