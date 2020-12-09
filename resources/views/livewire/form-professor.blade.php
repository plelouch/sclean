<div>
    <form wire:submit.prevent="store">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" wire:model.debounce.500="form.nom"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.nom')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="state" class="block text-sm font-medium text-gray-700">Prénoms</label>
                    <input type="text" wire:model.debounce.500="form.prenoms"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.prenoms')
                    <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">Contact</label>
                    <input type="text" wire:model.debounce.500="form.contact"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.contact')
                    <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Diplôme</label>
                    <select id="country" wire:model.debounce.500="form.diplome"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option selected>Sélectionnez Diplôme</option>
                        <option value="BAC">BAC</option>
                        <option value="BEPC">BEPC</option>
                        <option value="CEPD">CEPD</option>
                        <option value="LICENCE">LICENCE</option>
                    </select>
                    @error('form.diplome')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="street_address" class="block text-sm font-medium text-gray-700">adresse</label>
                    <input type="text" wire:model.debounce.500="form.addr"
                           class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('form.addr')
                        <span class="text-red-400">{{ $message }}</span>
                    @enderror
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
