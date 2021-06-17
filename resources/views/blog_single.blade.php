@extends('layouts.layout')

@section('banner')
@endsection



@section('content')
<div id="page-title" class="padding-tb-30px gradient-white">
    <div class="container">
        <ol class="breadcrumb opacity-5">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Блог</a></li>
        </ol>
        <h1 class="font-weight-300">{{ $find->name }}</h1>
    </div>
</div>


<div class="margin-tb-30px">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <h4 class="padding-lr-30px padding-tb-20px background-white box-shadow border-radius-10"><i class="fas fa-file-alt margin-right-10px text-main-color"></i> {{ $find->name }}</h4>
                <div class="padding-30px padding-bottom-30px background-white border-radius-10">

                    <div class="meta">
                        <span class="margin-right-20px text-small">Автор :  <a href="#">Ирина Писаненко</a></span>
                        <span class="margin-right-20px text-small">Дата :  <a href="#">{{ $find->updated_at }}</a></span>
                    </div>
                    <hr>

                    <div class="thumbnail margin-bottom-20px"><img src="{{ asset("assets/img/$find->img")}}" alt=""></div>
                    <div class="entry-content text-large">
                        {!! $find->text !!}
                    </div>
                    <!-- .entry-content -->

                    <!-- Post tags -->
                    <hr>
                    
                </div>

            </div>
            @include('layouts.sidebar')


        </div>

    </div>
</div>
@endsection