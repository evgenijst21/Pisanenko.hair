<div class="col-lg-4">

    <div class="margin-bottom-30px background-main-color box-shadow border-radius-10">
        <div class="padding-30px">
            <h4 class="text-white"><i class="fas fa-search margin-right-10px"></i> <span class="opacity-6">Поиск по статьям</span></h4>
            <hr>
            <div class="input-group mb-3 border-radius-10 overflow-hidden">
                <input type="text" value="Ключевое слово..." class="form-control border-radius-0 border-0">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary text-white background-dark border-0 border-radius-0" type="button">Найти</button>
                </div>
            </div>

        </div>
    </div>

    <div class="widget widget_categories">
        <div class="margin-bottom-30px">
            <h4 class="padding-lr-30px padding-tb-20px background-white box-shadow border-radius-10"><i class="far fa-folder-open margin-right-10px text-main-color"></i> Категории</h4>
            <div class="padding-30px padding-bottom-30px background-white border-radius-10 text-up-small">
                @foreach ($categories as $category)
                    
                
                <ul>
                    <li><a href="http://pisanenko.hair/blog/category/{{ $category->id }}">{{ $category->category_name }}</a></li>
                    
                    
                </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="widget widget_categories">
        <div class="margin-bottom-30px">
            <h4 class="padding-lr-30px padding-tb-20px background-white box-shadow border-radius-10"><i class="fab fa-instagram margin-right-10px text-main-color"></i>Instagram</h4>
            <div class="padding-30px padding-bottom-30px background-white border-radius-10">
                <div class="row">
                    <div class="col-6 margin-bottom-20px"><a href="https://www.instagram.com/p/CMUaBERjW1o/"><img class="border-radius-10" src="{{asset("assets/img/instagram-1.jpg") }}" alt=""></a></div>
                    <div class="col-6 margin-bottom-20px"><a href="https://www.instagram.com/p/CMKB37EjJ7d/"><img class="border-radius-10" src="{{asset("assets/img/instagram-2.jpg") }}" alt=""></a></div>
                    <div class="col-6 margin-bottom-20px"><a href="https://www.instagram.com/p/CMzAi4GjTgT/"><img class="border-radius-10" src="{{asset("assets/img/instagram-3.jpg") }}" alt=""></a></div>
                    <div class="col-6 margin-bottom-20px"><a href="https://www.instagram.com/p/CNCiL9PsiCs/"><img class="border-radius-10" src="{{asset("assets/img/instagram-4.jpg") }}" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>

</div>