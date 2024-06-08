<x-app-layout>

    <div>
        <div id="dashboard" class="mb-10">
            <div class="flex flex-wrap gap-5 justify-between items-center">
                <div>
                    <div class="text-4xl font-extrabold ">
                        Dashboard
                    </div>
                </div>


                <div class="flex items-center gap-3 ">
                    <div>
                        <div class="relative flex-1">
                            <select id="marya82de51370451601b26ad5ceef42d49bperiod" wire:model.live="period" class="select select-primary w-full font-normal pl-10">

                                <option value="-7 days">Last 7 days</option>
                                                    <option value="-15 days">Last 15 days</option>
                                                    <option value="-30 days">Last 30 days</option>
                            </select>
                            <svg class="inline w-5 h-5 absolute pointer-events-none top-1/2 -translate-y-1/2 left-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="h-0.5 -mt-9 mb-9">
                <progress class="progress progress-primary w-full h-0.5 dark:h-1" wire:loading=""></progress>
            </div>
    </div>

        <div wire:snapshot="{&quot;data&quot;:{&quot;period&quot;:&quot;-30 days&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;xWspSfnQRGU478yi3pm5&quot;,&quot;name&quot;:&quot;dashboard.stats&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;props&quot;:[&quot;period&quot;],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;86c6520bce2d018becacfd0227ff87946ab1ab62ad9a4722ff950804895877a1&quot;}" wire:effects="[]" wire:id="xWspSfnQRGU478yi3pm5">
        <div class="grid lg:grid-cols-4 gap-5 lg:gap-8">
            <div class="bg-base-100 rounded-lg px-5 py-4  w-full shadow truncate text-ellipsis">
            <div class="flex items-center gap-3">
                <div class="  text-primary">
                <svg class="inline w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"></path>
    </svg>
            </div>
                <div class="text-left">
                     <div class="text-xs text-gray-500 whitespace-nowrap">Gross</div>


                    <div class="font-black text-xl">$260,153.78</div>
                </div>
            </div>
        </div>        <div class="bg-base-100 rounded-lg px-5 py-4  w-full shadow">
            <div class="flex items-center gap-3">
                 <div class="  text-primary">
                <svg class="inline w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"></path>
    </svg>
    </div>


                <div class="text-left">
                  <div class="text-xs text-gray-500 whitespace-nowrap">Orders</div>

                    <div class="font-black text-xl">92</div>
                </div>
            </div>
        </div>        <div class="bg-base-100 rounded-lg px-5 py-4  w-full shadow">
            <div class="flex items-center gap-3">
               <div class="  text-primary">
                <svg class="inline w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"></path>
    </svg>
        </div>


                <div class="text-left">
                   <div class="text-xs text-gray-500 whitespace-nowrap">New customers</div>


                    <div class="font-black text-xl">922</div>

                </div>
            </div>
        </div>        <div class="bg-base-100 rounded-lg px-5 py-4  w-full shadow">
            <div class="flex items-center gap-3">
                <div class="  !text-pink-500">
                <svg class="inline w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"></path>
    </svg>
           </div>

                <div class="text-left">
                                    <div class="text-xs text-gray-500 whitespace-nowrap">Built with</div>


                    <div class="font-black text-xl">maryUI</div>

                </div>
            </div>
        </div>    </div>
    </div>
        <div class="card bg-base-100 rounded-lg p-5 shadow-sm mt-10">

            <div class="col-span-12 lg:col-span-4">
                <div wire:snapshot="{&quot;data&quot;:{&quot;period&quot;:&quot;-30 days&quot;,&quot;chartGross&quot;:[{&quot;type&quot;:&quot;line&quot;,&quot;options&quot;:[{&quot;backgroundColor&quot;:&quot;#dfd7f7&quot;,&quot;resposive&quot;:true,&quot;maintainAspectRatio&quot;:false,&quot;scales&quot;:[{&quot;x&quot;:[{&quot;display&quot;:false},{&quot;s&quot;:&quot;arr&quot;}],&quot;y&quot;:[{&quot;display&quot;:false},{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}],&quot;plugins&quot;:[{&quot;legend&quot;:[{&quot;display&quot;:false},{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}],&quot;data&quot;:[{&quot;labels&quot;:[[&quot;2024-04-07&quot;,&quot;2024-04-08&quot;,&quot;2024-04-09&quot;,&quot;2024-04-10&quot;,&quot;2024-04-11&quot;,&quot;2024-04-12&quot;,&quot;2024-04-13&quot;,&quot;2024-04-14&quot;,&quot;2024-04-15&quot;,&quot;2024-04-16&quot;,&quot;2024-04-17&quot;,&quot;2024-04-18&quot;,&quot;2024-04-19&quot;,&quot;2024-04-20&quot;,&quot;2024-04-21&quot;,&quot;2024-04-22&quot;,&quot;2024-04-23&quot;,&quot;2024-04-24&quot;,&quot;2024-04-25&quot;,&quot;2024-04-26&quot;,&quot;2024-04-27&quot;,&quot;2024-04-28&quot;,&quot;2024-04-29&quot;,&quot;2024-04-30&quot;,&quot;2024-05-01&quot;,&quot;2024-05-03&quot;,&quot;2024-05-05&quot;,&quot;2024-05-06&quot;,&quot;2024-05-07&quot;],{&quot;class&quot;:&quot;Illuminate\\Support\\Collection&quot;,&quot;s&quot;:&quot;clctn&quot;}],&quot;datasets&quot;:[[[{&quot;label&quot;:&quot;Amount&quot;,&quot;data&quot;:[[2097,299,1111.1599999999999,8982,9774,97482.1,8990,299,0,0,8385,51090.5,7880,0,4393,12080,899,693,6687,6586,697,992,10286.01,1497,1097,11079,2885,3893,0.01],{&quot;class&quot;:&quot;Illuminate\\Support\\Collection&quot;,&quot;s&quot;:&quot;clctn&quot;}],&quot;tension&quot;:&quot;0.1&quot;,&quot;fill&quot;:true},{&quot;s&quot;:&quot;arr&quot;}]],{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}]},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;ZzqlV2eezBSryOXKKKqz&quot;,&quot;name&quot;:&quot;dashboard.chart-gross&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;props&quot;:[&quot;period&quot;],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;01750ac78514d7164cf9942e08fba997a98d36456da4123828d9abff3731387b&quot;}" wire:effects="[]" wire:id="ZzqlV2eezBSryOXKKKqz">


                            <div class="pb-5">
                                <div class="flex justify-between items-center">
                                    <div>
                                    <div class="text-2xl font-bold ">
                                            Gross
                                        </div>
                                    </div>

                                </div>

                                <hr class="mt-3">

                            </div>

                            <div>
                                <div class="relative h-44">
                                </div>
                            </div>

                    </div>

            </div>

        </div>

        <div class="grid lg:grid-cols-4 gap-8 mt-8">

            <div class="col-span-2">
                <div wire:snapshot="{&quot;data&quot;:{&quot;period&quot;:&quot;-30 days&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;G2GVFU1HQADA7jFbVQYa&quot;,&quot;name&quot;:&quot;dashboard.top-customers&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;props&quot;:[&quot;period&quot;],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;fb830df59cfd50cc87a1fe94e887d4eac3c7a45f508f6e087d6104b2e4a810cf&quot;}" wire:effects="[]" wire:id="G2GVFU1HQADA7jFbVQYa">
        <div class="card bg-base-100 rounded-lg p-5 shadow-sm" wire:key="mary5dbffb64b26e4af4d38ea523d42ca460">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->            <div class="pb-5">
                    <div class="flex justify-between items-center">
                        <div>
                            <!--[if BLOCK]><![endif]-->                            <div class="text-2xl font-bold ">
                                    Top Customers
                                </div>
                            <!--[if ENDBLOCK]><![endif]-->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <!--[if BLOCK]><![endif]-->                        <div class="flex items-center gap-2"> <!--[if BLOCK]><![endif]-->        <a href="/users" wire:key="mary6123c214ff04a06bfa9a075b72dd8096" type="button" class="btn normal-case btn-ghost btn-sm" wire:navigate="">

            <!-- SPINNER LEFT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- ICON -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- LABEL / SLOT -->
            <!--[if BLOCK]><![endif]-->            <span class="">
                    Customers
                </span>
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!-- ICON RIGHT -->
            <!--[if BLOCK]><![endif]-->            <span class="block">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                <svg class="inline w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
    </svg>
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!-- SPINNER RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->        </a>
        <!--[if ENDBLOCK]><![endif]--> </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <!--[if BLOCK]><![endif]-->                    <hr class="mt-3">

                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </div>
            <!--[if ENDBLOCK]><![endif]-->

            <div>
                <div wire:key="mary796368e5f3f4d4ed8908b39a927e9391">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">

                                <div>
                        <a href="/users/329" wire:navigate="">

                <!-- AVATAR -->
                                <div class="py-3">
                        <div class="avatar">
                            <div class="w-11 rounded-full">
                                <img src="https://picsum.photos/200?x=1057576855">
                            </div>
                        </div>
                    </div>



                                    </a>
                    </div>

                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/users/329" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">
                            Abe Kunde Jr.
                        </div>

                        <div class="text-gray-400 text-sm truncate">
                            Brazil
                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                                                    <a href="/users/329" wire:navigate="">

                        <div class="py-3 flex items-center gap-3 mary-hideable">
                                <div class="badge font-bold">
            $114,852.00
        </div>
                        </div>

                                        </a>
                                        </div>

                </div>                    <div wire:key="marya6b9b444c289848db00923fb5507e607">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">

                                <div>
                        <a href="/users/739" wire:navigate="">

                <!-- AVATAR -->
                                <div class="py-3">
                        <div class="avatar">
                            <div class="w-11 rounded-full">
                                <img src="https://picsum.photos/200?x=81857817">
                            </div>
                        </div>
                    </div>



                                    </a>
                    </div>

                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/users/739" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">
                            Adelia
                        </div>

                        <div class="text-gray-400 text-sm truncate">
                            France
                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                                                    <a href="/users/739" wire:navigate="">

                        <div class="py-3 flex items-center gap-3 mary-hideable">
                                <div class="badge font-bold">
            $46,688.60
        </div>
                        </div>

                                        </a>
                                        </div>

                </div>                    <div wire:key="maryfd97f2b083bd263fd1a65024dfdfa490">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">

                                <div>
                        <a href="/users/993" wire:navigate="">

                <!-- AVATAR -->
                                <div class="py-3">
                        <div class="avatar">
                            <div class="w-11 rounded-full">
                                <img src="https://picsum.photos/200?x=1982889415">
                            </div>
                        </div>
                    </div>



                                    </a>
                    </div>

                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/users/993" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">
                            Abagail Littel
                        </div>

                        <div class="text-gray-400 text-sm truncate">
                            Brazil
                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                                                    <a href="/users/993" wire:navigate="">

                        <div class="py-3 flex items-center gap-3 mary-hideable">
                                <div class="badge font-bold">
            $39,708.01
        </div>
                        </div>

                                        </a>
                                        </div>

                </div>
            </div>

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div></div>        </div>


            <div class="col-span-2">
                <div wire:snapshot="{&quot;data&quot;:{&quot;period&quot;:&quot;-30 days&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;jpUtmWU9FnnJA7zIlYgG&quot;,&quot;name&quot;:&quot;dashboard.best-sellers&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;props&quot;:[&quot;period&quot;],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;a7dade891075da89d1028916d3720a4352c0b8f985fb8eb56761d672fd3cf1ed&quot;}" wire:effects="[]" wire:id="jpUtmWU9FnnJA7zIlYgG">
        <div class="card bg-base-100 rounded-lg p-5 shadow-sm" wire:key="maryd5b62632a2315f91186e06d5eaeb20a9">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->            <div class="pb-5">
                    <div class="flex justify-between items-center">
                        <div>
                            <!--[if BLOCK]><![endif]-->                            <div class="text-2xl font-bold ">
                                    Best sellers
                                </div>
                            <!--[if ENDBLOCK]><![endif]-->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <!--[if BLOCK]><![endif]-->                        <div class="flex items-center gap-2"> <!--[if BLOCK]><![endif]-->        <a href="/products" wire:key="marybaafdadd1b47866d1b57ab1e61342e30" type="button" class="btn normal-case btn-ghost btn-sm" wire:navigate="">

            <!-- SPINNER LEFT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- ICON -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- LABEL / SLOT -->
            <!--[if BLOCK]><![endif]-->            <span class="">
                    Products
                </span>
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!-- ICON RIGHT -->
            <!--[if BLOCK]><![endif]-->            <span class="block">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                <svg class="inline w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
    </svg>
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!-- SPINNER RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->        </a>
        <!--[if ENDBLOCK]><![endif]--> </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <!--[if BLOCK]><![endif]-->                    <hr class="mt-3">

                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </div>
            <!--[if ENDBLOCK]><![endif]-->

            <div>
                <div wire:key="mary7b5997df4db2d88f0f27ecaebfd05b7e">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">

                                <div>
                        <a href="/products/8/edit" wire:navigate="">

                <!-- AVATAR -->
                                <div class="py-3">
                        <div class="avatar">
                            <div class="w-11 rounded-full">
                                <img src="https://flow.mary-ui.com/storage/products/8.jpg">
                            </div>
                        </div>
                    </div>



                                    </a>
                    </div>

                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/products/8/edit" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">
                            Homepod
                        </div>

                        <div class="text-gray-400 text-sm truncate">
                            Sound
                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                                                    <a href="/products/8/edit" wire:navigate="">

                        <div class="py-3 flex items-center gap-3 mary-hideable">
                                <div class="badge font-bold">
            34
        </div>
                        </div>

                                        </a>
                                        </div>

                </div>                    <div wire:key="maryd5bf6364826d530f77f286f009d573dc">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">

                                <div>
                        <a href="/products/7/edit" wire:navigate="">

                <!-- AVATAR -->
                                <div class="py-3">
                        <div class="avatar">
                            <div class="w-11 rounded-full">
                                <img src="https://flow.mary-ui.com/storage/products/7.jpg">
                            </div>
                        </div>
                    </div>



                                    </a>
                    </div>

                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/products/7/edit" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">
                            Homepod mini
                        </div>

                        <div class="text-gray-400 text-sm truncate">
                            Sound
                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                                                    <a href="/products/7/edit" wire:navigate="">

                        <div class="py-3 flex items-center gap-3 mary-hideable">
                                <div class="badge font-bold">
            18
        </div>
                        </div>

                                        </a>
                                        </div>

                </div>                    <div wire:key="mary5e51d73e0bcde49d1ec9c0ed96dfce93">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">

                                <div>
                        <a href="/products/4/edit" wire:navigate="">

                <!-- AVATAR -->
                                <div class="py-3">
                        <div class="avatar">
                            <div class="w-11 rounded-full">
                                <img src="https://flow.mary-ui.com/storage/products/4.jpg">
                            </div>
                        </div>
                    </div>



                                    </a>
                    </div>

                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/products/4/edit" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">
                            Iphone 12 64GB
                        </div>

                        <div class="text-gray-400 text-sm truncate">
                            Smartphone
                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                                                    <a href="/products/4/edit" wire:navigate="">

                        <div class="py-3 flex items-center gap-3 mary-hideable">
                                <div class="badge font-bold">
            17
        </div>
                        </div>

                                        </a>
                                        </div>

                </div>
            </div>

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div></div>        </div>

        </div>


        <div wire:snapshot="{&quot;data&quot;:{&quot;period&quot;:&quot;-30 days&quot;,&quot;show&quot;:false,&quot;order&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;eKKhoMEcG0HNeyTs7Cuu&quot;,&quot;name&quot;:&quot;dashboard.oldest-orders&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;props&quot;:[&quot;period&quot;],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;8715e2b2f3b7eeed6a9d7338f54a36c326525955b3589c893d7e7b3d6d9b1cf8&quot;}" wire:effects="[]" wire:id="eKKhoMEcG0HNeyTs7Cuu">
        <div class="card bg-base-100 rounded-lg p-5 shadow-sm mt-10" wire:key="mary3b8744b81561b5e222dba61583658f39">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->            <div class="pb-5">
                    <div class="flex justify-between items-center">
                        <div>
                            <!--[if BLOCK]><![endif]-->                            <div class="text-2xl font-bold ">
                                    Oldest orders
                                </div>
                            <!--[if ENDBLOCK]><![endif]-->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <!--[if BLOCK]><![endif]-->                        <div class="flex items-center gap-2"> <!--[if BLOCK]><![endif]-->        <a href="/orders" wire:key="maryb9248d974c8e10a2356f0a575372454f" type="button" class="btn normal-case btn-ghost btn-sm" wire:navigate="">

            <!-- SPINNER LEFT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- ICON -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- LABEL / SLOT -->
            <!--[if BLOCK]><![endif]-->            <span class="">
                    Orders
                </span>
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!-- ICON RIGHT -->
            <!--[if BLOCK]><![endif]-->            <span class="block">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                <svg class="inline w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
    </svg>
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!-- SPINNER RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->        </a>
        <!--[if ENDBLOCK]><![endif]--> </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <!--[if BLOCK]><![endif]-->                    <hr class="mt-3">

                        <!--[if BLOCK]><![endif]-->                        <div class="h-0.5 -mt-4 mb-4">
                                <progress class="progress progress-primary w-full h-0.5 dark:h-1" wire:loading=""></progress>
                            </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </div>
            <!--[if ENDBLOCK]><![endif]-->

            <div>
                <div x-data="{
                        selection: window.Livewire.find('eKKhoMEcG0HNeyTs7Cuu').entangle(''),
                        colspanSize: 0,
                        toggleSelection(checked){
                            checked ? this.selection = JSON.parse('[141,142,143,144,146]') : this.selection = []
                        },
                        toggleExpand(key){
                             this.selection.includes(key)
                                ? this.selection = this.selection.filter(i => i !== key)
                                : this.selection.push(key)
                        },
                        isExpanded(key){
                            return this.selection.includes(key)
                        },
                        init() {
                            this.colspanSize = $refs.headers.childElementCount
                        }
                     }" class="overflow-x-auto">
            <table class="table cursor-pointer" @row-click="$wire.preview($event.detail.id)">
                <!-- HEADERS -->
                <thead class="text-black dark:text-gray-200">
                    <tr x-ref="headers">
                        <!-- CHECKBOX -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <!-- EXPAND EXTRA HEADER -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                            <th class=" hidden lg:table-cell">
                                #

                                <!--[if ENDBLOCK]><![endif]-->
                            </th>

                            <th class=" hidden lg:table-cell">
                                Date

                                <!--[if ENDBLOCK]><![endif]-->
                            </th>

                            <th class="  ">
                                Customer

                                <!--[if ENDBLOCK]><![endif]-->
                            </th>

                            <th class="  ">
                                Total

                                <!--[if ENDBLOCK]><![endif]-->
                            </th>

                            <th class=" hidden lg:table-cell">
                                Status

                                <!--[if ENDBLOCK]><![endif]-->
                            </th>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!-- ACTIONS (Just a empty column) -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    </tr>
                </thead>

                <!-- ROWS -->
                <tbody>
                    <!--[if BLOCK]><![endif]-->
                        <tr wire:key="mary4679fff55403d1e961ebb871388bb822-0" class="hover:bg-base-200/50 " @click="$dispatch('row-click', {&quot;id&quot;:141,&quot;user_id&quot;:530,&quot;status_id&quot;:4,&quot;total&quot;:2097,&quot;created_at&quot;:&quot;2024-04-07T11:08:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-07T11:08:49.000000Z&quot;,&quot;user&quot;:{&quot;id&quot;:530,&quot;country_id&quot;:3,&quot;name&quot;:&quot;Adelia Fahey DVM&quot;,&quot;email&quot;:&quot;kenneth11@example.org&quot;,&quot;avatar&quot;:&quot;https:\/\/picsum.photos\/200?x=2038366397&quot;,&quot;email_verified_at&quot;:&quot;2024-04-07T08:36:59.000000Z&quot;,&quot;created_at&quot;:&quot;2024-04-02T05:12:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-07T08:37:00.000000Z&quot;},&quot;status&quot;:{&quot;id&quot;:4,&quot;name&quot;:&quot;Shipped&quot;,&quot;description&quot;:&quot;The order was sent to courier.&quot;,&quot;color&quot;:&quot;bg-warning\/20&quot;,&quot;icon&quot;:&quot;o-paper-airplane&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}});">
                            <!-- CHECKBOX -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!-- EXPAND ICON -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!--  ROW VALUES -->
                            <!--[if BLOCK]><![endif]-->
                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        141

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Apr 7, 2024

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Adelia Fahey DVM

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        $2,097.00

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                                    <div class="badge bg-warning/20">
            Shipped
        </div>

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->
                            <!--[if ENDBLOCK]><![endif]-->

                            <!-- ACTIONS -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </tr>

                        <!-- EXPANSION SLOT -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <tr wire:key="mary4679fff55403d1e961ebb871388bb822-1" class="hover:bg-base-200/50 " @click="$dispatch('row-click', {&quot;id&quot;:142,&quot;user_id&quot;:328,&quot;status_id&quot;:1,&quot;total&quot;:0,&quot;created_at&quot;:&quot;2024-04-07T20:38:24.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-07T20:38:24.000000Z&quot;,&quot;user&quot;:{&quot;id&quot;:328,&quot;country_id&quot;:4,&quot;name&quot;:&quot;Abdul Beatty - MYSQLw&quot;,&quot;email&quot;:&quot;schiller.aliza@example.com&quot;,&quot;avatar&quot;:&quot;https:\/\/picsum.photos\/200?x=79406097&quot;,&quot;email_verified_at&quot;:&quot;2024-04-03T20:03:51.000000Z&quot;,&quot;created_at&quot;:&quot;2024-03-30T23:08:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-23T19:39:54.000000Z&quot;},&quot;status&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;Draft&quot;,&quot;description&quot;:&quot;The order is on draft mode.&quot;,&quot;color&quot;:&quot;bg-neutral\/20&quot;,&quot;icon&quot;:&quot;o-shopping-bag&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}});">
                            <!-- CHECKBOX -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!-- EXPAND ICON -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!--  ROW VALUES -->
                            <!--[if BLOCK]><![endif]-->
                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        142

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Apr 7, 2024

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Abdul Beatty - MYSQLw

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        $0.00

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                                    <div class="badge bg-neutral/20">
            Draft
        </div>

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->
                            <!--[if ENDBLOCK]><![endif]-->

                            <!-- ACTIONS -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </tr>

                        <!-- EXPANSION SLOT -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <tr wire:key="mary4679fff55403d1e961ebb871388bb822-2" class="hover:bg-base-200/50 " @click="$dispatch('row-click', {&quot;id&quot;:143,&quot;user_id&quot;:187,&quot;status_id&quot;:1,&quot;total&quot;:0,&quot;created_at&quot;:&quot;2024-04-08T01:09:30.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-08T01:09:30.000000Z&quot;,&quot;user&quot;:{&quot;id&quot;:187,&quot;country_id&quot;:1,&quot;name&quot;:&quot;Adeline Stokes&quot;,&quot;email&quot;:&quot;ledner.tamia@example.net&quot;,&quot;avatar&quot;:&quot;https:\/\/picsum.photos\/200?x=271618282&quot;,&quot;email_verified_at&quot;:&quot;2024-04-01T16:59:48.000000Z&quot;,&quot;created_at&quot;:&quot;2024-03-12T00:24:53.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-01T16:59:48.000000Z&quot;},&quot;status&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;Draft&quot;,&quot;description&quot;:&quot;The order is on draft mode.&quot;,&quot;color&quot;:&quot;bg-neutral\/20&quot;,&quot;icon&quot;:&quot;o-shopping-bag&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}});">
                            <!-- CHECKBOX -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!-- EXPAND ICON -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!--  ROW VALUES -->
                            <!--[if BLOCK]><![endif]-->
                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        143

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Apr 8, 2024

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Adeline Stokes

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        $0.00

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                                    <div class="badge bg-neutral/20">
            Draft
        </div>

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->
                            <!--[if ENDBLOCK]><![endif]-->

                            <!-- ACTIONS -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </tr>

                        <!-- EXPANSION SLOT -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <tr wire:key="mary4679fff55403d1e961ebb871388bb822-3" class="hover:bg-base-200/50 " @click="$dispatch('row-click', {&quot;id&quot;:144,&quot;user_id&quot;:328,&quot;status_id&quot;:5,&quot;total&quot;:299,&quot;created_at&quot;:&quot;2024-04-08T02:41:16.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-08T02:41:33.000000Z&quot;,&quot;user&quot;:{&quot;id&quot;:328,&quot;country_id&quot;:4,&quot;name&quot;:&quot;Abdul Beatty - MYSQLw&quot;,&quot;email&quot;:&quot;schiller.aliza@example.com&quot;,&quot;avatar&quot;:&quot;https:\/\/picsum.photos\/200?x=79406097&quot;,&quot;email_verified_at&quot;:&quot;2024-04-03T20:03:51.000000Z&quot;,&quot;created_at&quot;:&quot;2024-03-30T23:08:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-23T19:39:54.000000Z&quot;},&quot;status&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Order delivered&quot;,&quot;description&quot;:&quot;The order was delivered. Enjoy!&quot;,&quot;color&quot;:&quot;bg-success\/20&quot;,&quot;icon&quot;:&quot;o-gift&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}});">
                            <!-- CHECKBOX -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!-- EXPAND ICON -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!--  ROW VALUES -->
                            <!--[if BLOCK]><![endif]-->
                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        144

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Apr 8, 2024

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Abdul Beatty - MYSQLw

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        $299.00

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                                    <div class="badge bg-success/20">
            Order delivered
        </div>

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->
                            <!--[if ENDBLOCK]><![endif]-->

                            <!-- ACTIONS -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </tr>

                        <!-- EXPANSION SLOT -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <tr wire:key="mary4679fff55403d1e961ebb871388bb822-4" class="hover:bg-base-200/50 " @click="$dispatch('row-click', {&quot;id&quot;:146,&quot;user_id&quot;:328,&quot;status_id&quot;:1,&quot;total&quot;:0,&quot;created_at&quot;:&quot;2024-04-08T13:14:29.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-08T13:14:29.000000Z&quot;,&quot;user&quot;:{&quot;id&quot;:328,&quot;country_id&quot;:4,&quot;name&quot;:&quot;Abdul Beatty - MYSQLw&quot;,&quot;email&quot;:&quot;schiller.aliza@example.com&quot;,&quot;avatar&quot;:&quot;https:\/\/picsum.photos\/200?x=79406097&quot;,&quot;email_verified_at&quot;:&quot;2024-04-03T20:03:51.000000Z&quot;,&quot;created_at&quot;:&quot;2024-03-30T23:08:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-04-23T19:39:54.000000Z&quot;},&quot;status&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;Draft&quot;,&quot;description&quot;:&quot;The order is on draft mode.&quot;,&quot;color&quot;:&quot;bg-neutral\/20&quot;,&quot;icon&quot;:&quot;o-shopping-bag&quot;,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}});">
                            <!-- CHECKBOX -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!-- EXPAND ICON -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <!--  ROW VALUES -->
                            <!--[if BLOCK]><![endif]-->
                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        146

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Apr 8, 2024

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        Abdul Beatty - MYSQLw

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                        $0.00

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->

                                <!--  HAS CUSTOM SLOT ? -->
                                <!--[if BLOCK]><![endif]-->                                <td class="hidden lg:table-cell">
                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                                                    <div class="badge bg-neutral/20">
            Draft
        </div>

                                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                                    </td>
                                <!--[if ENDBLOCK]><![endif]-->
                            <!--[if ENDBLOCK]><![endif]-->

                            <!-- ACTIONS -->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </tr>

                        <!-- EXPANSION SLOT -->
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>

            <!-- Pagination -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>
            </div>

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div x-data="{
                open:
                                        window.Livewire.find('eKKhoMEcG0HNeyTs7Cuu').entangle('show')                            ,
                close() {
                    this.open = false
                    $refs.checkbox.checked = false
                }
            }" x-trap="open" x-bind:inert="!open" class="drawer absolute z-50 drawer-end" inert="true">
            <!-- Toggle visibility  -->
            <input id="show" x-model="open" x-ref="checkbox" type="checkbox" class="drawer-toggle">

            <div class="drawer-side">
                <!-- Overlay effect , click outside -->
                <label for="show" class="drawer-overlay"></label>

                <!-- Content -->
                <div class="card bg-base-100 rounded-lg p-5 min-h-screen rounded-none px-8 w-11/12 lg:w-1/3" wire:key="drawer-card">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->            <div class="pb-5">
                    <div class="flex justify-between items-center">
                        <div>
                            <!--[if BLOCK]><![endif]-->                            <div class="text-2xl font-bold ">
                                    Order #
                                </div>
                            <!--[if ENDBLOCK]><![endif]-->
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <!--[if BLOCK]><![endif]-->                        <div class="flex items-center gap-2"> <!--[if BLOCK]><![endif]-->        <button wire:key="maryfb626b487afadae60038804605f51686" type="button" @click="close()" class="btn normal-case btn-ghost btn-sm">

            <!-- SPINNER LEFT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- ICON -->
            <!--[if BLOCK]><![endif]-->            <span class="block">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                <svg class="inline w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
    </svg>
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!-- LABEL / SLOT -->
            <!--[if BLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!-- ICON RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- SPINNER RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->        </button>
        <!--[if ENDBLOCK]><![endif]--> </div>
                        <!--[if ENDBLOCK]><![endif]-->
                    </div>

                    <!--[if BLOCK]><![endif]-->                    <hr class="mt-3">

                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                </div>
            <!--[if ENDBLOCK]><![endif]-->

            <div>
                <!--[if BLOCK]><![endif]-->                                     <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]-->        <a href="/orders//edit" wire:key="marye35db58af2d087650fe28908236f09e8" type="button" class="btn normal-case btn-primary btn-sm" wire:navigate="">

            <!-- SPINNER LEFT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- ICON -->
            <!--[if BLOCK]><![endif]-->            <span class="block">
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                <svg class="inline w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"></path>
    </svg>
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->            </span>
            <!--[if ENDBLOCK]><![endif]-->

            <!-- LABEL / SLOT -->
            <!--[if BLOCK]><![endif]-->            <span class="">
                    Go to order
                </span>
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            <!--[if ENDBLOCK]><![endif]-->

            <!-- ICON RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!-- SPINNER RIGHT -->
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->        </a>
        <!--[if ENDBLOCK]><![endif]-->
            <div class="font-black my-3 mt-10">Customer</div>
            <hr class="mb-3">

            <div wire:key="marydce79438af0189e0d66595afaea984b6">
            <div class="flex justify-start items-center gap-4 px-3 hover:bg-base-200/50 cursor-pointer">


                <!-- AVATAR -->




                <!-- CONTENT -->
                <div class="flex-1 overflow-hidden whitespace-nowrap text-ellipsis truncate w-0 mary-hideable">
                                        <a href="/users/" wire:navigate="">

                    <div class="py-3">
                        <div class="font-semibold truncate">

                        </div>

                        <div class="text-gray-400 text-sm truncate">

                        </div>
                    </div>

                                        </a>
                                </div>

                <!-- ACTION -->
                        </div>

                </div>
            <div class="font-black my-3">Items</div>
            <hr class="mb-3">


            <hr class="my-5">

            <div class="font-bold text-right"></div>

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>        </div>
        </div></div></div>

</x-app-layout>
