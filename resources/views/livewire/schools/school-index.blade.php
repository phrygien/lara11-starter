<div>
    <x-mary-header title="Schools" subtitle="Manage schools">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-magnifying-glass" placeholder="Search..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-funnel" />
            <x-mary-button icon="o-plus" class="btn-primary" link="{{ route('schools.create') }}" />
        </x-slot:actions>
    </x-mary-header>

    {{-- <div class="text-center mt-5">
        <p class="text-xl font-bold">No notes yet</p>
        <p class="text-sm">Let's create your first note to send.</p>
    </div> --}}

    <livewire:schools.school-list />
</div>
