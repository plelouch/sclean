@extends("layouts.base")

@section("body")
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Gestions des élèves</h3>
        </div>
    </div>

    <div class="flex flex-row flex-wrap flex-grow mt-2">

        <div class="w-full md:w-full xl:w-full p-6">
            <!--Graph Card-->
            <div class="bg-white border-transparent rounded-lg shadow-xl">
                <div class="bg-gradient-to-b from-gray-300 flex flex-row to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                    <h5 class="font-bold uppercase text-gray-600">Ajouter un parcours</h5>
                </div>
                <div class="p-5">
                    <livewire:form-student/>
                </div>
            </div>
            <!--/Graph Card-->
        </div>

    </div>

@endsection
