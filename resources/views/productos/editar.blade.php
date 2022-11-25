<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Jugador') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
            <form action="{{ route('productos.update',$producto->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre:</label>
                    <input name="nombre" value="{{ $producto->nombre }}" class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Apellido:</label>
                    <input name="apellido" value="{{ $producto->apellido }}" class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="text" required/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Curp:</label>
                    <input name="curp" value="{{ $producto->curp }}" class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="text" required/>
                </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-20 gap-5 md:gap-23 mt-5 mx-7">
                    <h1 class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold" >PRIMER DEPORTE</h1>
                    <div class="grid grid-cols-1">
                        
                            <select name="pdeporte" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                <option value="">Elige una opción</option>
                                <option value="Natacion" {{ $producto->pdeporte == 'Natacion' ? 'selected' : ''}}>Natacion</option>
                                <option value="Atletismo" {{ $producto->pdeporte == 'Atletismo' ? 'selected' : ''}}>Atletismo</option>
                                <option value="Voleibol" {{ $producto->pdeporte == 'Voleibol' ? 'selected' : ''}}>Voleibol</option>
                                <option value="Voleibol de Playa" {{ $producto->pdeporte == 'Voleibol de Playa' ? 'selected' : ''}}>Voleibol de Playa</option>
                                <option value="Karate"{{ $producto->pdeporte == 'Karate' ? 'selected' : ''}}>Karate</option>
                                <option value="Taekwondo"{{ $producto->pdeporte == 'Taekwondo' ? 'selected' : ''}}>Taekwondo</option>
                                <option value="Futbol Femenil"{{ $producto->pdeporte == 'Futbol Femenil' ? 'selected' : ''}}>Futbol Femenil</option>
                                <option value="Futbol Varonil"{{ $producto->pdeporte == 'Futbol Varonil' ? 'selected' : ''}}>Futbol Varonil</option>
                                <option value="Basquetbol Femenil"{{ $producto->pdeporte == 'Basquetbol Femenil' ? 'selected' : ''}}>Basquetbol Femenil</option>
                                <option value="Basquetbol Varonil"{{ $producto->pdeporte == 'Basquetbol Varonil' ? 'selected' : ''}}>Basquetbol Varonil</option>
                                <option value="Beisbol"{{ $producto->pdeporte == 'Beisbol' ? 'selected' : ''}}>Beisbol</option>
                            </select>
                    </div>
                    <h1 class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold" >SEGUNDO DEPORTE</h1>
                    <div class="grid grid-cols-1">
                        <select name="sdeporte" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                <option value="">Elige una opción</option>
                                <option value="Natacion" {{ $producto->sdeporte == 'Natacion' ? 'selected' : ''}}>Natacion</option>
                                <option value="Atletismo" {{ $producto->sdeporte == 'Atletismo' ? 'selected' : ''}}>Atletismo</option>
                                <option value="Voleibol" {{ $producto->sdeporte == 'Voleibol' ? 'selected' : ''}}>Voleibol</option>
                                <option value="Voleibol de Playa"{{ $producto->sdeporte == 'Voleibol de Playa' ? 'selected' : ''}}>Voleibol de Playa</option>
                                <option value="Karate"{{ $producto->sdeporte == 'Karate' ? 'selected' : ''}}>Karate</option>
                                <option value="Taekwondo"{{ $producto->sdeporte == 'Taekwondo' ? 'selected' : ''}}>Taekwondo</option>
                                <option value="Futbol Femenil"{{ $producto->sdeporte == 'Futbol Femenil' ? 'selected' : ''}}>Futbol Femenil</option>
                                <option value="Futbol Varonil"{{ $producto->sdeporte == 'Futbol Varonil' ? 'selected' : ''}}>Futbol Varonil</option>
                                <option value="Basquetbol Femenil"{{ $producto->sdeporte == 'Basquetbol Femenil' ? 'selected' : ''}}>Basquetbol Femenil</option>
                                <option value="Basquetbol Varonil"{{ $producto->sdeporte == 'Basquetbol Varonil' ? 'selected' : ''}}>Basquetbol Varonil</option>
                                <option value="Beisbol"{{ $producto->sdeporte == 'Beisbol' ? 'selected' : ''}}>Beisbol</option>
                        </select>
                    </div>
                        <h1 class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold" >TERCER DEPORTE</h1>
                    <div class="grid grid-cols-1">
                        <select name="tdeporte" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                <option value="">Elige una opción</option>
                                <option value="Natacion" {{ $producto->tdeporte == 'Natacion' ? 'selected' : ''}}>Natacion</option>
                                <option value="Atletismo" {{ $producto->tdeporte == 'Atletismo' ? 'selected' : ''}}>Atletismo</option>
                                <option value="Voleibol" {{ $producto->tdeporte == 'Voleibol' ? 'selected' : ''}}>Voleibol</option>
                                <option value="Voleibol de Playa"{{ $producto->tdeporte == 'Voleibol de Playa' ? 'selected' : ''}}>Voleibol de Playa</option>
                                <option value="Karate"{{ $producto->tdeporte == 'Karate' ? 'selected' : ''}}>Karate</option>
                                <option value="Taekwondo"{{ $producto->tdeporte == 'Taekwondo' ? 'selected' : ''}}>Taekwondo</option>
                                <option value="Futbol Femenil"{{ $producto->tdeporte == 'Futbol Femenil' ? 'selected' : ''}}>Futbol Femenil</option>
                                <option value="Futbol Varonil"{{ $producto->tdeporte == 'Futbol Varonil' ? 'selected' : ''}}>Futbol Varonil</option>
                                <option value="Basquetbol Femenil"{{ $producto->tdeporte == 'Basquetbol Femenil' ? 'selected' : ''}}>Basquetbol Femenil</option>
                                <option value="Basquetbol Varonil"{{ $producto->tdeporte == 'Basquetbol Varonil' ? 'selected' : ''}}>Basquetbol Varonil</option>
                                <option value="Beisbol"{{ $producto->tdeporte == 'Beisbol' ? 'selected' : ''}}>Beisbol</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img src="/imagen/{{ $producto->imagen }}" width="200px" id="imagenSeleccionada">
                </div>                                    
                
                <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                    <div class='flex items-center justify-center w-full'>
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                            </div>
                        <input name="imagen" id="imagen" type='file' class="hidden" />
                       
                        </label>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <a href="{{ route('productos.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
                </div>
            </form>
                
            </div>
        </div>
    </div>
</x-app-layout>


<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>