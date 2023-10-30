<div class="container my-4 text-center">
  @if (session()->has('fail'))
  <div class="alert alert-danger mt-2">
    {{session('fail')}}
  </div>
  @elseif(session()->has('success'))
  <div class="alert alert-success mt-2">
    {{session('success')}}
  </div>
  @endif
</div>