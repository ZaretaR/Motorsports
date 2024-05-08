import Nav from "./Nav";

export default function HeaderHome() {
    return (
        <>
            <header>
                <img src="images/achtergrond.jpg" alt="achtergrond" />
                <Nav />
                <h1>GRT MOTORSPORTS</h1>
                <button><a className="kalender-button" href="/Calender">Bekijk onze kalender</a></button>
                <i className="fa-solid fa-arrow-pointer" style={{ color: "#ffffff" }} />
            </header>
        </>
    )
}
