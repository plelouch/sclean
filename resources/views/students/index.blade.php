@extends("layouts.base")

@section("body")
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Gestions des élèves</h3>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-full xl:w-full p-6">
            <!--Graph Card-->
            <div class="bg-white border-transparent rounded-lg shadow-xl">
                <div class="bg-gradient-to-b from-gray-300 flex flex-row to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                    <h5 class="font-bold uppercase text-gray-600">Liste des élèves inscris</h5>
                    <a href="{{ route('student_new') }}" class="px-4 py-1 bg-blue-600 text-white mx-4 rounded">
                        <i class="fas fa-plus"></i> Inscrire Elève</a>
                </div>
                <div class="p-5">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <livewire:student/>

                </div>
            </div>
            <!--/Graph Card-->
        </div>
    </div>

@endsection
