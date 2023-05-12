<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MultiStepForm extends Component
{
    public $first_name;
    public $last_name;
    // public $gender;
    public $address;
    public $country;
    public $religion;
    public $phone;
    // public $status;
    public $city;
    public $domain;
    public $child;
    public $social_status;

    public $totalSteps = 2;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'first_name'=>'required|string',
                'last_name'=>'required|string',
                'social_status'=>'required',
                'child'=>'required'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'religion'=>'required',
                 'phone'=>'required',
                 'country'=>'required',
                 'city'=>'required'
              ]);
        }
        // elseif($this->currentStep == 3){
        //       $this->validate([
        //           'domain'=>'required',
        //           'address'=>'required'
        //       ]);
        // }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->currentStep == 2){
            //   $this->validate([
            //     //   'cv'=>'required|mimes:doc,docx,pdf|max:1024',
            //       'terms'=>'accepted'
            //   ]);
          }

        //   $cv_name = 'CV_'.$this->cv->getClientOriginalName();
        //   $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        //   if($upload_cv){
            //   $values = array(
            //       "firstName"=>$this->first_name,
            //       "lastName"=>$this->last_name,
            //       "address"=>$this->address,
            //       "religion"=>$this->religion,
            //       "phone"=>$this->phone,
            //       "country"=>$this->country,
            //       "social_status"=>$this->social_status,
            //       "domain"=>$this->domain,
            //       "child"=>$this->child,
            //     //   "cv"=>$cv_name,
            //   );
        $user = User::find(Auth::user()->id);
        // dd('nadi');
        $user->firstName =$this->first_name ;
        $user->lastName = $this->last_name;
        $user->address = $this->address;
        $user->religion = $this->religion;
        $user->phone = $this->phone;
        $user->social_status =$this->social_status;
        $user->country = $this->country;
        $user->domain = $this->domain;
        $user->child = $this->child;
        $user->save();

            //   User::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            // $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('registration.famille.success');
        //   }
    }
}