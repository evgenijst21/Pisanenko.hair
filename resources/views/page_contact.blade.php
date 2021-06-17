@extends('layouts.layout')

@section('banner')
@endsection


@section('content')
<!-- Page Output -->
<section class="padding-tb-100px">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-md-8">
                <p>Для того что-бы записаться на процедуру, или получить консультацию косательно ухода за вашими прекрасными волосами, воспользуйтесь разделом "Запись" в верхнем меню. По вопросам сотрудничества, рекламы или иным вопросам, прошу обращаться на почту указанную ниже. С уважением Ирина Писаненко.</p>
                
                <h6 class="margin-top-20px">Email :</h6>
                <span class="d-block"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> info@yoursite.com </span>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
</section>
<!-- // Page Output -->
    
@endsection