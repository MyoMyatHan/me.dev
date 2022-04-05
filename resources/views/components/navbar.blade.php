<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"> စု - တု - ပြု</a>
      <div class="d-flex">

        <a href="/#blogs" class="nav-link"> ဆောင်းပါးများ </a>
        <a href="#subscribe" class="nav-link">Subscribe</a>
        @guest
        <a href="/register" class="nav-link"> Register </a>
        <a href="/login" class="nav-link"> Login </a>
        @else
        <img src="{{ auth()->user()->avator}}" height="50" width="50" class="rounded-circle">
        <a href="" class="nav-link"> Welcome {{ auth()->user()->name}}</a>
        <form action="/logout" method="POST" >
            @csrf
            <button href="" type="submit" class="nav-link btn btn-link"> logout </button>
        </form>
        @endguest


      </div>
    </div>
  </nav>
