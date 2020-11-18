<x-app-layout>


    <div class="container mx-auto px-4 py-16 max-w-7xl">


        <div class="flex mb-10" style="    min-height: 540px;">
            <div class="flex flex-col w-2/4">
                <div class="h-full"><img class="h-full w-full object-cover" src="https://skift.com/wp-content/uploads/2019/12/airbnb-plus-room-cape-town-e1575561685722.jpg"></div>
            </div>
            <div class="flex flex-col w-1/4" style="min-height: 300px; max-height: calc(100vh - 144px);">
                <div style="height: 50%;"><img class="h-full w-full object-cover" src="https://news.airbnb.com/wp-content/uploads/sites/4/2020/05/Airbnb-Beachfront-Greece.jpg?fit=2400%2C1600"></div>
                <div style="height: 50%;"><img class="h-full w-full object-cover" src="https://cdn.prod.www.manager-magazin.de/images/17f94cdd-0001-0004-0000-000001297898_w948_r1.77_fpx33.34_fpy50.jpg"></div>
            </div>
            <div class="flex flex-col w-1/4" style="min-height: 300px;max-height: calc(100vh - 144px); ">
                <div style="height: 50%;"><img class="h-full w-full object-cover" src="https://www.guestready.com/blog/wp-content/uploads/2019/11/Airbnb-Plus-1.jpg"></div>
                <div style="height: 50%;"><img class="h-full w-full object-cover" src="https://specials-images.forbesimg.com/imageserve/5e05ae84e961e1000739fd8f/960x0.jpg?fit=scale"></div>
            </div>
        </div>

    <div class="flex">
        <div id="body" class="w-4/6">
            <div class="flex justify-between">
                <div>
                    <p class="underline text-blue-800">North East Lincolnshire, England, United Kingdom</p>
{{--                    <h1 class="font-bold text-5xl -mt-3">{{$room->name}} - Room #2</h1>--}}
                </div>

                <div class="flex flex-col text-right">
                    <span class="font-bold block text-3xl">£75/week<span>
                    <span class="font-bold block text-lg">£150deposit<span>
                </div>
            </div>

            <div class="py-4 flex text-2xl">
                <p class="font-semibold mr-2">Available: </p> <p>09/11/2020, in 4 days | Now</p>
            </div>

            <div class="py-4">
                <span class="font-semibold mb-1 block">Note: Copules £100/week</span>
                <p>Newly refurbished single and double rooms with en-suites, kitchenette with fridge,kettle and microwave. large TVs with virgin media package with sky sports and free WiFi serviced weekly with access to the main fully equipped kitchen. Situated in central Cleethorpes, close to all amenities, local shops, restaurants and bars and within a short walk to the beach.Bookings are taken on a single occupancy and is £25 extra for a second person</p>
            </div>

{{--            <div class="border-t border-b my-4 py-4">--}}
{{--                <h3 class="text-xl font-semibold">House Amenties</h3>--}}

{{--                Close to Shops (15min - Aldi, Tesco, Lidl)--}}
{{--                Close bus station--}}
{{--                Close tram station--}}
{{--                Garden--}}
{{--            </div>--}}

{{--            <div class="border-t border-b my-4 py-4">--}}
{{--                <h3 class="text-xl font-semibold">House Amenties</h3>--}}

{{--                <div class="flex mt-3">--}}
{{--                    <div class="mr-2">--}}
{{--                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z"></path></svg>--}}
{{--                    </div>--}}
{{--                    <div>Kitchen</div>--}}
{{--                </div>--}}
{{--                <div class="flex mt-3">--}}
{{--                    <div class="mr-2">--}}
{{--                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z"></path></svg>--}}
{{--                    </div>--}}
{{--                    <div>Kitchen</div>--}}
{{--                </div>--}}
{{--                <div class="flex mt-3">--}}
{{--                    <div class="mr-2">--}}
{{--                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;"><path d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z"></path></svg>--}}
{{--                    </div>--}}
{{--                    <div>Kitchen</div>--}}
{{--                </div>--}}


{{--            </div>--}}

{{--            <div class="my-6">--}}
{{--                <div>--}}
{{--                    <h3>New housemate preferences</h3>--}}
{{--                    <div>Couples OK? Yes </div>--}}
{{--                    <div>Smoking OK? Yes</div>--}}
{{--                    <div>Pets OK? No</div>--}}
{{--                    <div>Occupation Professional</div>--}}
{{--                    <div>References? No</div>--}}
{{--                    <div>children? No</div>--}}
{{--                <div>Min age 18</div>--}}
{{--                <div>Max age 65</div>--}}
{{--                <div>Gender Males or females</div>--}}
{{--            </div>--}}

{{--            </div>--}}

{{--            <div>--}}
{{--                <h3>House Features</h3>--}}
{{--                4 rooms--}}
{{--                1 bathroom--}}

{{--            </div>--}}
        </div>
        <div class="w-2/6 pl-12" id="sidebar">
            <div class="py-4">
                <div class="flex items-center">
                    <img class="h-16 w-16  mr-2 rounded-full" style="margin: 0 auto;" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg">
                    <div class="flex flex-col">
                        <span class="font-bold -mb-2 text-xl">John Doe</span>
                        <spam>Joined in May 2017</spam>
                    </div>

                </div>
                <div class="flex">
                    ✅Verified User
                </div>
                <div>
                    <div>Chat via App</div>
                    <div>073322844</div>
                </div>
            </div>


            <div>
                <h3 class="text-xl semibold">Other rooms in the house</h3>
{{--                <div class="flex">--}}
{{--                    <img style="max-width: 170px; height: 90px;" src="https://news.airbnb.com/wp-content/uploads/sites/4/2020/05/Airbnb-Beachfront-Greece.jpg?fit=2400%2C1600">--}}
{{--                    <div class="w-full">--}}
{{--                        <div class="flex justify-between">--}}
{{--                            <h3 class="text-xl">Rooom #1</h3>--}}
{{--                            <p>£75/pw</p>--}}
{{--                        </div>--}}

{{--                        <p>Status - RENTED</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex bg-orange-100">--}}
{{--                    <img style="max-width: 170px; height: 90px;" src="https://news.airbnb.com/wp-content/uploads/sites/4/2020/05/Airbnb-Beachfront-Greece.jpg?fit=2400%2C1600">--}}
{{--                    <div class="w-full">--}}
{{--                        <div class="flex justify-between">--}}
{{--                            <h3 class="text-xl">Rooom #2</h3>--}}
{{--                            <p>£95/pw</p>--}}
{{--                        </div>--}}

{{--                        <p>Status - RENTED</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex">--}}
{{--                    <img style="max-width: 170px; height: 90px;" src="https://news.airbnb.com/wp-content/uploads/sites/4/2020/05/Airbnb-Beachfront-Greece.jpg?fit=2400%2C1600">--}}
{{--                    <div class="w-full">--}}
{{--                        <div class="flex justify-between">--}}
{{--                            <h3 class="text-xl">Rooom #3</h3>--}}
{{--                            <p>£85/pw</p>--}}
{{--                        </div>--}}

{{--                        <p>Status - RENTED</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
            Other potential listings from the same user
        </div>
    </div>

        <div>
            <h3 class="text-3xl font-semibold">Location</h3>
            <img width="100%" src="https://i.imgur.com/ER5KJpY.png" />
        </div>
    </div>


</x-app-layout>
