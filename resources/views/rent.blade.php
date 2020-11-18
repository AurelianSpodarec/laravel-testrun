<x-app-layout>


    <div class="container mx-auto px-4 pt-10 max-w-7xl">
    <section class="flex justify-between">

        <div class="flex">
            <h1 class="text-2xl mr-4">Apartaments & flats for rent</h1>  <p class="mt-2">- {{$rooms->total()}} results</p>
        </div>

        <div>
            Sort By: <span>Newest Oldest</span>
        </div>
    </section>

    <section>


{{--        <div class="w-full flex -mx-4 mt-12 mb-24">--}}

{{--            <article class="w-1/3 h-64 mx-4  rounded-md bg-cover" style="background-image: url('https://i.imgur.com/s4CysT3.png')">--}}
{{--            <div class="p-6 h-full" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65) 70%);">--}}
{{--                <span class="bg-red-600 text-white rounded-md px-2 text-sm">Promoted</span>--}}


{{--                <div class="text-white">--}}
{{--                    <span class="font-bold text-2xl">GBP £300/month</span>--}}
{{--                    <h3 class="font-semibold">BRAND NEW | AFFORDABLE 1BR | Luxurious</h3>--}}
{{--                    <span>2 bedroom - 2 bathroosm - kitchen - Wifi</span>--}}
{{--                    <div>Salford, Manchester, UK</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </article>--}}

{{--            <article class="w-1/3 h-64 mx-4  rounded-md bg-cover" style="background-image: url('https://i.imgur.com/cub9Tye.png')">--}}
{{--                <div class="p-6 h-full" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65) 70%);">--}}
{{--                    <span class="bg-red-600 text-white rounded-md px-2 text-sm">Promoted</span>--}}


{{--                    <div class="text-white">--}}
{{--                        <span class="font-bold text-2xl">GBP £300/month</span>--}}
{{--                        <h3 class="font-semibold">BRAND NEW | AFFORDABLE 1BR | Luxurious</h3>--}}
{{--                        <span>2 bedroom - 2 bathroosm - kitchen - Wifi</span>--}}
{{--                        <div>Salford, Manchester, UK</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </article>--}}

{{--            <article class="w-1/3 h-64 mx-4  rounded-md bg-cover" style="background-image: url('https://i.imgur.com/nDgSquG.png')">--}}
{{--                <div class="p-6 h-full" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65) 70%);">--}}
{{--                    <span class="bg-red-600 text-white rounded-md px-2 text-sm">Promoted</span>--}}


{{--                    <div class="text-white">--}}
{{--                        <span class="font-bold text-2xl">GBP £300/month</span>--}}
{{--                        <h3 class="font-semibold">BRAND NEW | AFFORDABLE 1BR | Luxurious</h3>--}}
{{--                        <span>2 bedroom - 2 bathroosm - kitchen - Wifi</span>--}}
{{--                        <div>Salford, Manchester, UK</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </article>--}}

{{--        </div>--}}

        <div class="w-3/4">
{{--@yield($current_page)--}}


            @foreach($rooms as $rooms)
                <article class="md:flex shadow-lg  md:mx-auto my-8  h-64 ">

                        <img class=" md:w-1/3  object-cover rounded-lg rounded-r-none " src="https://i.imgur.com/0UZXZQT.png" alt="bag">

                        <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">

                            <a href="/listings/{{$rooms->id}}" class="cursor-pointer">
                            <div class="flex items-center">
                                <h2 class="text-xl text-gray-800 font-medium mr-auto">{{$rooms->name}}</h2>
                                <p class="text-gray-800 font-semibold text-xl tracking-tighter">
                                    £75/week
                                </p>
                            </div>
                            <div>
                                <span class="tex-3xl">Aviable from the: <span class="font-semibold">03/09/2020</span></span>
                            </div>
                            </a>

{{--                            <p class="text-sm text-gray-700 mt-4">--}}
{{--                                <div>1 bedroom - 1 shared bathroom - 10min supermarket</div>--}}
{{--                                <div>washing machine - Wifi - Kitchen</div>--}}
{{--                            </p>--}}

                            <div class="flex justify-between items-center justify-end mt-16 top-auto">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 mr-2 rounded-full" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg"/>
                                    <span>John Doe</span>
                                </div>
                                <p>Manchester, UK</p>
                            </div>

                        </div>
                </article>
            @endforeach
        </div>

        {{$rooms->links()}}

        <aside class="w-1/4">
            Empty sidebar
        </aside>
    </section>


    </div>


</x-app-layout>
