@extends('master') 

@section('title', 'My Blog') 

@section('main-content')
<section class="py-24 bg-gradient-to-b from-white to-pink-light relative overflow-hidden">
    <div class="absolute top-10 left-10 w-72 h-72 bg-pink-soft/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-pink-primary/20 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-20" data-animate>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                My <span class="text-gradient">Portfolio</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                A collection of projects that showcase my passion for innovation and creativity
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
            @foreach ($blogs as $blog)
                <div class="group bg-white rounded-3xl shadow-xl border border-pink-100 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-700" />
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-500"></div>
                        <span class="absolute top-4 left-4 bg-pink-dark text-white text-sm font-semibold px-4 py-1 rounded-full shadow-md">
                            {{ $blog->category }}
                        </span>
                        <span class="absolute bottom-4 right-4 bg-white text-pink-dark text-xs font-bold px-3 py-1 rounded-full shadow">
                            {{ $blog->month }}
                        </span>
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-pink-dark transition-colors duration-300">
                            {{ $blog->title }}
                        </h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ Str::limit($blog->description, 120) }}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center text-sm font-semibold text-pink-dark bg-pink-soft px-3 py-1 rounded-full">
                                <i class="fas fa-certificate mr-2"></i> {{ $blog->badge }}
                            </span>
                            <a href="{{ $blog->link }}" target="_blank" class="group/btn bg-pink-dark text-white px-5 py-2 rounded-xl font-semibold hover:bg-pink-primary transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 inline-flex items-center">
                                <span>View</span>
                                <i class="fas fa-arrow-up-right-from-square ml-2 group-hover/btn:rotate-45 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-20" data-animate>
            <div class="bg-gradient-to-r from-pink-soft to-pink-primary rounded-3xl p-12 shadow-2xl">
                <h3 class="text-3xl font-bold text-white mb-6">Have an Idea in Mind?</h3>
                <p class="text-white/90 text-xl mb-8 max-w-2xl mx-auto">
                    Let's collaborate and turn your vision into an amazing digital experience!
                </p>
                <a href="{{ url('/contact') }}" class="group bg-white text-pink-dark px-8 py-4 rounded-2xl font-bold hover:bg-gray-100 transition-all duration-300 shadow-2xl hover:shadow-3xl transform hover:-translate-y-2 inline-flex items-center">
                    <span>Start a Project</span>
                    <i class="fas fa-rocket ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" data-animate>
                <h3 class="text-3xl font-bold text-gray-800 mb-6">Technical Skills</h3>
                <p class="text-gray-600 text-lg">Continuously learning and mastering new technologies</p>
            </div>
            
            <div class="space-y-8" data-animate>
                <div class="group">
                    <div class="flex justify-between mb-3">
                        <span class="font-semibold text-gray-800 group-hover:text-pink-dark transition-colors duration-300">
                            <i class="fab fa-html5 mr-2 text-pink-dark"></i>Frontend Development
                        </span>
                        <span class="text-pink-dark font-bold">80%</span>
                    </div>
                    <div class="w-full bg-pink-soft rounded-full h-3">
                        <div class="bg-gradient-to-r from-pink-dark to-pink-primary h-3 rounded-full transition-all duration-1000 group-hover:glow" style="width: 90%"></div>
                    </div>
                </div>

                <div class="group">
                    <div class="flex justify-between mb-3">
                        <span class="font-semibold text-gray-800 group-hover:text-pink-dark transition-colors duration-300">
                            <i class="fas fa-palette mr-2 text-pink-dark"></i>UI/UX Design
                        </span>
                        <span class="text-pink-dark font-bold">81%</span>
                    </div>
                    <div class="w-full bg-pink-soft rounded-full h-3">
                        <div class="bg-gradient-to-r from-pink-dark to-pink-primary h-3 rounded-full transition-all duration-1000 group-hover:glow" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection