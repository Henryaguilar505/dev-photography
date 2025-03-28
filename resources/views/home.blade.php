<x-app-layout>
    {{-- Crear seccion about me, incluye la foto de perfil y un prrafo descriptivo de la persona (fotografo) --}}
    <section class="container  mx-auto px-6  mt-8 mb-8 pl-6">
        <div class="flex flex-col md:flex-row gap-6 md:items-center sm:justify-center">
            {{-- Texto --}}
            <div class="basis-1/2 flex flex-col justify-center gap-4 mb-8">
                <h2 class="font-header font-bold text-4xl text-left md:text-left">{{ $user->name }}</h2>

                <p class="text-orange-500 font-bold text-left">Fotógrafo profesional</p>

                <p class="md:text-left">Soy un fotógrafo apasionado por capturar la belleza de los paisajes
                    que nos rodean. A través de mi lente, busco inmortalizar momentos únicos en la naturaleza, desde
                    majestuosas montañas hasta tranquilas playas al atardecer. Mi objetivo es transmitir emociones y
                    contar historias a través de cada fotografía, permitiendo que quienes las observen puedan conectarse
                    con la esencia de cada lugar.</p>

            </div>
            {{-- Imagen --}}
            <div class="flex justify-center items-center basis-1/3">
                @if (!$user->profile_photo_path)
                    <img class="object-cover max-h-96 w-auto"
                        style="
                    max-height: 27rem;
                    width: auto;
                "
                        src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                @else
                    <img class="object-fill max-h-96 w-auto"
                        style="
                max-height: 27rem;
                width: auto;
            "
                        src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}" />
                @endif
            </div>

        </div>
    </section>

    <!-- Gallery Section -->
    <section class="container mx-auto max-w-[1300px] p-8">
        <div class="container mx-auto p-6">
            <h2 class="font-header font-bold text-4xl text-left md:text-left mb-8">Fotografías recientes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="{{ asset('storage/gallery/photo_2025-03-27_22-45-12.jpg') }}" alt="Somoto"
                        class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="font-semibold">Somoto</h3>
                        <p>28/03/2025</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="{{ asset('storage/gallery/flora alimenticia.jpeg') }}" alt="Tirana"
                        class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="font-semibold">RAAN</h3>
                        <p>28/03/2025</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="{{ asset('storage/gallery/el gueguense.jpeg') }}" alt="Buenos Aires"
                        class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="font-semibold">Bilwi</h3>
                        <p>28/03/2025</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="{{ asset('storage/gallery/palo de mayo 1.jpeg') }}" alt="Somoto"
                        class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="font-semibold">Somoto</h3>
                        <p>28/03/2025</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="{{ asset('storage/gallery/palo de mayo 3.jpeg') }}" alt="Tirana"
                        class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="font-semibold">Ocotal</h3>
                        <p>28/03/2025</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="{{ asset('storage/gallery/semana santa.jpg') }}" alt="Buenos Aires"
                        class="w-full h-48 object-cover transform transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="font-semibold">Managua</h3>
                        <p>28/03/2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
