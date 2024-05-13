<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('team') }}">Team</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        @if (Auth::check())
            <li><a href="{{ route('kalender.index') }}">Kalender</a></li>
            <li><a href="{{ route('posts.index') }}">Blogposts</a></li>
            <li><a href="{{ route('logout') }}">Uitloggen</a></li>
        @else
            <li><a href="{{ route('profile') }}">Login / Meld aan</a></li>
        @endif
    </ul>
</nav>
