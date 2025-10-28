@extends('master') 

@section('title', 'About Me')

@section('main-content')
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-pink-soft/20 rounded-full blur-3xl -translate-y-48 translate-x-48"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-pink-light/30 rounded-full blur-3xl translate-y-48 -translate-x-48"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                About <span class="text-gradient">Me</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Get to know the person behind the code and creativity
            </p>
        </div>
        
        <div class="flex flex-col lg:flex-row items-center gap-16 max-w-7xl mx-auto">
            <div class="w-full lg:w-2/5" data-animate>
                <div class="relative group">
                    <div class="bg-gradient-to-br from-pink-soft to-pink-primary rounded-3xl aspect-[3/4] max-h-[600px] flex items-center justify-center overflow-hidden shadow-2xl glow hover-lift">
                        <img src="{{ asset('images/profil.jpg') }}" alt="Vivian Wijaya" class="h-full w-full object-cover rounded-3xl group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="absolute -top-4 -left-4 w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-pink-dark text-xl shadow-lg border border-pink-soft">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-3/5" data-animate>
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-pink-100 hover-lift">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">Informatics Student & AI Enthusiast</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Hello! I'm Vivian Wijaya, an Informatics student at Ciputra University with a deep passion for 
                        Artificial Intelligence and creative problem-solving. I believe in the power of technology to 
                        transform ideas into meaningful solutions.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        My journey in tech started with curiosity and has evolved into a love for creating digital 
                        experiences that are both functional and beautiful. I'm constantly learning and exploring 
                        new technologies to stay at the forefront of innovation.
                    </p>

                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4">Technologies I Work With</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="bg-gradient-to-r from-pink-soft to-pink-primary text-pink-dark px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:scale-105 transition-transform duration-300 cursor-default">
                                <i class="fab fa-html5 mr-2"></i>HTML/CSS
                            </span>
                            <span class="bg-gradient-to-r from-pink-soft to-pink-primary text-pink-dark px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:scale-105 transition-transform duration-300 cursor-default">
                                <i class="fab fa-js mr-2"></i>JavaScript
                            </span>
                            <span class="bg-gradient-to-r from-pink-soft to-pink-primary text-pink-dark px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:scale-105 transition-transform duration-300 cursor-default">
                                <i class="fab fa-java mr-2"></i>Java
                            </span>
                            <span class="bg-gradient-to-r from-pink-soft to-pink-primary text-pink-dark px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:scale-105 transition-transform duration-300 cursor-default">
                                <i class="fab fa-python mr-2"></i>Python
                            </span>
                            <span class="bg-gradient-to-r from-pink-soft to-pink-primary text-pink-dark px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:scale-105 transition-transform duration-300 cursor-default">
                                <i class="fas fa-brain mr-2"></i>Laravel
                            </span>
                            <span class="bg-gradient-to-r from-pink-soft to-pink-primary text-pink-dark px-4 py-2 rounded-full text-sm font-semibold shadow-md hover:scale-105 transition-transform duration-300 cursor-default">
                                <i class="fas fa-palette mr-2"></i>Figma
                            </span>
                        </div>
                    </div>

                    <a href="{{ url('/contact') }}" class="group bg-pink-dark text-white px-8 py-4 rounded-2xl font-semibold hover:bg-pink-primary transition-all duration-300 shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 glow hover-lift inline-flex items-center">
                        <span>Let's Work Together</span>
                        <i class="fas fa-paper-plane ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-pink-50"> 
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto" data-animate>
            <h3 class="text-3xl font-bold text-center text-gray-800 mb-16">My Education Journey</h3>
            
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-1 bg-gradient-to-b from-pink-dark to-pink-soft transform -translate-x-1/2"></div>
                
                <div class="space-y-12">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-pink-dark rounded-full flex items-center justify-center text-white text-xl mr-8 relative z-10 shadow-lg">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-pink-100 flex-1 hover-lift transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-800">Ciputra University</h4>
                                    <p class="text-pink-dark font-semibold">Informatics - Artificial Intelligence</p>
                                </div>
                                <span class="bg-pink-soft text-pink-dark px-3 py-1 rounded-full text-sm font-medium">2024 - 2028</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-pink-primary rounded-full flex items-center justify-center text-white text-xl mr-8 relative z-10 shadow-lg">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-pink-100 flex-1 hover-lift transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-800">Catholic Rajawali Senior High School</h4>
                                    <p class="text-pink-dark font-semibold">Science Major</p>
                                </div>
                                <span class="bg-pink-soft text-pink-dark px-3 py-1 rounded-full text-sm font-medium">2021 - 2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-pink-soft rounded-full flex items-center justify-center text-pink-dark text-xl mr-8 relative z-10 shadow-lg">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-pink-100 flex-1 hover-lift transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-800">Catholic Rajawali Junior High School</h4>
                                    <p class="text-pink-dark font-semibold">General Education</p>
                                </div>
                                <span class="bg-pink-soft text-pink-dark px-3 py-1 rounded-full text-sm font-medium">2019 - 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-pink-light rounded-full flex items-center justify-center text-pink-dark text-xl mr-8 relative z-10 shadow-lg border border-pink-soft">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg border border-pink-100 flex-1 hover-lift transition-all duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-800">Filadelfia Elementary School</h4>
                                    <p class="text-pink-dark font-semibold">Basic Education</p>
                                </div>
                                <span class="bg-pink-soft text-pink-dark px-3 py-1 rounded-full text-sm font-medium">2014 - 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white relative overflow-hidden">
    <h2 class="text-3xl font-bold text-center mb-10">Language Proficiency</h2>
    <div class="space-y-6 max-w-2xl mx-auto">
        @foreach ($profiles as $profile)
            <div>
                <div class="flex justify-between mb-1">
                    <span class="text-pink-600 font-medium">{{ $profile->name }} ({{ $profile->level }})</span>
                    <span class="text-pink-600 font-medium">{{ $profile->percentage }}%</span>
                </div>
                <div class="w-full bg-pink-100 rounded-full h-2.5">
                    <div class="bg-pink-500 h-2.5 rounded-full" style="width: {{ $profile->percentage }}%"></div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-pink-50 to-white dark:from-gray-900 dark:to-gray-800 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-white/50 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-white/50 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto" data-animate>
            <h3 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-4">My Organizational Journey</h3>
            <p class="text-center text-gray-600 dark:text-gray-300 mb-16">Memories and experiences that shaped my growth</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="relative group">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-pink-200 dark:bg-gray-700 rounded-full flex items-center justify-center z-20">
                        <div class="w-2 h-2 bg-pink-400 dark:bg-pink-500 rounded-full"></div>
                    </div>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0.5 h-2 bg-pink-300 dark:bg-gray-600"></div>
                    
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl border-4 border-white dark:border-gray-700 relative z-10 group-hover:scale-105 group-hover:rotate-2 transition-all duration-500">
                        <div class="mb-4 rounded-lg overflow-hidden shadow-lg border-2 border-pink-100 dark:border-gray-600">
                            <img src="{{ asset('images/isu.jpg') }}" alt="HIMAIF Memory" 
                                 class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hidden w-full h-48 bg-gradient-to-br from-pink-soft to-pink-primary dark:from-gray-700 dark:to-gray-600 items-center justify-center text-white text-4xl">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>

                        <div class="text-center">
                            <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-1">Informatics Student Union</h4>
                            <p class="text-pink-600 dark:text-pink-400 text-sm font-semibold mb-2">Event Division</p>
                            <p class="text-gray-600 dark:text-gray-300 text-xs mb-3">
                                Organizing events and activities, and become master of ceremonys for our department
                            </p>
                            <div class="flex justify-center space-x-1">
                                <div class="w-1 h-1 bg-pink-400 rounded-full"></div>
                                <div class="w-1 h-1 bg-pink-300 rounded-full"></div>
                                <div class="w-1 h-1 bg-pink-200 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute inset-0 bg-pink-200 dark:bg-gray-700 rounded-2xl transform rotate-3 scale-95 opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                </div>

                <div class="relative group">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-pink-200 dark:bg-gray-700 rounded-full flex items-center justify-center z-20">
                        <div class="w-2 h-2 bg-pink-400 dark:bg-pink-500 rounded-full"></div>
                    </div>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0.5 h-2 bg-pink-300 dark:bg-gray-600"></div>
                    
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl border-4 border-white dark:border-gray-700 relative z-10 group-hover:scale-105 group-hover:-rotate-2 transition-all duration-500">
                        <div class="mb-4 rounded-lg overflow-hidden shadow-lg border-2 border-pink-100 dark:border-gray-600">
                            <img src="{{ asset('images/src.jpg') }}" alt="AI Club Memory" 
                                 class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hidden w-full h-48 bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900 dark:to-blue-800 items-center justify-center text-white text-4xl">
                                <i class="fas fa-robot"></i>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-1">Entrance 3.0</h4>
                            <p class="text-blue-600 dark:text-blue-400 text-sm font-semibold mb-2">SRC Division</p>
                            <p class="text-gray-600 dark:text-gray-300 text-xs mb-3">
                                Secure the campus during the event 
                            </p>
                            <div class="flex justify-center space-x-1">
                                <div class="w-1 h-1 bg-blue-400 rounded-full"></div>
                                <div class="w-1 h-1 bg-blue-300 rounded-full"></div>
                                <div class="w-1 h-1 bg-blue-200 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 bg-blue-200 dark:bg-blue-900 rounded-2xl transform -rotate-3 scale-95 opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                </div>

                <div class="relative group">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-pink-200 dark:bg-gray-700 rounded-full flex items-center justify-center z-20">
                        <div class="w-2 h-2 bg-pink-400 dark:bg-pink-500 rounded-full"></div>
                    </div>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 w-0.5 h-2 bg-pink-300 dark:bg-gray-600"></div>
                    
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl border-4 border-white dark:border-gray-700 relative z-10 group-hover:scale-105 group-hover:rotate-1 transition-all duration-500">
                        <div class="mb-4 rounded-lg overflow-hidden shadow-lg border-2 border-pink-100 dark:border-gray-600">
                            <img src="{{ asset('images/rhd.jpg') }}" alt="Volunteer Memory" 
                                 class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-700"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hidden w-full h-48 bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900 dark:to-green-800 items-center justify-center text-white text-4xl">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-1">Orientation Week 2025</h4>
                            <p class="text-green-600 dark:text-green-400 text-sm font-semibold mb-2">RHD Division</p>
                            <p class="text-gray-600 dark:text-gray-300 text-xs mb-3">
                                Make sure all the committees and new students are feeling healthy and safe during the event
                            </p>
                            <div class="flex justify-center space-x-1">
                                <div class="w-1 h-1 bg-green-400 rounded-full"></div>
                                <div class="w-1 h-1 bg-green-300 rounded-full"></div>
                                <div class="w-1 h-1 bg-green-200 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 bg-green-200 dark:bg-green-900 rounded-2xl transform rotate-2 scale-95 opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-2 text-pink-500 dark:text-pink-400">
                    <div class="w-2 h-2 bg-pink-400 rounded-full animate-pulse"></div>
                    <span class="text-sm font-medium">More memories to come...</span>
                    <div class="w-2 h-2 bg-pink-400 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection