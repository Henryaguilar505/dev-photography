<x-app-layout>
    {{-- Crear seccion about me, incluye la foto de perfil y un prrafo descriptivo de la persona (fotografo) --}}
    <section class="container  mx-auto px-6  mt-8 mb-8 pl-6">
        <div class="flex flex-col md:flex-row gap-6 md:items-center sm:justify-center">
            {{-- Texto --}}
            <div class="basis-1/2 flex flex-col justify-center gap-4 mb-8">
                <h2 class="font-header font-bold text-4xl text-left md:text-left">{{ $user->name }}</h2>

                <p class="text-orange-500 font-bold text-left">Fotógrafo profesional</p>

                <p class="text-justify md:text-left">Soy un fotógrafo apasionado por capturar la belleza de los paisajes que nos rodean. A través de mi lente, busco inmortalizar momentos únicos en la naturaleza, desde majestuosas montañas hasta tranquilas playas al atardecer. Mi objetivo es transmitir emociones y contar historias a través de cada fotografía, permitiendo que quienes las observen puedan conectarse con la esencia de cada lugar.</p>
              
            </div>
            {{-- Imagen --}}
            <div class="flex justify-center items-center basis-1/3">
                @if (!$user->profile_photo_path)
                    <img class="object-cover max-h-96 w-auto" style="
                    max-height: 27rem;
                    width: auto;
                " src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                @else  
                <img class="object-fill max-h-96 w-auto" style="
                max-height: 27rem;
                width: auto;
            " src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}" />
                @endif
            </div>
            
           
            
        </div>
       
    </section>
</x-app-layout>
