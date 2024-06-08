<?php

namespace App\Livewire\Forms;

use App\Models\Annee;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AnneeForm extends Form
{
    public ?Annee $annee;

    #[Validate('required')]
    public $libelle;

    #[Validate('required')]
    public $date_debut;

    #[Validate('required')]
    public $date_fin;

    #[Validate('required')]
    public $is_active;

    #[Validate('required')]
    public $school_id;

    public function setAnnee(Annee $annee): void
    {
        $this->annee = $annee;
        $this->libelle = $annee->libelle;
        $this->date_debut = $annee->date_debut;
        $this->date_fin = $annee->date_fin;
        $this->school_id = $annee->school_id;
        $this->is_active = $annee->is_active;
    }

    public function store(): void
    {
        $this->validate();
        Annee::create([
            'libelle' => $this->libelle,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'is_active' => $this->is_active,
            'school_id' => $this->school_id,
        ]);

        $this->reset();
    }

    public function update(): void
    {
        $this->validate();
        $this->annee->update([
            'libelle' => $this->libelle,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'is_active' => $this->is_active,
            'school_id' => $this->school_id,
        ]);

        $this->reset();
    }

}
