import Header from "../Components/Header";

export default function Contact() {
    return(
        <>
            <Header />
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
            <Footer />
        </>
    )
}
