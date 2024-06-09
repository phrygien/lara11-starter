<?php

namespace App\Livewire\Schools;

use App\Models\School;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class SchoolList extends Component
{
    use WithPagination;
    use Toast;

    public $selected = [];
    public $showBulkActions = false;
    public $totalSelected = 0;

    public function render()
    {
        $headers = [
            ['key' => 'id', 'label' => '#', 'class' => 'bg-red-500/20 w-1'],
            ['key' => 'logo', 'label' => 'Logo'],
            ['key' => 'name', 'label' => 'Nom ecole'],
            ['key' => 'identity', 'label' => 'UI ID'],
            ['key' => 'phone_fixe', 'label' => 'Telephone fixe'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'adresse', 'label' => 'Adresse exacte'],
        ];

        $ecoles = School::paginate(4);
        return view('livewire.schools.school-list', ['ecoles' => $ecoles, 'headers' => $headers ]);
    }

    public function updated($property): void
    {
        if (! is_array($property) && $property != "") {
            $this->resetPage();
        }
    }

    // Clear filters
    public function clear(): void
    {
        $this->reset();
        $this->resetPage();
        $this->success('Filters cleared.', position: 'toast-bottom');
    }

    public function delete($id)
    {
        $this->success('Data Deleted !');
    }

    public function countSelected(): void
    {
        $this->showBulkActions = true;
        $items = $this->selected;
        $this->totalSelected = count($items);
    }

    public function bulkDelete(): void
    {
        $selectedItems = $this->selected;

        foreach ($selectedItems as $item)
        {
            $school = School::findOrFail($item);
            $school->delete();
        }

        $this->success('All Selected Data Deleted !');
       $this->selected = [];
    }
}
