<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="header-head">
        <h1>Portfolio</h1>
      </div>
      <i class="bx bx-menu" onclick="toggle(this)"></i>
      <nav class="menu-items" id="mobile-nav">
        <ul>
          <li>
            <a class="tab-links nav-active" onclick="opentab('hero',this)"
              >Home</a
            >
          </li>
          <li>
            <a class="tab-links" onclick="opentab('about',this)">About</a>
          </li>
          <li>
            <a class="tab-links" onclick="opentab('works',this)">Projects</a>
          </li>
          <li>
            <a class="tab-links" onclick="opentab('contact',this)"
              >Contact us</a
            >
          </li>
        </ul>
      </nav>
    </header>
    <section class="hero tabcontent" id="hero">
      <div class="hero-content">
        <div class="hero-text">
          <h3>Hi, I'am</h3>
          <h1>Surya Kumar</h1>
          <h2>web developer</h2>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum
            dolor sit, amet consectetur adipisicing elit.
          </p>
          <ul class="links">
            <li>
              <a href=""><i class="bx bxl-instagram"></i></a>
            </li>
            <li>
              <a href=""><i class="bx bxl-facebook-circle"></i></a>
            </li>
            <li>
              <a href=""><i class="bx bxl-github"></i></a>
            </li>
            <li>
              <a href=""><i class="bx bxl-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="hero-img"><img src="{{asset('assets/person.png')}}" alt="" /></div>
      </div>
    </section>
    <section class="about tabcontent" id="about">
      <div class="about-content">
        <div class="about-content-head">
          <h1>About</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
            rerum error est incidunt culpa esse cupiditate delectus deserunt
            mollitia rem exercitationem officia pariatur nihil enim accusamus
            voluptatibus dolores, nulla corrupti?
          </p>
        </div>
        <div class="about-content-skills">
          <h1>Skills</h1>
          <div class="skills-col">
            <div class="about-content-skills-col">
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
            </div>
            <div class="about-content-skills-col">
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
              <div class="skill">
                <p>Python</p>
                <div class="skill-progressbar">
                  <div class="skill-progress"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <secton class="works tabcontent" id="works">
      <div class="works-content">
        <h1>Works</h1>
        <div class="works-body">
          <div class="work">
            <h1>1</h1>
            <div class="work-content">
              <h1>test project</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deleniti voluptatum, impedit, labore temporibus earum nobis nisi
                quae ad incidunt facilis quibusdam pariatur quaerat atque, cum a
                libero exercitationem nostrum assumenda!
              </p>
              <span>2024 - 2025</span>
            </div>
          </div>
          <div class="work">
            <h1>1</h1>
            <div class="work-content">
              <h1>test project</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deleniti voluptatum, impedit, labore temporibus earum nobis nisi
                quae ad incidunt facilis quibusdam pariatur quaerat atque, cum a
                libero exercitationem nostrum assumenda!
              </p>
              <span>2024 - 2025</span>
            </div>
          </div>
          <div class="work">
            <h1>1</h1>
            <div class="work-content">
              <h1>test project</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deleniti voluptatum, impedit, labore temporibus earum nobis nisi
                quae ad incidunt facilis quibusdam pariatur quaerat atque, cum a
                libero exercitationem nostrum assumenda!
              </p>
              <span>2024 - 2025</span>
            </div>
          </div>
        </div>
      </div>
    </secton>
    <section class="contact tabcontent" id="contact">
      <h1>Contact</h1>
      <div class="contact-content">
        <form action="">
          <div class="inp">
            <label for="name">Enter ur name</label>
            <input type="text" name="name" placeholder="Name" />
          </div>
          <div class="inp">
            <label for="email">Enter ur email</label>
            <input type="text" name="name" placeholder="Email@gmail.com" />
          </div>
          <div class="inp">
            <label for="msg">Enter ur name</label>
            <textarea name="msg" placeholder="type msg..." id=""></textarea>
          </div>
          <button>Submit</button>
        </form>
        <ul class="contact-details">
          <li>
            <a href=""><i class="bx bxl-gmail"></i>Email@gmail.com</a>
          </li>
          <li>
            <a href=""><i class="bx bx-phone"></i>9874561230</a>
          </li>
          <li>
            <a href=""
              ><i class="bx bx-current-location"></i>123 new street
              madurai-42</a
            >
          </li>
        </ul>
      </div>
    </section>
  </body>
  <script>
    document.getElementById("hero").style.display = "block";
    function opentab(tab, e) {
      var i, tabcontent, tablinks;
      //tab content
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      //tab links
      tablinks = document.getElementsByClassName("tab-links");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(
          " nav-active",
          ""
        );
      }
      document.getElementById(tab).style.display = "block";
      e.className += " nav-active";
    }

    function toggle(e) {
      const nav = document.getElementById("mobile-nav");
      if (e.classList.contains("bx-menu")) {
        nav.classList.add("show");
        nav.classList.remove("menu-items");
        e.classList.remove("bx-menu");
        e.classList.add("bx-x");
      } else if (e.classList.contains("bx-x")) {
        nav.classList.remove("show");
        nav.classList.add("menu-items");
        e.classList.remove("bx-x");
        e.classList.add("bx-menu");
      }
    }
  </script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Roboto Slab", serif;
}

