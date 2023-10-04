<x-layout-component>
    <x-slot name="content">
        <div id="address-map-container" style="width:0%;height:0px; ">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
        <section id="hiro" class="grid grid-cols-3 md:mx-[70px] mx-[25px] lg:mt-0 mt-[27px]">
            <div class="col-span-2 lg:mt-[30px]">
                <p
                    class="text-white xl:text-[86px] lg:text-[66px] md:text-[45px] sm:text-[29px] text-[20px] font-[butler] xl:leading-[103px] lg:leading-[75px]">
                    {{ __('message.Découvrez la Valeur') }}<br>{{ __('message.de votre luxe') }}<br>{{ __('message.propriété') }}
                </p>
                <p
                    class="hidden lg:block xl:text-[18px] lg:text-[11.5px] text-[20px] leading-[26px] mt-5 opacity-[76%] text-white font-[calibri]">
                    {{ __("message.Vous souhaitez connaître la valeur de votre maison ? Complétez ces 3 étapes faciles et l'une des") }}<br>
                    {{ __('message.nos courtiers immobiliers spécialisés prendront contact avec vous pour vous donner une estimation précise et gratuite') }}<br>
                    {{ __('message.estimation de la valeur de votre résidence de prestige !') }}
                </p>
                <p
                    class="lg:hidden md:block xs:hidden xss:hidden md:w-[400px] w-[275px] md:text-[16px] text-[12px] mt-5 opacity-[76%] text-white font-[Calibri] lowercase">
                    {{ __("message.Vous souhaitez connaître la valeur de votre maison ? Complétez ces 3 étapes faciles et l'une des") }}<br>
                    {{ __('message.nos courtiers immobiliers spécialisés prendront contact avec vous pour vous donner une estimation précise et gratuite') }}<br>
                    {{ __('message.estimation de la valeur de votre résidence de prestige !') }}
                </p>
                <p
                    class="md:hidden sm:w-[361px] xs:w-[320px] xss:w-[275px] md:text-[17px] text-[12px] mt-5 opacity-[76%] text-white font-[Calibri] lowercase">
                    Want to know the value of your home? Complete this 3 easy steps and one of our specialized real
                    estate brokers will contact you to give you a precise and free estimate of the value of your
                    prestigious residence!
                </p>
                <div
                    class="form-group flex md:mt-[45px] xl:h-[66px] md:h-[50px] h-[28px] mt-3 xl:w-[826px] md:w-[630px] sm:w-[350px] w-[264px]">
                    <input id="autocomplete-input" value="" required
                        class="map-input bg-white xl:w-[594px] lg:w-[425px] md:w-[480px] w-[270px] h-full md:rounded-l-[5px] rounded-l-[2px] focus:border-transparent md:pl-[28px] pl-[7px] capitalize xl:text-[24px] md:text-[20px] text-[10px] tex-[#BBBBBB]"
                        placeholder="Ex. Toronto, ON, Canada">
                    <button id="myBtn"
                        class="z-[999] xl:w-[232px] md:w-[150px] w-[76px] bg-[#e51937] h-full px-[5px] xl:text-[24px] md:text-[20px] text-[10px] text-white border-transparent rounded-r-[5px] font-[calibri] ">{{ __('message.Recherche') }}</button>
                </div>
                <p class="md:text-xl text-base text-red-800 hidden" id="vaildation">{{ __('message.Entrez votre adresse') }}
                </p>
                <script>
                    window.onload = function() {
                        var myBtn = document.getElementById('myBtn');
                        var vaildation = document.getElementById('vaildation');
                        var input = document.getElementById('autocomplete-input');
                        myBtn.onclick = function() {
                            if (input.value === '' && input.hasAttribute('required')) {
                                input.style.backgroundColor = "rgb(252 165 165)";
                                vaildation.style.display = "block";
                                return false;
                            }
                            return window.location.href = "/map";
                        };
                    };
                </script>
            </div>
            <div class="col-span-1">
                <img class="xl:h-[550px] lg:h-[447px] md:h-[340px] sm:h-[130px] sm:w-[90px] md:w-auto xs:w-[80px] xs:h-[110px] xss:h-[100px] md:ml-0  ml-5"
                    src="{{ asset('public/images/heroLeft.png') }}">
            </div>
        </section>
        <section id="howItWorks">
            <div class="flex justify-center md:mt-[80px] mt-10">
                <p
                    class="text-[#fff] font-[Calibri] text-[32px] capitalize after:border flex flex-col after:border-[#E51937] after:opaticty-[71%] after:w-[68px] items-center">
                    how it works</p>
            </div>
            <div class="hidden lg:block">
                <div class="flex mt-[77px] justify-between mx-[158px]">
                    <div
                        class="w-full flex justify-center flex lg:flex-row flex-col rounded-full after:border after:border-[#ffffff94] after:opaticty-[71%] after:w-full items-center">
                        <div>
                            <span
                                class="w-[72px] h-[72px] border rounded-full text-[32px] flex justify-center items-center"
                                style="color:#ffffff94;border-color:#ffffff94">1</span>
                        </div>
                    </div>
                    <div class="flex justify-center lg:flex-row flex-col justify-center">
                        <div>
                            <span
                                class="w-[72px] h-[72px] border rounded-full text-[32px] flex justify-center items-center"
                                style="color:#ffffff94;border-color:#ffffff94">2</span>
                        </div>
                    </div>
                    <div
                        class="w-full flex justify-center flex justify-center lg:flex-row flex-col before:border before:border-[#ffffff94] before:opaticty-[71%] before:w-full items-center">
                        <div>
                            <span
                                class="w-[72px] h-[72px] border rounded-full text-[32px] flex justify-center items-center"
                                style="color:#ffffff94;border-color:#ffffff94">3</span>
                        </div>
                    </div>
                </div>
                <div class="flex mt-3 justify-between mx-[68px]">
                    <div class="flex lg:flex-col justify-center items-center">
                        <img src="{{ asset('public/images/placeholderLap.png') }}">
                        <p class="text-[#fff] text-[24px] capitalize">choose the location</p>
                        <p class='text-[14px] capitalize text-center' style="color: rgba(255, 255, 255, 0.55)">
                            Help us serve you better by sharing the<br>location of your current house.
                        </p>
                    </div>
                    <div class="flex lg:flex-col justify-center items-center">
                        <img src="{{ asset('public/images/formLap.png') }}">
                        <p class="text-[#fff] text-[24px] capitalize">choose the location</p>
                        <p class='text-[14px] capitalize text-center' style="color: rgba(255, 255, 255, 0.55)">
                            Help us serve you better by sharing the<br>location of your current house.
                        </p>
                    </div>
                    <div class="flex lg:flex-col justify-center items-center">
                        <img src="{{ asset('public/images/groupLap.png') }}">
                        <p class="text-[#fff] text-[24px] capitalize">choose the location</p>
                        <p class='text-[14px] capitalize text-center' style="color: rgba(255, 255, 255, 0.55)">
                            Help us serve you better by sharing the<br>location of your current house.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex lg:hidden mt-5">
                <div class="flex flex-col ml-[35px]">
                    <div class="flex">
                        <div
                            class="w-full flex flex-col rounded-full after:border-[2px] after:border-[#ffffff94] after:opaticty-[71%] after:h-[80px] items-center">
                            <div>
                                <span
                                    class="md:w-[60px] md:h-[60px] w-10 h-10 border-[4px] rounded-full text-[24px] flex justify-center items-center"
                                    style="color:#ffffff94;border-color:#ffffff94">1</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <div>
                                <span
                                    class="md:w-[60px] md:h-[60px] w-10 h-10 border-[4px] rounded-full text-[24px] flex justify-center items-center"
                                    style="color:#ffffff94;border-color:#ffffff94">2</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div
                            class="w-full flex flex-col rounded-full before:border-[2px] before:border-[#ffffff94] before:opaticty-[71%] before:h-[80px] items-center">
                            <div>
                                <span
                                    class="md:w-[60px] md:h-[60px] w-10 h-10 border-[4px] rounded-full text-[24px] flex justify-center items-center"
                                    style="color:#ffffff94;border-color:#ffffff94">3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:mx-5 xss:mx-2">
                    <div class="flex md:gap-5 xss:gap-2">
                        <div class="md:w-12 xss:w-12 xss:w-8 mt-3 xss:mt-2">
                            <img src="{{ asset('public/images/placeholderLap.png') }}">
                        </div>
                        <div class="flex flex-col mt-[5px]">
                            <p class="text-[#fff] md:text-[24px] xs:text-[18px] xss:text-[16px] capitalize">choose the
                                location</p>
                            <p class='md:text-[16px] xs:text-[12px] text-[8px] capitalize'
                                style="color: rgba(255, 255, 255, 0.55)">
                                Help us serve you better by sharing the<br>location of your current house.
                            </p>
                        </div>
                    </div>
                    <div class="flex md:gap-5 xss:gap-2 xss:mt-12">
                        <div class="md:w-12 xss:w-12 xss:w-8 mt-3 xss:mt-[1.4rem]">
                            <img src="{{ asset('public/images/formLap.png') }}">
                        </div>
                        <div class="flex flex-col mt-[20px]">
                            <p class="text-[#fff] md:text-[24px] xs:text-[18px] xss:text-[16px] capitalize">choose the
                                location</p>
                            <p class='md:text-[16px] xs:text-[12px] text-[8px] capitalize'
                                style="color: rgba(255, 255, 255, 0.55)">
                                Help us serve you better by sharing the<br>location of your current house.
                            </p>
                        </div>
                    </div>
                    <div class="flex md:gap-5 xss:gap-2 xss:mt-12">
                        <div class="md:w-12 xss:w-12 xss:w-8 mt-3 xss:mt-[1.4rem]">
                            <img src="{{ asset('public/images/groupLap.png') }}">
                        </div>
                        <div class="flex flex-col mt-2">
                            <p class="text-[#fff] md:text-[24px] xs:text-[18px] xss:text-[16px] capitalize mt-[1rem]">
                                choose the
                                location</p>
                            <p class='md:text-[16px] xs:text-[12px] text-[8px] capitalize'
                                style="color: rgba(255, 255, 255, 0.55)">
                                Help us serve you better by sharing the<br>location of your current house.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <x-slot name="customScript">
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                localStorage.clear();
            });
            // Create the autocomplete object
            const autocompleteInput = document.getElementById('autocomplete-input');
            const autocomplete = new google.maps.places.Autocomplete(autocompleteInput);

            // Set the fields to retrieve (optional)
            autocomplete.setFields(['address_components', 'formatted_address', 'geometry']);

            // Listen for place selection event
            autocomplete.addListener('place_changed', () => {
                const place = autocomplete.getPlace();

                // Store the selected place details in session or cookie
                sessionStorage.setItem('selectedPlace', JSON.stringify(place));
            });

            // Get the input field
            var input = document.getElementById("autocomplete-input");

            // Execute a function when the user presses a key on the keyboard
            input.addEventListener("keypress", function(event) {
                // If the user presses the "Enter" key on the keyboard
                if (event.key === "Enter") {
                    // Cancel the default action, if needed
                    event.preventDefault();
                    // Trigger the button element with a click
                    document.getElementById("myBtn").click();
                }
            });
        </script>
    </x-slot>
</x-layout-component>
