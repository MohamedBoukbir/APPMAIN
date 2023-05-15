<div>
    <script src="{{ asset('js/hello.js') }}"></script>
    {{-- Success is as dangerous as failure. --}}
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
                                <form name="myform" id="myForm">
                                    <!--Country -->
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
                                    </div>
                                    <input class="submited" type="submit" />
                                </form>
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

                                        <select name="state" id="countySel" size="1">
                                            <option value="" selected="selected">Please select Country</option>
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

                                        <select name="countrya" id="stateSel" size="1">
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

                                        <select name="district" id="districtSel" size="1">
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
                {{-- <script src="{{ asset('js/hello.js') }}"></script> --}}
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
                    <button type="button" class="btn btn-md btn-danger" wire:click="decreaseStep()"><i
                            class="fa-sharp fa-solid fa-arrow-left"></i></button>
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


        {{-- <script src="{{ asset('js/states.js') }}" wire:ignore></> --}}
            @push('scripts')
                <script src="{{ asset('js/countries.js') }}"></script>
            @endpush
    </div>
</div>