body {
  background-color: #262526;
}

header {
  height: 100px;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
header .header-head h1 {
  color: #a7bac9;
  font-size: 40px;
}
header i {
  color: #fff;
  font-size: 32px;
  visibility: hidden;
}
@media screen and (max-width: 650px) {
  header i {
    visibility: visible;
  }
}
header .menu-items {
  cursor: pointer;
}
@media screen and (max-width: 650px) {
  header .menu-items {
    display: none;
  }
}
header .menu-items ul {
  list-style: none;
  display: flex;
}
header .menu-items ul li {
  margin: 0 30px;
}
header .menu-items ul li a {
  position: relative;
  text-decoration: none;
  color: #fff;
  font-size: 22px;
}
header .menu-items ul li a::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  background-color: #a7bac9;
  bottom: -3px;
  left: 0;
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s;
}
header .menu-items ul li a:hover::after {
  transform-origin: left;
  transform: scaleX(1);
}
header .menu-items ul li .nav-active {
  border-bottom: 3px solid #a7bac9;
}

.show {
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  width: 300px;
  background-color: #a7bac9;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.show ul {
  list-style: none;
}
.show ul li {
  margin: 40px;
  font-size: 24px;
}

.hero {
  height: 85vh;
  display: none;
}
.hero .hero-content {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 150px;
}
@media screen and (max-width: 1024px) {
  .hero .hero-content {
    margin-top: 50px;
    flex-direction: column-reverse;
    overflow-y: scroll;
    margin-bottom: 50px;
  }
}
.hero .hero-content .hero-text {
  display: flex;
  justify-content: center;
  flex-direction: column;
  width: 50%;
}
@media screen and (max-width: 650px) {
  .hero .hero-content .hero-text {
    text-align: center;
  }
}
.hero .hero-content .hero-text h3 {
  color: #fff;
  font-size: 28px;
}
.hero .hero-content .hero-text h1 {
  color: #a7bac9;
  font-size: 72px;
}
.hero .hero-content .hero-text h2 {
  font-size: 48px;
  color: #fff;
}
.hero .hero-content .hero-text p {
  margin-top: 10px;
  font-size: 20px;
  color: #fff;
  margin-bottom: 10px;
}
.hero .hero-content .hero-text .links {
  list-style: none;
  display: flex;
  margin-top: 20px;
}
.hero .hero-content .hero-text .links li {
  margin: 10px 20px;
}
.hero .hero-content .hero-text .links li a {
  text-decoration: none;
  font-size: 26px;
  color: #a7bac9;
}

