<div class="container-fluid content:px-4 mx-auto sm:px-4 md:px-6 lg:px-6 xl:px-9">
    <section class="intro-contrainer mb-8 mt-8 sm:mt-8">
        <div
            class="mb-12 flex w-full flex-col items-center gap-6 sm:mb-24 sm:items-start md:items-start lg:flex-row lg:items-start lg:gap-12">

            <div class="x-1/2 xl:w-auto">
                <img class="intro-left-col rounded-sm"
                    src="{{ $profileImageUrl }}" alt="{{ $title }}">
            </div>

            <div class="x-1/2 xl:w-auto">
                <div class="intro-subtitle text-main-blue80pc text-center text-base uppercase sm:text-left sm:text-lg">
                    {{ $subTitle }}
                </div>
                <h1
                    class="intro-title text-main-blue -mt-2 text-center font-bold leading-tight tracking-normal sm:text-left">
                    {{ $title }}</h1>
                <div class="title-decoration bg-accent-turquoise ml-4"></div>

                <div class="editor intro-right-col text-lg leading-normal">
                    {!! $description !!}
                </div>

                <div class="flex justify-center space-x-2 sm:justify-start lg:hidden">
                    <a href="{{ 'tel:+' . $phoneNumberLink }}"
                        class="bg-accent-turquoise leading-wide hover:bg-main-blue focus:bg-main-blue active:bg-main-blue inline-block rounded px-6 py-2.5 text-lg font-medium uppercase text-black shadow-md transition duration-150 ease-in-out hover:text-white hover:shadow-lg focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:text-white active:shadow-lg">
                        {{ __('Call: ') . $phoneNumber }}
                    </a>
                </div>
            </div>

        </div>

    </section>
</div>
