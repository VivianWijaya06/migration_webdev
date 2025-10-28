<header class="bg-white/90 backdrop-blur-lg border-b border-pink-100 sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center py-4">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gradient hover:scale-105 transition-transform duration-300">
                <span class="floating">✨</span> porto.vivi
            </a>
            
            <ul class="hidden md:flex space-x-8">
                <li>
                    <a href="{{ url('/') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-2 rounded-full hover:bg-pink-soft {{ request()->is('/') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-2 rounded-full hover:bg-pink-soft {{ request()->is('about') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ url('/blog') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-2 rounded-full hover:bg-pink-soft {{ request()->is('blog') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-2 rounded-full hover:bg-pink-soft {{ request()->is('contact') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">
                        Contact
                    </a>
                </li>
            </ul>
            
            <button class="md:hidden text-gray-600 text-xl hover:text-pink-dark transition duration-300" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <div class="md:hidden hidden pb-4 animate-fade-in border-t border-pink-100 mt-2" id="mobileMenu">
            <div class="flex flex-col space-y-3 pt-4">
                <a href="{{ url('/') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-3 rounded-xl hover:bg-pink-soft {{ request()->is('/') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">Home</a>
                <a href="{{ url('/about') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-3 rounded-xl hover:bg-pink-soft {{ request()->is('about') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">About</a>
                <a href="{{ url('/blog') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-3 rounded-xl hover:bg-pink-soft {{ request()->is('blog') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">Blog</a>
                <a href="{{ url('/contact') }}" class="font-semibold hover:text-pink-dark transition-all duration-300 px-4 py-3 rounded-xl hover:bg-pink-soft {{ request()->is('contact') ? 'text-pink-dark bg-pink-soft' : 'text-gray-600' }}">Contact</a>
            </div>
        </div>
    </div>
</header>