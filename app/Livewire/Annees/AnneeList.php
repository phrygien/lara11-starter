<?php

namespace App\Livewire\Annees;

use App\Livewire\Forms\AnneeForm;
use App\Models\Annee;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class AnneeList extends Component
{
    use WithPagination;
    use Toast;

    public $actif_label = 'Actif';
    public $inactif_label = 'Inactif';
    public $selected = [];

    public bool $anneeModal = false;
    public bool $editMode = false;

    public AnneeForm $form;
    public $schools = [];

    public function showModal(): void
    {
        $this->form->reset();
        $this->anneeModal = true;
    }

    public function mount()
    {
        $this->schools = School::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'libelle', 'label' => 'Libelle'],
            ['key' => 'date_debut', 'label' => 'Debut'],
            ['key' => 'date_fin', 'label' => 'Fin'],
            ['key' => 'is_active', 'label' => 'Statut']
        ];

        $annees = Annee::paginate(7);
        return view('livewire.annees.annee-list', [
            'annees' => $annees,
            'headers' => $headers,
            'actif_label' => $this->actif_label,
            'inactif_label' => $this->inactif_label
        ]);
    }

    public function updateSelected()
    {
       $selectItems = $this->selected;

       foreach ($selectItems as $item)
       {
            $annee = Annee::find($item);
            $annee->update(['is_active' => 0 ]);
       }
       $this->success('Data Deleted !');
       $this->selected = [];
    }

    public function save()
    {
        $this->validate();

        if($this->editMode)
        {
            $this->form->update();
            $this->editMode = false;
        }else{
            $this->form->store();
        }

        $this->success('Data Saved !');
        $this->anneeModal = false;
    }

    /**
     * for edit annee scolaire
     */
    public function edit($id): void
    {
        $annee = Annee::find($id);
        $this->form->setAnnee($annee);
        $this->editMode = true;
        $this->anneeModal = true;
    }

    /**
     * for delete annee
     */
    public function delete($id): void
    {
        $annee = Annee::find($id);
        $annee->delete();
        $this->success('Data Deleted !');
    }
}
