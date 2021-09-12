@include('template/header')
<div id="body" class="min-h-screen px-2 md:px-10 py-5">
    <div class="grid grid-cols-1 gap-x-5 gap-y-5 my-5">
    @yield('content')
    </div>
</div>
@include('template/footer')
