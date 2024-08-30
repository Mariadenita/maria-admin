<nav class="navbar navbar-expand-lg custom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height:50px">
    </a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item me-5">
          <a class="nav-link active text-white" href="">Order Management</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link text-white" href="{{ route('product') }}">Product Management</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link text-white" href="{{ route('slider') }}">Slider Management</a>
        </li>
      </ul>
    </div>
  </div>
</nav>