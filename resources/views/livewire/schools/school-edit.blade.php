<div>
    <x-mary-header title="Modification ecole > {{ $name }}" separator />
        <div>
            {{-- <x-mary-form wire:submit="save">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div class="p-5 rounded-lg card bg-base-100">
                        <div class="pb-5">
                            <div class="flex items-center justify-between">
                                <div class="text-2xl font-bold"> Details</div>
                            </div>
                            <hr class="mt-3">
                        </div>

                        <div class="">
                            <div class="grid gap-3 lg:px-3">

                                <div>
                                    <x-mary-input label="Nom ecole" placeholder="" wire:model='name' />
                                </div>

                                <div>
                                    <x-mary-input label="Telephone fixe" wire:model='phone_fixe' placeholder="" icon="o-phone" />
                                </div>

                                <div>
                                    <x-mary-input label="Telephone mobile" wire:model='phone_mobile' icon="o-device-phone-mobile" />
                                </div>

                                <div>
                                    <x-mary-input label="Mail" wire:model='email' icon="o-envelope" />
                                </div>

                                <div>
                                    <x-mary-textarea wire:model='notes'
                                    label="Notes"
                                    wire:model="notes"
                                    placeholder="Description ..."
                                    hint="Max 50 chars"
                                    rows="5"
                                    inline />
                                </div>

                                <div>
                                    <x-mary-toggle label="Desactié" right hint="Click pour activé" />
                                </div>

                                <div>
                                    <x-mary-input label="Type" icon="o-user" wire:model="type" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid content-start gap-8">

                        <div class="p-5 rounded-lg card bg-base-100">
                            <div class="pb-5">
                                <div class="flex items-center justify-between">
                                    <div class="text-2xl font-bold"> Localisation</div>
                                </div>
                                <hr class="mt-3">
                            </div>
                            <div class="grid gap-3 lg:px-3">
                                <div>
                                    <x-mary-input label="Mail" wire:model='province_id' icon="o-envelope" />
                                </div>

                                <div>
                                    <x-mary-input label="Region" icon="o-user"  wire:model="region_id" />
                                </div>

                                <div>
                                    <x-mary-input label="District" icon="o-user"  wire:model="district_id" />
                                </div>

                                <div>
                                    <x-mary-input label="Commune" icon="o-user" wire:model="commune_id" />
                                </div>

                                <div>
                                    <x-mary-textarea wire:model='adresse'
                                    label="Bio"
                                    wire:model="adresse"
                                    placeholder="Your story ..."
                                    hint="Max 1000 chars"
                                    rows="5"
                                    inline />
                                </div>
                            </div>
                        </div>

                        <div class="p-5 rounded-lg card bg-base-100">
                            <div class="pb-5">
                                <div class="flex items-center justify-between">
                                    <div class="text-2xl font-bold"> Logo</div>
                                </div>
                                <hr class="mt-3">
                            </div>

                            <div class="flex justify-center">
                                <x-mary-file wire:model="logo" accept="image/png/jpejg/jpg" crop-after-change>
                                    <img src="{{ $user->avatar ?? 'https://th.bing.com/th/id/OIP.vUFJv2LS7hA_akUKhnue7AHaHU?rs=1&pid=ImgDetMain' }}" class="h-40 rounded-lg" />
                                </x-mary-file>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="flex justify-end gap-3 mt-4">
                    <x-slot:actions>
                        <x-mary-button label="Cancel" />
                        <x-mary-button label="Save" class="btn-primary" type="submit" spinner="save" />
                    </x-slot:actions>

                </div>
            </x-mary-form> --}}
                {{-- <div class="max-w-2xl lg:py-16">
                    <x-mary-form wire:submit="save">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo de votre ecole </label>
                            <x-mary-file wire:model="logo" accept="image/png/jpejg/jpg" crop-after-change>
                                <img src="{{ $user->avatar ?? 'https://th.bing.com/th/id/OIP.vUFJv2LS7hA_akUKhnue7AHaHU?rs=1&pid=ImgDetMain' }}" class="h-40 rounded-lg" />
                            </x-mary-file>

                            <div class="sm:col-span-2">
                                <x-mary-input label="Nom ecole" placeholder="" wire:model='name' />
                            </div>
                            <div class="w-full">
                                <x-mary-input label="Telephone fixe" wire:model='phone_fixe' placeholder="" icon="o-phone" />
                            </div>
                            <div class="w-full">
                                <x-mary-input label="Telephone mobile" wire:model='phone_mobile' icon="o-device-phone-mobile" />
                            </div>
                            <div class="sm:col-span-2">
                                <x-mary-input label="Mail" wire:model='email' icon="o-envelope" />
                            </div>
                            <div>
                                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                                <select class="w-full max-w-xs select select-primary" wire:model='type'>
                                    <option disabled selected>Quelle est le type de votre école ?</option>
                                    <option value="0">Public</option>
                                    <option value="1">Privée</option>
                                    <option value="3">Autres</option>
                                  </select>
                            </div>
                            <div>
                                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <select class="w-full max-w-xs select select-primary" wire:model='statut'>
                                    <option disabled selected>Statut de votre école ?</option>
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                  </select>
                            </div>

                            <div class="sm:col-span-2">
                                <x-mary-textarea wire:model='notes'
                                    label="Notes"
                                    placeholder="Description ..."
                                    hint="Max 50 chars"
                                    rows="5"
                                    inline />
                            </div>

                            <div>
                                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                                <select class="w-full max-w-xs select select-primary" wire:model='province_id'>
                                    <option disabled selected>Dans quelle province situe votre école ?</option>
                                    <option value="0">Public</option>
                                  </select>
                            </div>
                            <div>
                                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                <select class="w-full max-w-xs select select-primary" wire:model='region_id'>
                                    <option disabled selected>Dans quelle region situe votre école ?</option>
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                  </select>
                            </div>
                            <div>
                                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                                <select class="w-full max-w-xs select select-primary" wire:model='district_id'>
                                    <option disabled selected>Dans quelle province situe votre école ?</option>
                                    <option value="0">Public</option>
                                  </select>
                            </div>
                            <div>
                                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commune</label>
                                <select class="w-full max-w-xs select select-primary" wire:model='commune_id'>
                                    <option disabled selected>Dans quelle region situe votre école ?</option>
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                  </select>
                            </div>
                            <div class="sm:col-span-2">
                                <x-mary-textarea wire:model='adresse'
                                    label="Adresse"
                                    placeholder="Description ..."
                                    hint="Max 50 chars"
                                    rows="5"
                                    inline />
                            </div>


                        </div>
                        <div class="flex justify-end gap-3 mt-4">
                            <x-slot:actions>
                                <x-mary-button label="Cancel" />
                                <x-mary-button label="Save" class="btn-primary" type="submit" spinner="save" />
                            </x-slot:actions>

                        </div>
                    </x-mary-form>
                </div> --}}

                    <!-- Grid stuff from Tailwind -->
                    <x-mary-form wire:submit="update">
                        {{--  Logo section  --}}
                        <div class="grid-cols-5 lg:grid">
                            <div class="col-span-2">
                                <x-mary-header title="Logo" subtitle="Logo de votre ecole" size="text-2xl" />
                            </div>
                            <div class="grid col-span-3 gap-3">
                                <x-mary-file wire:model="logo" accept="image/png/jpejg/jpg" crop-after-change>
                                    <img src="/storage/{{ $logo ?? 'https://th.bing.com/th/id/OIF.k8evuWLxIzB9CiszfLggAQ?rs=1&pid=ImgDetMain' }}" class="h-40 rounded-lg" />
                                </x-mary-file>
                            </div>
                        </div>

                        {{--  Basic section  --}}
                        <hr class="my-5" />

                        <div class="grid-cols-5 lg:grid">
                            <div class="col-span-2">
                                <x-mary-header title="Infos" subtitle="Basic information pour l'ecole" size="text-2xl" />
                            </div>
                            <div class="grid col-span-3 gap-3 lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-1">
                                <x-mary-input label="Nom" placeholder="" wire:model='name' icon="o-user" />
                                <x-mary-input label="Identity" wire:model='identity' disabled placeholder="" icon="o-user" />
                                <select class="w-full select select-primary" wire:model='type'>
                                    <option value="" selected>Quelle type ?</option>
                                    <option value="0">Public</option>
                                    <option value="1">Privé</option>
                                  </select>
                                  <select class="w-full select select-primary" wire:model='is_active'>
                                    <option value="" selected>Statut école?</option>
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                  </select>
                            </div>
                        </div>


                        {{--  Notes section  --}}
                        <hr class="my-5" />

                        <div class="grid-cols-5 lg:grid">
                            <div class="col-span-2">
                                <x-mary-header title="Notes" subtitle="Petite remarque apropos de votre l'ecole" size="text-2xl" />
                            </div>
                            <div class="grid col-span-3 gap-3">
                                <x-mary-textarea
                                label="Remarques"
                                wire:model="notes"
                                placeholder=""
                                rows="2"/>
                            </div>
                        </div>

                        {{--  Details section --}}
                        <hr class="my-5" />

                        <div class="grid-cols-5 lg:grid">
                            <div class="col-span-2">
                                <x-mary-header title="Contacts" subtitle="More about the user" size="text-2xl" />
                            </div>
                            <div class="grid col-span-3 gap-3">
                                <x-mary-input label="Telephone fixe" placeholder="" icon="o-phone" wire:model='phone_fixe' />
                                <x-mary-input label="Telephone mobile" placeholder="" icon="o-device-phone-mobile" wire:model='phone_mobile' />
                                <x-mary-input label="Email" placeholder="" icon="o-at-symbol" wire:model='email' />
                            </div>
                        </div>

                        <hr class="my-5" />

                        <div class="grid-cols-5 lg:grid">
                            <div class="col-span-2">
                                <x-mary-header title="Localisation" subtitle="Adresse ou se situe votre ecole" size="text-2xl" />
                            </div>
                            <div class="grid col-span-3 gap-3 lg:grid-cols-2 sm:grid-cols-1">
                                <select class="w-full select select-primary" wire:model.live='province_id'>
                                    <option value="" selected>Quelle province ?</option>
                                    @foreach ( $provinces as $province )
                                        <option value="{{ $province->id }}">{{ $province->nom }}</option>
                                    @endforeach
                                  </select>
                                  <select class="w-full select select-primary" wire:model.live='region_id'>
                                    <option value="" selected>Quelle region?</option>
                                    @if ($regions)
                                        @foreach ( $regions as $region )
                                        <option value="{{ $region->id }}">{{ $region->nom }}</option>
                                        @endforeach
                                    @endif
                                  </select>
                                  <select class="w-full select select-primary" wire:model.live='district_id'>
                                    <option value="" selected>Quelle district?</option>
                                    @if ($districts)
                                        @foreach ( $districts as $district )
                                            <option value="{{ $district->id }}">{{ $district->libelle }}</option>
                                        @endforeach
                                    @endif)
                                  </select>
                                  <select class="w-full select select-primary" wire:model='commune_id'>
                                    <option value="" selected>Quelle comune ?</option>
                                    @if ( $communes )
                                        @foreach ( $communes as $commune )
                                            <option value="{{ $commune->id }}">{{ $commune->nom }}</option>
                                        @endforeach
                                    @endif
                                  </select>
                            </div>
                        </div>

                        <hr class="my-5" />

                        <div class="grid-cols-5 lg:grid">
                            <div class="col-span-2">
                                <x-mary-header title="Adresse" subtitle="Adresse exacte de votre ecole" size="text-2xl" />
                            </div>
                            <div class="grid col-span-3 gap-3">
                                  <x-mary-textarea
                                label="Adresse exacte"
                                wire:model="adresse"
                                placeholder=""
                                rows="5"/>
                            </div>
                        </div>

                        <x-slot:actions>
                            <x-mary-button label="Annuler" />
                            <x-mary-button label="Enregistrer" class="btn-primary" type="submit" spinner="update" />
                        </x-slot:actions>
                    </x-mary-form>

        </div>

</div>
