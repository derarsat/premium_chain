<div>
    <h1 class="py-4 font-light text-2xl text-gray-700">Create new brands hero image</h1>
    <form enctype="multipart/form-data" class=" p-4 rounded" method="POST"
          action="{{ route('brand-atmosphere-images.store') }}">
        @csrf
        <div>
            <label for="image">Image</label>
            <input id="image" name="image" type="file">
        </div>
        <div class="mt-3">
            <label for="brand_id">Select brand</label>
            <select name="brand_id" id="brand_id">
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">
                        {{$brand->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Save Atmosphere Image">
    </form>
</div>

<div class="relative overflow-x-auto p-4">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">#ID</th>
            <th scope="col" class="px-6 py-3">Image</th>
            <th scope="col" class="px-6 py-3">Title</th>
            <th scope="col" class="px-6 py-3">Brand</th>
            <th scope="col" class="px-6 py-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($images as $image)
            <tr class="bg-white border-b">
                <th
                    scope="row"
                    class="px-6 py-4 font-light text-gray-900 whitespace-nowrap"
                >
                    {{$image->id}}
                </th>
                <th
                    scope="row"
                    class="px-6 py-4 font-light text-gray-900 whitespace-nowrap"
                >
                    <img class="w-32" src="{{ @App::make('url')->to('/') . '/storage' . $image->image}}" alt="">

                </th>
                <td>
                    {{$image->title}}
                </td>
                <td>
                    {{$image->brand->name}}
                </td>

                <td class="px-6 py-4 flex gap-3">
                    <form method="post" class="inline-block"
                          action="{{ route('brand-atmosphere-images.destroy',$image->id) }}"
                    >
                        @method("delete")
                        <input type="hidden" value="{{$image->id}}" name="id">
                        <button
                            class="flex items-center gap-2 text-red-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-4 h-4"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                />
                            </svg>
                            Delete
                        </button>
                        @csrf
                    </form>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
