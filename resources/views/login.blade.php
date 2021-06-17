@extends('layouts.layout')

@section('banner')
@endsection


@section('content')
<div class="container margin-bottom-100px padding-100px">
    <!--======= log_in_page =======-->
    <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

        <div class="form-output">
            <form action="{{ route('login.store') }}" method="post" >
                @csrf
                <div class="form-group label-floating">
                    <label class="control-label">Введите email</label>
                    <input type="email" class="form-control" name="email" placeholder="email" >
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Введите пароль</label>
                    <input type="password" class="form-control" name="password" placeholder="Пароль" >
                </div>
                <button type="submit" class="btn btn-block btn-primary">Войти</button>

                

                
            </form>
        </div>
    </div>
    <!--======= // log_in_page =======-->

</div>
    
@endsection