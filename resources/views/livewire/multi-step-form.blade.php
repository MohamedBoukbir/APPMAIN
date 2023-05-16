<div>

    {{-- Success is as dangerous as failure. --}}

    <script src="{{ asset('js/states.js') }}"></script>

    <div>
        <form wire:submit.prevent="register">
            {{-- page 1 --}}
            @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #00B074;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #00B074;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #00B074;
                            }

                            .current-item .progress-count {
                                color: #00B074;
                            }

                            @media (max-width: 480px) {
                                .step-wizard {
                                    /* background-color: #21d4fd; */
                                    /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                    /* height: 100vh; */
                                    width: 10%;
                                    display: flex;
                                    justify-content: center;
                                    margin: 0 auto;
                                    align-items: center;
                                }

                                .step-wizard-item {
                                    padding: 0 20px;
                                    flex-basis: 0;
                                    -webkit-box-flex: 1;
                                    -ms-flex-positive: 1;
                                    flex-grow: 1;
                                    max-width: 60%;
                                    display: flex;
                                    flex-direction: column;
                                    text-align: center;
                                    min-width: 100px;
                                    position: relative;
                                }

                                .progress-label {
                                    font-size: 10px;
                                    font-weight: 600;
                                    margin-top: 10px;
                                }
                            }
                        </style>
                        <style>
                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }
                        </style>
                        <div class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard ">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Create account</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Family</span>
                                </li>
                                <li class="step-wizard-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Submit</span>
                                </li>
                                {{-- <li class="step-wizard-item">
                                <span class="progress-count">4</span>
                                <span class="progress-label">Success</span>
                            </li> --}}
                            </ul>
                        </section>
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

                                    {{-- <!--Country -->
                                    <div class="select-something">
                                        Country:
                                        <select name="state" id="countySel" size="1">
                                            <option value="" selected="selected">Please select Country</option>
                                        </select>
                                    </div>
                                    <!--State -->
                                    <div class="select-something">
                                        State:
                                        <select name="countrya" id="stateSel" size="1">
                                            <option value="" selected="selected">Please select state</option>
                                        </select>
                                    </div>
                                    <!--State -->
                                    <div class="select-something">
                                        District/City:
                                        <select name="district" id="districtSel" size="1">
                                            <option value="" selected="selected">
                                                Please select district/city
                                            </option>
                                        </select>
                                    </div> --}}

                                    <div class="form-group">
                                        <label for="">Under 3 years old</label>
                                        <select class="form-control" wire:model="child_baby">
                                            <option value="" selected>Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3+">3+</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('child_baby')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Between 3 and 6 Yo</label>
                                        <select class="form-control" wire:model="child_kid">
                                            <option value="" selected>Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3+">3+</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('child_kid')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">7 years old and up</label>
                                        <select class="form-control" wire:model="child_boy">
                                            <option value="" selected>Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3+">3+</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('child_boy')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Type of Employment</label>
                                        <select class="form-control" wire:model="type_of_employment">
                                            <option value="" selected>Choose</option>
                                            <option value="male">Full time (Foreign Domestic Helper)</option>
                                            <option value="female">Part time (Local Domestic Helper)</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('type_of_employment')
                                                {{ $message }}
                                            @enderror
                                        </span>
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
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #00B074;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #00B074;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #00B074;
                            }

                            .current-item .progress-count {
                                color: #00B074;
                            }
                        </style>



                        <style>
                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }
                        </style>
                        <div class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Create account</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Family</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Submit</span>
                                </li>
                                {{-- <li class="step-wizard-item">
                                <span class="progress-count">4</span>
                                <span class="progress-label">Success</span>
                            </li> --}}
                            </ul>
                        </section>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Expected start date</label>
                                        <input type="date" class="form-control" wire:model="expected_start_date"
                                            min="<?php echo date('Y-m-d'); ?>">
                                        <span class="text-danger">
                                            @error('expected_start_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter phone number"
                                            wire:model="phone">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Day off</label>
                                        <select class="form-control" wire:model="day_off">
                                            <option value="" selected>Select</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Moday">Moday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>

                                        </select>
                                        <span class="text-danger">
                                            @error('day_off')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Accommodation</label>
                                        <select class="form-control" wire:model="accommodation">
                                            <option value="" selected>Select</option>
                                            <option value="Live_In">Live in</option>
                                            <option value="Live_Out">Live out</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('accommodation')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Living arrangement</label>
                                        <select class="form-control" wire:model="living_arrangement">
                                            <option value="" selected>Select</option>
                                            <option value="Private_Room">Private Room</option>
                                            <option value="Share_with_a_kid">Share with a kid</option>
                                            <option value="Share_with_another_helper">Share with another helper
                                            </option>
                                            <option value="Share_with_another_person">Share with another person
                                            </option>
                                        </select>
                                        <span class="text-danger">
                                            @error('living_arrangement')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" placeholder="Enter city"
                                            wire:model="city">
                                        <span class="text-danger">
                                            @error('city')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            @endif
            {{-- STEP 3 --}}
            @if ($currentStep == 3)
                <div class="step-two">
                    <div class="card">
                        <script src="{{ asset('js/hello.js') }}"></script>
                        <style>
                            .step-wizard {
                                /* background-color: #21d4fd; */
                                /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                                /* height: 100vh; */
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .step-wizard-list {
                                background: #fff;
                                /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                                color: #333;
                                list-style-type: none;
                                border-radius: 10px;
                                display: flex;
                                padding: 20px 10px;
                                position: relative;
                                z-index: 10;
                            }

                            .step-wizard-item {
                                padding: 0 20px;
                                flex-basis: 0;
                                -webkit-box-flex: 1;
                                -ms-flex-positive: 1;
                                flex-grow: 1;
                                max-width: 100%;
                                display: flex;
                                flex-direction: column;
                                text-align: center;
                                min-width: 170px;
                                position: relative;
                            }

                            .step-wizard-item+.step-wizard-item:after {
                                content: "";
                                position: absolute;
                                left: 0;
                                top: 19px;
                                background: #00B074;
                                width: 100%;
                                height: 2px;
                                transform: translateX(-50%);
                                z-index: -10;
                            }

                            .progress-count {
                                height: 40px;
                                width: 40px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                font-weight: 600;
                                margin: 0 auto;
                                position: relative;
                                z-index: 10;
                                color: transparent;
                            }

                            .progress-count:after {
                                content: "";
                                height: 40px;
                                width: 40px;
                                background: #00B074;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                border-radius: 50%;
                                z-index: -10;
                            }

                            .progress-count:before {
                                content: "";
                                height: 10px;
                                width: 20px;
                                border-left: 3px solid #fff;
                                border-bottom: 3px solid #fff;
                                position: absolute;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -60%) rotate(-45deg);
                                transform-origin: center center;
                            }

                            .progress-label {
                                font-size: 14px;
                                font-weight: 600;
                                margin-top: 10px;
                            }

                            .current-item .progress-count:before,
                            .current-item~.step-wizard-item .progress-count:before {
                                display: none;
                            }

                            .current-item~.step-wizard-item .progress-count:after {
                                height: 10px;
                                width: 10px;
                            }

                            .current-item~.step-wizard-item .progress-label {
                                opacity: 0.5;
                            }

                            .current-item .progress-count:after {
                                background: #fff;
                                border: 2px solid #00B074;
                            }

                            .current-item .progress-count {
                                color: #00B074;
                            }
                        </style>



                        <style>
                            .card {
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                border: none;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            }

                            .card-header {
                                text-align: center;
                                font-weight: 900;
                                width: 100%;
                                border-top-left-radius: 20px;
                                border-top-right-radius: 20px;
                                margin: 0 auto;
                                height: 50px;
                            }
                        </style>
                        <div
                            class="card-header bg-primary text-white d-flex align-items-center justify-content-center">
                            Define your needs</div>
                        <section class="step-wizard">
                            <ul class="step-wizard-list">
                                <li class="step-wizard-item">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Create account</span>
                                </li>
                                <li class="step-wizard-item ">
                                    <span class="progress-count">2</span>
                                    <span class="progress-label">Family</span>
                                </li>
                                <li class="step-wizard-item current-item">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">Submit</span>
                                </li>
                                {{-- <li class="step-wizard-item">
                            <span class="progress-count">4</span>
                            <span class="progress-label">Success</span>
                        </li> --}}
                            </ul>
                        </section>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Title of my offer* (30-60 characters)</label>
                                        <input type="text" class="form-control" wire:model="title_of_offer">
                                        <span class="text-danger">
                                            @error('title_of_offer')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter phone number"
                                        wire:model="phone">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div> --}}
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="">Define your needs</label>
                                        <textarea class="form-control customtextarea" rows="6"
                                            placeholder="Example:
