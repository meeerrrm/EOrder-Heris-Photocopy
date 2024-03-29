<div class="w-full shadow">
    <nav class="w-full max-w-5xl mx-auto py-8 flex flex-wrap">
        <h1 class="font-bold w-1/4 text-xl">Heris Fotocopy</h1>
        <div class="max-w-full w-3/4 text-right">
            <a href="{{ route('welcome') }}" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all  hover:text-white hover:bg-slate-800 @if(request()->routeIs('welcome')) bg-slate-800 text-white @endif">Beranda</a>
            <a href="{{ route('check_orders') }}" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all hover:text-white hover:bg-slate-800 @if(request()->routeIs('check_orders')) bg-slate-800 text-white @endif">Cek Pesanan</a>
            <a href="{{ route('orders')}}" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all hover:text-white hover:bg-slate-800 @if(request()->routeIs('orders')) bg-slate-800 text-white @endif">Order Online</a>
        </div>
    </nav>
</div>