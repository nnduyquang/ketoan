<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div class="top-address">

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <p>Email: {{$listFrontendCommon['email']}}</p>
                    <p>

                        <div class="d-flex align-items-center">

                            <a href=""><i class="fab fa-facebook-square mr-2" style="font-size: 25px"></i>
                            </a>
                    <p style="font-size: 10px">Find us on: <br>
                        <span style="font-size: 15px">Facebook</span></p>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="middle-logo" style="background-image:url({{URL::asset('images/bg/abpf8.png')}});">

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between">

                <div class="d-flex align-items-center">
                    <img src="{{URL::asset('images/logo/logo.png')}}" alt="">
                    <div class="slogan" style="color: #055f93">
                        <p class="mb-1">{{$listFrontendCommon['company-name']}}</p>
                    </div>
                </div>

                <div class="address d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="">{{$listFrontendCommon['address']}}</p>
                    </div>
                    <div class="ml-5 d-flex align-items-center">
                        <i class="fas fa-phone-square"></i>
                        <p style="width: fit-content">{{$listFrontendCommon['phone-1']}}<br>
                            {{$listFrontendCommon['phone-2']}}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

<div class="menu-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <ul>
                    @foreach($listMenu as $key=>$item)
                    <li><a class="{{ request()->is($item->link()) ? 'active' : '/' }}"
                        href="{{URL::to($item->link())}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>

                <div class="d-flex align-items-center search-box">
                    {!! Form::open(array('route' => 'frontend.search','method'=>'POST','name'=>'search-home')) !!}
                    <input name="search-key" type="text" placeholder="Tìm kiếm tại đây"/>
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
