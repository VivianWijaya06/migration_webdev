@extends('master')

@section('title', 'Contact Me')

@section('main-content')
<section class="py-24 bg-gradient-to-b from-white to-pink-light relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-pink-soft/20 rounded-full blur-3xl -translate-x-48 -translate-y-48"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-pink-primary/30 rounded-full blur-3xl translate-x-48 translate-y-48"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-20" data-animate>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Let's <span class="text-gradient">Connect</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Ready to bring your ideas to life? Let's start a conversation and create something amazing together!
            </p>
        </div>
        
        <div class="flex flex-col lg:flex-row gap-12 max-w-7xl mx-auto">
            <div class="w-full lg:w-2/5" data-animate>
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-pink-100 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8">Get In Touch</h3>
                    
                    <div class="space-y-8">
                        <div class="flex items-start group">
                            <div class="bg-gradient-to-br from-pink-soft to-pink-primary w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-1 group-hover:text-pink-dark transition-colors duration-300">Location</h4>
                                <p class="text-gray-600">Makassar, Indonesia</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start group">
                            <div class="bg-gradient-to-br from-pink-soft to-pink-primary w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-1 group-hover:text-pink-dark transition-colors duration-300">Email</h4>
                                <a href="mailto:vwijaya11@student.ciputra.ac.id" class="text-gray-600 hover:text-pink-dark transition-colors duration-300">
                                    vwijaya11@student.ciputra.ac.id
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="bg-gradient-to-br from-pink-soft to-pink-primary w-14 h-14 rounded-2xl flex items-center justify-center text-white text-xl mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800 mb-1 group-hover:text-pink-dark transition-colors duration-300">Phone</h4>
                                <a href="tel:+6281356353033" class="text-gray-600 hover:text-pink-dark transition-colors duration-300">
                                    +62 813 5635 3033
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h4 class="text-lg font-semibold text-gray-800 mb-6">Follow My Journey</h4>
                        <div class="flex space-x-4">
                            <a href="https://www.instagram.com/vivian_wijaya_?igsh=MXAzMWcwdDJ1b2lzYw==" class="group bg-pink-soft w-14 h-14 rounded-2xl flex items-center justify-center text-pink-dark hover:bg-pink-dark hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fab fa-instagram text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/vivian-wijaya-a8583825a/" class="group bg-pink-soft w-14 h-14 rounded-2xl flex items-center justify-center text-pink-dark hover:bg-pink-dark hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fab fa-linkedin-in text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </a>
                            <a href="https://github.com/VivianWijaya06" class="group bg-pink-soft w-14 h-14 rounded-2xl flex items-center justify-center text-pink-dark hover:bg-pink-dark hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fab fa-github text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </a>
                            <a href="https://www.facebook.com/share/1NXhw8tYeX/?mibextid=qi2Omg" class="group bg-pink-soft w-14 h-14 rounded-2xl flex items-center justify-center text-pink-dark hover:bg-pink-dark hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fab fa-facebook-f text-xl group-hover:scale-110 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-pink-100 hover-lift">
                        <div class="text-2xl font-bold text-pink-dark mb-2">3+</div>
                        <div class="text-gray-600 text-sm">Projects Completed</div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-pink-100 hover-lift">
                        <div class="text-2xl font-bold text-pink-dark mb-2">24/7</div>
                        <div class="text-gray-600 text-sm">Response Ready</div>
                    </div>
                </div>
            </div>
            
            <div class="w-full lg:w-3/5" data-animate>
                <div class="bg-white rounded-3xl p-8 shadow-2xl border border-pink-100 hover-lift">
                    <form method="POST" action="{{ url('/contact') }}" class="space-y-6" id="contactForm">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="name" class="block text-sm font-semibold text-gray-800 mb-2 group-hover:text-pink-dark transition-colors duration-300">
                                    <i class="fas fa-user mr-2 text-pink-dark"></i>Full Name
                                </label>
                                <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full px-4 py-4 border-2 border-pink-soft rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-dark focus:border-pink-dark transition-all duration-300 bg-white placeholder-gray-400 hover:border-pink-primary">
                                <p id="nameError" class="text-red-500 text-sm mt-1 hidden">Please enter your full name</p>
                            </div>
                            <div class="group">
                                <label for="email" class="block text-sm font-semibold text-gray-800 mb-2 group-hover:text-pink-dark transition-colors duration-300">
                                    <i class="fas fa-envelope mr-2 text-pink-dark"></i>Email Address
                                </label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full px-4 py-4 border-2 border-pink-soft rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-dark focus:border-pink-dark transition-all duration-300 bg-white placeholder-gray-400 hover:border-pink-primary">
                                <p id="emailError" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address</p>
                            </div>
                        </div>
                        
                        <div class="group">
                            <label for="subject" class="block text-sm font-semibold text-gray-800 mb-2 group-hover:text-pink-dark transition-colors duration-300">
                                <i class="fas fa-tag mr-2 text-pink-dark"></i>Subject
                            </label>
                            <input type="text" id="subject" name="subject" placeholder="What's this about?" class="w-full px-4 py-4 border-2 border-pink-soft rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-dark focus:border-pink-dark transition-all duration-300 bg-white placeholder-gray-400 hover:border-pink-primary">
                            <p id="subjectError" class="text-red-500 text-sm mt-1 hidden">Please enter a subject</p>
                        </div>
                        
                        <div class="group">
                            <label for="message" class="block text-sm font-semibold text-gray-800 mb-2 group-hover:text-pink-dark transition-colors duration-300">
                                <i class="fas fa-comment mr-2 text-pink-dark"></i>Your Message
                            </label>
                            <textarea id="message" name="message" placeholder="Tell me about your project or idea..." rows="6" class="w-full px-4 py-4 border-2 border-pink-soft rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-dark focus:border-pink-dark transition-all duration-300 bg-white placeholder-gray-400 hover:border-pink-primary resize-none"></textarea>
                            <p id="messageError" class="text-red-500 text-sm mt-1 hidden">Please enter your message</p>
                        </div>
                        
                        <button type="submit" class="group w-full bg-gradient-to-r from-pink-dark to-pink-primary text-white py-4 rounded-2xl font-bold hover:from-pink-primary hover:to-pink-dark transition-all duration-300 shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 glow">
                            <span class="flex items-center justify-center">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </span>
                        </button>
                    </form>

                    <div id="successMessage" class="hidden mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-xl text-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        Thank you! Your message has been sent successfully.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/mks.jpeg') }}'); background-attachment: fixed;"></div>
    <div class="absolute inset-0 bg-black/50"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-animate>
            <h3 class="text-3xl font-bold text-white mb-12">Based in Beautiful Makassar</h3>
            <div class="bg-white/95 rounded-3xl p-8 shadow-2xl">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-16 h-16 bg-pink-dark rounded-2xl flex items-center justify-center text-white text-2xl mr-4 shadow-lg">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="text-left">
                        <h4 class="text-xl font-bold text-gray-800">Makassar, Indonesia</h4>
                        <p class="text-pink-dark font-semibold">The City of Daeng</p>
                    </div>
                </div>
                <p class="text-gray-600 text-lg">
                    Located in the vibrant city of Makassar, I draw inspiration from its rich culture 
                    and beautiful landscapes to create digital experiences that resonate globally.
                </p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        let isValid = true;
        
        document.querySelectorAll('[id$="Error"]').forEach(el => el.classList.add('hidden'));
        
        if (!name) {
            document.getElementById('nameError').classList.remove('hidden');
            isValid = false;
        }
        
        if (!email || !email.includes('@')) {
            document.getElementById('emailError').classList.remove('hidden');
            isValid = false;
        }
        
        if (!subject) {
            document.getElementById('subjectError').classList.remove('hidden');
            isValid = false;
        }
        
        if (!message) {
            document.getElementById('messageError').classList.remove('hidden');
            isValid = false;
        }
        
        if (isValid) {
            this.submit();
        }
    });

    @if(session('success'))
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('successMessage').classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('successMessage').classList.add('hidden');
            }, 5000);
        });
    @endif
</script>
@endpush
@endsection