<div class="container-fluid" id="t_1" style="background-image:url({{URL::asset('images/bg/bg-full.png')}});">
    <div class="container">
        <div class="row">

            <div class="col-12 pl-lg-0 pl-0 pr-lg-3 pr-0 mb-4">
                @include('frontend.common.marquee')
            </div>

            <div class="col-md-9 bg-white">
                <div class="row mt-3">
                    <div class="col-md-6 mb-3">
                        <div class="position-relative">
                            @foreach($data['news'] as $key=>$item)
                                @if($key==0)
                                    <img src="{{URL::to($item->image)}}" alt="">
                                    <h3><a href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a></h3>
                                    <p>{!! $item->description !!}</p>
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        @foreach($data['news'] as $key=>$item)
                            @if($key>0&&$key<6)
                                <div class="mb-3 pb-3 d-flex align-items-center border-bottom border-light"
                                     style="width: 100%">
                                    <div class="pr-2 float-left">
                                        <a href="{{URL::to('tin-tuc/'.$item->path)}}">
                                            <div class="img-ttlq"
                                                 style="background-image:url({{URL::to($item->image)}});">

                                            </div>
                                        </a>
                                    </div>
                                    <p class="link-p"><a href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a>
                                    </p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div style="border-bottom: 3px solid #0d95e8;width: 100%">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4 mb-3">
                        @foreach($data['news'] as $key=>$item)
                            @if($key>=6)
                                <div class="mb-3 pb-3 d-flex  flex-md-row flex-column align-items-center border-bottom border-light"
                                     style="width: 100%">
                                    <div class="pr-2 img-content">
                                        <a href="">
                                            <div class="img-ttlq2"
                                                 style="background-image:url({{URL::to($item->image)}});">

                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <h4 class="tt-nav"><a href="">{{$item->title}}</a></h4>
                                        <p class="time">
                                            <span style="font-weight: bold">TIN TỨC</span> - {{$item->created_at}}
                                        </p>

                                        <p>{{$item->title}}</p>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('frontend.common.r-common.dv-lq')
                {{--@include('frontend.common.r-common.tt-lq')--}}
                {{--@include('frontend.common.r-common.tags-lq')--}}
            </div>
        </div>
    </div>
</div>