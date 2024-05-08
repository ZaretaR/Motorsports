import Header from "../Components/Header";
import Footer from "../Components/Footer";
import Inloggen from "../Components/Inloggen";
import Aanmelden from "../Components/Aanmelden";
import { useState } from "react";

export default function Profile() {

    const [toonInloggen, setToonInloggen] = useState(true);
    const toonInlogFormulier = () => {
        setToonInloggen(true);
    };
    const toonAanmeldFormulier = () => {
        setToonInloggen(false);
    };

    return (
        <>
            <Header />
            <button
                className="inlog-knop"
                onClick={toonInlogFormulier}
            >Inloggen</button>
            {" "}
            <button
                className="aanmeld-knop"
                onClick={toonAanmeldFormulier}
            >Aanmelden</button>

            {toonInloggen ? <Inloggen /> : <Aanmelden />}
            <Footer />
        </>
    )
}
