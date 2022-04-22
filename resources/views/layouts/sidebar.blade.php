<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-tocken" content="{{csrf_token()}}">
    <script>window.Laravel = {csrfTocken:'{{csrf_token()}}' } </script>


</head>
<body>




<div class="sidebar shadow border-right" id="sidebar" onmouseenter="showCurrentSubLinks()" onmouseleave="restSideBar()">


    <a href="" class="nav-link">
        <div class="nav-link-content active-nav-link">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1651" transform="translate(-1437 -79)">
                        <circle id="Ellipse_249" data-name="Ellipse 249" cx="18" cy="18" r="18" transform="translate(1437 79)" fill="#646464"/>
                        <g transform="translate(1468.681 81.321) rotate(90)">
                            <g transform="translate(7.998 5.999)">
                                <path d="M355.959,255a.961.961,0,0,0-.961.961v4.8a.961.961,0,0,0,.961.961h4.8a.961.961,0,0,0,.96-.961v-4.8a.961.961,0,0,0-.96-.961Zm0,8.641a.96.96,0,0,0-.961.96v4.8a.961.961,0,0,0,.961.96h4.8a.96.96,0,0,0,.96-.96v-4.8a.96.96,0,0,0-.96-.96ZM364.6,255a.96.96,0,0,0-.96.961v4.8a.96.96,0,0,0,.96.961h4.8a.96.96,0,0,0,.96-.961v-4.8a.96.96,0,0,0-.96-.961Zm0,8.641a.96.96,0,0,0-.96.96v4.8a.96.96,0,0,0,.96.96h4.8a.96.96,0,0,0,.96-.96v-4.8a.959.959,0,0,0-.96-.96Z" transform="translate(-354.998 -254.999)" fill="#ddd" fill-rule="evenodd"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>


            <div class="nav-text ml-2">Dashboard</div>
        </div>

    </a>


    <div class="nav-link" onclick="showSublinks('matchmaking')">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1639" transform="translate(-1512 -131)">
                        <circle data-name="Ellipse 244" cx="18" cy="18" r="18" transform="translate(1512 131)" fill="#646464"/>
                        <g transform="translate(1521 140)">
                            <path data-name="Path 1810" d="M0,0H18.5V18.5H0Z" fill="none"/>
                            <path data-name="Path 1811" d="M9.708,2a7.708,7.708,0,1,0,7.708,7.708A7.711,7.711,0,0,0,9.708,2ZM6.625,13.948a1.927,1.927,0,1,1,1.927-1.927A1.928,1.928,0,0,1,6.625,13.948ZM7.781,6.625A1.927,1.927,0,1,1,9.708,8.552,1.928,1.928,0,0,1,7.781,6.625Zm5.01,7.323a1.927,1.927,0,1,1,1.927-1.927A1.928,1.928,0,0,1,12.792,13.948Z" transform="translate(-0.458 -0.458)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="nav-text ml-2">Matchmaking</div>
        </div>

        <div class="nav-sub-link ml-3  mb-2" sublinks="matchmaking" style="display:none ;">

            <a href="/MySideBarV4.html" class=" flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Generate</span>

                </div>
            </a>
            <a href="/DigitalMedia/MySideBarV4.html" class=" flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>List</span>
                </div>
            </a>
        </div>
    </div>


    <div class="nav-link" onclick="showSublinks('customers')">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1640" transform="translate(-1512 -186)">
                        <circle data-name="Ellipse 243" cx="18" cy="18" r="18" transform="translate(1512 186)" fill="#646464"/>
                        <g transform="translate(1522 164.986)">
                            <circle data-name="Ellipse 200" cx="3" cy="3" r="3" transform="translate(4.75 32.014)" fill="#ddd"/>
                            <ellipse data-name="Ellipse 201" cx="1.5" cy="2" rx="1.5" ry="2" transform="translate(11.75 34.014)" fill="#ddd"/>
                            <ellipse data-name="Ellipse 202" cx="1.5" cy="2" rx="1.5" ry="2" transform="translate(0.75 34.014)" fill="#ddd"/>
                            <path data-name="Path 1792" d="M4.062,241a2.692,2.692,0,0,0-2.007-.466A2.052,2.052,0,0,0,0,242.574v3.306a.89.89,0,0,0,.89.887c2.12,0,1.865.038,1.865-.091C2.755,244.333,2.477,242.615,4.062,241Z" transform="translate(0 -201.802)" fill="#ddd"/>
                            <path data-name="Path 1793" d="M125.017,239.886a4.5,4.5,0,0,0-3.467.82c-1.661,1.33-1.341,3.121-1.341,5.312a1.062,1.062,0,0,0,1.06,1.06c6.39,0,6.645.206,7.023-.633.124-.284.09-.194.09-2.908A3.67,3.67,0,0,0,125.017,239.886Z" transform="translate(-116.546 -201.145)" fill="#ddd"/>
                            <path data-name="Path 1794" d="M379.817,240.533a2.69,2.69,0,0,0-2.007.466c1.573,1.606,1.308,3.207,1.308,5.679,0,.131-.212.091,1.833.091a.921.921,0,0,0,.922-.918v-3.275A2.052,2.052,0,0,0,379.817,240.533Z" transform="translate(-366.372 -201.804)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="nav-text ml-2">Customers</div>
        </div>


        <div class="nav-sub-link ml-3  mb-2" sublinks="customers" style="display: none;">
            <a href="/MySideBarV3.html" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Exhibitors/Suppliers</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Buyers/Visitors</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Online Event Visitors</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Online Show Suppliers</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Leads</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Enquiries</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Request For Quotation</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Meetings</span>
                </div>
            </a>

            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Messages</span>
                </div>
            </a>

            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Exhibitor Badges</span>
                </div>
            </a>
        </div>


    </div>


    <div class="nav-link" onclick="showSublinks('catalogs')">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1641" transform="translate(-1512 -621)">
                        <circle data-name="Ellipse 242" cx="18" cy="18" r="18" transform="translate(1512 621)" fill="#646464"/>
                        <g transform="translate(1520 629)">
                            <path data-name="Path 1797" d="M0,0H19.75V19.75H0Z" fill="none"/>
                            <path data-name="Path 1798" d="M8.583,4H3.646A1.644,1.644,0,0,0,2.008,5.646L2,15.521a1.651,1.651,0,0,0,1.646,1.646H16.813a1.651,1.651,0,0,0,1.646-1.646V7.292a1.651,1.651,0,0,0-1.646-1.646H10.229Z" transform="translate(-0.354 -0.708)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="nav-text ml-2">Catalogs</div>

        </div>

        <div class="nav-sub-link ml-3  mb-2" sublinks="catalogs" style="display: none;">
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Product</span>

                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Product Add</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Categories</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Metics</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Attributes</span>
                </div>
            </a>

        </div>

    </div>


    <div class="nav-link">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1642" transform="translate(-1512 -676)">
                        <circle data-name="Ellipse 241" cx="18" cy="18" r="18" transform="translate(1512 676)" fill="#646464"/>
                        <g transform="translate(1521 685)">
                            <path data-name="Path 1799" d="M0,0H19V19H0Z" fill="none"/>
                            <path data-name="Path 1800" d="M15.667,2.583H12.358a2.366,2.366,0,0,0-4.465,0H4.583A1.588,1.588,0,0,0,3,4.167V15.25a1.588,1.588,0,0,0,1.583,1.583H15.667A1.588,1.588,0,0,0,17.25,15.25V4.167A1.588,1.588,0,0,0,15.667,2.583Zm-5.542,0a.792.792,0,1,1-.792.792A.794.794,0,0,1,10.125,2.583Zm.792,11.083H6.958a.792.792,0,0,1,0-1.583h3.958a.792.792,0,0,1,0,1.583ZM13.292,10.5H6.958a.792.792,0,1,1,0-1.583h6.333a.792.792,0,1,1,0,1.583Zm0-3.167H6.958a.792.792,0,1,1,0-1.583h6.333a.792.792,0,1,1,0,1.583Z" transform="translate(-0.625 -0.208)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>


            <div class="nav-text ml-2">Orders</div>

        </div>

        <div class="nav-sub-link ml-3  mb-2" sublinks="customers" style="display: none;">
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Ticket</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Package</span>
                </div>
            </a>


        </div>

    </div>


    <a href="" class="nav-link">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1643" transform="translate(-1438 -730)">
                        <circle data-name="Ellipse 246" cx="18" cy="18" r="18" transform="translate(1438 730)" fill="#646464"/>
                        <g id="notifications-24px" transform="translate(1447 739)">
                            <path data-name="Path 1801" d="M0,0H19V19H0Z" fill="none"/>
                            <path data-name="Path 1802" d="M10.419,17.938A1.588,1.588,0,0,0,12,16.354H8.836A1.583,1.583,0,0,0,10.419,17.938Zm4.75-4.75V9.229a4.824,4.824,0,0,0-3.562-5V3.688a1.188,1.188,0,0,0-2.375,0v.538a4.81,4.81,0,0,0-3.563,5v3.958L4.648,14.209A.792.792,0,0,0,5.2,15.563H15.629a.794.794,0,0,0,.562-1.354Z" transform="translate(-0.919 -0.521)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="nav-text ml-2">Notification</div>
        </div>

    </a>


    <a href="">
        <div class="nav-link">
            <div class="nav-link-content">
                <div>
                    <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                        <g data-name="Group 1650" transform="translate(-1430 -783)">
                            <circle data-name="Ellipse 248" cx="18" cy="18" r="18" transform="translate(1430 783)" fill="#646464"/>
                            <g transform="translate(1439 792)">
                                <path data-name="Path 1804" d="M0,0H19V19H0Z" fill="none"/>
                                <path data-name="Path 1805" d="M15.667,3H4.583A1.588,1.588,0,0,0,3,4.583V15.667A1.588,1.588,0,0,0,4.583,17.25H15.667a1.588,1.588,0,0,0,1.583-1.583V4.583A1.588,1.588,0,0,0,15.667,3ZM6.958,14.083a.794.794,0,0,1-.792-.792V9.333a.792.792,0,0,1,1.583,0v3.958A.794.794,0,0,1,6.958,14.083Zm3.167,0a.794.794,0,0,1-.792-.792V6.958a.792.792,0,0,1,1.583,0v6.333A.794.794,0,0,1,10.125,14.083Zm3.167,0a.794.794,0,0,1-.792-.792V11.708a.792.792,0,0,1,1.583,0v1.583A.794.794,0,0,1,13.292,14.083Z" transform="translate(-0.625 -0.625)" fill="#ddd"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="nav-text ml-2">Reports</div>
            </div>


        </div>
    </a>


    <div class="nav-link" onclick="showSublinks('billings')">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1645" transform="translate(-1441 -838)">
                        <circle data-name="Ellipse 247" cx="18" cy="18" r="18" transform="translate(1441 838)" fill="#646464"/>
                        <g id="receipt-24px" transform="translate(1450 847)">
                            <path data-name="Path 1806" d="M0,0H19V19H0Z" fill="none"/>
                            <path data-name="Path 1807" d="M17.25,2.208a.371.371,0,0,0-.277.119l-.625.625a.392.392,0,0,1-.562,0l-.625-.625a.392.392,0,0,0-.562,0l-.625.625a.392.392,0,0,1-.562,0l-.625-.625a.392.392,0,0,0-.562,0l-.625.625a.392.392,0,0,1-.562,0l-.625-.625a.392.392,0,0,0-.562,0l-.625.625a.392.392,0,0,1-.562,0l-.633-.633a.392.392,0,0,0-.562,0l-.625.633a.392.392,0,0,1-.562,0l-.625-.633a.392.392,0,0,0-.562,0l-.625.633a.392.392,0,0,1-.562,0l-.625-.633A.4.4,0,0,0,3,2.208V17.717a.371.371,0,0,0,.277-.119l.625-.625a.392.392,0,0,1,.562,0l.625.625a.392.392,0,0,0,.562,0l.625-.625a.392.392,0,0,1,.562,0l.625.625a.392.392,0,0,0,.562,0l.625-.625a.392.392,0,0,1,.562,0l.625.625a.392.392,0,0,0,.562,0l.625-.625a.392.392,0,0,1,.562,0l.625.625a.392.392,0,0,0,.562,0l.625-.625a.392.392,0,0,1,.562,0l.625.625a.392.392,0,0,0,.562,0l.625-.625a.392.392,0,0,1,.562,0l.625.625a.4.4,0,0,0,.277.119V2.208ZM14.083,13.917H6.167a.792.792,0,0,1,0-1.583h7.917a.792.792,0,1,1,0,1.583Zm0-3.167H6.167a.792.792,0,0,1,0-1.583h7.917a.792.792,0,1,1,0,1.583Zm0-3.167H6.167A.792.792,0,0,1,6.167,6h7.917a.792.792,0,1,1,0,1.583Z" transform="translate(-0.625 -0.458)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="nav-text ml-2">Billings</div>
        </div>


        <div class="nav-sub-link ml-3  mb-2" sublinks="billings" style="display: none;">
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Make A Payment</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Payment History</span>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                        <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                    </svg>
                    <span>Transaction</span>
                </div>
            </a>
        </div>

    </div>


    <div class="nav-link" onclick="showSublinks('systems')">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1644" transform="translate(-1512 -895)">
                        <circle data-name="Ellipse 238" cx="18" cy="18" r="18" transform="translate(1512 895)" fill="#646464"/>
                        <g transform="translate(1521 904)">
                            <path data-name="Path 1808" d="M0,0H19V19H0Z" fill="none"/>
                            <path data-name="Path 1809" d="M10.125,8.542a1.583,1.583,0,1,0,1.583,1.583A1.588,1.588,0,0,0,10.125,8.542ZM15.667,3H4.583A1.583,1.583,0,0,0,3,4.583V15.667A1.583,1.583,0,0,0,4.583,17.25H15.667a1.583,1.583,0,0,0,1.583-1.583V4.583A1.583,1.583,0,0,0,15.667,3Zm-1.385,7.125a4.007,4.007,0,0,1-.04.538l1.172.918a.28.28,0,0,1,.063.356l-1.108,1.916a.28.28,0,0,1-.34.119l-1.377-.554a4.246,4.246,0,0,1-.934.546l-.206,1.465a.287.287,0,0,1-.277.237H9.017a.288.288,0,0,1-.277-.23l-.206-1.465a4.071,4.071,0,0,1-.934-.546l-1.377.554a.28.28,0,0,1-.34-.119L4.773,11.946a.28.28,0,0,1,.063-.356l1.172-.918a4.225,4.225,0,0,1-.04-.546,4.007,4.007,0,0,1,.04-.538L4.837,8.668a.28.28,0,0,1-.063-.356L5.882,6.4a.28.28,0,0,1,.34-.119L7.6,6.832a4.246,4.246,0,0,1,.934-.546L8.74,4.821a.287.287,0,0,1,.277-.238h2.217a.288.288,0,0,1,.277.23l.206,1.465a4.071,4.071,0,0,1,.934.546l1.377-.554a.28.28,0,0,1,.34.119L15.477,8.3a.28.28,0,0,1-.063.356l-1.172.918a4.225,4.225,0,0,1,.04.546Z" transform="translate(-0.625 -0.625)" fill="#ddd"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="nav-text ml-2">Systems</div>
        </div>




        <div class="nav-sub-link ml-3  mb-2" sublinks="systems" style="display: none;">

            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Settings</span>
                    </div>
                </div>
            </a>

            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Events</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Fields</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Forms</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Forms Messages</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Visitor/Buyer Type</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Package( Suppliers)</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Manage SSLs</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Manage Feeds</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Coupons</span>
                    </div>
                </div>
            </a>
            <a href="" class="nav-link-sub flex align-items-center  mb-1 ml-5">
                <div class="nav-sub-text">
                    <div class="nav-sub-text">
                        <svg class="w-8 h-3" xmlns="http://www.w3.org/2000/svg" width="10" height="8.913" viewbox="0 0 10 8.913">
                            <path d="M10.57,5.6a.343.343,0,1,0-.485.485Zm3.386,3.871-.242.242h0Zm0,.97-.242-.242h0Zm-3.871,3.386a.343.343,0,0,0,.485.485Zm3.67-3.528a.343.343,0,1,0,0-.686ZM4.843,9.614a.343.343,0,1,0,0,.686Zm5.242-3.528,3.629,3.629.485-.485L10.57,5.6ZM13.714,10.2l-3.629,3.629.485.485L14.2,10.684Zm0-.485a.343.343,0,0,1,0,.485l.485.485a1.028,1.028,0,0,0,0-1.454Zm.042-.1H4.843V10.3h8.913Z" transform="translate(-4.5 -5.5)" fill="#fff"/>
                        </svg>
                        <span>Currencies</span>
                    </div>
                </div>
            </a>
        </div>




    </div>

    <hr>


    <a href="" class="nav-link">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1646" transform="translate(-1512 -1009)">
                        <circle data-name="Ellipse 236" cx="18" cy="18" r="18" transform="translate(1512 1009)" fill="#646464"/>
                        <path data-name="Path 1835" d="M14.75,2H3.417a1.415,1.415,0,0,0-1.41,1.417L2,16.167l2.833-2.833H14.75a1.421,1.421,0,0,0,1.417-1.417v-8.5A1.421,1.421,0,0,0,14.75,2ZM5.542,6.958h7.083a.708.708,0,1,1,0,1.417H5.542a.708.708,0,0,1,0-1.417ZM9.792,10.5H5.542a.708.708,0,1,1,0-1.417h4.25a.708.708,0,0,1,0,1.417Zm2.833-4.25H5.542a.708.708,0,0,1,0-1.417h7.083a.708.708,0,1,1,0,1.417Z" transform="translate(1521.417 1018.417)" fill="#ddd"/>
                    </g>
                </svg>

            </div>
            <div class="nav-text ml-2">Chat</div>
        </div>

    </a>
    <a href="" class="nav-link">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g id="Group_1647" data-name="Group 1647" transform="translate(-1512 -1072)">
                        <circle id="Ellipse_233" data-name="Ellipse 233" cx="18" cy="18" r="18" transform="translate(1512 1072)" fill="#646464"/>
                        <path id="Path_1833" data-name="Path 1833" d="M16.167,7.216v-1.8A1.421,1.421,0,0,0,14.75,4H3.417a1.41,1.41,0,0,0-1.41,1.417v1.8a1.333,1.333,0,0,0,.666,1.2,1.431,1.431,0,0,1,.744,1.254,1.41,1.41,0,0,1-.751,1.247A1.367,1.367,0,0,0,2,12.118v1.8a1.421,1.421,0,0,0,1.417,1.417H14.75a1.421,1.421,0,0,0,1.417-1.417v-1.8a1.367,1.367,0,0,0-.666-1.2,1.41,1.41,0,0,1,0-2.493A1.367,1.367,0,0,0,16.167,7.216ZM9.792,13.563H8.375V12.146H9.792Zm0-3.187H8.375V8.958H9.792Zm0-3.187H8.375V5.771H9.792Z" transform="translate(1521.417 1080.833)" fill="#ddd"/>
                    </g>
                </svg>
            </div>
            <div class="nav-text ml-2">Support Ticket</div>
        </div>

    </a>


    <a href="" class="nav-link">
        <div class="nav-link-content">
            <div>
                <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewbox="0 0 36 36">
                    <g data-name="Group 1648" transform="translate(-1512 -1135)">
                        <circle data-name="Ellipse 234" cx="18" cy="18" r="18" transform="translate(1512 1135)" fill="#646464"/>
                        <path d="M9.109,1.015A6.7,6.7,0,0,0,3,7.771v4.865a2.179,2.179,0,0,0,2.182,2.182h.727a1.459,1.459,0,0,0,1.455-1.455V10.455A1.459,1.459,0,0,0,5.909,9H4.455V7.756a5.23,5.23,0,0,1,4.938-5.3,5.09,5.09,0,0,1,5.244,5.091V9H13.182a1.459,1.459,0,0,0-1.455,1.455v2.909a1.459,1.459,0,0,0,1.455,1.455h1.455v.727H10.273a.727.727,0,1,0,0,1.455h3.636a2.179,2.179,0,0,0,2.182-2.182V7.546A6.546,6.546,0,0,0,9.109,1.015Z" transform="translate(1520 1144)" fill="#ddd"/>
                    </g>
                </svg>

            </div>
            <div class="nav-text ml-2">Help Center</div>
        </div>

    </a>

    <hr>
