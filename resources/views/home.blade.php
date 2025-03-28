<x-app-layout>
    {{-- Crear seccion about me, incluye la foto de perfil y un prrafo descriptivo de la persona (fotografo) --}}
    <section class="container  mx-auto px-6 py-20 mt-8 mb-8">
        <div class="flex flex-col md:flex-row md:row-span-12 md:gap-8  md:items-center md:justify-between">
            {{-- Texto --}}
            <div class="basis-1/2 flex flex-col justify-between md:min-h-56">
                <h2 class="font-header font-bold text-4xl">{{ $user->name }}</h2>

                <p class="text-orange-500 font-bold">Fotógrafo profesional</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit unde iusto vitae numquam 
                    nam facere quidem ut laborum distinctio, quisquam consequatur aliquam cumque nemo. In saepe maiores 
                    aspernatur laboriosam voluptatem!</p>
              
            </div>
            {{-- Imagen --}}
            <div class="flex justify-center mt-4 basis-1/2">
                <img class="object-cover max-h-96" src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="{{ $user->name }}" />
            </div>
            
           
            
        </div>
       
    </section>
</x-app-layout>
