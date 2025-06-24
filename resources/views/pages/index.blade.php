<x-app-layout>
    <section id="hero-section">
        <div class="relative overflow-hidden bg-black text-white">
            <!-- Section Spacer -->
            <div class="pb-28 pt-28 md:pb-40 lg:pt-28 xl:pb-[90px] xl:pt-[122px]">
                <!-- Section Container -->
                <div class="global-container h-screen">
                    <div class="grid grid-cols-1 items-center gap-10 md:grid-cols-[minmax(0,_1fr)_0.7fr]">
                        <!-- Hero Content -->
                        <div>
                            <h1
                                class="jos tracking-wide mb-6 max-w-md break-words font-clashDisplay text-3xl font-medium leading-relaxed text-[#CFE1A7] md:max-w-full md:text-4xl">
                                <span class="text-7xl">Scott&apos;s Bots</span><br /> <span class="text-8xl italic mt-16 text-[#00F0FF]">AI Innovations</span>
                            </h1>
                            <p class="jos mt-36 text-6xl text-center text-amber-100">
                                Soon
                            </p>
                            <!-- <a href="https://www.example.com"
                                class="jos button relative z-[1] inline-flex items-center gap-3 rounded-[50px] border-none bg-colorViolet py-[18px] text-white after:bg-colorOrangyRed hover:text-white">Start
                                Chatting for Free
                                <img src="assets/img/th-2/icon-white-long-arrow-right.svg"
                                    alt="icon-white-long-arrow-right" /></a> -->
                        </div>
                        <!-- Hero Content -->
                        <!-- Hero Image -->
                        <div class="hero-img animate-pulse overflow-hidden rounded-2xl bg-black text-right">
                            <img src="{{asset('images/hero-img-2.png')}}" alt="hero-img-2" width="1296" height="640"
                                 class="h-auto w-full" />
                        </div>
                        <!-- Hero Image -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->

            <!-- Background Gradient -->
            <div
                class="absolute left-1/2 top-[80%] h-[1280px] w-[1280px] -translate-x-1/2 rounded-full bg-gradient-to-t from-[#5636C7] to-[#5028DD] blur-[250px]">
            </div>
            <div
                class="absolute bottom-0 left-1/2 h-[77px] w-full -translate-x-1/2 bg-[url(../img/th-2/arc-top-shape-1.svg)] bg-cover bg-center bg-no-repeat">
            </div>
        </div>
    </section>
    <!--...::: Hero Section End :::... -->
</x-app-layout>
