<x-layout-component>
    <x-slot name="customStyle">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <style>
            [type=email]:focus,
            [type=number]:focus,
            [type=search]:focus,
            [type=text]:focus,
            select:focus,
            textarea:focus {
                border-color: #2F2F2F !important;
            }
        </style>
    </x-slot>
    <x-slot name="content">
        @livewire('apartment-details-component')
    </x-slot>
    <x-slot name="classFooter">!mt-[20px]</x-slot>
    <x-slot name="customScript">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <script>
            function getDate() {
                const selectedPlace = JSON.parse(sessionStorage.getItem('selectedPlace'));
                let myData = {
                    "lat": selectedPlace.geometry.location.lat,
                    "lng": selectedPlace.geometry.location.lng,
                    "address": selectedPlace.formatted_address,
                }
                Livewire.emit('storage', myData);
            }
        </script>
    </x-slot>
</x-layout-component>
