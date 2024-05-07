export default function Team() {
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
            <section className="meet-our-team">
                <div className="container">
                <h3>MEET OUR TEAM</h3>
                <div className="our-team-first">
                    <img src="images/grt-3.png" alt="grt-3" />
                    <ul>
                    <li>
                        <h4>Roeland Thijs</h4>
                    </li>
                    <li>15 jaar gewerkt als Engineer bij Ford Genk</li>
                    <li>Garagehouder</li>
                    <li>Freelance bij QSR Racing</li>
                    <li>PTS Maasmechelen opleidingen - leerkracht avondschool</li>
                    </ul>
                </div>
                </div>
                <div className="background-drivers">
                <div className="container">
                    <h3>Drivers</h3>
                    <div className="our-team-drivers">
                    <div className="luc-jansens">
                        <img src="images/grt-4-drivers.jpg" alt="grt-4" />
                        <h4 className="luc">Luc Jansens</h4>
                    </div>
                    <div className="jan-geunes">
                        <img src="images/grt-5.jpg" alt="grt-5" />
                        <h4 className="jan">Jan Geunes</h4>
                    </div>
                    </div>
                </div>
                </div>
                <div className="background-technical-team">
                <div className="container">
                    <h3>Technical Team</h3>
                    <div className="technical-team">
                    <div className="benny-lambrechts">
                        <img src="images/grt-6.jpg" alt="grt-6" />
                        <h4>Benny Lambrechts</h4>
                    </div>
                    <div className="bart-weeghmans">
                        <img src="images/grt-7.jpg" alt="grt-7" />
                        <h4>Bart Weeghmans</h4>
                    </div>
                    </div>
                    <div className="technical-team">
                    <div className="laurens-dujardin">
                        <img src="images/grt-8.jpg" alt="grt-8" />
                        <h4>Laurens Dujardin</h4>
                    </div>
                    <div className="brecht-reynders">
                        <img src="images/grt-9.png" alt="grt-9" />
                        <h4>Brecht Reynders</h4>
                    </div>
                    </div>
                </div>
                </div>
                <div className="background-pitstop-assistance">
                <div className="container">
                    <h3>Pitstop Assistance</h3>
                    <div className="pitstop-assistance">
                    <img src="images/grt-10.jpg" alt="grt-10" />
                    <h4>Timon Princen</h4>
                    </div>
                </div>
                </div>
                <div className="background-pictures-team">
                <img src="images/grt-2.png" alt="grt-2" />
                </div>
            </section>
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
