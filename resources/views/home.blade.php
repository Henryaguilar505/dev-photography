<x-app-layout>
    {{-- Crear seccion about me, incluye la foto de perfil y un prrafo descriptivo de la persona (fotografo) --}}
    <section class="container  mx-auto px-6 py-20 mt-8 mb-8 pl-6">
        <div class="flex flex-col md:flex-row md:gap-[4%] md:items-center md:justify-center">
            {{-- Texto --}}
            <div class="basis-1/2 flex flex-col justify-center space-y-4 mb-8">
                <h2 class="font-header font-bold text-4xl text-left md:text-left">{{ $user->name }}</h2>

                <p class="text-orange-500 font-bold text-left">Fotógrafo profesional</p>

                <p class="text-justify md:text-left">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit unde iusto vitae numquam 
                    nam facere quidem ut laborum distinctio, quisquam consequatur aliquam cumque nemo. In saepe maiores 
                    aspernatur laboriosam voluptatem!</p>
              
            </div>
            {{-- Imagen --}}
            <div class="flex justify-center items-center basis-1/3">
                @if (!$user->profile_photo_path)
                    <img class="object-cover max-h-96 w-auto" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                @else  
                <img class="object-fill max-h-96 w-auto" src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}" />
                @endif
            </div>
            
           
            
        </div>
       
    </section>
</x-app-layout>
