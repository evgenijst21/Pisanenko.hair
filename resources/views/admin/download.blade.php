@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <div class="row">
    
<!-- Posts -->
        <div class="block">
            <div class="block-header block-header-default">
                   
                <a class="btn btn-light" href="{{ route('AllPosts') }}">
                    <h3 class="block-title">Посты ({{$count}})</h3>
                </a>            
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-primary" value="Выход">    
                </form>
            </div>
            <div class="block-content">
                <h3 class="block-title">Количество скачиваний: {{$countList}}</h3>
                <!-- Posts Table -->
                <table class="table table-striped table-borderless table-vcenter">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="width: 33%;">Имя</th>
                            <th class="d-none d-sm-table-cell">Фамилия</th>
                            <th class="d-none d-xl-table-cell">Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($checks as $check)
                        <tr>
                            <td>
                                {{ $check->id }}
                            </td>
                            <td>
                                <i class="fa fa-eye text-success mr-1"></i>
                                    {{ $check->name }}
                            </td>
                            <td class="d-none d-sm-table-cell">
                                {{ $check->surname }}
                            </td>
                            <td class="d-none d-xl-table-cell">
                                {{ $check->email }}
                            </td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                </table>
                <!-- END Posts Table -->

                <!-- Posts Pagincation -->
                <nav aria-label="Posts Navigation">
                    <ul class="pagination justify-content-end">
                        {{ $checks->onEachSide(5)->links() }}
                    </ul>
                </nav>
                <!-- END Posts Pagincation -->
            </div>
        </div>
<!-- END Posts -->
    </div>
</div>
@endsection