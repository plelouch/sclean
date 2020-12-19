<div>
    <form wire:submit.prevent="store">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nom du parcours</label>
                    <input type="text" wire:model.debounce.500="form.libelleParcours" placeholder="eg: Cp1"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.libelleParcours')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Montant</label>
                    <input type="text" wire:model.debounce.500="form.montantScolarite" placeholder="eg: 20000"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.montantScolarite')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-gray-700">Professeur</label>
                    <select id="country" wire:model.debounce.500="form.professeur_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option selected>Sélectionnez le professeur</option>
                        @foreach($professors as $professor)
                            <option value="{{ $professor->id }}">{{ $professor->nom }} {{ $professor->prenoms }}</option>
                        @endforeach
                    </select>
                    @error('form.professeur_id')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <h2>Définir écheancier du parcour</h2>

        @error('montant')
            <div class="bg-red-400 text-white px-3 py-4 shadow-xl">
                {{ $message }}
            </div>
        @enderror

        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                @foreach($fields as $key => $value)
                    <div class="col-span-6 sm:col-span-3">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">Mois</label>
                                <input type="text" name="fields[{{$key}}][formEcheance.mois]" wire:model.debounce.500="fields.{{$key}}.mois" placeholder="eg: Décembre"
                                       class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('formEcheance.mois')
                                    <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Montant</label>
                                <input type="text" name="fields[{{$key}}][montant]" wire:model.debounce.500="fields.{{$key}}.montant" placeholder="eg: 20000"
                                       class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @error('formEcheance.montant')
                                    <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <button class="btn bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" wire:click.prevent="removeField({{ $key }})">X</button>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="btn bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
              wire:click.prevent="addField()">Ajouter Filiere
        </button>

        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Enregistrez
            </button>
        </div>
    </form>
</div>
