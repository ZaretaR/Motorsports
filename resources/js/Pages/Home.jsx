export default function Home() {
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
                        {/* Dit krijg je alleen te zien als je ingelogd bent
                        <li><a href="Kalender">Kalender</a></li>
                        <li><a href="Blog">Blog</a></li>
                        */}
                        <li>
                        <a href="Profile">Login / Meld aan</a>
                        </li>
                    </ul>
                    </nav>
                    <h1>GRT MOTORSPORTS</h1>
                    <button>Bekijk onze kalender</button>
                    <i className="fa-solid fa-arrow-pointer" style={{ color: "#ffffff" }} />
                </header>

                <section className="motorsport">
                    <div className="container">
                    <h3>IR MOTORSPORT</h3>
                    <div className="first-section">
                        <img src="images/grt-42.jpg" alt="grt-42" className="image-normal" />
                        <img
                        src="images/grt-42.jpg"
                        alt="grt-42-shadow"
                        className="image-shadow"
                        />
                        <div className="text-content">
                        <p>
                            Welkom bij GRT Motorsport, dé partner voor beginnende piloten en hun
                            team in alle disciplines zoals:
                        </p>
                        <ul>
                            <li>rallysport</li>
                            <li>slalom</li>
                            <li>speed</li>
                            <li>drift</li>
                            <li>racing</li>
                            <li>en zoveel meer...</li>
                        </ul>
                        <p>
                            Wij bieden uitgebreid advies en technische ondersteuning, alsook
                            regionale en nationale vergunningen. Verhuring van wagens steekt ook
                            in ons aanbod. Ontketen het potentieel van jouw passie, van jouw
                            team voor jouw tak van de autosport met onze deskundige begeleiding
                            en hoogwaardige service.
                        </p>
                        </div>
                    </div>
                    <div className="second-section">
                        <h4>
                        IR MOTORSPORT WERD OPGERICHT OM DE BELCAR RACING VOOR HUN REKENING TE
                        NEMEN.
                        </h4>
                        <p>
                        In december 2023 werd een splinternieuwe BMW G20 330i aangekocht bij
                        JJ MOTORSPORT, een prachtige wagen met beloftevolle prestaties, die
                        wij ontvangst mochten nemen in maart 2024.
                        </p>
                        <div className="images-second-section">
                        <img src="images/grt-35.jpg" alt="grt-35" />
                        <img src="images/grt-36.jpg" alt="grt-36" />
                        <img src="images/grt-37.jpg" alt="grt-37" />
                        </div>
                    </div>
                    </div>
                </section>

                <section className="trackdays">
                    <div className="container">
                    <h3>TRACKDAYS</h3>
                    <div className="first-section">
                        <p>
                        Heb je ooit gedroomd van het versnellen op een racecircuit, de
                        adrenaline door je aderen voelen pompen terwijl je de bochten
                        meesterlijk aansnijdt? Nu is het moment aangebroken om die droom
                        werkelijkheid te maken. Word de held van je eigen raceverhaal! Kruip
                        achter het stuur van een krachtige racewagen en voel de opwinding
                        terwijl je door chicane scheurt en op rechte stukken als je het
                        gaspedaal indrukt. Ervaar de perfecte combinatie van snelheid,
                        behendigheid en adrenaline terwijl je de grenzen van jouw
                        rijvaardigheid verkent. <br />
                        <br />
                        Of... <br />
                        <br />
                        Ben je nog niet klaar om zelf te rijden? Geen zorgen! Neem plaats
                        naast een ervaren piloot voor een onvergetelijke rit vol accelaratie,
                        G-krachten en bochtenwerk. Voel de kracht van de wagen en beleef de
                        sensatie van een echt racecircuit terwijl je als passagier de actie
                        van dichtbij meemaakt.
                        </p>
                        <div className="inhoud-first-section">
                        <img src="images/grt-4.jpg" alt="grt-4" />
                        <ul>
                            <li>
                            Unieke ervaring: Beleef iets buitengewoons en ontsnap aan de
                            dagelijkse sleur.
                            </li>
                            <br />
                            <li>
                            Veiligheid voorop: Geniet van de snelheid in een gecontroleerde en
                            veilige omgeving onder begeleiding van professionele instructeurs.
                            </li>
                            <br />
                            <li>
                            Adrenalinekick: Voel de spanning en opwinding van het racen
                            terwijl je de grenzen van snelheid en behendigheid verkent
                            </li>
                            <br />
                            <li>
                            Gemeenschap van raceliefhebbers: Ontmoet gelijkgestemde mensen,
                            deel ervaringen en creëer blijvende herinneringen.
                            </li>
                        </ul>
                        </div>
                        <div className="quote">
                        <i className="fa-solid fa-quote-left" style={{ color: "#ffc72c" }} />
                        <p>
                            Snel rijden is een capaciteit van een wagen, maar hoe je een
                            snelrijdende wagen hanteert, wanneer geef je gas, <br /> wanneer hou
                            je in, welke banen volg je op een circuittraject... dat moet je
                            leren.
                        </p>
                        <i className="fa-solid fa-quote-right" style={{ color: "#0166b1" }} />
                        </div>
                    </div>
                    <div className="cars">
                        <img src="images/grt-44.jpg" alt="grt-44" />
                        <img src="images/grt-45.jpg" alt="grt-45" />
                        <img src="images/grt-46.jpg" alt="grt-46" />
                        <img src="images/grt-40.jpg" alt="grt-40" />
                        <img src="images/grt-48.jpg" alt="grt-48" />
                    </div>
                    <div className="formules">
                        <h4>FORMULES</h4>
                        <ul>
                        <li>Eerste circuitervaring met instructeur</li>
                        <li>
                            {" "}
                            Skills bijschaven op het circuit (met en /of zonder instructeur)
                        </li>
                        </ul>
                        <p>
                        Een circuitervaring kunt u ook iemand schenken met een{" "}
                        <b>cadeaubon</b>, neem met ons contact op om datum en keuze te
                        bepalen.
                        </p>
                    </div>
                    </div>
                    <div className="uitnodiging">
                    <div className="container">
                        <p>
                        Wacht niet langer! Of je nu zelf achter het stuur wilt kruipen of de
                        sensatie als passagier wilt beleven, een trackday biedt de ultieme
                        race-ervaring. <br /> Zet de eerste stap naar jouw racedroom en dompel
                        jezelf onder in de wereld van snelheid, pk’s en opwinding!
                        </p>
                    </div>
                    </div>
                    <div className="container">
                    <h4>INTERESSE GEWEKT?</h4>
                    <div className="interesse">
                        <div className="rechthoek" />
                        <img src="images/grt-39.jpg" alt="grt-39" />
                        <p>
                        Wil je een eerste ervaring op doen in het licht, of in het
                        donker...wij staan klaar om jullie te ontvangen in onze box! Onze
                        instructeurs staan te popelen om jullie wegwijs te maken op het
                        circuit, of om jullie skills bij te schaven!
                        <br />
                        <br />
                        Jouw droom waar maken? Voorbereiden op een autosport carrière op het
                        circuit? Jouw licentie halen? Hulp nodig bij licentie aanvraag? Een
                        evenement organiseren? Kortom, met alle vragen kan je bij ons terecht!
                        <br />
                        <br />
                        Met onze jarenlange ervaring, staan we jullie graag met raad en daad
                        bij!
                        </p>
                    </div>
                    <div className="interesse-kalender">
                        <button>Bekijk de kalender</button>
                    </div>
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
