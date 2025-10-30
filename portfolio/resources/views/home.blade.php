@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center px-8 md:px-16 lg:px-24">
    <div class="max-w-4xl w-full mx-auto section-margin-left">
        <p class="text-blue-400 text-lg mb-4 font-light">
            Hoi, ik ben
        </p>
        <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold mb-6 text-white">
            Nick Colijn
        </h1>

        <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 text-gray-400">
            <span id="typing-text"></span><span class="typing-cursor">|</span>
        </h2>

        <p class="text-gray-400 text-lg md:text-xl max-w-2xl mb-12 leading-relaxed">
            Ik ben software developer met een focus op backend-logica, serverbeheer en schaalbare weboplossingen.
        </p>

        <a href="#projects" class="inline-block bg-transparent border-2 border-blue-400 text-blue-400 px-8 py-4 rounded transition-all duration-300 text-lg font-medium hover:bg-blue-400 hover:text-white hover:shadow-md hover:shadow-blue-400/30">
            Bekijk mijn werk
        </a>
    </div>
</section>

<section id="about" class="flex items-center px-8 md:px-16 lg:px-24 py-32">
    <div class="w-full section-margin">
        <div class="flex items-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold whitespace-nowrap">
                <span class="text-blue-400 text-2xl font-mono">01.</span>
                <span class="text-white ml-4">Over mij</span>
            </h2>
            <div class="ml-8 h-px bg-gray-600 grow"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>

                <div class="space-y-5 text-gray-400 text-[1.35rem] leading-relaxed">
                    <p>
                        Hello! I'm a passionate software developer with a knack for creating elegant solutions in the least amount of time. I have experience in full-stack development, working with modern technologies to build robust and scalable web applications.
                    </p>

                    <p>
                        My journey in tech started with a curiosity for how things work, and it has evolved into a career where I continuously learn and create. I thrive on turning complex problems into simple, beautiful, and intuitive designs.
                    </p>

                    <p>
                        When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying a good cup of coffee.
                    </p>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end">
                <div class="relative">
                    <div class="rounded-lg overflow-hidden border-4 border-blue-400/50 w-96 h-96">
                        <img src="{{ Vite::asset('resources/assets/img/foto.jpg') }}" alt="Profile Photo" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="py-32">
    <div class="px-8 md:px-16 lg:px-24">
        <div class="w-full section-margin">
            <div class="flex items-center mb-16 pr-[20%]">
                <h2 class="text-4xl md:text-5xl font-bold whitespace-nowrap">
                    <span class="text-blue-400 text-2xl font-mono">02.</span>
                    <span class="text-white ml-4">Projecten</span>
                </h2>
                <div class="ml-8 h-px bg-gray-600 grow"></div>
            </div>
        </div>
    </div>

    <div class="px-8 md:px-16 lg:px-24">
        <div class="project-scroll-wrapper section-margin">
            <div class="flex gap-8 overflow-x-auto pb-8 project-scroll">
                <div class="bg-gray-800 rounded-lg overflow-hidden shrink-0 w-96 snap-center">
                    <div class="h-48 bg-gray-700 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/img/veo.png') }}" alt="VanEderenOntruimingen" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">vanederenontruimingen.nl</h3>
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            Een eenvoudige onepager met contactformulier voor woningontruiming.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded text-sm">Tailwind CSS</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded text-sm">Plesk</span>
                        </div>

                        <div class="flex gap-4">
                            <a href="https://vanederenontruimingen.nl" target="_blank" class="text-blue-400 hover:underline">Live Demo</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shrink-0 w-96 snap-center">
                    <div class="h-48 bg-gray-700 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/img/loonstrookje.png') }}" alt="Loonstrookje" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">Loonstrookje</h3>
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            Een webapplicatie om loonstrookjes digitaal te bekijken en beheren, met beveiligde toegang en betalingsmogelijkheden.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded text-sm">PHP</span>
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 rounded text-sm">Mollie API</span>
                        </div>

                        <div class="flex gap-4">
                            <a href="#" class="text-blue-400 hover:underline">Live Demo</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shrink-0 w-96 snap-center">
                    <div class="h-48 bg-gray-700 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/img/planetnode.png') }}" alt="Planetnode" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">Planetnode</h3>
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            De nieuwe website van Planetnode gemaakt in samenwerking met een designer.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-orange-500/20 text-orange-400 rounded text-sm">Tailwind CSS</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">MySQL</span>
                        </div>

                        <div class="flex gap-4">
                            <a href="#" class="text-blue-400 hover:underline">Live Demo</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shrink-0 w-96 snap-center">
                    <div class="h-48 bg-gray-700 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/img/portfolio.png') }}" alt="Portfolio" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">Portfolio</h3>
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            Een zelfgehoste portfolio-onepager met contactformulier.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 rounded text-sm">Tailwind</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">Linux</span>
                        </div>

                        <div class="flex gap-4">
                            <a href="https://github.com/Nick-091206/Portfolio" target="_blank" class="text-blue-400 hover:underline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shrink-0 w-96 snap-center">
                    <div class="h-48 bg-gray-700 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/img/homelab.png') }}" alt="Real-time Chat" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">Homelab</h3>
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            Een home lab setup met diverse zelfgehoste applicaties zoals hoasted en TrueNas.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded text-sm">Linux</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">Proxmox</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden shrink-0 w-96 snap-center">
                    <div class="h-48 bg-gray-700 flex items-center justify-center overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/img/stemwijzer.png') }}" alt="Portfolio CMS" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3">Stemwijzer</h3>
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            Een stemwijzer voor een school opdracht.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded text-sm">React</span>
                            <span class="px-3 py-1 bg-pink-500/20 text-pink-400 rounded text-sm">React Native</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded text-sm">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="py-32">
    <div class="px-8 md:px-16 lg:px-24">
        <div class="w-full section-margin">
            <div class="flex items-center mb-16 pr-[20%]">
                <h2 class="text-4xl md:text-5xl font-bold whitespace-nowrap">
                    <span class="text-blue-400 text-2xl font-mono">03.</span>
                    <span class="text-white ml-4">Skills</span>
                </h2>
                <div class="ml-8 h-px bg-gray-600 grow"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">Frameworks & Libraries</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Tool.svg') }}" alt="Tool icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            React & React Native
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Tool.svg') }}" alt="Tool icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Laravel
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Tool.svg') }}" alt="Tool icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Tailwind CSS
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Tool.svg') }}" alt="Tool icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Vue JS
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">Languages</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Code.svg') }}" alt="Code icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            JavaScript
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Code.svg') }}" alt="Code icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            PHP
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Code.svg') }}" alt="Code icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Python
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Code.svg') }}" alt="Code icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            HTML & CSS
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">Tools</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Terminal.svg') }}" alt="Terminal icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Git & GitHub
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Terminal.svg') }}" alt="Terminal icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Docker
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Terminal.svg') }}" alt="Terminal icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Linux
                        </li>
                        <li class="flex items-center text-gray-400 text-lg">
                            <img src="{{ Vite::asset('resources/assets/img/Terminal.svg') }}" alt="Terminal icon" class="w-6 h-6 mr-3 inline-block align-middle">
                            Figma
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="flex items-center px-8 md:px-16 lg:px-24 py-32">
    <div class="w-full section-margin">
        <div class="flex items-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold whitespace-nowrap">
                <span class="text-blue-400 text-2xl font-mono">04.</span>
                <span class="text-white ml-4">Contact</span>
            </h2>
            <div class="ml-8 h-px bg-gray-600 grow"></div>
        </div>

        <div class="bg-gray-800/50 rounded-2xl px-6 py-12 md:px-12 md:py-24 border border-gray-700 flex flex-col items-center text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Samen aan de slag?
            </h3>
            <p class="text-gray-400 mb-8 text-lg max-w-2xl mx-auto">
                Of je nu een concreet plan hebt of gewoon wilt kennismaken—ik sta open voor nieuwe connecties.
            </p>
            <form action="#" method="POST" class="space-y-6 w-full max-w-2xl flex flex-col items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">

                    <div>
                        <label for="naam" class="block text-gray-300 text-sm font-medium mb-2 text-left">
                            Naam
                        </label>
                        <input
                            type="text"
                            id="naam"
                            name="naam"
                            class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-blue-400 transition-colors"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-300 text-sm font-medium mb-2 text-left">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-blue-400 transition-colors"
                            required>
                    </div>
                </div>
                <div class="w-full">
                    <label for="bericht" class="block text-gray-300 text-sm font-medium mb-2 text-left">
                        Bericht
                    </label>
                    <textarea
                        id="bericht"
                        name="bericht"
                        rows="6"
                        class="w-full px-4 py-3 bg-gray-900/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-blue-400 transition-colors resize-none"
                        required></textarea>
                </div>
                <div>
                    <button
                        type="submit"
                        class="inline-block bg-transparent border-2 border-blue-400 text-blue-400 px-8 py-4 rounded transition-all duration-300 text-lg font-medium hover:bg-blue-400 hover:text-white hover:shadow-md hover:shadow-blue-400/30">
                        Verstuur Bericht
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<footer class="py-8 border-t border-gray-800">
    <div class="px-8 md:px-16 lg:px-24">
        <div class="w-full section-margin flex flex-row items-center">
            <p class="text-gray-400 text-sm m-0 p-0">
                © 2025 Nick Colijn. All rights reserved.
            </p>
        </div>
    </div>
</footer>
@endsection