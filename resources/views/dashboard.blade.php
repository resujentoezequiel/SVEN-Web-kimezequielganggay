<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if ($message = Session::get('success'))
        <div class="alert" style="margin: 2rem 0 -2rem 2rem ; width: 20rem" >
            <div class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700" role="alert">
                <button type="button" class="close_alert" onclick="hideAlert()">×</button>
                You have successfully added the new schedule.
            </div>
        </div>
    @endif

    <div class="py-12">

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">

            <section class="test section-padding pt-0 ">
                <div style="font-size:4rem; font-family: sans-serif; font-weight: bold; height: 40rem; background-image: url('<?php echo asset('/img/intro2.jpg')?>'); background-position: center; background-repeat: no-repeat; background-size: cover; "  class="overflow-hidden shadow-sm">
                    <div class="text-gray-900 dark:text-gray-100 text-right mt-28 mr-[80px]">
                        {{ __("We care for") }}
                    </div>
                    <div class="text-gray-900 dark:text-gray-100 text-right mr-[80px]">
                        {{ __("your furry little") }}
                    </div>
                    <div class="text-gray-900 dark:text-gray-100 text-right mr-[80px]">
                        {{ __("love ones") }}
                    </div>
                    <div class="text-gray-900 dark:text-gray-100 text-right mr-[80px]">
                        {{ __("while") }}
                    </div>

                    <div class="text-gray-900 dark:text-gray-100 text-right mr-[80px]">
                        <a href="#visit" class="nav-link scroll-smooth">
                            <button style="height: 3rem; width: 20rem" type="button" class="inline-block rounded-full bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 motion-reduce:transition-none dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400">
                                Schedule a visit
                            </button>
                        </a>
                    </div>
                </div>
            </section>

            <section class="about test section-padding pt-0" id="about">
                <div style="font-family: sans-serif; height: 40rem; background-image: url('<?php echo asset('/img/about.jpg')?>'); background-position: center; background-repeat: no-repeat; background-size: cover; "  class="overflow-hidden shadow-sm">
                    <div class="text-gray-900 dark:text-gray-100 text-left mt-40 !ml-[50px] text-white text-5xl font-bold">
                        {{ __("Expert care for your") }}
                    </div>
                    <div class="text-gray-900 dark:text-gray-100 mt-2 text-left !ml-[50px] text-white text-4xl font-bold">
                        {{ __("furry, feathery, or") }}
                    </div>
                    <div class="text-gray-900 dark:text-gray-100 mt-2 text-left !ml-[50px] text-white text-4xl font-bold">
                        {{ __("scaley friend") }}
                    </div>

                    <div style="width: 40rem" class="text-gray-900 dark:text-gray-100 mt-8 text-left !ml-[50px] text-white text-1xl">
                        {{ __("We know how stressful it is to leave your pets at home alone. We're a team of experienced animal caregivers, well connected to local veterinarians. Trust to us to love them like our own, and to keep them safe and happy till you're home.") }}
                    </div>

                    <div class="text-gray-900 dark:text-gray-100 mt-8 text-left !ml-[50px] text-white text-4xl font-bold">
                        <a href="#visit" class="nav-link scroll-smooth">
                            <button style="height: 3rem; width: 20rem" type="button" class="inline-block rounded-full bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 motion-reduce:transition-none dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400">
                                Schedule a visit
                            </button>
                        </a>
                    </div>
                </div>
            </section>

            <section class="visit section-padding pt-0" id="visit">
                <div style="font-family: sans-serif; font-weight: bold; height: 40rem; background-image: url('<?php echo asset('/img/visit.jpg')?>'); background-position: center; background-repeat: no-repeat; background-size: cover; "  class="overflow-hidden shadow-sm">
                    <div class="text-gray-900 dark:text-gray-100 text-left text-gray-50 mt-[120px] ml-[50px] text-5xl">
                        {{ __("We'll take your dog for a") }}
                    </div>
                    <div class="text-gray-900 dark:text-gray-100 text-left text-gray-50 mt-3 ml-[50px] text-4xl">
                        {{ __("walk. Just tell us when!") }}


                    </div>

                    <form action="{{ route('add_appointment') }}">
                        @csrf

                        <div style="width: 43rem" class="text-gray-900 dark:text-gray-100 text-left text-gray-50 mt-9 ml-[50px]">

                            <div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                                <div>
                                    <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init id="datepicker-disable-past" >
                                        <input id="appointment_date" name="appointment_date" type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Select a date" />
                                        <label for="floatingInput" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                            Select a date
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <select id="appointment_time" name="appointment_time" data-te-select-init data-te-select-filter="true">
                                        <option value="">Select a time</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>

                                <div style="margin-top: 2rem">
                                    <label>Notes:</label>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                      <textarea id="notes" name="notes" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" rows="3" placeholder="Your message"></textarea>
                                        <label for="exampleFormControlTextarea1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
                                            Would you like to add any additional notes or comments?
                                        </label>
                                    </div>
                                </div>

                                <div style="visibility: hidden">
                                    <button id="legitBtn" type="submit" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                        Submit
                                    </button>
                                </div>

                                <div style="margin-top: -2rem">
                                    <button type="button" onclick="check_data()" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                        Submit
                                    </button>
                                </div>

                            </div>

                        </div>
                    </form>


                </div>
            </section>

        </div>
    </div>
</x-app-layout>

<script>

    function isPastDate(dateString) {
        // Create a Date object from the input date string (assuming format 'dd/mm/yyyy')
        const parts = dateString.split('/');
        const formattedDate = new Date(parts[2], parts[1] - 1, parts[0]); // month is zero-indexed

        // Get today's date
        const today = new Date();
        // Reset the time part of today to make comparison based only on date
        today.setHours(0, 0, 0, 0);

        // Compare if the selected date is in the past
        return formattedDate < today;
    }


    function check_data(){

        const appointment_date = document.getElementById("appointment_date").value;
        const appointment_time = document.getElementById("appointment_time").value;

        if(appointment_date === ""){
            calert({
                title: 'Appointment Date Error',
                text: 'Please select appointment date!',
                icon: 'error'
            })
        } else if(isPastDate(appointment_date)){
            calert({
                title: 'Appointment Date Error',
                text: 'The selected date is in the past!',
                icon: 'error'
            })
        } else if(appointment_time === ""){
            calert({
                title: 'Appointment Time Error',
                text: 'Please select appointment time!',
                icon: 'error'
            })
        } else {
            document.getElementById("legitBtn").click();
        }
    }

    function hideAlert(){
        hide(document.querySelectorAll('.alert'));
    }

    function hide (elements) {
        elements = elements.length ? elements : [elements];
        for (var index = 0; index < elements.length; index++) {
            elements[index].style.display = 'none';
        }
    }

</script>
