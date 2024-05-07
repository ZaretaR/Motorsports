import BlogPosts from "../Components/BlogPosts";
import Footer from "../Components/Footer";
import Header from "../Components/Header";

export default function Blog() {
    return(
        <>
            <Header />
            <section className="blog">
                <div className="container">
                    <h3>BLOGPOSTS</h3>
                    <BlogPosts />
                </div>
            </section>
            <Footer />
        </>
    )
}
