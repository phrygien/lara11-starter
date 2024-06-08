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

    public function render()
    {
        $ecoles = School::paginate(10);
        return view('livewire.schools.school-list', ['ecoles' => $ecoles ]);
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
}
