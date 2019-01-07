@extends('frontend.master')
@section('title')
    Kế Toán Uy Tín - Công ty TNHH Nguyễn Thắng
@stop
@section('description')
    Kế Toán Uy Tín - Công ty TNHH Nguyễn Thắng
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')
{{URL::to('images/uploads/images/dichvu/ketoantrongoi/img20161115095622-768x576_560552.jpg')}}
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.lienhe.banner-title')
@stop
@section('container')
    @include('frontend.lienhe.l_1')
    @include('frontend.home.h_2')
    @include('frontend.home.h_3')
    @include('frontend.home.h_4')
    @include('frontend.home.h_5')
@stop
@section('jv-scripts')
    <script>
        $(document).ready(function () {

            $('#owl-project').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            var owl = $('#owl-project');
            // owl.owlCarousel();
// Go to the next item
            $('.btn_next').click(function () {
                owl.trigger('next.owl.carousel');
            })
// Go to the previous item
            $('.btn_pre').click(function () {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            })
        });
    </script>
@stop
