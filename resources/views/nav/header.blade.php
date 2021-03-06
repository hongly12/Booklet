<div class="container-fluid" style="margin-bottom:10px;margin-top:10px;padding-left:20%">    
    <ul class="list-inline">
      <li ><img src="{{asset('img/logo.png')}}" width="65" height="70"></li>
      <li style="margin-top:15px;margin-left:10px"><h1>Booklet</h1></li>
      
      @if (Auth::guest())
          <li class="float-right" style="padding-right:10%;margin-top:35px;padding-left:10px;"><a href="{{route('login')}}" class="btn btn-success" role="button">Log in</a></li>
          <li class="float-right" style="margin-top:15px;padding-top:1%;"><p style="font-weight: bold ;"><a href="/profile">Become a member</p></a></li>
      @else
          <li class="float-right" style="padding-right:10%;margin-top:35px;padding-left:10px;"><a href="{{route('logout')}}" class="btn btn-success" role="button">Log out</a><form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
          
          <li class="float-right" style="margin-top:15px;padding-top:1%;"><p style="font-weight: bold ;"><a href="/profile">{{ Auth::user()->name }}</p></a></li>
      @endif
      <li class="float-right" style="margin-top:1%;"><a href="#" class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></a></li>
    </ul>
</div> 
<nav class="navbar navbar-dark bg-dark">
        <a class="nav-item nav-link text-ligh" style="padding-left:20%;color:white" href="/">Fictions</a>
        <a class="nav-item nav-link text-ligh" style="color:white"  href="/profile">Technology</a>
        <a class="nav-item nav-link text-ligh" style="color:white" href="/viewdata">Action</a>
        <a class="nav-item nav-link text-ligh" style="color:white" href="#">Sport</a>
        <a class="nav-item nav-link text-ligh" style="color:white" href="#">Blog</a>
        <a class="nav-item nav-link text-ligh" style="padding-right:20%;color:white" href="#">Mores</a>
</nav>