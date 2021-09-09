@include('template/header')
<div class="min-h-screen px-10 py-5">
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
    @yield('content')
    </div>
</div>
@include('template/footer')
