<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DriveEase - Premium Car Rental Service</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f5ff',
                            100: '#e0eaff',
                            200: '#c7d9ff',
                            300: '#a3bdff',
                            400: '#7a99ff',
                            500: '#5b78ff',
                            600: '#3a56f5',
                            700: '#2e43dc',
                            800: '#1e2fb0',
                            900: '#192a8c',
                            950: '#111a52'
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'bounce-slow': 'bounce 3s infinite',
                        'fade-in': 'fadeIn 1s ease-in',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'slide-down': 'slideDown 0.5s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        slideUp: {
                            '0%': {
                                transform: 'translateY(20px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: '1'
                            },
                        },
                        slideDown: {
                            '0%': {
                                transform: 'translateY(-20px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: '1'
                            },
                        },
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .btn-primary {
                @apply bg-primary-700 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-primary-800 transition duration-300 focus:ring-4 focus:ring-primary-300 focus:outline-none shadow-md hover:shadow-lg transform hover:-translate-y-1;
            }

            .input-field {
                @apply block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-lg focus:border-primary-600 focus:ring-2 focus:ring-primary-600 focus:outline-none transition duration-300;
            }

            .form-label {
                @apply block mb-2 text-sm font-medium text-gray-700;
            }

            .card-hover {
                @apply transition-all duration-300 hover:shadow-xl hover:-translate-y-2;
            }

            .section-animate {
                @apply opacity-0 translate-y-4 transition duration-700;
            }

            .section-animate.is-visible {
                @apply opacity-100 translate-y-0;
            }
        }
    </style>
</head>

