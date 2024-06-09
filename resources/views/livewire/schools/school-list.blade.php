<div class="overflow-x-auto">
    {{-- <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th>
            <label>
              <input type="checkbox" class="checkbox" />
            </label>
          </th>
          <th>Name / UIID </th>
          <th>Contacts</th>
          <th>Statut</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $ecoles as $ecole )
            <!-- row 1 -->
            <tr>
                <th>
                <label>
                    <input type="checkbox" class="checkbox" />
                </label>
                </th>
                <td>
                <div class="flex items-center gap-3">
                    <div class="avatar">
                    <div class="w-12 h-12 mask mask-squircle">
                        @if(\Illuminate\Support\Facades\Storage::disk('public')->exists($ecole->logo))
                        <img src="/storage/{{ $ecole->logo }}" alt="Avatar Tailwind CSS Component" />
                        @endif
                    </div>
                    </div>
                    <div>
                    <div class="font-bold">{{ $ecole->name }}</div>
                    <div class="text-sm opacity-50">{{ $ecole->identity }}</div>
                    </div>
                </div>
                </td>
                <td>
                {{ $ecole->phone_fixe }} / {{ $ecole->phone_mobile }}
                <br/>
                <span class="badge badge-ghost badge-sm">{{ $ecole->email }}</span>
                </td>
                <td>Purple</td>
                <th>
                <a href="{{route("schools.edit", $ecole)}}" wire:navigate class="btn btn-ghost btn-xs text-primary" >details</a>
                </th>
            </tr>

        @endforeach

      </tbody>
      <!-- foot -->
      <tfoot>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Job</th>
          <th>Favorite Color</th>
          <th></th>
        </tr>
      </tfoot>

    </table> --}}
    @if($totalSelected > 0)
    <x-mary-dropdown label="Actions" class="btn-warning" right>
        <x-mary-menu-item title="Activer  le {{ $totalSelected }} selectionné" icon="o-archive-box" />
        <x-mary-menu-item title="Desactiver le {{ $totalSelected }} selectionné" icon="o-trash" />
        <x-mary-menu-item title="Supprimer le {{ $totalSelected }} selectionné" icon="o-arrow-path" />
    </x-mary-dropdown>
    @endif

    <x-mary-table :headers="$headers" :rows="$ecoles" striped link="/schools/{id}/edit" with-pagination selectable wire:model="selected" class="mt-3" @row-selection="$wire.countSelected()">
        @scope('cell_logo', $ecole)
            <x-mary-avatar image="storage/{{ $ecole->logo ?? '/empty-user.jpg' }}" class="!w-10" />
        @endscope

        {{-- @scope('actions', $ecole)
            <x-mary-button icon="o-trash" wire:click="delete({{ $ecole->id }})" spinner class="btn-sm" tooltip-bottom="Delete" />
        @endscope --}}

    </x-mary-table>

  </div>
