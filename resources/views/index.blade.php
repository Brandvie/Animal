@extends('layouts.app')

@section('content')

    {{-- 🦁 Hero Section --}}
    <div class="relative bg-cover bg-center h-[550px] flex items-center justify-center text-white" 
         style="background-image: url('{{ asset('images/jaguard.jpg') }}');">
        <div class="text-center backdrop-blur-sm bg-black/40 p-6 rounded-lg">
            <h1 class="text-6xl font-extrabold uppercase drop-shadow-md">
                Welcome to the Wild Side 🐾
            </h1>
            <p class="mt-4 text-lg">
                Discover amazing creatures and their untamed beauty.
            </p>
            <a href="/blog" 
               class="mt-6 inline-block bg-green-600 hover:bg-green-700 transition text-white font-bold text-lg uppercase py-3 px-6 rounded-lg shadow-md">
                Explore Animals
            </a>
        </div>
    </div>

    {{-- 🦓 Featured Animal Section --}}
    <div class="sm:grid grid-cols-2 gap-12 w-4/5 mx-auto py-16">
        <div>
            <img src="{{ asset('images/Leopard.jpeg') }}" class="rounded-lg shadow-lg w-full" alt="Leopard">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-4xl font-extrabold text-green-700">
                The Stealthy Predator
            </h2>
            <p class="mt-4 text-gray-700">
                Leopards are known for their strength and adaptability. Learn about their hunting techniques and survival skills.
            </p>
            <a href="/blog" 
               class="mt-6 inline-block bg-yellow-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-yellow-700 transition">
                Learn More
            </a>
        </div>
    </div>

    {{-- 🦅 Expertise Section --}}
    <div class="bg-green-900 text-white text-center py-16">
        <h2 class="text-2xl font-semibold mb-6">I specialize in...</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-3xl font-bold">
            <span class="py-2">Wildlife Photography 📷</span>
            <span class="py-2">Animal Conservation 🌍</span>
            <span class="py-2">Nature Blogging ✍️</span>
            <span class="py-2">Sustainable Travel 🚀</span>
        </div>
    </div>

    {{-- 🐘 Blog Section --}}
    <div class="text-center py-16">
        <span class="text-gray-500 uppercase tracking-widest">Blog</span>
        <h2 class="text-4xl font-extrabold mt-4 text-green-800">Discover More About Wildlife</h2>
        <p class="mt-4 w-4/5 mx-auto text-gray-600">
            Explore stories, facts, and conservation efforts to help preserve our planet’s incredible wildlife.
        </p>
    </div>

    {{-- 🦉 Recent Blog Posts --}}
    <div class="grid sm:grid-cols-2 md:grid-cols-3 w-4/5 mx-auto gap-12">
        {{-- 🐺 Wolves --}}
        <div class="bg-yellow-700 text-white p-8 rounded-lg shadow-lg">
            <img src="{{ asset('images/wolves.jpg') }}" class="rounded-lg shadow-md mb-4 w-full h-48 object-cover" alt="Wolf">
            <h3 class="text-xl font-bold my-4">The Wild Wolves</h3>
            <p class="text-sm">
                Wolves are intelligent and powerful pack hunters. Learn about their behaviors, habitats, and role in the ecosystem.
            </p>
            <a href="#" class="block mt-4 text-white font-bold underline">Read More</a>
        </div>

        {{-- 🦢 Flamingo --}}
        <div class="bg-blue-700 text-white p-8 rounded-lg shadow-lg">
            <img src="{{ asset('images/Flamingo.png') }}" class="rounded-lg shadow-md mb-4 w-full h-48 object-cover" alt="Flamingo">
            <h3 class="text-xl font-bold my-4">The Elegant Flamingos</h3>
            <p class="text-sm">
                These vibrant birds are known for their stunning pink color and graceful movement. Discover their fascinating world.
            </p>
            <a href="#" class="block mt-4 text-white font-bold underline">Read More</a>
        </div>

        {{-- 🐼 Red Pandas --}}
        <div class="bg-red-700 text-white p-8 rounded-lg shadow-lg">
            <img src="{{ asset('images/Red panda.jpg') }}" class="rounded-lg shadow-md mb-4 w-full h-48 object-cover" alt="Red Panda">
            <h3 class="text-xl font-bold my-4">The Adorable Red Pandas</h3>
            <p class="text-sm">
                Known for their playful nature and fluffy tails, red pandas are a favorite among wildlife lovers.
            </p>
            <a href="#" class="block mt-4 text-white font-bold underline">Read More</a>
        </div>
    </div>

    {{-- 🦚 More Animals --}}
    <div class="grid sm:grid-cols-2 md:grid-cols-4 w-4/5 mx-auto gap-8 py-16">
        <div class="text-center">
            <img src="{{ asset('images/Elephant.jpg') }}" class="rounded-lg shadow-lg w-full h-48 object-cover" alt="Elephant">
            <p class="text-lg font-bold mt-2">Elephants</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/secretary birds.jpg') }}" class="rounded-lg shadow-lg w-full h-48 object-cover" alt="Secretary Bird">
            <p class="text-lg font-bold mt-2">Secretary Bird</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/peacock.jpg') }}" class="rounded-lg shadow-lg w-full h-48 object-cover" alt="Peacock">
            <p class="text-lg font-bold mt-2">Peacock</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/orcas.jpg') }}" class="rounded-lg shadow-lg w-full h-48 object-cover" alt="Orcas">
            <p class="text-lg font-bold mt-2">Orcas</p>
        </div>
    </div>

@endsection
