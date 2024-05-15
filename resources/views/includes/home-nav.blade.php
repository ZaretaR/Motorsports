<header>
    <img src="images/achtergrond.jpg" alt="achtergrond">
    <div class="container-home-nav">
        <label for="menu-toggle" class="menu-toggle"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></label>
        <input type="checkbox" id="menu-toggle">
        <nav id="main-nav">
            <ul class="menu-items">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                @if (Auth::check())
                    <li><a href="{{ route('full-calendar') }}">Kalender</a></li>
                    <li><a href="{{ route('posts.index') }}">Blogposts</a></li>
                    <li><a href="{{ route('logout') }}">Uitloggen</a></li>
                @else
                    <li><a href="{{ route('profile') }}">Login / Meld aan</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <h1>GRT MOTORSPORTS</h1>
</header>