<body class="antialiased font-sans">
    <!-- Navigation -->
    <nav class="bg-primary-950 shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-white text-xl font-bold">DriveEase</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Home</a>
                    <a href="#cars"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Cars</a>
                    <a href="#services"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300">Services</a>
                    <button id="open-login" class="btn-primary ml-4 animate-pulse">Login</button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-primary-900">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#cars"
                    class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Cars</a>
                <a href="#services"
                    class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <button id="open-login-mobile" class="btn-primary w-full mt-3">Login</button>
            </div>
        </div>
    </nav>

    <!-- Registration Modal -->
    <div id="register-modal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md">
            <div class="bg-white rounded-xl shadow-2xl p-8 transform transition-all duration-300 opacity-0 translate-y-4"
                id="register-modal-content">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Create Account</h2>
                    <button id="close-register" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" id="first-name" class="input-field" placeholder="John" required>
                        </div>
                        <div>
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" id="last-name" class="input-field" placeholder="Doe" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="register-email" class="form-label">Email Address</label>
                        <input type="email" id="register-email" class="input-field" placeholder="name@example.com"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" class="input-field" placeholder="(123) 456-7890">
                    </div>
                    <div class="mb-4">
                        <label for="register-password" class="form-label">Password</label>
                        <input type="password" id="register-password" class="input-field" placeholder="••••••••"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" id="confirm-password" class="input-field" placeholder="••••••••"
                            required>
                    </div>
                    <div class="flex items-center mb-6">
                        <input id="terms" type="checkbox"
                            class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded" required>
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the <a href="#" class="text-primary-700 hover:text-primary-800">Terms of
                                Service</a> and <a href="#"
                                class="text-primary-700 hover:text-primary-800">Privacy Policy</a>
                        </label>
                    </div>
                    <button type="submit" class="btn-primary w-full mb-4">Create Account</button>
                    <div class="text-center">
                        <span class="text-sm text-gray-600">Already have an account? </span>
                        <a href="#" id="show-login"
                            class="text-primary-700 hover:text-primary-800 text-sm font-medium">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="login-modal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md">
            <div class="bg-white rounded-xl shadow-2xl p-8 transform transition-all duration-300 opacity-0 translate-y-4"
                id="modal-content">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Welcome Back</h2>
                    <button id="close-login" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" class="input-field" placeholder="name@example.com"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="input-field" placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input id="remember-me" type="checkbox"
                                class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="text-primary-700 hover:text-primary-800 font-medium">Forgot
                                password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary w-full mb-4">Sign In</button>
                    <div class="text-center">
                        <span class="text-sm text-gray-600">Don't have an account? </span>
                        <a href="#" class="text-primary-700 hover:text-primary-800 text-sm font-medium">Sign
                            Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-900 to-primary-950 text-white pt-24 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 animate__animated animate__fadeInLeft">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Find Your Perfect Ride For Any
                        Journey</h1>
                    <p class="text-lg mb-8 text-gray-200">Experience the freedom of the open road with our premium car
                        rental service. Easy booking, competitive rates, and exceptional service.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#cars" class="btn-primary animate-bounce-slow">Browse Cars</a>
                        <a href="#how-it-works"
                            class="bg-transparent border-2 border-white text-white px-6 py-2.5 rounded-lg font-medium hover:bg-white hover:text-primary-900 transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">How
                            It Works</a>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-10 animate__animated animate__fadeInRight">
                    <img src="https://images.unsplash.com/photo-1546614042-7df3c24c9e5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Luxury Car"
                        class="rounded-lg shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Search Form -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 transform -translate-y-16 section-animate is-visible">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Find Your Ideal Rental Car</h2>
                <form class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="transition duration-300 hover:scale-105">
                        <label for="location" class="form-label">Pickup Location</label>
                        <select id="location" class="input-field">
                            <option value="">Select location</option>
                            <option value="airport">Airport</option>
                            <option value="downtown">Downtown</option>
                            <option value="north">North Station</option>
                            <option value="south">South Station</option>
                        </select>
                    </div>
                    <div class="transition duration-300 hover:scale-105">
                        <label for="pickup-date" class="form-label">Pickup Date</label>
                        <input type="date" id="pickup-date" class="input-field">
                    </div>
                    <div class="transition duration-300 hover:scale-105">
                        <label for="return-date" class="form-label">Return Date</label>
                        <input type="date" id="return-date" class="input-field">
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="btn-primary w-full transform transition hover:scale-105">Search
                            Available Cars</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Featured Cars -->
    <section id="cars" class="py-16 section-animate">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Featured Vehicles</h2>
                <p class="mt-4 text-xl text-gray-600">Choose from our selection of premium vehicles</p>
                <div class="w-24 h-1 bg-primary-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Card 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Sedan" class="w-full h-64 object-cover transition duration-500 hover:scale-110">
                        <div
                            class="absolute top-4 right-4 bg-primary-700 text-white py-1 px-3 rounded-full text-sm font-semibold">
                            Best Seller
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold">Toyota Camry</h3>
                            <span class="text-primary-700 font-bold">$60/day</span>
                        </div>
                        <div class="flex items-center text-gray-600 mb-4">
                            <span class="mr-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8 16.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM15 16.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                    </path>
                                    <path
                                        d="M3 4h3.5a1 1 0 01.9.5l.9 1.5a1 1 0 00.9.5h9.8a1 1 0 01.9 1.4L18 13.5a1 1 0 01-.9.5H4a1 1 0 01-1-1V5a1 1 0 011-1z">
                                    </path>
                                </svg>
                                Sedan
                            </span>
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Auto
                            </span>
                        </div>
                        <div class="grid grid-cols-4 gap-2 mb-4 text-xs text-center">
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">4</span>
                                Seats
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">2</span>
                                Luggage
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">A/C</span>
                                Climate
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">32</span>
                                MPG
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button
                                class="text-primary-700 font-medium hover:text-primary-900 transition duration-300">View
                                Details</button>
                            <button class="btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Car Card 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Tesla" class="w-full h-64 object-cover transition duration-500 hover:scale-110">
                        <div
                            class="absolute top-4 right-4 bg-green-600 text-white py-1 px-3 rounded-full text-sm font-semibold">
                            Eco Friendly
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold">Tesla Model 3</h3>
                            <span class="text-primary-700 font-bold">$95/day</span>
                        </div>
                        <div class="flex items-center text-gray-600 mb-4">
                            <span class="mr-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8 16.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM15 16.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                    </path>
                                    <path
                                        d="M3 4h3.5a1 1 0 01.9.5l.9 1.5a1 1 0 00.9.5h9.8a1 1 0 01.9 1.4L18 13.5a1 1 0 01-.9.5H4a1 1 0 01-1-1V5a1 1 0 011-1z">
                                    </path>
                                </svg>
                                Electric
                            </span>
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Auto
                            </span>
                        </div>
                        <div class="grid grid-cols-4 gap-2 mb-4 text-xs text-center">
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">5</span>
                                Seats
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">2</span>
                                Luggage
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">A/C</span>
                                Climate
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">310</span>
                                Range
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button
                                class="text-primary-700 font-medium hover:text-primary-900 transition duration-300">View
                                Details</button>
                            <button class="btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Car Card 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="SUV" class="w-full h-64 object-cover transition duration-500 hover:scale-110">
                        <div
                            class="absolute top-4 right-4 bg-yellow-600 text-white py-1 px-3 rounded-full text-sm font-semibold">
                            Adventure
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold">Jeep Wrangler</h3>
                            <span class="text-primary-700 font-bold">$85/day</span>
                        </div>
                        <div class="flex items-center text-gray-600 mb-4">
                            <span class="mr-4 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M8 16.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM15 16.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                    </path>
                                    <path
                                        d="M3 4h3.5a1 1 0 01.9.5l.9 1.5a1 1 0 00.9.5h9.8a1 1 0 01.9 1.4L18 13.5a1 1 0 01-.9.5H4a1 1 0 01-1-1V5a1 1 0 011-1z">
                                    </path>
                                </svg>
                                SUV
                            </span>
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Manual
                            </span>
                        </div>
                        <div class="grid grid-cols-4 gap-2 mb-4 text-xs text-center">
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">4</span>
                                Seats
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">3</span>
                                Luggage
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">A/C</span>
                                Climate
                            </div>
                            <div class="bg-gray-100 rounded p-2">
                                <span class="block font-semibold">4x4</span>
                                Drive
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button
                                class="text-primary-700 font-medium hover:text-primary-900 transition duration-300">View
                                Details</button>
                            <button class="btn-primary">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="#" class="btn-primary inline-block">View All Vehicles</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-50 section-animate">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Premium Services</h2>
                <p class="mt-4 text-xl text-gray-600">Enhancing your driving experience with premium add-ons</p>
                <div class="w-24 h-1 bg-primary-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center card-hover">
                    <div class="bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Insurance Coverage</h3>
                    <p class="text-gray-600">Comprehensive protection plans to keep you worry-free on your journey</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center card-hover">
                    <div class="bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">GPS Navigation</h3>
                    <p class="text-gray-600">Never get lost with our premium GPS navigation systems</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center card-hover">
                    <div class="bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock customer support throughout your rental period</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center card-hover">
                    <div class="bg-primary-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary-700" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Easy Payment</h3>
                    <p class="text-gray-600">Flexible payment options for a seamless booking experience</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-primary-950 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">DriveEase</h3>
                    <p class="text-gray-300 mb-4">Premium car rental services for all your driving needs. Experience
                        luxury and convenience on your terms.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Home</a></li>
                        <li><a href="#cars" class="text-gray-300 hover:text-white transition">Browse Cars</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-white transition">Services</a></li>
                        <li><a href="#how-it-works" class="text-gray-300 hover:text-white transition">How It Works</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">FAQs</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Terms & Conditions</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Privacy Policy</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Sitemap</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-1 text-primary-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>123 Rental Street, Downtown<br>New York, NY 10001</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-primary-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>(555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-primary-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>support@driveease.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-10 pt-8 text-center text-gray-400">
                <p>© 2023 DriveEase. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactivity -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Login modal functionality
        const loginModal = document.getElementById('login-modal');
        const modalContent = document.getElementById('modal-content');
        const openLoginButtons = document.querySelectorAll('#open-login, #open-login-mobile');
        const closeLoginButton = document.getElementById('close-login');

        openLoginButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Show the modal
                loginModal.classList.remove('hidden');
                // Animate the modal content
                setTimeout(() => {
                    modalContent.classList.remove('opacity-0', 'translate-y-4');
                }, 10);
            });
        });

        closeLoginButton.addEventListener('click', function() {
            // Animate out
            modalContent.classList.add('opacity-0', 'translate-y-4');
            // Hide the modal after animation
            setTimeout(() => {
                loginModal.classList.add('hidden');
            }, 300);
        });

        // Close modal when clicking outside
        loginModal.addEventListener('click', function(e) {
            if (e.target === loginModal) {
                // Animate out
                modalContent.classList.add('opacity-0', 'translate-y-4');
                // Hide the modal after animation
                setTimeout(() => {
                    loginModal.classList.add('hidden');
                }, 300);
            }
        });


        // Registration modal functionality
        const registerModal = document.getElementById('register-modal');
        const registerModalContent = document.getElementById('register-modal-content');
        const signUpLinks = document.querySelectorAll('a[href="#"][class*="text-primary-700"]:not(#show-login)');
        const closeRegisterButton = document.getElementById('close-register');
        const showLoginLink = document.getElementById('show-login');

        // Open registration modal when clicking "Sign Up" links
        signUpLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                // Hide login modal if open
                modalContent.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    loginModal.classList.add('hidden');
                    // Show register modal
                    registerModal.classList.remove('hidden');
                    setTimeout(() => {
                        registerModalContent.classList.remove('opacity-0', 'translate-y-4');
                    }, 10);
                }, 300);
            });
        });

        // Close register modal
        closeRegisterButton.addEventListener('click', function() {
            // Animate out
            registerModalContent.classList.add('opacity-0', 'translate-y-4');
            // Hide the modal after animation
            setTimeout(() => {
                registerModal.classList.add('hidden');
            }, 300);
        });

        // Switch from register to login
        showLoginLink.addEventListener('click', function(e) {
            e.preventDefault();
            // Hide register modal
            registerModalContent.classList.add('opacity-0', 'translate-y-4');
            setTimeout(() => {
                registerModal.classList.add('hidden');
                // Show login modal
                loginModal.classList.remove('hidden');
                setTimeout(() => {
                    modalContent.classList.remove('opacity-0', 'translate-y-4');
                }, 10);
            }, 300);
        });

        // Close modal when clicking outside
        registerModal.addEventListener('click', function(e) {
            if (e.target === registerModal) {
                // Animate out
                registerModalContent.classList.add('opacity-0', 'translate-y-4');
                // Hide the modal after animation
                setTimeout(() => {
                    registerModal.classList.add('hidden');
                }, 300);
            }
        });

        // Section animations on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section-animate');

            function checkSections() {
                sections.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    if (sectionTop < windowHeight * 0.75) {
                        section.classList.add('is-visible');
                    }
                });
            }

            // Check sections on load
            checkSections();

            // Check sections on scroll
            window.addEventListener('scroll', checkSections);
        });
    </script>
</body>

</html>
