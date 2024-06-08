<?php

namespace App\Livewire\Schools;

use App\Models\School;
use App\Models\Commune;
use App\Models\District;
use App\Models\Province;
use App\Models\Region;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Mary\Traits\WithMediaSync;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SchoolEdit extends Component
{
    use WithFileUploads;

    public School $school;

    public $schoolId;

    use WithFileUploads, WithMediaSync;
    use Toast;

    public $identity;

    // Temporary files
    #[Rule(['files.*' => 'image|max:1024'])]
    public array $files = [];

    public $logo;
    // Library metadata (optional validation)
    // #[Rule('required|string')]
    // public Collection $library;

    #[Rule('required|string')]
    public $name;

    #[Rule('required|unique:schools,phone_fixe')]
    public $phone_fixe;

    #[Rule('required|string|min:10|max:10|unique:schools,phone_mobile')]
    public $phone_mobile;

    #[Rule('required|email|unique:schools,email')]
    public $email;

    #[Rule('required')]
    public $province_id = null;

    #[Rule('required')]
    public $region_id = null;

    #[Rule('required')]
    public $district_id = null;

    #[Rule('required')]
    public $commune_id = null;

    #[Rule('required')]
    public $adresse;

    #[Rule('nullable')]
    public $notes;

    public $is_active;

    public $user_id;

    #[Rule('required')]
    public $type;


    public $provinces = [];
    public $regions = [];
    public $districts = [];
    public $communes = [];


    public function mount(School $school): void
    {
        $this->provinces = Province::all();
        $this->user_id = Auth::user()->id;

        $this->school = $school;
        $this->schoolId = $school->id;

        $this->name = $school->name;
        $this->identity = $school->identity;
        $this->is_active = $school->is_active;
        $this->type = $school->type;
        $this->province_id = $school->province_id;
        $this->region_id = $school->region_id;
        $this->district_id = $school->district_id;
        $this->commune_id = $school->commune_id;
        $this->phone_mobile = $school->phone_mobile;
        $this->phone_fixe = $school->phone_fixe;
        $this->email = $school->email;
        $this->notes = $school->notes;
        $this->adresse = $school->adresse;
        $this->logo = $school->logo;

        $this->regions = Region::where('id_province', $this->province_id)->get();
        $this->districts = District::where('id_region', $this->region_id)->get();
        $this->communes = Commune::where('id_district', $this->district_id)->get();
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
        return view('livewire.schools.school-edit');
    }

    public function update(School $school)
    {
        sleep(3);
        if($this->schoolId) {
            $this->school->name = $this->name;
            $this->school->identity = $this->identity;
            $this->school->is_active = $this->is_active;
            $this->school->type = $this->type;
            $this->school->province_id = $this->province_id;
            $this->school->region_id = $this->region_id;
            $this->school->district_id = $this->district_id;
            $this->school->commune_id = $this->commune_id;
            $this->school->phone_mobile = $this->phone_mobile;
            $this->school->phone_fixe = $this->phone_fixe;
            $this->school->email = $this->email;
            $this->school->notes = $this->notes;
            $this->school->adresse = $this->adresse;

            if($this->logo){
                if ($this->school->logo && $this->school->logo != 'storage/default.jpg') {
                    if (Storage::exists('public/'.$this->school->logo)) {
                        Storage::delete('public/'.$this->school->logo);
                    }
                }

                $this->school->logo = $this->logo->store('public/products');

                $this->school->logo = Str::replaceFirst('public/', '', $this->school->logo);
            }

            $this->school->update([
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
            ]);

            $this->reset();

            $this->success(
                'Data Updated !',
                redirectTo: '/schools'
            );
        }
    }
}
