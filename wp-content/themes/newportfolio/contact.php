<?php /* Template Name: Contact */ ?>
<?php 
get_header();
?>
    <div class="navbar">
        <label id="nav-label" for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <ul class="nav">
            <li id="home"><a href="/">Home</a></li>
            <li id="about"><a href="/about">About</a></li>
            <li id="webapps"><a href="/web-applications">Web Applications</a></li>
            <li id="writing"><a href="/writing-samples">Writing Samples</a></li>
            <li id="contacts"><a href="/contact">Contacts</a></li>
        </ul>
    </div>
    <div id="contact-page">
        <div id="contact-div">
            <h1 id="contact-title">Contact Will Houston</h1>
            <div id="contact-body">
                <h3 class="contact-reg">Call me at (407) 416-2031</h3>
                <h3 class="contact-reg">Email me at wandrewhouston@gmail.com</h3>
                <h3 class="contact-reg">Or send me a message by filling out the form down below:</h3>
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_content();?>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</body>
</html>