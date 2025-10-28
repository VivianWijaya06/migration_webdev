@extends('master') 

@section('title', 'Home')

@section('main-content')
<section class="min-h-screen flex items-center justify-center relative overflow-hidden gradient-bg">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-pink-soft/40 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-primary/30 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center animate-bounce-in" data-animate>
            <div class="relative inline-block mb-8">
                <div class="w-40 h-40 mx-auto rounded-full bg-gradient-to-br from-pink-dark to-pink-primary flex items-center justify-center overflow-hidden shadow-2xl glow floating border-4 border-white">
                    <img src="{{ asset('images/profil3.png') }}" alt="Vivian Wijaya" class="w-full h-full object-cover" />
                </div>
                <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-sm">
                    ✨
                </div>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6 leading-tight">
                Hi, I'm <span class="text-gradient">Vivian Wijaya</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-10 leading-relaxed max-w-2xl mx-auto">
                <span class="floating">🚀</span> Informatics student specializing in AI at Ciputra University. 
                Passionate about creating digital magic that blends innovation with beautiful design.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-animate>
                <a href="{{ url('/blog') }}" class="group bg-pink-dark text-white px-8 py-4 rounded-2xl font-semibold hover:bg-pink-primary transition-all duration-300 shadow-2xl hover:shadow-3xl transform hover:-translate-y-2 glow hover-lift flex items-center justify-center">
                    <span>View My Work</span>
                    <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
                <a href="{{ url('/about') }}" class="group border-2 border-pink-dark text-pink-dark px-8 py-4 rounded-2xl font-semibold hover:bg-pink-dark hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 hover-lift flex items-center justify-center">
                    <span>My Journey</span>
                    <i class="fas fa-user ml-3 group-hover:scale-110 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-pink-dark rounded-full flex justify-center">
            <div class="w-1 h-3 bg-pink-dark rounded-full mt-2"></div>
        </div>
    </div>
</section>

<section class="py-24 bg-white relative overflow-hidden">
    <h2 class="text-4xl font-bold text-center mb-4">
        What I <span class="text-pink-500">Create</span>
    </h2>
    <p class="text-gray-600 text-center mb-16">
        Bringing ideas to life through code, design, and artificial intelligence
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        @foreach ($creations as $create)
            <div class="relative bg-white border border-pink-200 rounded-3xl p-10 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="absolute top-4 right-4 text-pink-400 text-xl">
                    @if ($create->badge === 'star')
                        <i class="fa-solid fa-star"></i>
                    @elseif ($create->badge === 'heart')
                        <i class="fa-solid fa-heart"></i>
                    @elseif ($create->badge === 'rocket')
                        <i class="fa-solid fa-rocket"></i>
                    @endif
                </div>

                <div class="flex flex-col items-center text-center space-y-4">
                    <div class="bg-pink-200 text-pink-600 rounded-2xl p-5 text-3xl shadow-inner">
                        @if ($create->icon === 'code')
                            <i class="fa-solid fa-code"></i>
                        @elseif ($create->icon === 'smartphone')
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        @elseif ($create->icon === 'palette')
                            <i class="fa-solid fa-palette"></i>
                        @elseif ($create->icon === 'cpu')
                            <i class="fa-solid fa-microchip"></i>
                        @elseif ($create->icon === 'rocket')
                            <i class="fa-solid fa-rocket"></i>
                        @endif
                    </div>

                    <h3 class="text-xl font-semibold text-gray-800">{{ $create->title }}</h3>
                    <p class="text-gray-500">{{ $create->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>


<section class="py-20 bg-pink-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
            <div class="p-6" data-animate>
                <div class="text-3xl md:text-4xl font-bold text-pink-dark mb-2">3+</div>
                <div class="text-gray-600 font-medium">Projects</div>
            </div>
            <div class="p-6" data-animate>
                <div class="text-3xl md:text-4xl font-bold text-pink-dark mb-2">1+</div>
                <div class="text-gray-600 font-medium">Years Learning</div>
            </div>
            <div class="p-6" data-animate>
                <div class="text-3xl md:text-4xl font-bold text-pink-dark mb-2">3+</div>
                <div class="text-gray-600 font-medium">Programming Language</div>
            </div>
            <div class="p-6" data-animate>
                <div class="text-3xl md:text-4xl font-bold text-pink-dark mb-2">100%</div>
                <div class="text-gray-600 font-medium">Passionate</div>
            </div>
        </div>
    </div>
</section>
@endsection