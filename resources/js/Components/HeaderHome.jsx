export default function HeaderHome() {
    return (
        <>
            <header>
                <img src="images/achtergrond.jpg" alt="achtergrond" />
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
                <h1>GRT MOTORSPORTS</h1>
                <button>Bekijk onze kalender</button>
                <i className="fa-solid fa-arrow-pointer" style={{ color: "#ffffff" }} />
            </header>
        </>
    )
}