We are a family of 3 members, 2 kids 10 and 12 years old and an elderly requiring special needs. Looking for a helper with at least 4 years of experience and good recommendations. We would like someone warm, friendly and kind to help with day-to-day tasks, experienced, flexible - priority is looking after our children, a great cook and super organised who can manage all things related to cooking and housekeeping (cleaning, laundry, ironing) with ease…"
                                            wire:model="define_needs"></textarea>
                                        <span class="text-danger">
                                            @error('define_needs')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nationality</label>

                                        <!-- Country names and Country Name -->
                                        <select class="form-select" id="country" name="country">
                                            <option value="">country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius
                                                and Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, Democratic Republic of the Congo">Congo, Democratic
                                                Republic of the Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                            </option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the
                                                Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated
                                                States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                            </option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Maarten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia
                                                and the South Sandwich Islands</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China
                                            </option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>

                                        {{-- <select class="form-control" name="state" id="countySel" size="1"
                                            wire:model="living_arrangement">
                                            <option value="" selected="selected">Please select Country</option>
                                        </select> --}}

                                        <span class="text-danger">
                                            @error('living_arrangement')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nationality</label>

                                        <select name="countrya" id="stateSel" size="1"
                                            wire:model="living_arrangement">
                                            <option value="" selected="selected">Please select state</option>
                                        </select>

                                        {{-- <select class="form-control" name="state" id="countySel" size="1"
                                            wire:model="living_arrangement">
                                            <option value="" selected="selected">Please select Country</option>
                                        </select> --}}

                                        <span class="text-danger">
                                            @error('living_arrangement')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nationality</label>

                                        <select name="district" id="districtSel" size="1"
                                            wire:model="living_arrangement">
                                            <option value="" selected="selected">
                                                Please select district/city
                                            </option>
                                        </select>

                                        {{-- <select class="form-control" name="state" id="countySel" size="1"
                                            wire:model="living_arrangement">
                                            <option value="" selected="selected">Please select Country</option>
                                        </select> --}}

                                        <span class="text-danger">
                                            @error('living_arrangement')
                                                {{ $message }}
                                            @enderror
                                        </span>
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

                @if ($currentStep == 2 || $currentStep == 3)
                    <button type="button" class="btn btn-md btn-danger" wire:click="decreaseStep()"
                        onclick="location.reload();"><i class="fa-sharp fa-solid fa-arrow-left"></i></button>
                @endif

                @if ($currentStep == 1 || $currentStep == 2)
                    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()"><i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                @endif

                @if ($currentStep == 3)
                    <button type="submit" class="btn btn-md btn-primary"><i class="fa-solid fa-check"></i></button>
                @endif
            </div>
        </form>
        {{-- @push('scripts')
            <script>
                function loadScript() {
                    // Créez un élément <script>
                    var script = document.createElement('script');
                    script.src = './public/js/states.js';

                    // Ajoutez l'élément <script> au corps de la page
                    document.body.appendChild(script);
                }
            </script>
        @endpush --}}
    </div>
</div>
