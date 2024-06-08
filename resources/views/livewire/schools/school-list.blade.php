<div class="overflow-x-auto">
    <table class="table">
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
                <button class="btn btn-ghost btn-xs" wire:click='delete(1)'>details</button>
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

    </table>
  </div>
