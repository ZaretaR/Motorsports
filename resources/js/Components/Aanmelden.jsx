export default function Aanmelden(){
    return(
        <div>
            <h3  className="aanmelden">Aanmelden</h3>
            <div className="inlog-formulier">
                <form>
                    <label htmlFor="name">Naam</label>
                    <br />
                    <input type="text" className="name" id="name" placeholder="Naam" />
                    <br />

                    <label htmlFor="first_name">Voornaam</label>
                    <br />
                    <input type="text" className="first_name" id="first_name" placeholder="Voornaam" />
                    <br />

                    <label htmlFor="username">Gebruikersnaam</label>
                    <br />
                    <input type="text" className="username" id="username" placeholder="Gebruikersnaam" />
                    <br />

                    <label htmlFor="email">Email</label>
                    <br />
                    <input type="email" className="email" id="email"  placeholder="email@adres.com" />
                    <br />

                    <label htmlFor="password">Wachtwoord</label>
                    <br />
                    <input type="password" className="password" id="password"  placeholder="********" />
                    <br />

                    <label htmlFor="password_confirmation">Wachtwoord confirmatie</label>
                    <br />
                    <input type="confirmation" className="confirmation" id="confirmation"  placeholder="********" />
                    <br />
                    <br />

                    <h3>Gegevens</h3>
                    <label htmlFor="adress">Adres</label>
                    <br />
                    <input type="text" className="adress" id="adress" placeholder="straatnaam 10" />
                    <br />

                    <label htmlFor="phone_number">Telefoonnummer</label>
                    <br />
                    <input type="text" className="phone_number" id="phone_number" placeholder="+134 00 00 00 00" />
                    <br />

                    <label htmlFor="municipalty">Gemeente</label>
                    <br />
                    <input type="text" className="municipalty" id="municipalty" placeholder="Gemeente" />
                    <br />

                    <label htmlFor="insurance">Verzekering</label>
                    <br />
                    <select className="insurance" id="insurance">
                        <option value="">Maak een keuze</option>
                        <option value="eigen_verzekering">Eigen verzekering</option>
                        <option value="club_verzekering">Club verzekering</option>
                    </select>
                    <br />

                    <input type="submit" defaultValue="Verzenden" className="verzenden" />
                </form>
            </div>
        </div>
    )
}
