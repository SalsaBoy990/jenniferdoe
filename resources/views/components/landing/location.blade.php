<div class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9">
    <section class="pt-10 sm:pt-14 pb-16 sm:pb-20">
        <h2 class="text-main-blue text-center text-2xl sm:text-4xl font-bold leading-tight tracking-wide">
            {{ __('Location of my office') }}
        </h2>

        <div class="mt-8 sm:mt-12 flex w-full flex-col gap-8 sm:flex-col md:flex-row lg:flex-row">

            <div class="w-full md:w-1/2">
                <div class="iframe-container rounded-sm">
                    <iframe
                        src="https://maps.google.com/maps?q=Szeged%20Boldogasszony%20sug%C3%A1r%C3%BAt%2048.&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <div class="text-main-blue80pc pt-2 text-center text-base sm:text-lg">{{ $location }}</div>

            </div>
            <div class="w-full md:w-1/2">
                <div class="iframe-container">
                    <img class="rounded-sm" src="{{ asset('storage/images/interior.jpg') }}"
                        alt="{{ __('Interior of the Consulting Room') }}">
                </div>
                <div class="text-main-blue80pc pt-2 text-center text-base sm:text-lg">
                    {{ __('Interior of the Consulting Room') }}</div>
            </div>
        </div>
    </section>

</div>
