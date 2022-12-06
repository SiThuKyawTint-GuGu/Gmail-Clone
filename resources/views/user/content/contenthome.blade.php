@extends('user.layouts.master')
@section('body')

<header>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col">
                <div class="d-flex  align-items-center mt-2 ">
                    <div class="ms-3 me-3">
                        <button class="btn1"> <i class="fa-solid fa-bars menu-icon"></i></button>
                    </div>
                    <div class="margin-right">
                        <img src="{{asset('user/images/gmail.logo.png')}}"  alt="">
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="position-absolute ms-2">
                            <svg focusable="false" height="24px" class="icon1" viewBox="0 0 24 24" width="24px"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.49,19l-5.73-5.73C15.53,12.2,16,10.91,16,9.5C16,5.91,13.09,3,9.5,3S3,5.91,3,9.5C3,13.09,5.91,16,9.5,16 c1.41,0,2.7-0.47,3.77-1.24L19,20.49L20.49,19z M5,9.5C5,7.01,7.01,5,9.5,5S14,7.01,14,9.5S11.99,14,9.5,14S5,11.99,5,9.5z">
                                </path>
                                <path d="M0,0h24v24H0V0z" fill="none"></path>
                            </svg>
                        </div>
                        <div>
                            <input type="email" placeholder="Search mail" class="header-box ">
                        </div>
                        <div class="position-absolute" style="margin-left: 684px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon1" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="margin-left ">
                        <svg class="t7 icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                            viewBox="0 0 24 24" fill="#000000" focusable="false">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z">
                            </path>
                        </svg>
                    </div>
                    <div class="ms-4">
                        <svg class="Xy icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.85 22.25h-3.7c-.74 0-1.36-.54-1.45-1.27l-.27-1.89c-.27-.14-.53-.29-.79-.46l-1.8.72c-.7.26-1.47-.03-1.81-.65L2.2 15.53c-.35-.66-.2-1.44.36-1.88l1.53-1.19c-.01-.15-.02-.3-.02-.46 0-.15.01-.31.02-.46l-1.52-1.19c-.59-.45-.74-1.26-.37-1.88l1.85-3.19c.34-.62 1.11-.9 1.79-.63l1.81.73c.26-.17.52-.32.78-.46l.27-1.91c.09-.7.71-1.25 1.44-1.25h3.7c.74 0 1.36.54 1.45 1.27l.27 1.89c.27.14.53.29.79.46l1.8-.72c.71-.26 1.48.03 1.82.65l1.84 3.18c.36.66.2 1.44-.36 1.88l-1.52 1.19c.01.15.02.3.02.46s-.01.31-.02.46l1.52 1.19c.56.45.72 1.23.37 1.86l-1.86 3.22c-.34.62-1.11.9-1.8.63l-1.8-.72c-.26.17-.52.32-.78.46l-.27 1.91c-.1.68-.72 1.22-1.46 1.22zm-3.23-2h2.76l.37-2.55.53-.22c.44-.18.88-.44 1.34-.78l.45-.34 2.38.96 1.38-2.4-2.03-1.58.07-.56c.03-.26.06-.51.06-.78s-.03-.53-.06-.78l-.07-.56 2.03-1.58-1.39-2.4-2.39.96-.45-.35c-.42-.32-.87-.58-1.33-.77l-.52-.22-.37-2.55h-2.76l-.37 2.55-.53.21c-.44.19-.88.44-1.34.79l-.45.33-2.38-.95-1.39 2.39 2.03 1.58-.07.56a7 7 0 0 0-.06.79c0 .26.02.53.06.78l.07.56-2.03 1.58 1.38 2.4 2.39-.96.45.35c.43.33.86.58 1.33.77l.53.22.38 2.55z">
                            </path>
                            <circle cx="12" cy="12" r="3.5"></circle>
                        </svg>
                    </div>
                    <div class="ms-3">
                        <svg class="gb_Ue icon" focusable="false" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                            </path>
                        </svg>
                    </div>
                    <div class="ms-4" id="btn-show">
                        @if (Auth::user()->image == null)
                        <img src="{{asset('img/default_user.png')}}" class="image-box"  alt="">
                        @else
                        <img src="{{asset('storage/'.Auth::user()->image)}}" class="image-header" alt="">
                        @endif
                        </div>
                    </div>

                    <div class="account-dropdown js-dropdown" id="box-toggle" style="z-index: 3">
                        <div class="info clearfix">
                            <div class="image">
                                @if(Auth::user()->image ==null)
                                <img src="{{asset('img/default_user.png')}}"  class="rounded-pill" style="width:50px;" class="rounded-pill" alt="">
                                @else                            
                                <img src="{{asset('storage/'.Auth::user()->image)}}" class="rounded-pill" style="width:50px;height:50px;" alt="John Doe" />
                                @endif
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="{{route('account#view')}}" class="text-decoration-none">{{Auth::user()->name}}</a>
                                </h5>
                                <span class="email">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div class="account-dropdown__footer ms-1">
                            <div class="account-dropdown__item">
                                <a href="{{route('account#view')}}">
                                    <i class="fa-solid fa-user"></i>Profile</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="{{route('password#change')}}">
                                <i class="fa-sharp fa-solid fa-key"></i>Change Password</a>
                        </div>
                        <div class="account-dropdown__footer">
                           <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-dark text-white w-75 d-block mx-auto my-3">
                            <i class="zmdi zmdi-power me-3"></i>Logout</a>
                        </button>
                        </form>

                        </div>
                    </div>


                </div>
            </div>


            <hr class="mt-2 mb-0" style="color:rgba(52, 51, 51,0.36);">

          <div class="d-flex">
            <div style="width:16%;">
               <button class="border-0 bg-white" id="liveToastBtn" type="button">
                <div class="d-flex align-items-center mt-3  rounded-pill box1" id="click">
                    <img src="{{asset('user/images/plus.png')}}" class="ms-3" alt="">
                    <h6 class="fontsizeone mt-2">Compose</h6>
                </div>
               </button>
               <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>

                <div class="mt-3  position-relative overflow-scroll" style="height: 172px;" id="box">

                    <div class="d-flex align-items-center box12 ">
                        <img src="{{asset('user/images/primary red.png')}}" class="ms-3 opacity-100" alt="">
                        <h6 class="fontsizetwo fontcolor">Inbox</h6>
                        <span class="d-block ms-auto fontsizethree me-4 fontcolor fw-bold">162</span>

                    </div>

                    <div class="d-flex align-items-center box3">
                        <img src="{{asset('user/images/star.png')}}" class="ms-3 opacity-50" alt="">
                        <h6 class="fontsizetwo">Starred</h6>
                    </div>

                    <div class="d-flex align-items-center box3">
                        <img src="{{asset('user/images/snoozed.png')}}" class="ms-3 opacity-50" alt="">
                        <h6 class="fontsizetwo">Snoozed</h6>
                    </div>

                    <div class="d-flex align-items-center box3">
                        <img src="{{asset('user/images/sent.png')}}" class="ms-3 opacity-50" alt="">
                        <h6 class="fontsizetwo">Sent</h6>
                    </div>

                    <div class="d-flex align-items-center box3">
                        <img src="{{asset('user/images/drafts.png')}}" class="ms-3 opacity-50" alt="">
                        <h6 class="fontsizetwo">Drafts</h6>
                        <span class="d-block ms-auto fontsizethree me-4">7</span>
                    </div>

                    <div class="box3 box4" id="btn">
                        <div id="btnone">
                            <img src="{{asset('user/images/down-arrow.png')}}" class="ms-3 opacity-50" alt="">
                            <h6 class="d-inline-block fontsizetwo1 hover">More</h6>

                        </div>
                        <div class="hide" id="content">

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/important.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Important</h6>
                            </div>

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/chats.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Chats</h6>
                            </div>

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/scheduled.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Scheduled</h6>
                            </div>

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/All Mail.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">All Mail</h6>
                            </div>

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/span.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Spam</h6>
                            </div>

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/trash.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Trash</h6>
                            </div>

                            <div id="btntwo">
                                <img src="{{asset('user/images/leftside-arrow.png')}}" class="opacity-50" alt="">
                                <img src="{{asset('user/images/categories.png')}}" class="d-inline-block opacity-50 " alt="">
                                <h6 class="d-inline-block fontsizefour">Categories</h6>

                                <div id="categories">

                                    <div class="d-flex align-items-center box3 ">
                                        <img src="{{asset('user/images/socail.png')}}" class="ms-5 opacity-50" alt="">
                                        <h6 class="fontsizetwo">Social</h6>
                                    </div>

                                    <div class="d-flex align-items-center box3">
                                        <img src="{{asset('user/images/updates.png')}}" class="ms-5 opacity-50" alt="">
                                        <h6 class="fontsizetwo">Updates</h6>
                                    </div>

                                    <div class="d-flex align-items-center box3">
                                        <img src="{{asset('user/images/forums.png')}}" class="ms-5 opacity-50" alt="">
                                        <h6 class="fontsizetwo">Forums</h6>
                                    </div>

                                    <div class="d-flex align-items-center box3">
                                        <img src="{{asset('user/images/promotions.png')}}" class="ms-5 opacity-50" alt="">
                                        <h6 class="fontsizetwo">Promotions</h6>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex align-items-center box3">
                                <img src="{{asset('user/images/manage labels.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Manage Labels</h6>
                            </div>

                            <div class="d-flex align-items-center">
                                <img src="{{asset('user/images/creat new label.png')}}" class="ms-3 opacity-50" alt="">
                                <h6 class="fontsizetwo">Creat New Label</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-0 mb-0" style="color:rgb(110 104 104 / 67%);">

                <div>
                    <div class="mt-3 mb-0">
                        <h6 class="fontsizefive">Meet</h6>
                    </div>

                    <div>

                        <div class="d-flex align-items-center box3">
                            <img src="{{asset('user/images/new meeting.png')}}" class="ms-3 opacity-50" alt="">
                            <h6 class="fontsizetwo">New meeting</h6>
                        </div>

                        <div class="d-flex align-items-center box3">
                            <img src="{{asset('user/images/join a meeting.png')}}" class="ms-3 opacity-50" alt="">
                            <h6 class="fontsizetwo">Join a meeting</h6>
                        </div>

                    </div>
                </div>
                <hr class="mt-3 mb-0" style="color:rgb(110 104 104 / 67%);">

                <div>
                    <div class="mt-3 mb-0">
                        <h6 class="fontsizefive">Hangouts</h6>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex">
                            @if (Auth::user()->image == null)
                            <img src="{{asset('img/default_user.png')}}" class="image-box"  alt="">
                            @else
                            <img src="{{asset('storage/'.Auth::user()->image)}}" class="image-header2" alt="">
                            @endif
                            <div class="online"></div>
                            <h6 class="fontsizesix">{{Auth::user()->name}}</h6>
                            <img src="{{asset('user/images/down-arrow1.png')}}" class="opacity-50" alt="">
                        </div>
                        <div class="margin-left-icon">
                            <svg width="18px" height="18px" viewBox="0 0 48 48" class="pTh3n ydLZ9 f">
                                <path class="svg-icon" d="M38 26H26v12h-4V26H10v-4h12V10h4v12h12v4z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <hr class="mt-1 mb-0" style="color:rgb(110 104 104 / 67%);">

                <div class="bg-white">

                    <div>
                        <img src="{{asset('user/images/ps-image.png')}}" class="d-block mx-auto mt-3 " alt="">
                    </div>

                    <div class="text-center mt-3">
                        <h6 class="fontsizeseven  mb-0">No recent chats</h6>
                        <a href="#" class="text-decoration-none fontsizeeight mt-0 ">Start a new one</a>
                    </div>

                </div>

                <hr class="mt-3 mb-0" style="color:rgb(110 104 104 / 67%);">

                <div>
                    <div class="d-flex justify-content-center mt-2">
                        <img src="{{asset('user/images/contact.png')}}" class="me-2 opacity-50" alt="">
                        <img src="{{asset('user/images/conversation.png')}}" class="ms-2 opacity-50" alt="">
                    </div>
                </div>

            </div>

            <div style="width: 81%;">
                <div class=" d-flex align-items-center justify-content-between  box4">
                    <div class="d-flex mt-0 ms-3">
                        <img src="{{asset('user/images/select.png')}}" class="opacity-50" alt="">
                        <img src="{{asset('user/images/down-arrow1.png')}}" class="opacity-50" alt="">
                        <img src="{{asset('user/images/refresh.png')}}" class="ms-3 ps-1 opacity-50" alt="">
                        <img src="{{asset('user/images/more.png')}}" class="ms-3 opacity-50" alt="">
                    </div>
                    <div class="d-flex mt-0 me-4 align-items-center">
                        <h6 class="fontsizenine">1-50 of 284</h6>
                        <img src="{{asset('user/images/left.png')}}" class="ms-3 mt-1 opacity-50" alt="">
                        <img src="{{asset('user/images/right.png')}}" class="ms-3 mt-1 opacity-50" alt="">
                    </div>
                </div>

                <div class=" box5 d-none" style="width: 100%;">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <h6 class="fontsizeten mt-3">All <span class="fw-bold">50</span> conversations on
                                    this page are selected.</h6>
                                <a href="#" class="fontsizeten mt-2 ms-3 text-decoration-none">Select all 108
                                    conversations in Primary</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="width: 100%;">
                    <div class="row g-0  align-items-center item-box" style="height: 55px;">
                        <div class=" box6">
                            <div class="ms-3 position-absolute" >
                                <img src="../image/primary red.png" alt="">
                                <h6 class="d-inline-block fontcolor fontsize11 ms-2">Primary</h6>
                            </div>
                            <hr class="box11">
                        </div>
                        <div class="" style="width: 270px;margin-left:280px;">
                            <div class="d-flex">
                                <div>
                                    <img src="../image/socail.png" class="opacity-50 " style="margin-top: 16px;"
                                        alt="">
                                </div>
                                <div class="row">
                                    <div class="mt-2">
                                        <h6 class="d-inline-block fontsize11 ms-3">Social </h6>
                                        <b class="bg-primary text-white badgeicon badge rounded-pill">4 new</b>
                                    </div>
                                    <div class="mt-0">
                                        <h6 class="fontsize15">Facebook</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="" style="width: 270px;">
                            <div class="d-flex">
                                <div>
                                    <img src="../image/promotions.png" class="opacity-50 " style="margin-top: 16px;"
                                        alt="">
                                </div>
                                <div class="row">
                                    <div class="mt-2">
                                        <h6 class="d-inline-block fontsize11 ms-3">Promotions</h6>
                                        <b class="bg-success text-white badgeicon badge rounded-pill">5 new</b>
                                    </div>
                                    <div class="mt-0">
                                        <h6 class="fontsize15">Facebook</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr class="mt-3 mb-0 box7" style="color:rgb(110 104 104 / 67%);">
                    </div>
                </div>

                <div class=" mt-0 box9 overflow-scroll" style="height:100%" >
                @foreach ($data as $item)          
                    <a href="{{route('content#view',[$item->user_id,$item->id])}}" class="text-decoration-none">
                        <input type="hidden"  name="email_id" value="{{$item->id}}">
                        <div  class="d-flex align-items-center box8 boxcolor" id="hover" style="height: 40px;">
                            <div class="d-flex align-items-center " style="width:250px">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('user/images/select.png')}} " class="ms-3 opacity-25 " alt="">
                                    <img src="{{asset('user/images/star1.png')}}" class="opacity-25 ms-2" alt="">
                                </div>
                                <div>
                                    <h6 class="fontsize12 text-black ">{{Str::words($item->subject,2,'...')}}</h6>
                                </div>
                            </div>
    
                            <div class="box-width">
                                <p class="fontsize13  text-black text-decoration-none"><span class="text-black ">
                                    {{Str::words($item->description,20,'...')}}
                                </p>
                            </div>
                            <div class="">
                                <h6 class="fontsizenine margin-left-text  text-black " id="dateformat">{{$item->created_at->format('M d')}}</h6>
                                <form action="{{route('del#item',$item->id)}}">
                                    @csrf
                                    <button class="btn-del" type="submit"   id="del"><i class="fa-sharp fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div  class="d-flex align-items-center box8 boxcolor" id="hover" style="height: 40px;">
                    <div class="d-flex align-items-center " style="width:250px">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('user/images/select.png')}} " class="ms-3 opacity-25 " alt="">
                            <img src="{{asset('user/images/star1.png')}}" class="opacity-25 ms-2" alt="">
                        </div>
                        <div>
                            <h6 class="fontsize12 text-black ">Google Community Te.</h6>
                        </div>  
                    </div>

                    <div class="box-width">
                        <p class="fontsize13  text-black text-decoration-none"><span class="text-black ">
                          Gu,finish setting up your new google account - Hi {{Auth::user()->name}},welcome to Google.Your new account comes with...
                        </p>
                    </div>
                    <div>
                        <h6 class="fontsizenine margin-left-text  text-black ">{{Auth::user()->created_at->format('M d')}}</h6>
                    </div>
                </div>
                <div>

                    <div class="d-flex justify-content-between">
                        <div class=" mt-1 ms-3">
                            <hr class="box13 mb-0">
                            <div class="d-flex">
                                <div class="mt-3">
                                    <h6 class="fontsize16">0.11 GB of 15 GB used </h6>
                                </div>
                                <div class="mt-2 ms-3">
                                    <img src="{{asset('user/images/share.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="fontsize16 mt-3"> Terms · Privacy · Programme Policies</h6>
                        </div>

                        <div>

                            <div class="me-3">
                                <h6 class="fontsize16 mt-3">Last account activity: 19 minutes ago</h6>
                                <h6 class="fontsize16" style="margin-left: 172px;">Details</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

                

                  
                </div>

                <div class="box10">
                    <div class="ms-3">
                        <div class="mt-3">
                            <img src="{{asset('user/images/cleander.png')}}" style="width: 21px; height: 21px;" alt="">
                        </div>

                        <div class="margintop">
                            <img src="{{asset('user/images/keep.png')}}" style="width: 21px; height: 21px;" alt="">
                        </div>

                        <div class="margintop">
                            <img src="{{asset('user/images/tasks.png')}}" style="width: 21px; height: 21px;" alt="">
                        </div>

                        <div class="margintop">
                            <img src="{{asset('user/images/content.png')}}" style="width: 21px; height: 21px;" alt="">
                        </div>

                        <hr class=" mb-0" style="color:rgb(110 104 104 / 67%);width: 22px;margin-top: 34px;">

                        <div class="mt-4 pt-1">
                            <svg width="20" height="20" viewBox="0 0 48 48" class="pTh3n ydLZ9 f">
                                <path class="svg-icon" d="M38 26H26v12h-4V26H10v-4h12V10h4v12h12v4z"></path>
                            </svg>
                        </div>

                        <div class="margintopend">
                            <img src="{{asset('user/images/right.png')}}" class="opacity-75" alt="">
                        </div>
                    </div>
                </div>

            </div>
          </div>

          <div class="toast fade show showbox boxposition border-0"  role="alert" aria-live="assertive" aria-atomic="true" id="boxalert">
            <div class="toast-header border-0 email-box bg-light">          
              <strong class="me-auto text-black">New Message</strong>
              <small> <i class="fa-sharp fa-solid fa-minus me-2"></i><img src="{{asset('user/images/zoom.png')}}" alt=""></small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body email-box1 bg-white border-0">
                <form action="{{route('sent#mail')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="email" class="border-bottom border-0  w-100 form-control" name="sentusermail" placeholder="To">
                    </div>
                  
                    <div>
                        <input type="text" class="border-bottom border-0 w-100 form-control" name="subject" placeholder="Subject">
                    </div>

                    <div>
                        <input type="text" class="border-0 w-100 form-control" name="description" >
                    </div>

                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                     

                    <div class="toast-body email-box2  bg-white  border-0">
                        <div class="d-flex border-0 ">
                            <div class="btn-group btn-group-sm ms-3 " role="group" aria-label="Small button group">
                                <button type="submit" class="btn btn-primary rounded-left">Send</button>
                                <button type="submit" class="btn btn-primary"><img src="{{asset('user/images/arrowlogo.png')}}" alt=""></button>
                              </div>
                              <div class="mt-1 ms-3">
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" onclick="document.getElementById('getFile').click()" class="border-0  bg-white"><img src="{{asset('user/images/barlogo1.png')}}"  class="opacity-75" alt="">
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo2.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo3.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo4.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo5.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo6.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo7.png')}}"  class="opacity-75" alt=""></button>
                                <button type="button" class="border-0 bg-white"><img src="{{asset('user/images/barlogo8.png')}}"  class="opacity-75" alt=""></button>
                              </div>
                              <div class="mt-1" style="margin-left:105px">
                                <button  type="button" class="border-0 bg-white "><img src="{{asset('user/images/barlogo9.png')}}"  class="opacity-75" alt=""></button>
                              </div>

                              <input type="file" id="getFile" name="img" style="display: none">
                        </div>
                      </div>
                </form>
            </div>
          </div>
    

        </div>
       
</header>


@endsection