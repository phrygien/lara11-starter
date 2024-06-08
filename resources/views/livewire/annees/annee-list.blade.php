<div>
    <x-mary-header title="Annee scolaire" subtitle="Check this on mobile">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-bolt" placeholder="Search..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-funnel" />
            <x-mary-button icon="o-plus" class="btn-primary" @click="$wire.showModal()" />
        </x-slot:actions>
    </x-mary-header>

    <x-mary-button label="Delete selected annee" class="btn-warning" />

    <x-mary-table :headers="$headers" :rows="$annees"
    striped @row-click="$wire.edit($event.detail.id)"
    with-pagination
    wire:model="selected"
    selectable
    @row-selection="console.log($event.detail)"
    >
        @scope('cell_is_active', $annee)
            @if($annee->is_active == 0)
                <x-mary-badge value="Inactif" class="badge-primary" />
            @else
                <x-mary-badge value="Actif" class="badge-info" />
            @endif
        @endscope

        @scope('cell_date_debut', $annee)
            <i>{{ $annee->date_debut }}</i>
        @endscope

        @scope('cell_date_fin', $annee)
            <i>{{ $annee->date_fin }}</i>
        @endscope
        @scope('actions', $annee)
            <x-mary-button icon="o-trash" wire:click="delete({{ $annee->id }})" spinner class="btn-sm btn-error" />
        @endscope
    </x-mary-table>


    <x-mary-modal wire:model="anneeModal" class="backdrop-blur" title="Ajout Annee">
        <div class="mb-5">
            <x-mary-form wire:submit="save">
                {{-- Notice `error_field` --}}
                <div>
                    <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ecole</label>
                    <select class="w-full max-w-xs select select-primary" wire:model='form.school_id'>
                        <option value="">Dans quelle école sera l'annee affecte ?</option>
                        @foreach ( $schools as $school)
                            <option value="{{ $school->id }}">{{ $school->name }}</option>
                        @endforeach
                      </select>
                </div>
                @error('form.school_id') <span class="text-red-500 error">{{ $message }}</span> @enderror

                <x-mary-input label="Libelle Annee" wire:model="form.libelle" error-field="total_salary" />
                <x-mary-datetime label="Date debut" wire:model="form.date_debut" icon="o-calendar" />
                <x-mary-datetime label="Date fin" wire:model="form.date_fin" icon="o-calendar" />
                <select class="w-full select select-primary" wire:model='form.is_active'>
                    <option disabled>Etat de l'annee ?</option>
                    <option value="1">Ouvert</option>
                    <option value="0">Inactif</option>
                  </select>
                  @error('form.is_active') <span class="error">{{ $message }}</span> @enderror
                <x-slot:actions>
                    <x-mary-button label="Annuler" @click="$wire.anneeModal = false" class="btn-warning" />
                    <x-mary-button label="Valider" class="btn-primary" type="submit" spinner="save" />
                </x-slot:actions>
            </x-mary-form>
        </div>
    </x-mary-modal>
</div>
