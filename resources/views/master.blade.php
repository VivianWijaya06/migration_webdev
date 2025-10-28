<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Vivian Wijaya') - Porto Vivi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #ffeef2 0%, #ffd1dc 50%, #ffb6c1 100%);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #e75480 0%, #ff6b95 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .glow {
            box-shadow: 0 0 20px rgba(231, 84, 128, 0.3);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
        }
        
        .hover\:glow:hover {
            box-shadow: 0 0 25px rgba(231, 84, 128, 0.4);
        }
        
        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                transform: translateY(30px); 
                opacity: 0; 
            }
            to { 
                transform: translateY(0); 
                opacity: 1; 
            }
        }
        
        @keyframes bounceIn {
            0% { 
                transform: scale(0.3); 
                opacity: 0; 
            }
            50% { 
                transform: scale(1.05); 
            }
            100% { 
                transform: scale(1); 
                opacity: 1; 
            }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }
        
        .animate-slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        .animate-bounce-in {
            animation: bounceIn 0.8s ease-out;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #ffeef2;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #ffb6c1;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #e75480;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'pink': {
                            soft: '#ffd1dc',
                            light: '#ffeef2',
                            primary: '#ffb6c1',
                            dark: '#e75480',
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'bounce-in': 'bounceIn 0.8s ease-out',
                        'bounce': 'bounce 1s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { 
                                transform: 'translateY(30px)', 
                                opacity: '0' 
                            },
                            '100%': { 
                                transform: 'translateY(0)', 
                                opacity: '1' 
                            },
                        },
                        bounceIn: {
                            '0%': { 
                                transform: 'scale(0.3)', 
                                opacity: '0' 
                            },
                            '50%': { 
                                transform: 'scale(1.05)' 
                            },
                            '100%': { 
                                transform: 'scale(1)', 
                                opacity: '1' 
                            },
                        },
                        bounce: {
                            '0%, 100%': {
                                transform: 'translateY(-25%)',
                                animationTimingFunction: 'cubic-bezier(0.8,0,1,1)'
                            },
                            '50%': {
                                transform: 'none',
                                animationTimingFunction: 'cubic-bezier(0,0,0.2,1)'
                            }
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                    }
                }
            }
        }
    </script>
    
    @stack('styles')
</head>
<body class="bg-white text-gray-800 font-inter antialiased">
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-40 -right-32 w-80 h-80 bg-pink-soft rounded-full blur-3xl opacity-20"></div>
        <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-pink-primary rounded-full blur-3xl opacity-20"></div>
        <div class="absolute top-1/2 left-1/3 w-60 h-60 bg-pink-light rounded-full blur-3xl opacity-30"></div>
    </div>

    @include('partials.navbar')

    <main class="min-h-screen relative z-10">
        @yield('main-content')
    </main>

    @include('partials.footer')

    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('animate-fade-in');
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-animate]').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease-out';
                observer.observe(el);
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            const loadingElements = document.querySelectorAll('.animate-bounce-in');
            loadingElements.forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1}s`;
            });
        });

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 z-50 p-4 rounded-xl shadow-2xl transform transition-all duration-300 ${
                type === 'success' ? 'bg-green-500 text-white' : 
                type === 'error' ? 'bg-red-500 text-white' : 
                'bg-blue-500 text-white'
            }`;
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        }

        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.3s ease-in-out';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>

    @stack('scripts')
</body>
</html>