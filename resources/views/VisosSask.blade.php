<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sąskaitos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">                
                    @php
                        $adresas= url()->current();
                        $regist_list_id=substr($adresas,32);
                    @endphp                   
                
                    <a href="{{url('newinvoice/'.$regist_list_id)}}">
                        <button type="button" class="mt-4 text-white" style="    background-color: rgb(31 41 55 / var(--tw-bg-opacity));">
                            {{ __('Nauja Sąskaita') }}
                        </button>
                    </a>
                </div>
                @if(Session::has('success'))
                    <div class= "alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Numeris
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Sąskaitos Numeris
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Sąskaitos data
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Visa suma
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            PVM suma
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Sukurimo Data
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Veiksmai
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody> 
                                                    
                                @php
                                    $i = 1;
                                    $suma =0;
                                    $PVMsuma = 0;
                                @endphp
                                @foreach($data as $l)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            >{{$i++}}</td>                                   
                                        <td class="px-6 py-4">{{$l->Sask_nr}}</td>  
                                        <td class="px-6 py-4">{{$l->Sask_data}}</td>
                                        <td class="px-6 py-4">{{$l->Visa_suma}}</td> 
                                        <td class="px-6 py-4">{{$l->PVM_suma}}</td>                                    
                                        <td class="px-6 py-4">{{$l->updated_at}}</td>
                                        <td class="px-6 py-4 text-right">                                           
                                            <a href="{{url('keistiSask/'.$l->id)}}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Keisti</a> | 
                                            <a href="{{url('TrintiSask/'.$l->id)}}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Trinti</a>
                                        </td>
                                        @php
                                            $suma += $l->Visa_suma;
                                            $PVMsuma += $l->PVM_suma;                                        
                                        @endphp                           
                                    </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                        {{!! $data->links() !!}}
                    </div>
                    <div>
                        <label>Bendra šio puslapio suma: </label>{{$suma}}
                    </div>
                    <div>
                        <label>Bendra šio puslapio PVM suma: </label>{{$PVMsuma}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>