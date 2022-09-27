<nav class="navbar navbar-expand-lg theblue text-uppercase fixed-top" id="mainNav"">
    <div class="container">
      <a class="navbar-brand nav-link text-white" href="/">Myo Myat Han</a>
      <button class="navbar-toggler text-uppercase font-weight-bold btn nav-link text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu

        <i class="fas fa-bars"></i>
    </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1 "><a href="/#blogs" class="nav-link text-white"> Blogs </a></li>
                <li class="nav-item mx-0 mx-lg-1 "><a href="/#blogs" class="nav-link text-white"> projects </a></li>
                <li class="nav-item mx-0 mx-lg-1 "><a href="/#blogs" class="nav-link text-white"> contact </a></li>

                @guest
                <li class="nav-item mx-0 mx-lg-1">
                    <a href="/register" class="nav-link text-white"> Register </a> </li>
                    <li class="nav-item mx-0 mx-lg-1 "><a href="/login" class="nav-link text-white"> Login </a></li>
                    @else
                    <img src="{{ auth()->user()->avator}}" height="50" width="50" class="rounded-circle">
                    <a href="" class="nav-link text-white"> Welcome {{ auth()->user()->name}}</a>
                    <form action="/logout" method="POST" >
                        @csrf
                        <button href="" type="submit" class="nav-link btn btn-link text-uppercase text-white"> logout </button>
                    </form>
                    @endguest</li>
            </ul>
        </div>
    </div>
  </nav>

