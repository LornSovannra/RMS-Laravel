<header class="py-2 px-4" style="background: #2d6a4f;">
    <div class="d-flex" style="color: white; align-items: center;">
        <div class="col-3">
            <h1>LOGO</h1>
        </div>
        <div class="d-flex col-9 justify-content-between">
            <div>
                <h3>Welcome back, {{ $auth -> name }}!</h3>
            </div>
            <div class="d-flex gap-2" style="align-items: center;">
                <i class="fab fa-facebook-square" style="font-size: 34px;"></i>
                <i class="fab fa-instagram-square" style="font-size: 34px;"></i>
                <i class="fab fa-twitter-square" style="font-size: 34px;"></i>
                <i class="fab fa-linkedin" style="font-size: 34px;"></i>
                <div class="d-flex rounded-pill gap-2" style="align-items: center; background: white; cursor: pointer;">
                    {{-- <img class="rounded-circle" style="width: 30px; height: 30px;" src="./img/IMG_6116.JPEG" alt="IMG_6116.JPEG">
                    <i style="color: black;" class="fas fa-caret-down"></i> --}}
                    <li class="nav-item dropdown" style="list-style: none;">
                        <a id="navbarDropdown" style="color: black;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img class="rounded-circle" style="width: 30px; height: 30px;" src="user_photos/{{ $auth->photo }}" alt="{{ $auth->photo }}">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</header>