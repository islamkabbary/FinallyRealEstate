<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
use App\Models\ApartmentDetails;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendApartmentDetailsMailEvent;

class ApartmentDetailsComponent extends Component
{
    public $name, $email, $phone, $lat, $lng, $address, $bedrooms, $bathrooms, $square, $openModel = false, $data;
    protected $listeners = ['storage' => 'createDetails'];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        "phone" => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.apartment-details-component');
    }

    public function createDetails($data)
    {
        $this->validate();
        $apartmentDetails = new ApartmentDetails();
        $apartmentDetails->name = $this->name;
        $apartmentDetails->email = $this->email;
        $apartmentDetails->phone = $this->phone;
        $apartmentDetails->lat = $data['lat'];
        $apartmentDetails->lng = $data['lng'];
        $apartmentDetails->address = $data['address'] ?? " ";
        $apartmentDetails->bedrooms = $this->bedrooms ?? "1";
        $apartmentDetails->bathrooms = $this->bathrooms ?? "1";
        $apartmentDetails->square = $this->square ?? "0-1000";
        $apartmentDetails->save();
        try {
            Mail::send(new SendApartmentDetailsMailEvent($apartmentDetails));
        } catch (Exception $exception) {
            Log::info("ApartmentDetailsComponent : " . $exception->getMessage());
        }
        $this->openModel = true;
        $this->clear();
    }

    public function closeModel()
    {
        $this->openModel = false;
    }

    public function clear()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->bedrooms = null;
        $this->bathrooms = null;
        $this->square = null;
        // $this->dispatchBrowserEvent('removeStorage');
    }
}
