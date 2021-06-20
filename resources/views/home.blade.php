@extends('layouts.layout')


@section('modal')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title text-extra-large" id="staticBackdropLabel">Чек-лист по уходу за волосами!</h5>
		</div>
		<div class="modal-body">
			<div class="form-output">
				<form action="{{ route('checkList') }}" method="POST">
                    @csrf
					<div class="form-group label-floating">
						<label class="control-label">Имя</label>
						<input class="form-control" placeholder="" type="name" name="name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Фамилия</label>
						<input class="form-control" placeholder="" type="name" name="surname" value="{{ old('surname') }}">
                        <span class="text-danger">@error('surname'){{ $message }} @enderror</span>
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Email</label>
						<input class="form-control" placeholder="" type="email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
					</div>	
					
					<button type="submit" class="btn btn-md background-main-color full-width text-white text-medium">Скачать</button>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<p class="text-small">Нажимая на кнопку, вы даете согласие на обработку своих <a class="text-purple" href="{{ route('personal') }}">персональных данных.</a></p>
		<button type="button" class="btn background-main-color text-white text-medium" data-bs-dismiss="modal">Закрыть</button>
		
        </div>
	</div>
	</div>
</div>
@endsection

@section('pull')
<div class="pull-top-85px">
    <div class="container">
        <div class="row">
            @foreach ($finds as $find)
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="http://pisanenko.hair/blog/single/{{ $find->id }}" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="{{ asset("assets/img/$find->img")}}" alt=""></div>
                    <h4 class="text-center padding-15px">{{ $find->title }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


