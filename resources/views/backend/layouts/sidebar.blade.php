<div class="sidebar col-2">
    <div class="row al-items">
        <div>
            <a class="info__item-img info__item">
                <img src="/backend/image/avatar.png" alt="" class="item-img">
            </a>
        </div>
        <div class="name__online">
            Lê Minh Quang
            <p class="online">Online</p>
        </div>
    </div>
    <div class="sidebar__search">
        <input type="text" placeholder="Search" class="search__input">
        <i class="fas fa-search"></i>
    </div>
    <ul class="menu">
        <li class="menu__item">
            <i class="far fa-folder-open"></i>
            <a href="{{ route('faculties.index') }}" class="menu__item-link">Faculty management</a>
        </li>
        <li class="menu__item">
            <i class="fas fa-user"></i>
            <a href="" class="menu__item-link">Student management</a>
        </li>
        <li class="menu__item">
            <i class="fas fa-book"></i>
            <a href="{{ route('subjects.index') }}" class="menu__item-link">Subject management</a>
        </li>
        <li class="menu__item">
            <i class="fas fa-print"></i>
            <a href="" class="menu__item-link">Mark management</a>
        </li>
    </ul>
</div>
