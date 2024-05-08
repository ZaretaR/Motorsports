import { useEffect, useState } from "react"

export default function Nav() {

    const [loggedIn, setLoggedIn] = useState(false);

    useEffect(() =>{
        fetch('/api/auth/loggedIn')
        .then(response => response.json())
        .then(data => setLoggedIn(data.loggedIn))
    }, []);

    return(
        <div className="container-nav">
            <nav>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/Team">Team</a>
                    </li>
                    <li>
                        <a href="/Contact">Contact</a>
                    </li>
                    {loggedIn && (
                        <>
                            <li>
                                <a href="/Calender">Kalender</a>
                            </li>
                            <li>
                                <a href="/Blog">Blog</a>
                            </li>
                        </>
                    )}
                    <li>
                        <a href="/Profile">{loggedIn ? 'Profiel' : 'Login / Meld aan'}</a>
                    </li>
                </ul>
            </nav>
        </div>
    )
}
