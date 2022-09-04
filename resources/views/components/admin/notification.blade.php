<div class="w-full py-4">
    <div class="alert {{ 'alert-' . $type }} alert-dismissible fade show mb-3 inline-flex w-full items-center rounded-lg  py-5 px-6 text-base"
        role="alert">
        {!! $message !!}
        <button type="button"
            class="btn-close ml-auto box-content h-4 w-4 rounded-none border-none p-1 opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>