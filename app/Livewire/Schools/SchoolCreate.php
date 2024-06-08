<?php

namespace App\Livewire\Schools;

use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use App\Models\Region;
use App\Models\School;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Mary\Traits\WithMediaSync;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Mary\Traits\Toast;
use Illuminate\Support\Str;

class SchoolCreate extends Component
{
    use WithFileUploads, WithMediaSync;
    use Toast;

    public string $identity;

    // Temporary files
    #[Rule(['files.*' => 'image|max:1024'])]
    public array $files = [];

    public $logo;
    // Library metadata (optional validation)
    // #[Rule('required|string')]
    // public Collection $library;

    #[Rule('required|string')]
    public string $name;

    #[Rule('required|unique:schools,phone_fixe')]
    public string $phone_fixe;

    #[Rule('required|string|min:10|max:10|unique:schools,phone_mobile')]
    public string $phone_mobile;

    #[Rule('required|email|unique:schools,email')]
    public string $email;

    #[Rule('required')]
    public $province_id = null;

    #[Rule('required')]
    public $region_id = null;

    #[Rule('required')]
    public $district_id = null;

    #[Rule('required')]
    public $commune_id = null;

    #[Rule('required')]
    public string $adresse;

    #[Rule('nullable')]
    public string $notes;

    public string $is_active;

    public string $user_id;

    #[Rule('required')]
    public string $type;


    public $provinces = [];
    public $regions = [];
    public $districts = [];
    public $communes = [];


    public function mount(): void
    {
        $this->user_id = Auth::user()->id;
        $this->is_active = 1;
        $this->identity = strtoupper(Str::random(5));

        $this->provinces = Province::all();
    }

    public function updatedProvinceId($property)
    {
        if($this->province_id !=null ){
            $this->regions = Region::where('id_province', $this->province_id)->get();
            $this->districts = [];
            $this->communes = [];
        }else{
            $this->regions = [];
            $this->districts = [];
            $this->communes = [];
        }
    }

    public function updatedRegionId($property): void
    {
        $this->districts = District::where('id_region', $this->region_id)->get();
    }

    public function updatedDistrictId($property)
    {
        $this->communes = Commune::where('id_district', $this->district_id)->get();
    }

    public function render()
    {
        return view('livewire.schools.school-create');
    }

    /**
     * enregistrer ecole
     */
    public function save()
    {
        sleep(3);
        $this->validate();

        School::create([
            'name' => strtoupper($this->name),
            'identity' =>  $this->identity,
            'phone_fixe' => $this->phone_fixe,
            'phone_mobile' => $this->phone_mobile,
            'email' => $this->email,
            'province_id' => $this->province_id,
            'region_id' => $this->region_id,
            'district_id' => $this->district_id,
            'commune_id' => $this->commune_id,
            'adresse' => $this->adresse,
            'notes' => $this->notes,
            'is_active' => $this->is_active,
            'user_id' => $this->user_id,
            'type' => $this->type,
            'logo' => Str::replaceFirst('public/', '', $this->logo->store('public/products'))
        ]);

        $this->reset();

        $this->success('Data Saved !');

    }
}