</div>


<script >
    const currentPath = new URL(window.location.href).pathname;
    var getAllLinks = document.getElementsByTagName('a');
    var currentList = getAllLinks[0];

    var isMobile = false;






    window.addEventListener('resize', () => {
        console.log(window.innerWidth)
        if (window.innerWidth < 968) {
            isMobile = true;
        } else {
            isMobile = false;
        } restSideBar()
    })

    try {
        for (let j = 0; j < getAllLinks.length; j++) {
            const element = getAllLinks[j];
            const path = element.getAttribute('href');
            if (path == currentPath) {

                if (element.childNodes.length != 3) {
                    currentList = element;
                } else {
                    currentList = element.parentNode;
                }
                console.log(element.tagName)


                element.classList.add('sub-active')
            }

        }
    } catch (e) {
        console.log(e)
    }

    function shnowMobileSideBar() {
        isMobile = true;
        var elemnt = document.getElementById('sidebar');
        if (! elemnt.classList.contains('mobile-sidebar')) {
            elemnt.classList.add('mobile-sidebar');
            currentList.style.display = 'block';

        } else {
            elemnt.classList.remove('dms-mobile-sidebar');
        }
    }

    function showCurrentSubLinks() {

        try {
            if (! isMobile) { // console.log(currentList)
                if (currentList.style.display === "none") {
                    currentList.style.display = 'block';
                } else {
                    currentList.style.display = 'none';
                }
            }

        } catch (e) {
            console.log(e)
        }


    }

    function restSideBar() {
        var sublinkTabs = document.getElementsByClassName('nav-sub-link');

        try {
            if (! isMobile) {
                for (i = 0; i < sublinkTabs.length; i ++) {
                    var tabId = sublinkTabs[i].getAttribute('sublinks');
                    sublinkTabs[i].style.display = 'none';
                }
            }
        } catch (e) {
            console.log(e)
        }
    }


    function showSublinks(id) {

        var sublinkTabs = document.getElementsByClassName('nav-sub-link');
        try {
            for (i = 0; i < sublinkTabs.length; i ++) {
                var tabId = sublinkTabs[i].getAttribute('sublinks');
                if (tabId === id) {
                    if (tabId != currentList.getAttribute('sublinks')) {
                        var attr = sublinkTabs[i].style.display;
                        if (attr === "none") {
                            sublinkTabs[i].style.display = 'block';
                        } else {
                            sublinkTabs[i].style.display = 'none';
                        }
                        break;
                    }

                }

            }
        } catch (e) {
            console.log(e)
        }
    }

</script>


</body>
</html>
