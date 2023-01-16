<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sąskaitos keitimas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($errors -> any())
                    @foreach ($errors -> all() as $err)
                        <li>{{$err}} </li>
                    @endforeach
                @endif               
                @php
                        $adresas= url()->current();
                        $regist_list_id=substr($adresas,33);
                    @endphp
                <form method="POST" action="{{ url('/newSask') }}">
                    @csrf
                    <input type = "hidden" name='id' value='{{$data->id}}'>
                   <!--Pasirinkimai -->
                    <div class="mt-4">
                        <label class="form label">Sqskaitos Numeris<label>                                          
                        <input type='text' class="form control" name="Sask_nr" value="{{$data->Sask_nr}}">
                    </div>

                    <div class="mt-4">
                        <label class="form label">Sąskaitos data<label>                                          
                        <input type='date' class="form control" name="Data" value="{{$data->Sask_data}}">
                    </div>

                    <div class="mt-4">
                        <label class="form label">Sqskaitos tipas<label>                                             
                        <select class="select" name = "Sask_type" id="Sask_type"> 
                            @foreach($Sask_types as $s)
                                <option value="{{$s->id}}" {{ ( $data->Sask_type_id == $s->id ) ? 'selected' : ''}}>{{$s->tipas}}</option> 
                            @endforeach                           
                        </select>      
                    </div>

                    <div class="mt-4">
                        <label class="form label">Antrosios šalies pavadinimas<label>                                          
                        <input type='text' class="form control" name="Antosios_salies_pav" value="{{$data->Amtrosios_salies_pav}}">
                    </div>

                    <div class="mt-4">
                        <label class="form label">Antrosios šalies PVM kodas<label>                                          
                        <input type='text' class="form control" name="Antosios_salies_PVM_kodas" value="{{$data->Amtrosios_salies_PVM_kodas}}">
                    </div>

                    <div class="mt-4">
                        <label class="form label">Visa suma<label>                                          
                        <input type='number' class="form control" name="Visa_suma" value="{{$data->Visa_suma}}">
                    </div>                  

                    <div class="mt-4">
                        <label class="form label">PVM tipas<label>                                             
                        <select class="select" name = "PVM_type" id="PVM_type"> 
                            @foreach($PVM_types as $t)
                                <option value="{{$t->id}}" {{ ( $data->p_v_m_type_id == $t->id ) ? 'selected' : ''}}>{{$t->tipas}}</option> 
                            @endforeach                           
                        </select>      
                    </div>

                    <div class="mt-4">
                        <label class="form label">PVM procentas<label>                                          
                        <input type='number' class="form control" name="PVM_proc" value="{{$data->PVM_proc}}">
                    </div>

                    <div class="mt-4">
                        <label class="form label">PVM suma<label>                                          
                        <input type='number' class="form control" name="PVM_suma" value="{{$data->PVM_suma}}">
                    </div>
                    
                    <div class="mt-4">
                        <label  value="'Metai">
                    </div>
                    <!-- isaugojimo mygtukas -->
                    <div class="block mt-4">
                        <x-primary-button class="ml-3">
                            {{ __('Išsaugoti') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
