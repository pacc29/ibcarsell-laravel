@foreach ($messages as $message)
@if ($loop->first)
<p class="m-0 small alert alert-danger shadow-sm mt-2">{{$message}}</p>
@endif
@endforeach