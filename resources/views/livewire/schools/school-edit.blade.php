<div>
    <x-mary-header title="Details école > {{ $name }}" separator />
        <x-mary-button label="Delete this school" class="mb-4 btn-error" @click="$wire.myModal3 = true" />
        <x-mary-modal wire:model="myModal3" persistent class="backdrop-blur">
            <div>Vous etes sure de supprimer cette cole?</div>
            <x-slot:actions>
                <x-mary-button label="Annuler" @click="$wire.myModal3 = false" />
                <x-mary-button label="Suprimmer" @click="$wire.myModal3 = false" class="btn-primary" wire:click='deleteSchool()' />
            </x-slot:actions>
        </x-mary-modal>

        <div class="mt-3">
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
                            <x-mary-button label="Retour" class="btn-warning" link="{{ route('schools.index') }}" />
                            <x-mary-button label="Enregistrer" class="btn-primary" type="submit" spinner="update" />
                        </x-slot:actions>
                    </x-mary-form>

        </div>

</div>
