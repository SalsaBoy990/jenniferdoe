<div class="mb-3 w-96">
    <input class="form-control block w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid  {{ $errors->has('seo_image_url') ? ' border-rose-400' : 'border-gray-300' }}
        rounded
        transition
        ease-in-out
        m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file"
        id="seo_image_url" name="seo_image_url">
</div>