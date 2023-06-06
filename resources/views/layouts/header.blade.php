<nav class="navbar navbar-light bg-light">
  <form class="form-inline ">
    <button class="btn btn-outline-success " type="button"><a href="{{route('about')}} ">About</a></button>
    <button class="btn btn-outline-success" type="button"><a {{request()->is('/') ? 'active' : ''}} href="/">Home </a></button>
    <button class="btn btn-outline-success" type="button"><a {{request()->is('') ? 'active' : ''}}  href="posts">Post</a></button>
    <button class="btn btn-outline-success" type="button"><a {{request()->is('') ? 'active' : ''}} href="foods">Food</a></button>
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-outline-success" type="button">Main button</button>
  </form>
</nav>
