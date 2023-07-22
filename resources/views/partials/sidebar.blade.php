
@include('partials.scripts')

<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/home">Dashboard</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">General Customers</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-home-1"></i>
                    <span class="nav-text">Frontend </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/home" target="_self">Home</a></li>
                    <li><a href="{{route('about')}}" target="_self">About Us</a></li>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Blog</a>
                        <ul aria-expanded="false">
                            @can('post-list')
                            <li><a href="{{route('post.index')}}" target="_self">Blog List</a></li>
                            @endcan
                            <li><a href="#" target="_self">Blog Grid</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a href="{{route('about')}}" target="_self">Contact Us</a></li>				
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-text">Componets</span>
                </a>
                <ul aria-expanded="false">
                    @can('role-list')
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    @endcan
                    @can('users-list')	
                    <li><a href="{{route('users.index')}}">Users</a></li>
                    @endcan
                    @can('post-list')		
                    <li><a href="{{route('post.index')}}">Blog</a></li>
                    @endcan		
                </ul>
            </li>
            
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Post Details</a></li>
                </ul>
            </li>


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    @can('users-list')
                    <li><a href="{{route('users.index')}}">Users</a></li>
                    @endcan
                    @can('role-list')
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    @endcan

                </ul>
            </li>
            
        </ul>
        <div class="copyright" style="margin-top:95%; position:absolute;">
            <p><strong> Admin Dashboard</strong> ©2023 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Developer </p>
        </div>
    </div>
</div>