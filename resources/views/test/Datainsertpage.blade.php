@extends('layouts.app')
@section('content')

<body class="flex">
    <aside class="rounded-lg text-white w-72 p-5 md:flex hidden flex-col justify-between m-4">
        <h1 class="text-start text-3xl text-emerald-300 font-semibold">SUrya</h1>
        <ul class="mt-14 flex-1">
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 text-emerald-300 active rounded-lg side-menu"><i class="fa-solid fa-house-fire w-1/4 "></i>Home</a>
            </li>
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 rounded-lg side-menu"><i class="fa-solid fa-cube w-1/4"></i>Design</a>
            </li>
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 rounded-lg side-menu"><i class="fa-solid fa-database w-1/4"></i>Datas</a>
            </li>
            <li class="w-full h-16 my-2 relative">
                <a href="" class="w-full flex items-center text-xl px-4 py-4 hover:text-emerald-300 rounded-lg side-menu"><i class="fa-solid fa-wand-magic-sparkles w-1/4"></i></i>New</a>
            </li>
        </ul>
        <div class=" p-4">
            <a href="" class="w-full flex items-center justify-center text-xl px-4 py-4 bg-neutral-900 rounded-lg text-emerald-300">Logout<i class="fa-solid fa-arrow-right-from-bracket ml-5"></i></a>
        </div>
    </aside>
    <section class="w-full min-h-min md:ml-80 overflow-y-scroll p-4">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
            <div class="flex">
                <button class="md:hidden block"><i class="fa-solid fa-bars text-white text-2xl mr-3"></i></button>
                <h1 class="text-xl text-white">Home</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <h1 class="text-3xl ">S</h1>
            </div>
        </div>
        <div class="h-full w-full bg-neutral-900 p-3 mt-7 rounded-xl">
            <div class="h-20 flex justify-center items-center mt-10 text-white">
                <button class="flex mx-5 items-center justify-center flex-col text-emerald-300 tablinks" onclick="openCity(event, 'Home')">
                    <i class="fa-solid fa-house text-xl mb-1"></i>
                    <h1 class="text-sm">Home</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks"  onclick="openCity(event, 'About',this)">
                    <i class="fa-regular fa-address-card text-xl mb-1"></i>
                    <h1 class="text-sm">About Me</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" onclick="openCity(event, 'Ownpage',this)">
                    <i class="fa-solid fa-pager text-xl mb-1"></i>
                    <h1 class="text-sm">Exp</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" onclick="openCity(event, 'Contact',this)">
                    <i class="fa-solid fa-id-badge text-xl mb-1"></i>
                    <h1 class="text-sm">Contact</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" onclick="openCity(event, 'Home',this)">
                    <i class="fa-solid fa-wifi text-xl mb-1"></i>
                    <h1 class="text-sm">temaplate</h1>
                </button>
            </div>
            <div class="tabcontent" id="About">
                <div class="w-full flex">
                    <div class="w-1/2">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Name</label>
                            <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Role</label>
                            <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Role">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Choose a Resume<span class="text-netural-600 text-sm">(.pdf)</span></label>
                            <input type="file" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Resume.pdf">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a About you</label>
                            <textarea rows="12" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details"></textarea>
                        </div>

                    </div>
                    <div class="w-1/2" id="skills">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Skills</label>
                            <div class="" id="Role-input">
                                <div class="flex w-full my-2">
                                    <input type="text" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Skill">
                                    <input type="number" class="ml-2 w-24 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="100%">
                                    <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details" onclick="addskill(this)">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details">Next</button>
                </div>
            </div>
            <div class="tabcontent" id="Home">
                <div class="w-full flex">
                    <div class="w-1/2">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Name</label>
                            <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>

                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a About you</label>
                            <textarea class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details"></textarea>
                        </div>
                        <div class="flex flex-col w-full m-5 pr-10">
                            <label class="text-emerald-300">Links</label>
                            <div class="w-full" id="links">
                                <div class="flex w-full my-3">
                                    <select name="logo" id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram" selected>Instagram</option>
                                        <option value="Github">Github</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                                <div class="flex w-full my-3">
                                    <select name="logo" id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram">Instagram</option>
                                        <option value="Github" selected>Github</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                                <div class="flex w-full my-3">
                                    <select name="logo" id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram">Instagram</option>
                                        <option value="Github">Github</option>
                                        <option value="Facebook" selected>Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                                <div class="flex w-full my-3">
                                    <select name="logo" id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram">Instagram</option>
                                        <option value="Github">Github</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter" selected>Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Choose a Image <span class="text-netural-600 text-sm">(.png)</span></label>
                            <input type="file" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Roles</label>
                            <div class="" id="Role-input">
                                <div class="flex w-full my-2">
                                    <input type="text" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Role..">
                                    <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details" onclick="addRole(this)">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details">Next</button>
                </div>
            </div>
            <div class="tabcontent" id="Ownpage">
                <div class="w-full flex flex-col">
                    <div class="flex flex-col m-5">
                        <label class="text-emerald-300">Enter a Page Name</label>
                        <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: Experience,projects">
                    </div>
                    <div class="mx-4 " id="Role-input">
                        <div class="flex flex-col w-full my-1">
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a primary title</label>
                                <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 1">
                            </div>
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a secondary title</label>
                                <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 2 ,year">
                            </div>
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a desc</label>
                                <textarea class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="description"></textarea>
                            </div>
                            <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details" onclick="addexp(this)">Add</button>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details">Next</button>
                    </div>
                </div>
            </div>
            <div class="tabcontent" id="Contact">
                    <div class="w-full flex flex-col">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Name</label>
                            <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Phone number</label>
                            <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Phono no">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Email Address</label>
                            <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Email Address">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Address</label>
                            <textarea rows="4" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    function addRole(e){
    if(e.parentNode.parentNode.children.length<5){
        e.parentNode.parentNode.innerHTML+=`<div class="flex w-full my-2">
                <input type="text" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Role..">
                <button class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                </div>`;
        }
    }
    function RemoveRole(e){
        e.parentNode.remove();
    }
    function addexp(e){
        if(e.parentNode.parentNode.children.length<3){
            e.parentNode.parentNode.innerHTML+=`<div class="flex flex-col w-full my-2">
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a primary title</label>
                                <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 1">
                            </div>
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a secondary title</label>
                                <input type="text" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 2 ,year">
                            </div>
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a desc</label>
                                <textarea class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="description"></textarea>
                            </div>
                <button class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                </div>`;
        }
    }
    function addskill(e){
        if(e.parentNode.parentNode.children.length<10){
            e.parentNode.parentNode.innerHTML+=`<div class="flex w-full my-2">
                <input type="text" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Skill">
                <input type="number" class="ml-2 w-24 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="100%">
                <button class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                </div>`;
        }
    }
    function openCity(evt, cityName,e,index) {
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
        console.log(e.classList.add('text-emerald-300'));
        // var length=e.parentNode.children.length;
        // for(var j=0;j<index;j++){
        //     e.parentNode.children[j].classList.add('text-emerald-300')
        // }
    }
</script>
<style>
    body{
        width: 100vw;

        background-color: #050406;
    }
    section{
        overflow-x: scroll;
    }
    aside{
        height: 100vh;
        position: fixed;
    }
    ::-webkit-scrollbar {
        width: 5px;
    }
    .tabcontent{
        display: none;
    }
    #Home{
        display: block;
    }
    input[type=radio] {
        accent-color: aquamarine;
        height: 20px;
        width: 20px;
    }
    input[type=checkbox] {
        accent-color: aquamarine;
        height: 20px;
        width: 20px;
    }
    /* Track
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    } */

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #555;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: aquamarine;
    }

    .side-menu:hover::after {
        content: "";
        position: absolute;
        left: 0;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        background-color: aquamarine;
    }

    .active::after {
        content: "";
        position: absolute;
        left: 0;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        background-color: aquamarine;
    }

    </style>
@endsection
