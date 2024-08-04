<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Red Warming - portfolio</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- icons link -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
       @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        @foreach ($homepages as $hp)
        <div class="flex lg:flex-row-reverse lg:mt-24 flex-col items-center">
            <div class="lg:w-1/2 pt-5 w-5/6 h-3/4 flex justify-center items-center pb-10 ">
                <img class="img-responsive" src="{{asset('selfme_assets/users_img/'.$hp->hp_img)}}" class="h-96" alt="" />
            </div>
            <div class="lg:w-1/2 lg:pl-56 flex flex-col text-center pb-10 lg:items-start px-5 gap-5">
                <div class="lg:text-8xl text-6xl w-full text-white">
                <p>{{$hp->hp_name}}</p>
                </div>
                <div class="lg:text-6xl text-4xl">
                <p class="text-white">I'am <span class="text-red-600" id="element"></span></p>
                </div>
                <div class="lg:text-xl text-md lg:text-start text-center text-neutral-300">
                <p>{{$hp->hp_desc}}</p>
                </div>
                <div class="flex text-3xl gap-6 lg:justify-start justify-center">
                    @foreach ($links as $link)
                        <a class="link" class="text-red-600" href="{{$link->link}}">
                            @if ($link->link_name=='Instagram')
                                <i class="bx bxl-instagram text-red-600"></i>
                            @elseif ($link->link_name=='Github')
                                <i class='bx bxl-github text-red-600'></i>
                            @elseif ($link->link_name=='Facebook')
                                <i class='bx bxl-facebook-circle text-red-600' ></i>
                            @elseif ($link->link_name=='Twitter')
                                <i class='bx bxl-twitter text-red-600' ></i>
                            @elseif ($link->link_name=='Discord')
                                <i class='bx bxl-discord-alt text-red-600' ></i>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <section class=" h-full w-full lg:pb-5 pb-20 flex flex-col lg:px-44 px-10 items-center hidden tabcontent" id="about">
        @foreach ($aboutpages as $ap)
        <div class="flex flex-col justify-center items-center pt-20 py-10">
            <h1 class="text-4xl text-red-600">About Me</h1>
            <p class="text-lg text-center mt-5 text-neutral-300">{{$ap->ap_desc}}</p>
            <a href="{{asset('selfme_assets/users_resume/'.$ap->ap_resume)}}" download class="mt-10 px-5 py-2 bg-red-600 text-white rounded">Download CV</a>
        </div>
        @endforeach
      <div class="flex flex-col justify-center mt-10 items-center">
        <div class="about-skills-head">
          <h1 class="text-4xl text-red-600 my-4">Skills</h1>
        </div>
        <div class="flex lg:flex-row flex-col lg:gap-40 gap-3 mt-10">
          <div class="flex flex-col gap-3">
            @for ($si=0;$si<($skillscount/2);$si++)
            <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">{{$skills[$si]->skill_name}}</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: {{$skills[$si]->skill_percentage}}%;"></div>
                </div>
            </div>
            @endfor
          </div>
          <div class="flex flex-col gap-3">
             @for ($sj=$si;$sj<$skillscount;$sj++)
            <div class="flex items-center gap-5">
                <p class="text-white w-32 text-lg">{{$skills[$sj]->skill_name}}</p>
                <div class="w-56 h-2 rounded-full bg-white">
                    <div class="h-full bg-red-600 rounded-full" style="width: {{$skills[$sj]->skill_percentage}}%;"></div>
                </div>
            </div>
            @endfor
          </div>
        </div>
      </div>
    </section>
    <section class=" h-full w-full lg:pb-5 pb-20 flex flex-col lg:px-44 px-5 items-center hidden tabcontent"  id="ownpage">
      <div class="h-full w-full flex items-center flex-col w-full">
        <div class="mt-20">
          <h1 class="text-red-600 text-4xl">{{$ownpages[0]->op_name}}</h1>
        </div>
        <div class="flex flex-col w-full items-center mt-10">
            @php
                $opkey=1;
            @endphp
            @foreach ($ownpages as $op)
                <div class="bg-red-600 px-5 py-10 w-3/4 rounded-lg flex lg:flex-row flex-col my-10">
                    <h1 class="text-8xl lg:w-72 w-full flex justify-center items-center text-white lg:border-r-2 lg:border-b-0 border-b-2 border-r-0 pb-5 border-white">{{$opkey}}</h1>
                    <div class="flex flex-col gap-3 lg:pl-10 pl-2 pt-5">
                    <h2 class="text-4xl text-white">{{$op->w_title1}}</h2>
                    <h2 class="text-2xl text-neutral-300">{{$op->w_title2}}</h2>
                    <p class="text-white">{{$op->w_desc}}</p>
                    </div>
                </div>
                @php
                    $opkey++;
                @endphp
            @endforeach
        </div>
      </div>
    </section>
    <section class=" h-full w-full lg:pb-5 pb-20 flex flex-col lg:px-44 px-10 justify-center items-center hidden tabcontent" id="contact">
        <div class="mt-20 w-full text-center">
           <h1 class="text-red-600 text-4xl">Contact Me</h1>
        </div>
      <div class=" w-full flex justify-center  items-center flex-col">
        <div class="flex flex-col gap-5 mt-10 lg:w-2/4 w-full">
          <input type="text" class="px-5 py-3 bg-neutral-50 outline-none rounded" placeholder="Enter a Name" />
          <input type="email" placeholder="Enter a Email" class="px-5 py-3 bg-neutral-50 outline-none rounded"/>
          <textarea
            name="msg"
            class="px-5 py-3 bg-neutral-50 outline-none rounded"
            rows="4"
            cols="10"
            placeholder="Type msg..."
          ></textarea>
          <button type="submit" class=" px-5 py-2 bg-red-600 text-white rounded">submit</button>
        </div>
        <div class="mt-10">
            @foreach ($contactpages as $cp)
            <ul class="flex lg:flex-row flex-col gap-10 text-lg">
              <li class="text-white flex items-center gap-2"><i class="bx bxl-gmail text-red-600"></i>{{$cp->cp_email}}</li>
              <li class="text-white flex items-center gap-2"><i class="bx bx-phone text-red-600"></i>{{$cp->cp_phoneno}}</li>
              <li class="text-white flex items-center gap-2"><i class="bx bx-current-location  text-red-600"></i>{{$cp->cp_address}}</li>
            </ul>
            @endforeach

          </div>
      </div>
    </section>
  </body>
  <style>
    .active{
    color: rgb(218, 18, 18);
    }
  </style>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
    @php
    $array=explode(',',$hp->hp_roles);
    @endphp
    $roles={!!json_encode($array)!!};
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

  </script>
</html>

