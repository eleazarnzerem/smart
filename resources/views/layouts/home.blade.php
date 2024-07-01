<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fontawesome.com" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Smart</title>
</head>

<body class="bg-gray-200">
    <header>
        {{-- <x-smart.navbar /> --}}
        <x-smart.web />
        {{-- <x-smart.hero-section /> --}}
    </header>
    <main class=" flex flex-col space-x">
        {{-- <x-smart.full-website /> --}}

        

        </section>
    </main>
    {{-- <main class="p-2">
        <div class="mx-auto mt-24 mb-20 max-w-6xl text-center p-6">
            <h2 class="mb-12 text-center text-4xl font-extrabold text-gray-900 sm:text-5xl">About Us
            </h2>
            <div
                class="gr mx-auto max-w-3xl items-stretch space-y-4 text-left sm:flex sm:space-y-0 sm:space-x-8 sm:text-center">
                <a class="flex w-full items-center rounded-xl border border-black border-opacity-10 px-4 py-6 text-black duration-200 hover:border-opacity-0 hover:no-underline hover:shadow-lg dark:text-white dark:hover:bg-white dark:hover:bg-opacity-10 sm:flex-col sm:hover:shadow-2xl"
                    href="#" target="_blank">
                    <img class="mr-4 w-12 sm:mr-0 sm:h-32 sm:w-32"
                        src="https://swiperjs.com/images/projects/framework7.svg" alt="Framework7">
                    <div>
                        <div class="font-semibold text-black sm:mt-4 sm:mb-2">Atropos</div>
                        <div class="text-sm opacity-75 text-black">Stunning touch-friendly 3D parallax hover effects</div>
                    </div>
                </a>
                <a class="flex w-full items-center rounded-xl border border-black border-opacity-10 px-4 py-6 text-black duration-200 hover:border-opacity-0 hover:no-underline hover:shadow-lg sm:flex-col sm:hover:shadow-2xl"
                    href="#" target="_blank">
                    <img class="mr-4 w-12 sm:mr-0 sm:h-32 sm:w-32"
                        src="https://swiperjs.com/images/projects/atropos.svg" alt="Atropos">
                    <div>
                        <div class="font-semibold text-black sm:mt-4 sm:mb-2">Atropos</div>
                        <div class="text-sm opacity-75">Stunning touch-friendly 3D parallax hover effects</div>
                    </div>
                </a>
                <a class="flex w-full items-center rounded-xl border border-black border-opacity-10 px-4 py-6 text-black duration-200 hover:border-opacity-0 hover:no-underline hover:shadow-lg sm:flex-col sm:hover:shadow-2xl"
                    href="#" target="_blank">
                    <img class="mr-4 w-12 sm:mr-0 sm:h-32 sm:w-32" src="https://swiperjs.com/images/projects/konsta.svg"
                        alt="Konsta UI">
                    <div>
                        <div class="font-semibold text-black sm:mt-4 sm:mb-2">Konsta UI</div>
                        <div class="text-sm opacity-75">Pixel perfect mobile UI components built with Tailwind CSS</div>
                    </div>
                </a>
            </div>
        </div>

        {{-- section two --}}
        {{-- <div class="bg-black">

            <section id="features"
                class="relative block px-6 py-10 md:py-20 md:px-10  border-t border-b border-neutral-900 bg-neutral-900/30">


                <div class="relative mx-auto max-w-5xl text-center">
                    <span
                        class="text-gray-400 my-3 flex items-center justify-center font-medium uppercase tracking-wider">
                        Why choose us
                    </span>
                    <h2
                        class="block w-full bg-gradient-to-b from-white to-gray-400 bg-clip-text font-bold text-transparent text-3xl sm:text-4xl">
                        Build a Website That Your Customers Love
                    </h2>
                    <p
                        class="mx-auto my-4 w-full max-w-xl bg-transparent text-center font-medium leading-relaxed tracking-wide text-gray-400">
                        Our templates allow for maximum customization. No technical skills required – our intuitive
                        design tools
                        let
                        you get the job done easily.
                    </p>
                </div>


                <div
                    class="relative mx-auto max-w-7xl z-10 grid grid-cols-1 gap-10 pt-14 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-md border border-neutral-800  p-8 text-center shadow">
                        <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                            style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-color-swatch"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2"></path>
                                <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9"></path>
                                <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12"></path>
                                <line x1="17" y1="17" x2="17" y2="17.01"></line>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-gray-400">Customizable</h3>
                        <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">Tailor your landing
                            page's
                            look
                            and feel, from the color scheme to the font size, to the design of the page.
                        </p>
                    </div>


                    <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                        <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                            style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-gray-400">Fast Performance</h3>
                        <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">We build our
                            templates for
                            speed in mind, for super-fast load times so your customers never waver.
                        </p>
                    </div>


                    <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                        <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                            style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                                <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                                <polyline points="12 8 7 3 3 7 8 12"></polyline>
                                <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                                <polyline points="16 12 21 17 17 21 12 16"></polyline>
                                <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-gray-400">Fully Featured</h3>
                        <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                            Everything you need to
                            succeed
                            and launch your landing page, right out of the box. No need to install anything else.
                        </p>
                    </div>


                </div>

                <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
                    style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
                </div>
                <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
                    style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
                </div>

            </section>
        </div>
    </main> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
