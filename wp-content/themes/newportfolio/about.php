<?php /* Template Name: About */ ?>
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
    <div id="about-page">
        <div id="about-div">
            <h1 id="about-title">About Will Houston</h1>
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif;?>
            <div id="about-body">
                <p class="about-p">I am a writer, an actor, and a front end web developer.  The medium of web development opens up a multitude of creative opportunities and I would like to use my passion for storytelling to help you, your business, and your clients stand out and express yourselves.</p>
                <br/>
                <p class="about-p">In July of 2018, I found an opportunity to learn the medium of web development and enrolled in the University of Central Florida Web Development Bootcamp.  During the bootcamp, I worked on projects with teams of other new developers, using Agile methodology to complete our tasks over the course of two weeks.  The second project I worked on was ranked in the top ten of projects in the nation among the Trilogy Education programs.  My third project was a website for an actual client, which can be viewed in the web applications section of this site.  Upon graduation, I accepted a paid internship at Dijatek, where I worked on several projects as a Front-End Web Developer.</p>
            </div>
        </div>
    </div>
</body>
</html>