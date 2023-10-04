<section id="form">
    <div class="grid grid-cols-12 xl:mx-[70px] lg:mx-[30px] md:mx-10 mx-3 mt-10 xl:h-[600px]">
        <div class="lg:col-span-7 col-span-12">
            <div id="title">
                <p class="md:text-[48px] text-[37px] capitalize font-[Butler] font-[400] text-[#fff]">You're
                    almost
                    there,<br>it's
                    the last step!</p>
                <p class="hidden md:block font-[Calibri] xl:text-[24px] text-[17px] capitalize font-[400] mt-2.5 line-height-[118%]"
                    style="color: rgba(255, 255, 255, 0.59);line-height: 118%;">A specialized real estate broker
                    will contact you to schedule an analysis and<br>evaluation
                    meeting.</p>
                <p class="md:hidden font-[Calibri] text-[17px] capitalize font-[400] mt-2.5 line-height-[118%]"
                    style="color: rgba(255, 255, 255, 0.59);line-height: 118%;">A specialized real estate broker
                    will contact you to schedule an analysis and evaluation meeting.</p>
            </div>
            <div class="lg:w-[93%] grid md:grid-cols-2 grid-cols-1 gap-x-5 mt-[30px] md:px-0 sm:px-10 px-5">
                <div class="flex flex-col">
                    <label class="text-[#fff] text-[20px] font-[Calibri] font-[400] capitalize">Bedrooms</label>
                    <select id="bedrooms"
                        class="mt-0.5 p-1 xl:h-[42px] h-[32px] bg-[#464646] border-[#464646] text-[#ffffff] placeholder-[#464646] hover:bg-[#464646] focus:bg-[#464646] focus:outline-none"
                        style="box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.09);">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>more than 5</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-[#fff] text-[20px] font-[Calibri] font-[400] capitalize">Bathrooms</label>
                    <select id="bathrooms"
                        class="mt-0.5 p-1 xl:h-[42px] h-[32px] bg-[#464646] border-[#464646] text-[#ffffff] placeholder-[#464646] hover:bg-[#464646] focus:bg-[#464646] focus:outline-none"
                        style="box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.09);">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>more than 5</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-[#fff] text-[20px] font-[Calibri] font-[400] capitalize">Square
                        feet</label>
                    <select id="square"
                        class="mt-0.5 p-1 xl:h-[42px] h-[32px] bg-[#464646] border-[#464646] text-[#ffffff] placeholder-[#464646] hover:bg-[#464646] focus:bg-[#464646] focus:outline-none"
                        style="box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.09);">
                        <option>0-1000</option>
                        <option>1000-2000</option>
                        <option>2000-3000</option>
                        <option>3000-4000</option>
                        <option>4000-5000</option>
                        <option>5000+</option>
                        <option>not sure</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-[#fff] text-[20px] font-[Calibri] font-[400] capitalize">Your full
                        name</label>
                    <input
                        class="@error('name') border-[#E51937] @enderror text-[#ffffff] mt-0.5 xl:h-[42px] h-[32px] bg-[#464646] rounded-[3px] !focus:border-[#2F2F2F] !ring-0 border-transparent"
                        type="text" wire:model.defer="name"
                        style="box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.09);" />
                    @error('name')
                        <span class="text-[#E51937]">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label class="text-[#fff] text-[20px] font-[Calibri] font-[400] capitalize">Your
                        email</label>
                    <input
                        class="@error('email') border-[#E51937] @enderror text-[#ffffff] mt-0.5 xl:h-[42px] h-[32px] bg-[#464646] rounded-[3px] !focus:border-[#2F2F2F] !ring-0 border-transparent"
                        type="text" wire:model.defer="email"
                        style="box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.09);" />
                    @error('email')
                        <span class="text-[#E51937]">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label class="text-[#fff] text-[20px] font-[Calibri] font-[400] capitalize">Your phone
                        number</label>
                    <input
                        class="@error('phone') border-[#E51937] @enderror text-[#ffffff] mt-0.5 xl:h-[42px] h-[32px] bg-[#464646] rounded-[3px] !focus:border-[#2F2F2F] !ring-0 border-transparent"
                        type="text" wire:model.defer="phone"
                        style="box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.09);" />
                    @error('phone')
                        <span class="text-[#E51937]">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex md:justify-end justify-center mt-5 lg:w-[93%]">
                <button wire:loading.attr="disabled" class="w-[150px] rounded-[3px] h-[40px] bg-[#06C09C] text-white"
                    onclick="getDate()">Confirm</button>
                {{-- <button id="defaultModal" data-modal-target="defaultModal"
                    data-modal-toggle="defaultModal"></button> --}}
            </div>
            {{-- <div class="lg:hidden block">
                <div class="flex justify-center gap-5 mt-5">
                    <button class="w-[150px] rounded-[3px] h-[40px] bg-[#06C09C] text-white"
                        onclick='window.location.href = "/map"'>Confirm</button>
                    <button class="w-[150px] rounded-[3px] h-[40px] bg-[#E51937] text-white"
                        onclick="history.back()">Cancel</button>
                </div>
            </div> --}}
        </div>
        <div class="lg:col-span-5 hidden lg:grid lg:mt-0 mt-5 my-14">
            <div class="relative z-10 xl:ml-[163px] lg:ml-[40px]">
                <div class="xl:w-[387px] xl:h-[387px] lg:w-[287px] h-[287px] xl:ml-0 lg:ml-[70px] xl:mt-0 lg:mt-[30px]">
                    <img class="w-full h-full" src="{{ asset('public/images/form-back.png') }}">
                </div>
                <div class="xl:w-[260px] xl:h-[260px] lg:w-[160px] h-[160px] xl:ml-0"><img
                        class="absolute z-30 xl:-left-[90px] xl:top-[260px] lg:top-[190px] lg:-left-[50px]"
                        src="{{ asset('public/images/form-front.png') }}"></div>
            </div>
        </div>
    </div>
    @if ($openModel)
        <div class="w-full h-full">
            <div id="defaultModal" tabindex="-1" aria-hidden="true" wire:click="closeModel"
                class="fixed bg-black/50 top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%)] max-h-full justify-center items-center flex">
                <div class="relative rounded-lg shadow dark:bg-gray-700"
                    style="background: rgba( 47, 47, 47, 0.65 );box-shadow: 0 8px 32px 0 rgba( 47, 47, 47, 0.37 );backdrop-filter: blur( 13px );-webkit-backdrop-filter: blur( 13px );border-radius: 20px;">
                    <!-- Modal header -->
                    <div class="flex items-start justify-center p-4">
                        <p class="text-[48px] font-[Butler] text-white capitalize">thank you</p>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <p class="text-center text-[#ffffff] opaicty-75 text-[18px] font-[Calibri] normal-case"
                            style="color: rgba(255, 255, 255, 0.75);">You'll quickly
                            get a
                            precise appraisal of your property's worth. One of our knowledgeable real
                            estate<br>agents will calculate your estimate with care.</p>
                        <p class="text-center text-[#ffffff] opaicty-75 text-[18px] font-[Calibri] normal-case"
                            style="color: rgba(255, 255, 255, 0.75);">

                            The latter will get in touch with you to ask for more details about your home so
                            they
                            can provide you a<br>free estimate that reflects its market worth.</p>
                    </div>
                    <div class="flex justify-center gap-16 mb-[56px] my-8">
                        <img class="w-[27px] h-[26px]" src="{{ asset('public/images/facebook.png') }}">
                        <img class="w-[27px] h-[26px]" src="{{ asset('public/images/instagram.png') }}">
                        <img class="w-[27px] h-[26px]" src="{{ asset('public/images/linkedin.png') }}">
                    </div>
                    <div class="flex justify-center mx-[457px] pb-[48px]">
                        <a href="/"> <button class="w-[199px] rounded-[3px] h-[48px] bg-[#06C09C] text-white">back
                                to
                                home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
