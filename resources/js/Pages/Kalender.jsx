export default function Kalender() {
    return(
        <>
            <header>
                <div className="container-nav">
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
                    {/* Dit krijg je alleen te zien als je ingelogd bent
                        <li><a href="Kalender">Kalender</a></li>
                        <li><a href="Blog">Blog</a></li>
                        */}
                    <li>
                        <a href="Profile">Login / Meld aan</a>
                    </li>
                    </ul>
                </nav>
                </div>
            </header>
            <section className="kalender"></section>
            <footer>
                <div className="container">
                <div className="gegevens-eerste-deel">
                    <div className="info">
                    <h5>Adres</h5>
                    <p>
                        Vijfeindestraat 30 <br /> 3530 Houthalen Helchteren
                    </p>
                    <h5>Telnr.</h5>
                    <p>+32 (0)495 44 25 45</p>
                    <i className="fa-brands fa-facebook" style={{ color: "#ffc72c" }} />
                    </div>
                    <div className="bereikbaarheid">
                    <ul>
                        <li>
                        <h5>We zijn bereikbaar op:</h5>
                        </li>
                        <li>Maandag: 17u00 - 22u00</li>
                        <li>Dinsdag: 17u00 - 22u00</li>
                        <li>Woensdag: 17u00 - 22u00</li>
                        <li>Donderdag: 17u00 - 22u00</li>
                        <li>Vrijdag: 17u00 - 22u00</li>
                        <li>Zaterdag: 17u00 - 22u00</li>
                        <li>Zondag: 17u00 - 22u00</li>
                    </ul>
                    </div>
                </div>
                <div className="lijn" />
                <div className="gegevens-tweede-deel">
                    <img src="images/grt-47.jpg" alt="logo" />
                    <p>Copyright GRT MOTORSPORT © 2024</p>
                </div>
                </div>
            </footer>
        </>
    )
}
