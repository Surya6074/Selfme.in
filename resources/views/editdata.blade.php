@extends('layouts.app1')
@section('title')
Data Insert Page - SelfMe
@endsection
@section('content')
<body class="flex">
    @if($errors->any())
        <p>{{$errors    }}</p>
    @endif
    @include('components.sidebar')
    <section class="w-full min-h-min  overflow-y-scroll p-4">
        <div class="flex justify-between items-center px-5 py-3 bg-neutral-900 rounded-xl">
           <div class="flex itemes-center">
                <button class="md:hidden block"  onclick="OpenSlidebar()"><i class="bx bx-menu-alt-left text-white text-4xl mr-5" id="sidebaricon"></i></button>
                <h1 class="text-xl text-white">Data Update</h1>
            </div>
            <div class="h-14 rounded-full flex justify-center items-center w-14 bg-white cursor-pointer">
                <h1 class="text-3xl ">S</h1>
            </div>
        </div>
        <div class="w-full bg-neutral-900 p-3 mt-7 rounded-xl">
            <div class="h-20 flex justify-center items-center mt-10 text-white">
                <button class="flex mx-5 items-center justify-center flex-col text-emerald-300 tablinks" > {{--onclick="openCity(event, 'Home')"--}}
                    <i class="fa-solid fa-house text-xl mb-1"></i>
                    <h1 class="text-sm">Home</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" id="Aboutbtn">
                    <i class="fa-regular fa-address-card text-xl mb-1"></i>
                    <h1 class="text-sm">About Me</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" id="Ownpagebtn">
                    <i class="fa-solid fa-pager text-xl mb-1"></i>
                    <h1 class="text-sm">Exp</h1>
                </button>
                <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" id="Contactbtn">
                    <i class="fa-solid fa-id-badge text-xl mb-1"></i>
                    <h1 class="text-sm">Contact</h1>
                </button>
                {{-- <span class="h-1 bg-emerald-300 w-32 rounded-xl"></span>
                <button class="flex mx-5 items-center justify-center flex-col tablinks" onclick="openCity(event, 'Home',this)">
                    <i class="fa-solid fa-wifi text-xl mb-1"></i>
                    <h1 class="text-sm">temaplate</h1>
                </button> --}}
            </div>
        <form action="{{route('updatedata')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="selfme_user_id" value="1">
            <div class="tabcontent" id="About">
                <div class="w-full flex-col">
                    <div class="w-full">
                        @foreach ($aboutpages as $ap)
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Name</label>
                            <input type="text" value="{{$ap->ap_name}}" name="ap_name" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Role</label>
                            <input type="text" value="{{$ap->ap_role}}" name="ap_role" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Role">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Choose a Resume<span class="text-netural-600 text-sm">(.pdf)</span></label>
                            <input type="hidden" name="ap_resume_name" value="{{$ap->ap_resume}}">
                            <input type="file" value="{{$ap->ap_resume}}"  name="ap_resume" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Resume.pdf">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a About you</label>
                            <textarea rows="4" name="ap_desc" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">{{$ap->ap_desc}}</textarea>
                        </div>
                        @endforeach
                    </div>
                    <div class="w-full" id="skills">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Skills</label>
                            <div class="" id="Role-input">
                                @php
                                    $key=1;
                                @endphp
                                @foreach ($skills as $skill)
                                    @if ($key==1)
                                        <div class="flex w-full my-2">
                                            <input type="text" name="skill[]" value="{{$skill->skill_name}}" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Skill">
                                            <input type="number" name="percentage[]" value="{{$skill->skill_percentage}}" class="ml-2 w-24 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="100%">
                                            <button type="button" class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details" onclick="addskill(this)">Add</button>
                                        </div>
                                    @else
                                        <div class="flex w-full my-2">
                                            <input type="text"  name="skill[]" value="{{$skill->skill_name}}" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Skill">
                                            <input type="number" name="percentage[]"  value="{{$skill->skill_percentage}}" class="ml-2 w-24 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="100%">
                                            <button type="button"  class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                                        </div>
                                    @endif
                                    @php
                                        $key++;
                                    @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center mb-4">
                    <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" onclick="openCity(event, 'Home',this)" placeholder="Details">Prev</button>
                    <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" onclick="openCity(event, 'Ownpage',this)" placeholder="Details">Next</button>
                </div>
            </div>
            <div class="tabcontent" id="Home">
                <div class="w-full  flex-col">
                    @foreach ($homepages as $hp)
                    <div class="w-full">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Name</label>
                            <input type="text"  name="hp_name"  value="{{$hp->hp_name}}" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a About you</label>
                            <textarea  name="hp_desc" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">{{$hp->hp_desc}}</textarea>
                        </div>
                        <div class="flex flex-col w-full m-5 pr-10">
                            <label class="text-emerald-300">Links</label>
                            <div class="w-full" id="links">
                                @foreach ($links as $link)
                                <div class="flex w-full my-3">
                                    <select  name="linkname[]"id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram" {{($link->link_name=='Instagram')?'selected':''}}>Instagram</option>
                                        <option value="Github" {{($link->link_name=='Github')?'selected':''}}>Github</option>
                                        <option value="Facebook" {{($link->link_name=='Facebook')?'selected':''}}>Facebook</option>
                                        <option value="Twitter" {{($link->link_name=='Twitter')?'selected':''}}>Twitter</option>
                                        <option value="Discord"  {{($link->link_name=='Discord')?'selected':''}}>Discord</option>
                                    </select>
                                    <input type="url" value="{{$link->link}}" name="link[]" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                                @endforeach
                                {{-- <div class="flex w-full my-3">
                                    <select   name="linkname[]" id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram">Instagram</option>
                                        <option value="Github" selected>Github</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" name="link[]" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                                <div class="flex w-full my-3">
                                    <select  name="linkname[]" id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram">Instagram</option>
                                        <option value="Github">Github</option>
                                        <option value="Facebook" selected>Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" name="link[]" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div>
                                <div class="flex w-full my-3">
                                    <select   name="linkname[]"id="" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Details">
                                        <option value="Instagram">Instagram</option>
                                        <option value="Github">Github</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter" selected>Twitter</option>
                                        <option value="Discord">Discord</option>
                                    </select>
                                    <input type="url" name="link[]" class="ml-2 bg-neutral-950 flex-1  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Link">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Choose a Image <span class="text-netural-600 text-sm">(.png)</span></label>
                            <div class="flex">
                                <input type="hidden" name="hp_img_name" value="{{$hp->hp_img}}">
                                <img src="{{asset('assets/dbdesign.png')}}" height="50px" width="50px" class="mx-2" alt="">
                                <input type="file" name="hp_img"  class=" w-full bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                            </div>
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Roles</label>
                            <div class="" id="Role-input">
                                @php
                                    $roles=explode(',',$hp->hp_roles);
                                    $total_roles=count($roles)
                                @endphp
                                @for ($roleid=0;$roleid<$total_roles;$roleid++)
                                    @if ($roleid==0)
                                        <div class="flex w-full my-2">
                                            <input type="text" name="roles[]" value="{{$roles[$roleid]}}" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Role..">
                                            <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details" onclick="addRole(this)">Add</button>
                                        </div>
                                    @else
                                        <div class="flex w-full my-2">
                                            <input type="text" name="roles[]" value="{{$roles[$roleid]}}" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Role..">
                                            <button class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="w-full flex justify-center mb-4">
                    <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details"  onclick="openCity(event, 'About',this)">Next</button>
                </div>
            </div>
            <div class="tabcontent" id="Ownpage">
                <div class="w-full flex flex-col">
                    <div class="flex flex-col m-5">
                        <label class="text-emerald-300">Enter a Page Name</label>
                        <input type="text" name="op_name" value="{{$ownpagetitle->op_name}}" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: Experience,projects">
                    </div>
                    <div class="mx-4 " id="Role-input">
                        @php
                            $exp=0;
                        @endphp
                        @foreach ($ownpages as $op)
                            @if ($exp==0)
                                <div class="flex flex-col w-full my-1">
                                    <div class="flex flex-col m-2">
                                        <label class="text-emerald-300">Enter a primary title</label>
                                        <input type="text" name="w_title1[]" value="{{$op->w_title1}}" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 1">
                                    </div>
                                    <div class="flex flex-col m-2">
                                        <label class="text-emerald-300">Enter a secondary title</label>
                                        <input type="text" name="w_title2[]"  value="{{$op->w_title2}}" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 2 ,year">
                                    </div>
                                    <div class="flex flex-col m-2">
                                        <label class="text-emerald-300">Enter a desc</label>
                                        <textarea name="w_desc[]" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="description">{{$op->w_desc}}</textarea>
                                    </div>
                                    <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details" onclick="addexp(this)">Add</button>
                                </div>
                            @else
                                <div class="flex flex-col w-full my-2">
                                    <div class="flex flex-col m-2">
                                        <label class="text-emerald-300">Enter a primary title</label>
                                        <input type="text" name="w_title1[]" value="{{$op->w_title1}}" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 1">
                                    </div>
                                    <div class="flex flex-col m-2">
                                        <label class="text-emerald-300">Enter a secondary title</label>
                                        <input type="text" name="w_title2[]" value="{{$op->w_title2}}" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 2 ,year">
                                    </div>
                                    <div class="flex flex-col m-2">
                                        <label class="text-emerald-300">Enter a desc</label>
                                        <textarea name="w_desc[]" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="description">{{$op->w_desc}}</textarea>
                                    </div>
                                    <button type="button"  class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                                </div>
                            @endif
                            @php
                                $exp++;
                            @endphp
                        @endforeach
                    </div>
                    <div class="w-full flex justify-center mb-4">
                        <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" onclick="openCity(event, 'About',this)" placeholder="Details">Prev</button>
                        <button type="button"  class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" onclick="openCity(event, 'Contact',this)" placeholder="Details">Next</button>
                    </div>
                </div>
            </div>
            <div class="tabcontent" id="Contact">
                @foreach ($contactpages as $cp)
                    <div class="w-full flex flex-col">
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Name</label>
                            <input type="text" value="{{$cp->cp_name}}" name="cp_name" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Name">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Phone number</label>
                            <input type="text"  value="{{$cp->cp_phoneno}}"  name="cp_phone" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Phono no">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Email Address</label>
                            <input type="text"   value="{{$cp->cp_email}}" name="cp_email" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Email Address">
                        </div>
                        <div class="flex flex-col m-5">
                            <label class="text-emerald-300">Enter a Address</label>
                            <textarea rows="4"  name="cp_address" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="Address">{{$cp->cp_address}}</textarea>
                        </div>
                    </div>
                    <div class="w-full flex justify-center mb-4">
                        <button type="button" class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" onclick="openCity(event, 'Ownpage',this)" placeholder="Details">Prev</button>
                        <button class=" text-neutral-950 w-28 px-4 py-3 mx-2 rounded mt-1 bg-emerald-300 outline-none" placeholder="Details">Submit</button>
                    </div>
                @endforeach
            </div>
            </div>
        </form>
        </div>
    </section>
</body>
<script>
    function addRole(e){
    if(e.parentNode.parentNode.children.length<5){
        e.parentNode.parentNode.innerHTML+=`<div class="flex w-full my-2">
                <input type="text" name="roles[]" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Role..">
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
                                <input type="text" name="w_title1[]" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 1">
                            </div>
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a secondary title</label>
                                <input type="text" name="w_title2[]" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="eg: title 2 ,year">
                            </div>
                            <div class="flex flex-col m-2">
                                <label class="text-emerald-300">Enter a desc</label>
                                <textarea name="w_desc[]" class=" bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none" placeholder="description"></textarea>
                            </div>
                <button type="button"  class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                </div>`;
        }
    }
    function addskill(e){
        if(e.parentNode.parentNode.children.length<10){
            e.parentNode.parentNode.innerHTML+=`<div class="flex w-full my-2">
                <input type="text"  name="skill[]" class="flex-1 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="Skill">
                <input type="number" name="percentage[]" class="ml-2 w-24 bg-neutral-950  px-4 py-3 rounded mt-1 text-neutral-400 outline-none " placeholder="100%">
                <button type="button"  class=" w-28 px-4 py-3 mx-2 rounded mt-1 bg-red-500 outline-none text-white" placeholder="Details" onclick="RemoveRole(this)">Remove</button>
                </div>`;
        }
    }
    function openCity(evt, tabName,e,index) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " actives";
        document.getElementById(tabName+'btn').classList.add('text-emerald-300');
    }


    function validateForm(tabname) {
        var  i, valid = true;
        y = x[tabname].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
            }
        }
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid;
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