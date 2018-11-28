<style>
    .dv-lq {
        width: 100%;
        /*box-shadow: 0px 0px 1px #6c757d;*/
        border: 1px solid #f2f5f5;
    }

    .dv-lq h5 {
        background-color: #093f7e;
        color: white;
        text-transform: uppercase;
        text-align: center;
        padding-top: 6px;
        padding-bottom: 6px;
        font-family: 'Yeseva One', cursive;
        /*font-weight: bold;*/
    }

    .dv-lq h6 {
        height: 42px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .dv-lq h6 a {
        color: #454545;
        transition: .6s;
    }

    .dv-lq h6 a:hover {
        color: #007bff;
    }

    .dv-lq .img-ttlq {
        background-position: center center;
        -webkit-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
        width: 76px;
        height: 58px;
    }

    .dv-lq ul {
        list-style-type: none;
    }

    .dv-lq ul li {
        display: block;
        width: 100%;
    }
</style>
<div class="dv-lq mb-4" style="background-image:url({{URL::asset('images/bg/box4T-bg.png')}});">
    <h5>DỊCH VỤ CỦA CHÚNG TÔI</h5>

    <div class="mt-2 mb-2">
       @foreach($listFrontendCommon['services'] as $key=>$item)

            <div class="p-2 d-flex align-items-center">
                {{--<div class="pr-2 float-left">--}}
                    {{--<a href="">--}}
                        {{--<div class="img-ttlq"--}}
                             {{--style="background-image:url({{URL::asset('http://webaashi.com/TF/html/aashi-faucets/assets/img/all/wa-blog-detail.jpg')}});">--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                <h6 class="pl-2"><a href="">{{$item->title}}</a></h6>
            </div>

        @endforeach
    </div>

</div>