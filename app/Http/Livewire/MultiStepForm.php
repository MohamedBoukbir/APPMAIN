<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MultiStepForm extends Component
{///////////////////////////
    public $child_baby;
    public $child_kid;
    public $child_boy;
    public $type_of_employment;
    public $expected_start_date;
    public $day_off;
    public $accommodation;
    public $living_arrangement;
///////////////////////////
    public $first_name;
    public $last_name;
    public $address;
    public $country;
    public $religion;
    public $phone;
    // public $status;
    public $city;
    public $domain;
    public $child;
    public $social_status;

    public $totalSteps = 3;
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

        // if($this->currentStep == 1){
        //     $this->validate([
        //         'first_name'=>'required|string',
        //         'last_name'=>'required|string',
        //         'social_status'=>'required',
        //         'child'=>'required'
        //     ]);
        // }
         if($this->currentStep == 1){
            $this->validate([
                'child_baby'=>'required',
                'child_kid'=>'required',
                'child_boy'=>'required',
                'type_of_employment'=>'required'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'living_arrangement'=>'required',
                 'accommodation'=>'required',
                 'day_off'=>'required',
                 'expected_start_date'=>'required'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                  'domain'=>'required',
                  'address'=>'required'
              ]);
        }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->currentStep == 3){
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
        // $user->firstName =$this->first_name ;
        // $user->lastName = $this->last_name;
        // $user->address = $this->address;
        // $user->religion = $this->religion;
        // $user->phone = $this->phone;
        // $user->social_status =$this->social_status;
        // $user->country = $this->country;
        // $user->domain = $this->domain;
        // $user->child = $this->child;

        $user->child_baby =$this->child_baby;
        $user->child_kid = $this->child_kid;
        $user->child_boy = $this->child_boy;
        $user->type_of_employment = $this->type_of_employment;
        $user->living_arrangement =$this->living_arrangement;
        $user->accommodation = $this->accommodation;
        $user->day_off = $this->day_off;
        $user->expected_start_date = $this->expected_start_date;

        $user->save();

            //   User::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            // $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('registration.famille.success');
        //   }
    }
}