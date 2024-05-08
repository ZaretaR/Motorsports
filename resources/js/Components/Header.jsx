export default function Header() {
    return (
        <>
            <header>
                <div class="container-nav">
                    <nav>
                        <ul>
                            <li>
                                <a href="Home">Home</a>
                            </li>
                            <li>
                                <a href="Team">Team</a>
                            </li>
                            <li>
                                <a href="Contact">Contact</a>
                            </li>
                            { /*De kalender en blog krijg je alleen te zien als je ingelogd bent*/}
                            <li>
                                <a href="Kalender">Kalender</a>
                            </li>
                            <li>
                                <a href="Blog">Blog</a>
                            </li>
                            <li>
                                <a href="Profile">Login / Meld aan</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
        </>
    )
}
