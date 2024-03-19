<div class="border-2 {{count($recycleCentres) > 0 ? 'border-r_green-100' : 'border-gray-500'}} rounded-xl p-2 py-4">
    <div class="flex">
        @if(count($recycleCentres) > 0)
            <x-heroicon-s-check-circle class="h-16 text-r_green-100"/>
            <div class="flex-1 ml-2 my-auto">
                <p class="text-xl font-medium">Recycle at {{$recycleCentres[0]->name}}</p>
                <div class="flex flex-1 my-2">
                    <x-heroicon-o-check class="text-gray-500 h-6" />
                    <div class="flex-1 flex-row">
                        <div class="flex flex-1">
                            <p class="text-lg">Accepts {{$search}}</p>
                        </div>
                        <p class="font-medium text-r_green-200 m">{{$recycleCentres[0]->distance_in_miles}} miles away</p>
                    </div>
                    <div class="mt-3 mr-3 flex justify-end gap-1">
                        <a href="{{$recycleCentres[0]->website}}" target="blank" rel="noreferrer noopener" class="md:w-auto w-full px-4 py-2 text-md text-white bg-black rounded-2xl border-2 border-black hover:bg-gray-900">See Details</a>
                        <a href="{{"https://www.google.com/maps/dir//" . $recycleCentres[0]->lat . "," . $recycleCentres[0]->lng}}" target="blank" rel="noreferrer noopener" class="md:w-auto w-full px-4 py-2 text-md text-white bg-r_green-200 rounded-2xl border-2 border-r_green-100 hover:bg-green-800">Directions</a>
                    </div>
                </div>
                @if(count($recycleCentres) > 1)
                    <div class="mt-4">
                        <x-recycle-point-accordion :recycleCentres="array_slice($recycleCentres,1)"/>
                    </div>
                @endif
            </div>
        @else
            <x-heroicon-s-question-mark-circle class="h-16 text-gray-500"/>
            <div class="ml-2 my-auto">
                <p class="text-xl font-medium">No Recycling Centres found</p>
                <p class="text-lg">No close recycling centres that accept this item have been found</p>
            </div>
        @endif
    </div>
</div>