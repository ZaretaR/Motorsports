export default function Inloggen() {
    return(
        <div>
            <h3 className="inloggen">Inloggen</h3>
            <div className="aanmeld-formulier">
                <form>
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

                    <input type="submit" defaultValue="Verzenden" className="verzenden" />
                </form>
            </div>
        </div>
    )
}