.about {
  height: 85vh;
  display: none;
}
@media screen and (max-width: 650px) {
  .about {
    padding-top: 80px;
  }
}
.about-content {
  margin-top: 50px;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
@media screen and (max-width: 650px) {
  .about-content {
    margin-top: 60px;
  }
}
.about-content-head {
  text-align: center;
}
.about-content-head h1 {
  font-size: 48px;
  color: #a7bac9;
  margin-bottom: 10px;
}
@media screen and (max-width: 650px) {
  .about-content-head h1 {
    font-size: 32px;
  }
}
.about-content-head p {
  color: #fff;
  font-size: 20px;
  margin: 20px 80px;
}
@media screen and (max-width: 650px) {
  .about-content-head p {
    font-size: 16px;
  }
}
.about-content-skills {
  width: 100%;
  margin-top: 50px;
  text-align: center;
}
.about-content-skills h1 {
  color: #a7bac9;
  font-size: 48px;
  letter-spacing: 1px;
}
@media screen and (max-width: 650px) {
  .about-content-skills h1 {
    font-size: 32px;
  }
}
.about-content-skills .skills-col {
  display: flex;
  justify-content: center;
  width: 100%;
}
@media screen and (max-width: 650px) {
  .about-content-skills .skills-col {
    flex-direction: column;
  }
}
.about-content-skills .skills-col .about-content-skills-col {
  margin: 20px 80px;
}
@media screen and (max-width: 650px) {
  .about-content-skills .skills-col .about-content-skills-col {
    margin-top: 20px;
  }
}
@media screen and (max-width: 768px) {
  .about-content-skills .skills-col .about-content-skills-col {
    margin: 20px;
  }
}

.skill {
  display: flex;
  align-items: center;
  margin: 20px;
}
.skill p {
  margin-right: 10px;
  color: #fff;
}
.skill .skill-progressbar {
  width: 250px;
  height: 15px;
  border-radius: 10px;
  background-color: #fff;
}
.skill .skill-progressbar .skill-progress {
  height: 100%;
  width: 60%;
  border-radius: 10px;
  background-color: #a7bac9;
}

.works {
  height: 85vh;
  display: flex;
  justify-content: center;
  display: none;
}
.works-content {
  margin: 40px;
  text-align: center;
}
@media screen and (max-width: 650px) {
  .works-content {
    margin: 0;
  }
}
.works-content h1 {
  font-size: 48px;
  color: #a7bac9;
}
@media screen and (max-width: 650px) {
  .works-content h1 {
    font-size: 32px;
  }
}
.works-body {
  display: grid;
  grid-template-columns: auto auto auto;
  padding: 20px;
}
@media screen and (max-width: 1024px) {
  .works-body {
    grid-template-columns: auto auto;
  }
}
@media screen and (max-width: 650px) {
  .works-body {
    grid-template-columns: auto;
  }
}
@media screen and (max-width: 768px) {
  .works-body {
    grid-template-columns: auto;
  }
}
.works-body .work {
  margin: 20px;
  height: 500px;
  width: 400px;
  padding: 20px;
  background-color: #194262;
  color: #fff;
  text-align: center;
  border-radius: 10px;
}
@media screen and (max-width: 650px) {
  .works-body .work {
    margin: 20px 10px;
    width: 350px;
  }
}
.works-body .work h1 {
  font-size: 64px;
}
.works-body .work .work-content {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;
  height: 80%;
}
.works-body .work .work-content h1 {
  font-size: 38px;
  color: #fff;
}
.works-body .work .work-content p {
  letter-spacing: 1px;
}

.contact {
  height: 85vh;
  margin: 20px 80px;
  text-align: center;
  display: none;
}
.contact h1 {
  font-size: 48px;
  color: #a7bac9;
}
@media screen and (max-width: 650px) {
  .contact h1 {
    font-size: 32px;
  }
}
.contact .contact-content {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 20px;
}
.contact .contact-content form {
  width: 500px;
}
@media screen and (max-width: 650px) {
  .contact .contact-content form {
    width: 300px;
  }
}
.contact .contact-content form .inp {
  display: flex;
  flex-direction: column;
  justify-content: start;
  text-align: start;
  margin: 20px;
}
.contact .contact-content form .inp label {
  color: #fff;
}
.contact .contact-content form .inp input {
  margin-top: 10px;
  padding: 20px;
  border: 0;
  border-radius: 10px;
  outline: none;
}
.contact .contact-content form .inp textarea {
  margin-top: 10px;
  padding: 20px;
  border: 0;
  border-radius: 10px;
  outline: none;
  resize: vertical;
}
.contact .contact-content form button {
  padding: 20px 40px;
  margin: 20px;
  background-color: #a7bac9;
  color: #fff;
  border: 0;
  border-radius: 10px;
}
.contact .contact-content .contact-details {
  list-style: none;
  display: flex;
}
@media screen and (max-width: 768px) {
  .contact .contact-content .contact-details {
    flex-direction: column;
  }
}
.contact .contact-content .contact-details li {
  margin: 20px;
}
@media screen and (max-width: 768px) {
  .contact .contact-content .contact-details li {
    margin: 10px;
  }
}
.contact .contact-content .contact-details li a {
  text-decoration: none;
  color: #fff;
}
.contact .contact-content .contact-details li a i {
  color: #a7bac9;
  margin-right: 10px;
}

  </style>
</html>
