 <!-- fixed-top-->
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
     <div class="navbar-wrapper">
         <div class="navbar-header">
             <ul class="nav navbar-nav flex-row">
                 <li class="nav-item mobile-menu d-md-none mr-auto">
                     <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                         <i class="ft-menu font-large-1"></i>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="navbar-brand" href="{{ route('admin.home') }}">
                         <img class="brand-logo" alt="logo"
                             src="{{ asset('backend/app-assets/images/logo/logo-light-sm.png') }}">
                         <h3 class="brand-text"> Admin</h3>
                     </a>
                 </li>
                 <li class="nav-item d-md-none">
                     <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                         <i class="fa fa-ellipsis-v"></i>
                     </a>
                 </li>
             </ul>
         </div>
         <div class="navbar-container content">
             <div class="collapse navbar-collapse" id="navbar-mobile">
                 <ul class="nav navbar-nav mr-auto float-left">
                     <li class="nav-item d-none d-md-block">
                         <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                             <i class="ft-menu"> </i>
                         </a>
                     </li>
                 </ul>
                 <ul class="nav navbar-nav float-right">
                     <!-- Nofication -->
                     <li class="dropdown dropdown-notification nav-item">
                         <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                             <i class="ficon ft-bell"></i>
                             <span class="badge badge-pill badge-default badge-danger badge-default badge-up">
                                 5
                             </span>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                             <li class="dropdown-menu-header">
                                 <h6 class="dropdown-header m-0">
                                     <span class="grey darken-2">Notifications</span>
                                 </h6>
                                 <span class="notification-tag badge badge-default badge-danger float-right m-0">
                                     5 New
                                 </span>
                             </li>
                             <li class="scrollable-container media-list w-100">
                                 @for ($i = 0; $i < 6; $i++)
                                     <a href="javascript:void(0)">
                                         <div class="media">
                                             <div class="media-left align-self-center">
                                                 <i class="ft-plus-square icon-bg-circle bg-cyan"></i>
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="media-heading">You have new order!</h6>
                                                 <p class="notification-text font-small-3 text-muted">
                                                     Lorem ipsum dolor sit amet, consectetuer elit.
                                                     <strong>{{ $i }}</strong>
                                                 </p>
                                                 <small>
                                                     <time class="media-meta text-muted"
                                                         datetime="2015-06-11T18:29:20+08:00">
                                                         30 minutes ago
                                                     </time>
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 @endfor
                             </li>
                             <li class="dropdown-menu-footer">
                                 <a class="dropdown-item text-muted text-center" href="javascript:void(0)">
                                     Read all notifications
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <!-- Message -->
                     <li class="dropdown dropdown-notification nav-item">
                         <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                             <i class="ficon ft-mail"></i>
                             <span class="badge badge-pill badge-default badge-info badge-default badge-up">
                                 5
                             </span>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                             <li class="dropdown-menu-header">
                                 <h6 class="dropdown-header m-0">
                                     <span class="grey darken-2">
                                         Messages
                                     </span>
                                 </h6>
                                 <span class="notification-tag badge badge-default badge-warning float-right m-0">
                                     4 New
                                 </span>
                             </li>
                             <li class="scrollable-container media-list w-100">
                                 @for ($i = 0; $i < 6; $i++)
                                     <a href="javascript:void(0)">
                                         <div class="media">
                                             <div class="media-left">
                                                 <span class="avatar avatar-sm avatar-online rounded-circle">
                                                     <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-19.png') }}"
                                                         alt="avatar">
                                                     <i></i>
                                                 </span>
                                             </div>
                                             <div class="media-body">
                                                 <h6 class="media-heading">Margaret Govan</h6>
                                                 <p class="notification-text font-small-3 text-muted">
                                                     I like your portfolio, let's start.
                                                 </p>
                                                 <small>
                                                     <time class="media-meta text-muted"
                                                         datetime="2015-06-11T18:29:20+08:00">
                                                         Today
                                                     </time>
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 @endfor
                             </li>
                             <li class="dropdown-menu-footer">
                                 <a class="dropdown-item text-muted text-center" href="javascript:void(0)">
                                     Read all messages
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <!-- User View -->
                     <li class="dropdown dropdown-user nav-item">
                         <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                             <span class="avatar avatar-online">
                                 <img src="{{ asset('backend/app-assets/images/avatar.jpg') }}" alt="avatar">
                                 <i></i>
                             </span>
                             <span class="user-name">
                                 John Doe
                             </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-right">
                             <a class="dropdown-item" href="user-profile.html">
                                 <i class="ft-user"></i>
                                 Edit Profile
                             </a>
                             <a class="dropdown-item" href="email-application.html">
                                 <i class="ft-mail"></i>
                                 My Inbox
                             </a>
                             <a class="dropdown-item" href="user-cards.html">
                                 <i class="ft-check-square"></i>
                                 Task
                             </a>
                             <a class="dropdown-item" href="chat-application.html">
                                 <i class="ft-message-square"></i>
                                 Chats
                             </a>
                             <div class="dropdown-divider">
                             </div>
                             <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                 <i class="ft-power"></i>
                                 Logout
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>
