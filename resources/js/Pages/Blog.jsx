import Footer from "../Components/Footer";
import Header from "../Components/Header";

export default function Blog() {
    return(
        <>
            <Header />
            <section className="blog">
                <div className="container">
                <h3>BLOGPOSTS</h3>
                <div className="blog-posts">
                    <div className="post">
                    <h4>GRT Motorsport gaat opnieuw druk seizoen tegenmoet</h4>
                    <p className="italic">datum</p>
                    <i className="fa-regular fa-heart" style={{ color: "#ffc72c" }} />
                    <img src="images/grt-42-blog.jpg" alt="grt-42-blog" />
                    <p>
                        Het rallyseizoen 2016 eindigde voor Roeland Thijs, drijvende kracht
                        achter GRT Motorsport...
                    </p>
                    <p className="italic">Lees verder</p>
                    </div>{" "}
                    <br />
                    <div className="post">
                    <h4>GRT Motorsport gaat opnieuw druk seizoen tegenmoet</h4>
                    <p className="italic">datum</p>
                    <i className="fa-regular fa-heart" style={{ color: "#ffc72c" }} />
                    <img src="images/grt-42-blog.jpg" alt="grt-42-blog" />
                    <p>
                        Het rallyseizoen 2016 eindigde voor Roeland Thijs, drijvende kracht
                        achter GRT Motorsport...
                    </p>
                    <p className="italic">Lees verder</p>
                    </div>
                    <div className="post">
                    <h4>GRT Motorsport gaat opnieuw druk seizoen tegenmoet</h4>
                    <p className="italic">datum</p>
                    <i className="fa-regular fa-heart" style={{ color: "#ffc72c" }} />
                    <img src="images/grt-42-blog.jpg" alt="grt-42-blog" />
                    <p>
                        Het rallyseizoen 2016 eindigde voor Roeland Thijs, drijvende kracht
                        achter GRT Motorsport...
                    </p>
                    <p className="italic">Lees verder</p>
                    </div>
                </div>
                </div>
            </section>
            <Footer />
        </>
    )
}
