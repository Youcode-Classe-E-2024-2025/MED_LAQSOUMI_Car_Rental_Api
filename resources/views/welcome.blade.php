<!-- filepath: /home/medlaq777/Desktop/Car_Rental_Api/resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental Service</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
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
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .btn-primary {
                @apply bg-primary-700 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-primary-800 transition duration-300 focus:ring-4 focus:ring-primary-300 focus:outline-none;
            }
            .input-field {
                @apply block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-lg focus:border-primary-600 focus:ring-2 focus:ring-primary-600 focus:outline-none;
            }
            .form-label {
                @apply block mb-2 text-sm font-medium text-gray-700;
            }
        }
    </style>
</head>
<body class="antialiased font-sans">
    <!-- Navigation -->
    <nav class="bg-primary-950 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-white text-xl font-bold">DriveEase</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cars</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <button id="open-login" class="btn-primary ml-4">Login</button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-primary-900">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Cars</a>
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="#" class="text-gray-300 hover:text<!-- filepath: /home/medlaq777/Desktop/Car_Rental_Api/resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental Service</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
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
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .btn-primary {
                @apply bg-primary-700 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-primary-800 transition duration-300 focus:ring-4 focus:ring-primary-300 focus:outline-none;
            }
            .input-field {
                @apply block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-lg focus:border-primary-600 focus:ring-2 focus:ring-primary-600 focus:outline-none;
            }
            .form-label {
                @apply block mb-2 text-sm font-medium text-gray-700;
            }
        }
    </style>
</head>
<body class="antialiased font-sans">
    <!-- Navigation -->
    <nav class="bg-primary-950 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-white text-xl font-bold">DriveEase</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cars</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <button id="open-login" class="btn-primary ml-4">Login</button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-primary-900">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Cars</a>
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                