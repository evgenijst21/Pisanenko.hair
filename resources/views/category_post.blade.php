@extends('layouts.layout')

@section('banner')
@endsection

@section('content')
<div id="page-title" class="padding-tb-30px gradient-white text-up-small">
    <div class="container">
        <ol class="breadcrumb opacity-5">
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('blog') }}">Блог</a></li>
            <li class="active">{{$category->category_name}}</li>
        </ol>
        <h1 class="font-weight-300">{{$category->category_name}}</h1>
    </div>
</div>


<div class="margin-tb-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($articles as $article)
                    
                
                <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px box-shadow border-radius-10 overflow-hidden">
                    <div class="row no-gutters">
                        <div class="img-in col-lg-5"><a href="http://pisanenko.hair/blog/single/{{ $article->id }}"><img src="{{asset("assets/img/$article->img") }}" alt=""></a></div>
                        <div class="col-lg-7">
                            <div class="padding-lr-25px padding-tb-50px text-up-small">
                                <a class="d-block h4 margin-bottom-8px" href="http://pisanenko.hair/blog/single/{{ $article->id }}">{{$article->name}}</a>
                                <p>{!!$article->desc!!}</p>
                                <div class="meta">
                                    <span class="margin-right-20px text-small">Автор : <a href="#" class="text-main-color">Ирина Писаненко</a></span>
                                    <span class="margin-right-20px text-small">Дата :  <a href="#" class="text-main-color">{{$article->updated_at}}</a></span>
                                    
                                    <span class="text-small">Категория :  <a href="#" class="text-main-color"> {{$category->category_name}} </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @endforeach


                


            </div>


            @include('layouts.sidebar')

        </div>

    </div>
</div>
@endsection