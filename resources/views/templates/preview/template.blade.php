<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
      @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('public/css/dash.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Test</title>
</head>
<body class=" lg:h-full bg-neutral-900 h-full w-screen  overflow-y-scroll overflow-x-hidden relative">
    <aside class=" absolute top-0 left-0 h-full w-80 flex items-center justify-center hidden bg-red-600 transition duration-500 ease-linear pt-40" id="sidebar">
        <ul class="list-none flex flex-col text-center gap-20">
            <li><a class="text-white text-xl cursor-pointer tablinks" onclick="opentab(event,'home')">Home</a></li>
            <li><a class="text-white text-xl cursor-pointer tablinks" onclick="opentab(event,'about')">About Me</a></li>
            <li><a class="text-white text-xl cursor-pointer tablinks" onclick="opentab(event,'ownpage')">Others</a></li>
            <li><a class="text-white text-xl cursor-pointer tablinks" onclick="opentab(event,'contact')">Contact Me</a></li>
          </ul>
    </aside>
    <nav class=" h-32  w-full flex justify-center items-center">
        <div class=" flex justify-between lg:hidden w-full h-20 items-center px-10">
            <h1 class="lg:text-3xl md:text-2xl text-2xl text-red-600">Ragava</h1>
            <button type="button" id="sidebar-btn">
                <i class="bx bx-menu text-white text-4xl" id="sidebar-icon"></i>
            </button>
        </div>
      <ul class=" list-none lg:flex hidden gap-32">
        <li><a class="text-white text-xl tablinks cursor-pointer active" onclick="opentab(event,'home')">Home</a></li>
        <li><a class="text-white text-xl tablinks cursor-pointer" onclick="opentab(event,'about')">About Me</a></li>
        <li><a class="text-white text-xl tablinks cursor-pointer" onclick="opentab(event,'ownpage')">Others</a></li>
        <li><a class="text-white text-xl tablinks cursor-pointer" onclick="opentab(event,'contact')">Contact Me</a></li>
      </ul>
    </nav>

    <section class=" h-full w-full lg:pb-20  tabcontent" id="home">
                <div class="flex lg:flex-row-reverse lg:mt-24 flex-col items-center">
            <div class="lg:w-1/2 pt-5 w-5/6 h-3/4 flex justify-center items-center pb-10 ">
                <img class="img-responsive" src="https://testing.selfme.in/public/selfme_assets/users_img/tech_haven.jpg" alt="">
            </div>
            <div class="lg:w-1/2 lg:pl-56 flex flex-col text-center pb-10 lg:items-start px-5 gap-5">
                <div class="lg:text-8xl text-6xl w-full text-white">
                <p>Tech Haven</p>
                </div>
                <div class="lg:text-6xl text-4xl">
                <p class="text-white">I'am <span class="text-red-600" id="element">admin</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true">|</span></p>
                </div>
                <div class="lg:text-xl text-md lg:text-start text-center text-neutral-300">
                <p>Welcome to Tech Haven, your ultimate destination for the latest tech news, reviews, and tutorials. Stay updated with the newest trends and innovations in technology.</p>
                </div>
                <div class="flex text-3xl gap-6 lg:justify-start justify-center">
                                            <a class="link" href="https://github.com/johndoe">
                                                            <i class="bx bxl-instagram text-red-600"></i>
                                                    </a>
                                            <a class="link" href="https://johndoe.dev">
                                                            <i class="bx bxl-github text-red-600"></i>
                                                    </a>
                                            <a class="link" href="https://www.linkedin.com/in/johndoe">
                                                            <i class="bx bxl-facebook-circle text-red-600"></i>
                                                    </a>
                                            <a class="link" href="https://twitter.com/johndoe">
                                                            <i class="bx bxl-twitter text-red-600"></i>
                                                    </a>
                                    </div>
            </div>
        </div>
            </section>
    <section class=" h-full w-full lg:pb-5 pb-20 flex flex-col lg:px-44 px-10 items-center hidden tabcontent" id="about">
                <div class="flex flex-col justify-center items-center pt-20 py-10">
            <h1 class="text-4xl text-red-600">About Me</h1>
            <p class="text-lg text-center mt-5 text-neutral-300">John Doe is a seasoned software engineer with over 10 years of experience in developing scalable web and mobile applications. His expertise includes full-stack development, cloud services, and machine learning.</p>
            <a href="https://testing.selfme.in/selfme_assets/users_resume/john_doe_resume.pdf" download="" class="mt-10 px-5 py-2 bg-red-600 text-white rounded">Download CV</a>
        </div>
              <div class="flex flex-col justify-center mt-10 items-center">
        <div class="about-skills-head">
          <h1 class="text-4xl text-red-600 my-4">Skills</h1>
        </div>
        <div class="flex lg:flex-row flex-col lg:gap-40 gap-3 mt-10">
          <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">JavaScript</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 90%;"></div>
                </div>
            </div>
                        <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">PHP</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 85%;"></div>
                </div>
            </div>
                        <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">Python</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 80%;"></div>
                </div>
            </div>
                        <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">React</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 75%;"></div>
                </div>
            </div>
                      </div>
          <div class="flex flex-col gap-3">
                         <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">Laravel</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 70%;"></div>
                </div>
            </div>
                        <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">HTML/CSS</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 95%;"></div>
                </div>
            </div>
                        <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">SQL</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: 85%;"></div>
                </div>
            </div>
                      </div>
        </div>
      </div>
    </section>
    <section class=" h-full w-full lg:pb-5 pb-20 flex flex-col lg:px-44 px-5 items-center hidden tabcontent" id="ownpage">
      <div class="h-full w-full flex items-center flex-col w-full">
        <div class="mt-20">
          <h1 class="text-red-600 text-4xl">John Doe Portfolio</h1>
        </div>
        <div class="flex flex-col w-full items-center mt-10">
                                        <div class="bg-red-600 px-5 py-10 w-3/4 rounded-lg flex lg:flex-row flex-col my-10">
                    <h1 class="text-8xl lg:w-72 w-full flex justify-center items-center text-white lg:border-r-2 lg:border-b-0 border-b-2 border-r-0 pb-5 border-white">1</h1>
                    <div class="flex flex-col gap-3 lg:pl-10 pl-2 pt-5">
                    <h2 class="text-4xl text-white">Welcome to My Portfolio</h2>
                    <h2 class="text-2xl text-neutral-300">Explore My Work</h2>
                    <p class="text-white">This is a showcase of my personal projects and professional achievements. Dive into my work and discover how I can help you achieve your goals.</p>
                    </div>
                </div>
                                            <div class="bg-red-600 px-5 py-10 w-3/4 rounded-lg flex lg:flex-row flex-col my-10">
                    <h1 class="text-8xl lg:w-72 w-full flex justify-center items-center text-white lg:border-r-2 lg:border-b-0 border-b-2 border-r-0 pb-5 border-white">2</h1>
                    <div class="flex flex-col gap-3 lg:pl-10 pl-2 pt-5">
                    <h2 class="text-4xl text-white">My Latest Projects</h2>
                    <h2 class="text-2xl text-neutral-300">Innovative Solutions</h2>
                    <p class="text-white">Check out my most recent projects that demonstrate my skills in software development, problem-solving, and innovation.</p>
                    </div>
                </div>
                                    </div>
      </div>
    </section>
    <section class=" h-full w-full lg:pb-5 pb-20 flex flex-col lg:px-44 px-10 justify-center items-center hidden tabcontent" id="contact">
        <div class="mt-20 w-full text-center">
           <h1 class="text-red-600 text-4xl">Contact Me</h1>
        </div>
      <div class=" w-full flex justify-center  items-center flex-col">
        <div class="flex flex-col gap-5 mt-10 lg:w-2/4 w-full">
          <input type="text" class="px-5 py-3 bg-neutral-50 outline-none rounded" placeholder="Enter a Name">
          <input type="email" placeholder="Enter a Email" class="px-5 py-3 bg-neutral-50 outline-none rounded" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiYmZkZTQxOS00ZGRkLWU5NDYtOWQ2MC05OGExNGJiMTA3N2YiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDAyNDkwMkRDOTIyMTFFNkI0MzFGRTk2RjM1OTdENTciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDAyNDkwMkNDOTIyMTFFNkI0MzFGRTk2RjM1OTdENTciIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTU2NTE1NDItMmIzOC1kZjRkLTk0N2UtN2NjOTlmMjQ5ZGFjIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOmJiZmRlNDE5LTRkZGQtZTk0Ni05ZDYwLTk4YTE0YmIxMDc3ZiIv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&quot;) !important; background-repeat: no-repeat; background-size: 20px; background-position: 97% center; cursor: auto;" data-temp-mail-org="0">
          <textarea name="msg" class="px-5 py-3 bg-neutral-50 outline-none rounded" rows="4" cols="10" placeholder="Type msg..."></textarea>
          <button type="submit" class=" px-5 py-2 bg-red-600 text-white rounded">submit</button>
        </div>
        <div class="mt-10">
                        <ul class="flex lg:flex-row flex-col gap-10 text-lg">
              <li class="text-white flex items-center gap-2"><i class="bx bxl-gmail text-red-600"></i>john.doe@example.com</li>
              <li class="text-white flex items-center gap-2"><i class="bx bx-phone text-red-600"></i>+1-800-555-1234</li>
              <li class="text-white flex items-center gap-2"><i class="bx bx-current-location  text-red-600"></i>123 Tech Lane, Silicon Valley, CA 94043, USA</li>
            </ul>

          </div>
      </div>
    </section>

  <style>
    .active{
    color: rgb(218, 18, 18);
    }
  </style>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
        $roles=["admin","editor","User","Deginer","Developer"];
        var typed = new Typed("#element", {
            strings: $roles,
            typeSpeed: 80,
            backSpeed: 100,
            loop: true,
        });
    $('#sidebar-btn').click(function(){
        $('#sidebar').slideToggle();
        var sidebaricon = document.getElementById('sidebar-icon');
        if(sidebaricon.classList.contains('bx-menu')){
            sidebaricon.classList.remove('bx-menu');
            sidebaricon.classList.add('bx-x');
        }else{
            sidebaricon.classList.remove('bx-x');
            sidebaricon.classList.add('bx-menu');
        }
    });
    function opentab(evt, cityName) {

        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";

        // $('#sidebar').toggle();
    }

  </script><style data-typed-js-cursor-css="true">
        .typed-cursor{
          opacity: 1;
        }
        .typed-cursor.typed-cursor--blink{
          animation: typedjsBlink 0.7s infinite;
          -webkit-animation: typedjsBlink 0.7s infinite;
                  animation: typedjsBlink 0.7s infinite;
        }
        @keyframes typedjsBlink{
          50% { opacity: 0.0; }
        }
        @-webkit-keyframes typedjsBlink{
          0% { opacity: 1; }
          50% { opacity: 0.0; }
          100% { opacity: 1; }
        }
      </style>


</body>
</html>
