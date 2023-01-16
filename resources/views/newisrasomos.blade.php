<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Naujas išrašomų sąskaitų rinkinys') }}
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

                <form method="POST" action="{{ url('/newisrasomos') }}">
                    @csrf

                   <!--Pasirinkimai -->
                    <div class="mt-4">
                        <h1>Periodas<h1>                                          
                        <select class="select" name = "period_name" id="period name"> 
                            @foreach($periods as $period)
                                <option value="{{$period->id}}">{{$period->periodas}}</option> 
                            @endforeach                           
                        </select>      
                    </div>

                    <div class="mt-4">
                        <h1>Metai<h1>                                           
                        <select class="select" name = "metai" id="metai"> 
                            @foreach($years as $metai)
                                <option value="{{$metai->id}}">{{$metai->metai}}</option> 
                            @endforeach                           
                        </select>      
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
