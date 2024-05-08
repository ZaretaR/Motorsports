import { useState } from "react"

export default function Aanmelden(){

    const [errors, setErrors] = useState({});
    const handleSubmit = (event) => {
        event.preventDefault();
    };

    return(
        <div>
            <h3  className="aanmelden">Aanmelden</h3>
            <div className="inlog-formulier">
                <form onSubmit={handleSubmit} method="post" noValidate>
                    <label htmlFor="name">Naam</label>
                    <br />
                    <input type="text" className="name" id="name" placeholder="Naam" />
                    {errors.name && <span className="error-message">{errors.name}</span>}
                    <br />

                    <label htmlFor="first_name">Voornaam</label>
                    <br />
                    <input type="text" className="first_name" id="first_name" placeholder="Voornaam" />
                    {errors.first_name && <span className="error-message">{errors.first_name}</span>}
                    <br />

                    <label htmlFor="username">Gebruikersnaam</label>
                    <br />
                    <input type="text" className="username" id="username" placeholder="Gebruikersnaam" />
                    {errors.username && <span className="error-message">{errors.username}</span>}
                    <br />

                    <label htmlFor="email">Email</label>
                    <br />
                    <input type="email" className="email" id="email"  placeholder="email@adres.com" />
                    {errors.email && <span className="error-message">{errors.email}</span>}
                    <br />

                    <label htmlFor="password">Wachtwoord</label>
                    <br />
                    <input type="password" className="password" id="password"  placeholder="********" />
                    {errors.password && <span className="error-message">{errors.password}</span>}
                    <br />

                    <label htmlFor="password_confirmation">Wachtwoord confirmatie</label>
                    <br />
                    <input type="confirmation" className="confirmation" id="confirmation"  placeholder="********" />
                    {errors.password_confirmation && <span className="error-message">{errors.password_confirmation}</span>}
                    <br />
                    <br />

                    {/*
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
                    */}

                    <input type="submit" defaultValue="Verzenden" className="verzenden" />
                </form>
            </div>
        </div>
    )
}
