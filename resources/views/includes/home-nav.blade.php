<header>
    <img src="images/achtergrond.jpg" alt="achtergrond">
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            @if (Auth::check())
                <li><a href="{{ route('events') }}">Kalender</a></li>
                <li><a href="{{ route('posts.index') }}">Blogposts</a></li>
                <li><a href="{{ route('logout') }}">Uitloggen</a></li>
            @else
                <li><a href="{{ route('profile') }}">Login / Meld aan</a></li>
            @endif
        </ul>
    </nav>
    <h1>GRT MOTORSPORTS</h1>
    <a href="{{ route('events') }}">Bekijk onze kalender</a>
    <i class="fa-solid fa-arrow-pointer" style="color: #ffffff;"></i>
</header>
