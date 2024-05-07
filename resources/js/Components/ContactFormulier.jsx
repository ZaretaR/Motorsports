export default function ContactFormulier() {
    return (
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
    )
}
