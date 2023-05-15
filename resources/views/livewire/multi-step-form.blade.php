<div>
    {{-- Success is as dangerous as failure. --}}
    <div>
        <form wire:submit.prevent="register">
            {{-- page 1 --}}
            @if ($currentStep == 1)
            <div class="step-one">
                <div class="card">
                    <style>
                        .card{
                            border-top-left-radius: 20px;
                            border-top-right-radius: 20px;
                        }
                         .card-header{
                            text-align: center;
                            font-weight: 900;
                            width: 100%;
                            border-top-left-radius: 20px;
                            border-top-right-radius: 20px;
                            margin: 0 auto;
                            height: 50px;
                        }
                    </style>
                    <div class="card-header bg-primary text-white "> Define your needs</div>
                    <div class="card-body">
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">First name</label>
                                    <input type="text" class="form-control" placeholder="Enter first name" wire:model="first_name">
                                   <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label for="">Last name</label>
                                   <input type="text" class="form-control" placeholder="Enter last name" wire:model="last_name">
                                   <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                               </div>
                           </div>
                        </div> --}}
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Under 3 years old</label>
                                    <select  class="form-control" wire:model="child_baby">
                                           <option value="" selected>Select</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3+">3+</option>
                                    </select>
                                    <span class="text-danger">@error('child_baby'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Between 3 and 6 Yo</label>
                                    <select  class="form-control" wire:model="child_kid">
                                        <option value="" selected>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3+">3+</option>
                                    </select>
                                    <span class="text-danger">@error('child_kid'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">7 years old and up</label>
                                    <select  class="form-control" wire:model="child_boy">
                                        <option value="" selected>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3+">3+</option>
                                    </select>
                                    <span class="text-danger">@error('child_boy'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Type of Employment</label>
                                    <select  class="form-control" wire:model="type_of_employment">
                                           <option value="" selected>Choose</option>
                                           <option value="male">Full time (Foreign Domestic Helper)</option>
                                           <option value="female">Part time (Local Domestic Helper)</option>
                                    </select>
                                    <span class="text-danger">@error('type_of_employment'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Child</label>
                                    <select  class="form-control" wire:model="child">
                                           <option value="" selected>number of child</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="+6">+6</option>
                                    </select>
                                    <span class="text-danger">@error('child'){{ $message }}@enderror</span>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" cols="2" rows="2" wire:model="description"></textarea>
                            <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endif
   
            {{-- STEP 2 --}}
   
            @if ($currentStep == 2)
                
           
            <div class="step-two">
                <div class="card">
                    <div class="card-header bg-secondary text-white">Define your needs</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Religion</label>
                                    <input type="text" class="form-control" placeholder="religion" wire:model="religion">
                                    <span class="text-danger">@error('religion'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label for="">Phone</label>
                                   <input type="text" class="form-control" placeholder="Enter phone number" wire:model="phone">
                                   <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Country of residence</label>
                                    <select class="form-control" wire:model="country">
                                        <option value="" selected>Select country</option>
                                        <option value="United States">United States</option>
                                        <option value="India">Morocoo</option>
                                        <option value="Rwanda">tunisie</option>
                                        <option value="Nigeria">mali</option>
                                        <option value="Phillipines">france</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                    </select>
                                    <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" placeholder="Enter city" wire:model="city">
                                    <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
            @endif
            {{-- STEP 3 --}}
   
            @if ($currentStep == 3)
                
        
            <div class="step-one">
                <div class="card">
                    <div class="card-header bg-secondary text-white"> Define your needs</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Domain</label>
                                    <input type="text" class="form-control" placeholder="Domain" wire:model="domain">
                                   <span class="text-danger">@error('domain'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label for="">Address</label>
                                   <input type="text" class="form-control" placeholder="Address" wire:model="address">
                                   <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
   
            {{-- STEP 4 --}}
            {{-- @if ($currentStep == 4)
                
        
            <div class="step-four">
                <div class="card">
                    <div class="card-header bg-secondary text-white">page 4/4 - finale</div>
                    <div class="card-body"> --}}
                        {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque delectus officia inventore id facere at aspernatur ad corrupti asperiores placeat, fugiat tempora soluta optio recusandae eligendi impedit ipsam ullam amet!
                        <div class="form-group">
                            <label for="cv">CV</label>
                            <input type="file" class="form-control" wire:model="cv">
                            <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                        </div> --}}
                        {{-- <div class="form-group"> --}}
                            {{-- <label for="terms" class="d-block">
                                <input type="checkbox"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                            </label>
                            <span class="text-danger">@error('terms'){{ $message }}@enderror</span> --}}
                            {{-- nadi cmlti 
                        </div>
                    </div>
                </div>
            </div>
   
            @endif --}}
   
            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
   
               @if ($currentStep == 1)
                   <div></div>
               @endif
   
               @if ($currentStep == 2 )
                   <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
               @endif
               
               @if ($currentStep == 1)
                   <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
               @endif
               
               @if ($currentStep == 2)
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
               @endif
                   
                  
            </div>
   
        </form>
   
   
   </div>
   


</div>
