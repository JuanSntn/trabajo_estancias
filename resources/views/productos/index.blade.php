<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alumnos') }}
        </h2>
    </x-slot>

    <div class="py-5 "   >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-lg" >
                
                <a type="button" href="{{ route('productos.create') }}" class="bg-red-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-red-800 transition duration-200 each-in-out">Crear</a>
                <table class="table-fixed w-full border-separate border border-slate-500">
                <thead>
                    <tr class="bg-indigo-800 text-white  "  >
                        <th class="border border-slate-600">No</th>
                        <th class="border border-slate-600">NOMBRE</th>
                        <th class="border border-slate-600">APELLIDO</th>
                        <th class="border border-slate-600">CURP</th>
                        <th class="border border-slate-600">FOTO</th>
                        <th class="border border-slate-600">EDITAR/BORRAR</th>
                    </tr>  
                </thead>   
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td style="display: none;">{{$producto->id}}</td>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->apellido}}</td>
                        <td>{{$producto->curp}}</td>
                        <td  class="border px-14 py-1">
                            <img src="/imagen/{{$producto->imagen}}" width="60%">
                        </td>                        
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <!-- botón editar -->
                                <a href="{{ route('productos.edit', $producto->id) }}" class="rounded bg-indigo-900 hover:bg-red-600 text-white font-bold py-2 px-4">Editar</a>

                                <!-- botón borrar -->
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-indigo-900 hover:bg-red-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>
            </table>   
            <div>
                {!! $productos->links() !!}
            </div>
            </div>
         </div>
    </div>
</x-app-layout>
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>