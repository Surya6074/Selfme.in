@extends('layouts.app1')
@section('title')
Data Insert Page - SelfMe
@endsection
@section('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<body class="bg-neutral-900">
<div class="bg-neutral-900 h-full w-full">
    <div class="lg:p-10 p-5 lg:px-32 pl-10 w-full">
        <nav class="w-full flex justify-between md:h-24 h-16 mt-4 bg-emerald-300 rounded-3xl">
           <div class="w-1/3 relative">
                <h1 class=" rounded-full absolute md:-top-4 md:-left-4 -top-2 -left-2 flex justify-center items-center text-emerald-300 md:h-32 md:w-32 h-20 w-20 bg-white md:text-5xl text-2xl">Sm</h1>
           </div>
           <div class="md:hidden text-end flex items-center justify-end">
                <button class="md:hidden block"  onclick="OpenSlidebar()"><i class="bx bx-menu-alt-left text-white text-4xl mr-5" id="sidebaricon"></i></button>
                {{-- <i class='bx bx-menu text-neutral-900 text-3xl mr-4' id="open-sidebar-menu"></i> --}}
           </div>

            <aside class="rounded-lg text-white w-72 p-10 flex-col justify-between  fixed bg-neutral-900 top-0 left-0 bottom-0 z-50 hidden" id="mobileviewsidebar">
                <div class="top-4 right-2 absolute ">
                    <i class='bx bx-x text-4xl ' onclick="CloseSlideBar()" id="sidebariconclose"></i>
                </div>
                <h1 class="text-start text-3xl text-emerald-300 font-semibold">SelfMe</h1>
                <ul class="mt-14 flex-1">
                    <li class="w-full h-16 my-2 relative">
                        <a href="#home" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300   rounded-lg side-menu">Home</a>
                    </li>
                    <li class="w-full h-16 my-2 relative">
                        <a href="#about" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300  rounded-lg side-menu">About</a>
                    </li>
                    <li class="w-full h-16 my-2 relative">
                        <a href="#template" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300  rounded-lg side-menu">Template</a>
                    </li>
                    <li class="w-full h-16 my-2 relative">
                        <a href="#contact" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300  rounded-lg side-menu">Contact</a>
                    </li>
                </ul>
                <div class=" p-4">
                    <a href="/login" class="w-full px-5 py-2 bg-white text-xl text-emerald-300 font-semibold rounded-lg">Login</a>
                </div>
            </aside>
           <div class="md:block hidden flex-1 h-full ">
               <ul class="flex h-full items-center justify-around">
                   <li><a href="#home" class="text-xl font-semibold">Home</a></li>
                   <li><a href="#about" class="text-xl font-semibold">About</a></li>
                   <li><a href="#template" class="text-xl font-semibold">Templates</a></li>
                   <li><a href="#contact" class="text-xl font-semibold">Contact</a></li>
                   <li><a href="/login" class="px-5 py-2 bg-white text-xl text-emerald-300 font-semibold rounded-lg">Login</a></li>
               </ul>
           </div>
        </nav>
    </div>
     <div class="md:h-[100vh] h-full md:pt-14 pt-10 w-full flex lg:flex-row flex-col" id="home">
        <div class="lg:w-1/2 lg:pl-32 md:pl-14 pl-8 pr-3  pb-32 w-full h-full flex justify-center items-start pt-24"  data-aos="fade-right"  data-aos-duration="2000">
            <div class="flex flex-col justify-center ">
                <h1 class="lg:text-8xl md:text-8xl text-6xl text-white font-semibold">Make Your Own</h1>
                <h1 class="md:text-8xl text-7xl mb-4 text-emerald-300 font-bold mt-4">Portfolio<span class="text-white">.</span></h1>
                <p class="text-white text-start text-sm"> Make our own portfolio.Host it Free,Change your Life-Style,Thank us later.
                Follow us for more greaful updates...</p>
                <div class="mt-10 flex">
                    <div class=" bg-neutral-100 lg:w-2/4 w-5/6 px-4 py-2 rounded-xl flex items-center border-4 border-emerald-300" id="username-inp">
                        <span class=" text-xl text-neutral-600">https://selfme.in/</span><input type="text" name="username" id="username" class=" bg-transparent h-full w-full py-2 pr-2 outline-none">
                    </div>
                    {{-- <button class="px-5 py-2 ml-2 bg-emerald-300 text-neutral-900 rounded-lg">Check</button> --}}
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 w-full h-[600px] lg:flex hidden items-center justify-center md:pl-20" data-aos="fade-left"  data-aos-duration="2000">
            <div class=" w-80 h-[500px] bg-emerald-300 rounded-xl  relative">
                <div class=" absolute flex justify-center items-center -top-5 -right-5 w-80 h-full bg-white rounded-xl">
                    <p class="text-5xl font-semibold text-emerald-300 text-center">Showcase <br> Your skill <br><br><br> <span class="text-3xl text-neutral-900">PORTFOLIO</span></p>
                </div>
            </div>
        </div>
     </div>
</div>
{{-- templates --}}
<div class="bg-neutral-800 h-screen w-screen flex flex-col overflow-x-hidden items-center p-5 " id="template">
    <div class="pt-10 text-center" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
        <h1 class="md:text-6xl text-4xl font-bold tracking-wide text-white">TEMPLATES</h1>
        <h3 class="md:text-xl text-sm mb-10 text-emerald-300 mt-2">We provide Better...We are better...</h3>
    </div>
    <div class="flex-1 flex gap-10 justify-center items-center h-full w-full select-none" >
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper flex ">
              <div class="swiper-slide w-min-[350px]">
                <div class="flex flex-col w-96 min-w-[300px] h-[500px] bg-neutral-900 p-5 rounded-xl" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
                    <div class="flex justify-between">
                        <p class="text-white text-xl">design 1</p>
                        <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
                    </div>
                    <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                        <img src="" alt="" class="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                        <div class="flex justify-between mt-2">
                            <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                            <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide w-min-[350px]">
                <div class="flex flex-col w-96 min-w-[300px] h-[500px] bg-neutral-900 p-5 rounded-xl" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
                    <div class="flex justify-between">
                        <p class="text-white text-xl">design 1</p>
                        <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
                    </div>
                    <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                        <img src="" alt="" class="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                        <div class="flex justify-between mt-2">
                            <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                            <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide w-min-[350px]">
                <div class="flex flex-col w-96 min-w-[300px] h-[500px] bg-neutral-900 p-5 rounded-xl" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
                    <div class="flex justify-between">
                        <p class="text-white text-xl">design 1</p>
                        <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
                    </div>
                    <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                        <img src="" alt="" class="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                        <div class="flex justify-between mt-2">
                            <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                            <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide w-min-[350px]">
                <div class="flex flex-col w-96 min-w-[300px] h-[500px] bg-neutral-900 p-5 rounded-xl" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
                    <div class="flex justify-between">
                        <p class="text-white text-xl">design 1</p>
                        <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
                    </div>
                    <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                        <img src="" alt="" class="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                        <div class="flex justify-between mt-2">
                            <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                            <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide w-min-[350px]">
                <div class="flex flex-col w-96 min-w-[300px] h-[500px] bg-neutral-900 p-5 rounded-xl" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
                    <div class="flex justify-between">
                        <p class="text-white text-xl">design 1</p>
                        <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
                    </div>
                    <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                        <img src="" alt="" class="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                        <div class="flex justify-between mt-2">
                            <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                            <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="swiper-slide w-min-[350px]">
                <div class="flex flex-col w-96 min-w-[300px] h-[500px] bg-neutral-900 p-5 rounded-xl" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
                    <div class="flex justify-between">
                        <p class="text-white text-xl">design 1</p>
                        <a href="" class="bg-neutral-800 text-emerald-300 px-3 py-1 rounded-lg">View</a>
                    </div>
                    <div class="flex-1 my-2 bg-slate-400 rounded-xl">
                        <img src="" alt="" class="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-white text-md mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, similique. Nobis, modi accusamus et voluptatibus.</p>
                        <div class="flex justify-between mt-2">
                            <div class="h-10 w-10 flex justify-center items-center rounded-full text-white bg-emerald-300">sm</div>
                            <div class="w-24 py-1 bg-emerald-300 text-neutral-900 text-center rounded-xl">Use</div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

    </div>
</div>
{{-- Abouts --}}
<div class="bg-neutral-900 h-full w-full flex flex-col items-center md:p-10 p-4" id="about">
    <div class="pt-10 text-center" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
        <h1 class="md:text-6xl text-4xl  font-bold tracking-wide text-white">About Us</h1>
        <h3 class="md:text-xl text-sm  text-emerald-300 mt-2">We Care About How The World Works</h3>
    </div>
    <div class="flex-1 h-full w-full mt-10 lg:px-20 px-8 flex lg:flex-row flex-col justify-center items-center">
        <img src="{{asset('public/assets/icons/about.png')}}" class="lg:w-2/4  w-[400px] h-[500px] rounded-3xl mb-10 bg-slate-200 " alt="" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="flex-1 flex flex-col lg:pl-20 p-0 text-start" data-aos="fade-left"  data-aos-offset="300" data-aos-duration="500">
            <p class="lg:text-lg text-sm mb-10 text-start text-white" ><span class="text-emerald-300 text-3xl"> W</span>elcome to selfMe, where creativity meets accessibility. We believe everyone
                        deserves a platform to showcase their talents and passions, which is why we provide a free and
                        intuitive solution for building and hosting your portfolio. Whether you're an artist,designer,
                        photographer, writer, or any creative soul, SelfMe empowers you to curate a personalized
                        portfolio that
                        that truly reflects who you are... <br><br>
                        <span class="text-emerald-300  text-3xl"> O</span>ur user-frendly interface and customizable templates make the process seamless,
                        allowing you to focus on what matters
                        most-your work. Join our community of creators today and let your portfolio shine with selfMe.</p>
            <div class="w-full">
                <a href="" class="text-emerald-300 border-2 px-6 py-3 rounded-2xl w-48 border-emerald-300 text-2xl mb-10">Contact Us</a>
            </div>
        </div>
    </div>
</div>
{{-- choose Us --}}
<div class="bg-neutral-900  h-full w-full pb-20 flex flex-col lg:mt-0 mt-10 items-center md:p-10 p-4">
    <div class="pt-10 text-center flex justify-center flex-col items-center" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
        <h1 class="md:text-6xl text-4xl font-bold tracking-wide text-white">Why You Choose Us</h1>
        <h3 class="md:text-xl text-sm  w-full text-emerald-300 mt-3">We're More Than A platform - We're Your Partner In <br> Showcasing Your Unique Talent To The World.</h3>
    </div>
    <div class="flex-1 h-full w-full mt-10 lg:gap-10 lg:px-20 pb-20 px-8 flex lg:flex-row flex-col justify-center items-center">
        <div class="">
            <div class="bg-white mt-10 relative rounded-lg lg:px-10 lg:py-5 p-5" data-aos="fade-up"data-aos-anchor-placement="bottom-bottom">
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center"><img src="{{asset('public/assets/icons/customize.png')}}" class=" w-9 h-9" alt=""></div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">Customizable Templates </h1>
                    <p class="text-md text-neutral-900">Unlock your unique style with SelfMe's customizable templates-tailor your portfolio to reflect your personality and vision effortlessly.</p>
                </div>
            </div>
            <div class="bg-white mt-10 relative rounded-lg lg:px-10 lg:py-5 p-5" data-aos="fade-up"data-aos-anchor-placement="bottom-bottom">
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center"><img src="{{asset('public/assets/icons/host.png')}}" class=" w-12 h-12" alt=""></div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">Seamless Hosting </h1>
                    <p class="text-md text-neutral-900">Experience seamless hosting with SelfME-reliable, hassle-free, and always there to showcase hour portfolio to the world.</p>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-white mt-10 relative rounded-lg  lg:px-10 lg:py-5 p-5 " data-aos="fade-up"data-aos-anchor-placement="bottom-bottom">
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center"><img src="{{asset('public/assets/icons/247.png')}}" class=" w-12 h-12" alt=""></div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">24/7 Support</h1>
                    <p class="text-md text-neutral-900">SelfMe offers 24/7 supports, ensuring assistance whenever you need it. Your creativity never waits, and neither do we.</p>
                </div>
            </div>
            <div class="bg-white mt-10 relative rounded-lg  lg:px-10 lg:py-5 p-5" data-aos="fade-up"data-aos-anchor-placement="bottom-bottom">
                <div class=" absolute shadow-lg -top-8 left-3 h-16 w-16 bg-white rounded-full flex justify-center items-center"><img src="{{asset('public/assets/icons/infinity.png')}}" class=" w-12 h-12" alt=""></div>
                <div class="pt-5">
                    <h1 class="text-emerald-300 text-xl font-bold mb-3">No Limitations </h1>
                    <p class="text-md text-neutral-900">SelfMe liberates your creativity with no boundaries-Embrace your full potential without any restriction,only on SelfMe.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- contact Us --}}
