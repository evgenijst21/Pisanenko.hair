@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <div class="row">
    
<!-- Posts -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Посты ({{ $count }})</h3>
                <a href="{{ route('downloadCheck') }}" class="padding-10px"><h4 class="block-title">Скачивания чек-листа</h4></a>               
                <a href="{{ route('addPost') }}" class="padding-10px"><h4 class="block-title">Написать новый пост</h4></a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-primary" value="Выход">    
                </form>
            </div>
            <div class="block-content">

                <!-- Posts Table -->
                <table class="table table-striped table-borderless table-vcenter">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="width: 33%;">Заголовок</th>
                            <th class="d-none d-sm-table-cell">Автор</th>
                            <th class="d-none d-xl-table-cell">Дата публикации</th>
                            <th class="d-none d-xl-table-cell">Категория</th>
                            <th style="width: 100px;" class="text-center">Изменить\Удалить</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                        <tr>
                            <td>
                                {{ $post->id }}
                            </td>
                            <td>
                                <i class="fa fa-eye text-success mr-1"></i>
                                <a href="http://pisanenko.hair/blog/single/{{ $post->id }}">
                                    {{ $post->name }}
                                </a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                Ирина Писаненко
                            </td>
                            <td class="d-none d-xl-table-cell">
                                {{ $post->updated_at }}
                            </td>
                            <td class="d-none d-xl-table-cell">
                                {{ $post->category->category_name }}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-light" href="http://pisanenko.hair/edit/{{ $post->id }}">
                                    <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                </a>
                                <a class="btn btn-sm btn-light" href="http://pisanenko.hair/del/{{ $post->id }}">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                </table>
                <!-- END Posts Table -->
                
                        {{$posts->onEachSide(3)->links()}}
                        
                    

                <!-- Posts Pagincation -->
                
                <!-- END Posts Pagincation -->
            </div>        
        </div>
<!-- END Posts -->
    </div>
</div>
@endsection