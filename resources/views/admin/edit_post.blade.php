@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <div class="row">
     <!-- Main Container -->
     <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Редактировать пост</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <!-- New Post -->
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block">
                    <div class="block-header block-header-default">
                        <a class="btn btn-light" href="{{ route('AllPosts') }}">
                            <i class="fa fa-arrow-left mr-1"></i> Назад ко всем постам
                        </a>
                        
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center push">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="dm-post-add-title">Заголовок</label>
                                    <input type="text" class="form-control" id="dm-post-add-title" name="title" value="{{ $post->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="dm-post-add-title">Выберите категорию</label>
                                    <select name="select" size="1">
                                        @foreach ($categories as $category)
                                        <option selected value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>   
                                <div class="form-group">
                                    <label for="dm-post-add-excerpt">Краткое описание</label>
                                    <textarea class="form-control" id="dm-post-add-excerpt" name="excerpt" rows="3">{{ $post->desc }}</textarea>
                                    <div class="form-text text-muted font-size-sm font-italic">Краткое описание поста</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-6">
                                        <label>Вставьте изображение</label>
                                        <div class="custom-file">
                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                            <input type="file" class="custom-file-input" id="dm-post-add-image" name="image" data-toggle="custom-file-input">
                                            <label class="custom-file-label" for="dm-post-add-image">Выберите изображение</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <label>Текст</label>
                                    <textarea id="js-ckeditor" name="body">{{ $post->text }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row justify-content-center push">
                            <div class="col-md-10">
                                <input type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-fw fa-check mr-1"></i> Сохранить пост
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END New Post -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    </div>
</div>    
@endsection