<div class="bg-neutral-800 h-full w-full pb-20 flex flex-col lg:mt-0 mt-10 items-center md:p-10 p-4" id="contact">
    <div class="text-center flex justify-center flex-col items-center lg:mt-0 pt-10" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
        <h1 class="md:text-6xl text-4xl font-bold tracking-wide text-white">Contact Us</h1>
        <h3 class="md:text-md text-sm w-full text-emerald-300 mt-3">Join us and get in touch for inquiries, support, or feedback.</h3>
    </div>
    <div class="flex-1 h-full w-full mt-10 lg:gap-10 lg:px-20 pb-20 px-8 flex lg:flex-row flex-col justify-center items-center">
        <form action="" class="lg:w-1/2 w-full flex flex-col lg:mt-0 mt-10" data-aos="fade-up"data-aos-anchor-placement="center-bottom">
            <h1 class="text-3xl text-white">For inquiry</h1>
            <input type="text" class="px-5 py-3 mt-5 bg-neutral-900 rounded-lg text-white outline-none" placeholder="Enter a Name" >
            <input type="text" class="px-5 py-3 mt-5 bg-neutral-900 rounded-lg text-white outline-none" placeholder="Enter a Email">
            <textarea name="" class="px-5 py-3 mt-5 bg-neutral-900 rounded-lg text-white outline-none"  placeholder="Message..." cols="30" rows="10"></textarea>
            <div class="flex justify-between mt-8">
                <ul class="flex">
                    <li><a href="" class="text-3xl text-white ml-2"><i class='bx bxl-instagram' ></i></a></li>
                    <li><a href="" class="text-3xl text-white hover:text-emerald-300  ml-2"><i class='bx bxl-facebook' ></i></a></li>
                    <li><a href="" class="text-3xl text-white hover:text-emerald-300  ml-2"><i class='bx bxl-twitter' ></i></li>
                    <li><a href="" class="text-3xl text-white hover:text-emerald-300 "><i class='bx bxl-discord-alt' ></i></a></li>
                </ul>
                <button class="bg-emerald-300 py-4 w-1/4 rounded-xl text-neutral-900">Submit</button>
            </div>
        </form>
    </div>
