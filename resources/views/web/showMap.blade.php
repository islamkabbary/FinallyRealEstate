<x-layout-component>
    <x-slot name="content">
        <section id="show-map">
            <div class="grid grid-cols-12 xl:mx-[70px] lg:mx-[30px] md:mx-10 mx-3 mt-10">
                <div class="lg:order-1 order-2 lg:col-span-7 col-span-12">
                    <div id="map" class="xl:w-[750px] lg:w-[540px] lg:h-[500px] h-[450px] rounded-[10px] xl:mt-[14px]"
                        style="box-shadow: 3px 4px 9px 0px rgba(0, 0, 0, 0.25);"></div>
                    <div class="lg:hidden block">
                        <div class="flex justify-center gap-5 mt-5">
                            <button class="w-[150px] rounded-[3px] h-[40px] bg-[#06C09C] text-white"
                                onclick='window.location.href = "/details"'>Confirm</button>
                            {{-- <button class="w-[150px] rounded-[3px] h-[40px] bg-[#E51937] text-white"
                                onclick="history.back()">Cancel</button> --}}
                        </div>
                    </div>
                </div>
                <div class="lg:order-2 order-1 lg:col-span-5 col-span-12 lg:mt-0 mt-5 my-14">
                    <p
                        class="text-white font-[Butler] xl:text-[48px] lg:text-[38px] text-[28px] capitalize lg:text-start text-center">
                        please confirm address</p>
                    <p id="nameSearch"
                        class="text-white font-[Calibri] xl:text-[36px] lg:text-[28px] text-[20px] capitalize lg:text-start text-center font-[700] mt-5">
                    </p>
                    <div class="hidden lg:block">
                        <p class="font-[Calibri] xl:text-[26px] text-[19px] capitalize font-[400] mt-5"
                            style="color: rgba(255, 255, 255, 0.59);line-height: 118%;">
                            Please pinpoint your desired location on the map below. Your chosen location will help us
                            tailor
                            our services to your specific needs and preferences. Take a moment to mark the spot that
                            holds
                            significance for your property search or inquiry. Your input will enable us to provide you
                            with
                            accurate and personalized assistance.
                        </p>
                        <div class="flex lg:justify-start justify-center">
                            <button onclick='window.location.href = "/details"'
                                class="xl:w-[522px] w-[415px] h-[60px] bg-[#06C09C] text-white xl:mt-[60px] lg:mt-[140px] mt-10">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <x-slot name="customScript">
        <script>
            // Retrieve the selected place details from session or cookie
            const selectedPlace = JSON.parse(sessionStorage.getItem('selectedPlace'));
            const nameAdress = selectedPlace.formatted_address.split(",");
            document.getElementById("nameSearch").innerHTML = nameAdress[0] + ',' + nameAdress[nameAdress.length - 1];

            // Check if a place is selected
            if (selectedPlace) {
                // Initialize the map
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: selectedPlace.geometry.location,
                    zoom: 17,
                    mapTypeId: "satellite"
                });

                // Add a marker for the selected place
                new google.maps.Marker({
                    position: selectedPlace.geometry.location,
                    map: map,
                    title: selectedPlace.formatted_address
                });
            }
            // Remove the selected place from sessionStorage
            // sessionStorage.removeItem('selectedPlace');
        </script>
    </x-slot>
</x-layout-component>
