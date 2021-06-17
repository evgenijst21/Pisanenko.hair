@extends('layouts.layout')

@section('banner')
@endsection

@section('content')
<div class="container margin-bottom-100px">
    <!--======= log_in_page =======-->
    <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

        <div class="form-output">
            <form action="" method="POST" >
                @csrf
                <div class="form-group label-floating">
                    <label class="control-label">Введите имя</label>
                    <input class="form-control" name="name" placeholder="Имя" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Введите email</label>
                    <input class="form-control" name="email" placeholder="email" type="email">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Введите пароль</label>
                    <input class="form-control" name="password" placeholder="Пароль" type="password">
                </div>

                <input type="submit" class="btn btn-primary">
                
                

                
            </form>
        </div>
    </div>
    <!--======= // log_in_page =======-->

</div>
    
@endsection