</div>
{{--  Footer --}}
<div class="bg-neutral-900 h-64 w-full  flex flex-col gap-20 lg:flex-row  justify-around lg:mt-0 mt-10 items-center md:p-10 p-4">
    <div class="flex flex-col items-center justify-center" data-aos="fade-right"data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
        <h4 class="h-16 w-16 flex justify-center items-center rounded-full text-white bg-emerald-300">Sm</h4>
        <p class="text-white">Get in Touch</p>
    </div>
    <div class="text-white"  data-aos="fade-up"data-aos-anchor-placement="center-bottom">
        <div class="flex justify-center items-center flex-col">
            <h4 class="text-xl font-semibold mb-2">Sitemap</h4>
            <ul class="flex">
                <li class="px-5  hover:text-emerald-300 border-r-2 border-neutral-200"><a href="#home">Home</a></li>
                <li class="px-5  hover:text-emerald-300 border-r-2 border-neutral-200"><a href="#template">Template</a></li>
                <li class="px-5  hover:text-emerald-300 border-r-2 border-neutral-200"><a href="#about">About</a></li>
                <li class="px-5 "><a href="contact">Contact</a></li>
            </ul>
        </div>
        <p class="mt-4 text-center"><i class='bx bx-copyright' style='color:#ffffff' ></i>Coyrights are belong to <span class="text-emerald-300">Aplinix</span></p>
    </div>
    <div class="text-white">
        <div class="flex flex-col" data-aos="fade-left"data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
            <ul class="flex lg:flex-col flex-row">
                <li class="px-5 hover:text-emerald-300"><a href="">Privacy and policy</a></li>
                <li class="px-5 hover:text-emerald-300"><a href="">Terms and conditions</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
<style>
    html {
        scroll-behavior: smooth;
    }
    body{
        overflow-y: scroll;
        height: 100%;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
      AOS.init();
      var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    $('#username').on('keyup',function(){
        var data={
            name:$('#username').val(),
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // console.log(data);
        $.ajax({
            url:'/username',
            method:'POST',
            data:data,
            success:function(res){
                var inp = document.getElementById('username-inp');
                if(res.data==1){
                    inp.classList.remove("border-emerald-300");
                    inp.classList.add("border-red-500");
                }else{
                    inp.classList.remove("border-red-500");
                    inp.classList.add("border-emerald-300");
                }
            }
        });
    });

        function CloseSlideBar(){
        $('#mobileviewsidebar').toggle('hidden');
    }
    function OpenSlidebar(){
        $('#mobileviewsidebar').toggle('hidden');
    }
</script>
<style>
    body{
        width: 100vw;
        overflow-x: hidden;
    }
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
@endsection
