<div>
    <form wire:submit.prevent="store">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="ol-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nom de l'élève</label>
                    <input type="text" wire:model.debounce.500="form.nomEleve" placeholder="eg: Cp1"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.nomEleve')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="ol-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Prénom du Parcours</label>
                    <input type="text" wire:model.debounce.500="form.prenomsEleve" placeholder="eg: GHGJ121"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="ol-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                    <input type="date" wire:model.debounce.500="form.dateNaissEleve" placeholder="eg: 20000"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">Photo du tuteur</label>
                    <input type="file" wire:model.debounce.500="form.photo"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.photo')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                    <input type="text" wire:model.debounce.500="form.lieuNaiss"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="state" class="block text-sm font-medium text-gray-700">Niveau de l'élève</label>
                    <input type="text" wire:model.debounce.500="form.niveauEleve"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">Ecole de provenance</label>
                    <input type="text" wire:model.debounce.500="form.ecoleProv"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Sexe</label>
                    <select id="country" wire:model.debounce.500="form.sexe"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Sélectionnez Sexe</option>
                        <option value="Fille">Fille</option>
                        <option value="Garçon">Garçon</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Parcour</label>
                    <select id="country" wire:model.debounce.500="form.parcour_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Sélectionnez le parcour</option>
                        @foreach($parcours as $parcour)
                            <option value="{{ $parcour->id }}">{{ $parcour->libelleParcours }} {{ $parcour->codeParcours }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="street_address" class="block text-sm font-medium text-gray-700">Nom prénoms du tuteur</label>
                    <input type="text" wire:model.debounce.500="form.tuteur"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">Contact du tuteur</label>
                    <input type="text" wire:model.debounce.500="form.contactTuteur"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>


            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Enregistrez
            </button>
        </div>
    </form>
</div>
