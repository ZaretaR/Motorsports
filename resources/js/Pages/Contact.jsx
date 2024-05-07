export default function Contact() {
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
            <section className="contact-formulier">
                <div className="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.301105324248!2d5.343541976871397!3d51.04752777171233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c125fad7490129%3A0xf81c9248b0d979cd!2sVijfeindestraat%2030%2C%203530%20Houthalen-Helchteren!5e0!3m2!1snl!2sbe!4v1715072977956!5m2!1snl!2sbe"
                    width={600}
                    height={500}
                    style={{ border: 0 }}
                    allowFullScreen=""
                    loading="lazy"
                    referrerPolicy="no-referrer-when-downgrade"
                />
                </div>
                <div className="formulier">
                <h3>Contact formulier</h3>
                <form>
                    <label htmlFor="naam">Naam</label>
                    <br />
                    <input type="text" name="naam" id="naam" placeholder="Naam" />
                    <br />
                    <label htmlFor="voornaam">Vooraam</label>
                    <br />
                    <input
                    type="text"
                    name="voornaam"
                    id="voornaam"
                    placeholder="Voornaam"
                    />
                    <br />
                    <label htmlFor="email">Email</label>
                    <br />
                    <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="email@adres.com"
                    />
                    <br />
                    <label htmlFor="bericht">Bericht</label>
                    <br />
                    <textarea
                    name="bericht"
                    id="bericht"
                    cols={30}
                    rows={10}
                    defaultValue={""}
                    />
                    <br />
                    <input type="submit" defaultValue="Verzenden" className="verzenden" />
                </form>
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
