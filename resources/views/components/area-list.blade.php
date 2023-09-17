<div class="relative overflow-x-auto p-4">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">#ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Brabnd</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
            <tr class="bg-white border-b">
                <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                >
                    {{$area->id}}
                </th>
                <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                >
                    {{$area->brand->name}}
                </th>
                <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                >
                    {{$area->name}}
                </th>
                <td class="px-6 py-4 flex gap-3">
                    <button
                        onclick="handleAreaClick(event)"
                        data-name="{{$area->name}}"
                        data-id="{{$area->id}}"
                        data-modal-target="area-edit-modal"
                        data-modal-toggle="area-edit-modal"
                        class="font-medium text-indigo-600 hover:underline flex gap-1 items-center"
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
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                            />
                        </svg>

                        Edit
                    </button>
                    <button
                        data-modal-target="area-delete-modal"
                        data-modal-toggle="area-delete-modal"
                        class="font-medium text-red-600 hover:underline flex gap-1 items-center"
                        onclick="handleAreaDelete(event)"
                        data-id="{{$area->id}}"
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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Main modal -->
<div
    id="area-edit-modal"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
>
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <button
                type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                data-modal-hide="area-edit-modal"
            >
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-6 text-xl font-medium text-gray-900">
                    Update area
                </h3>
                <form
                    method="post"
                    class="space-y-6"
                    action="{{ route('area-controller') }}?action=update"
                >
                    @csrf
                    <input type="hidden" id="area-id" name="id" />
                    <div>
                        <label for="name">Area name</label>
                        <input
                            type="text"
                            name="name"
                            id="area-name"
                            placeholder="Enter area name"
                            required
                        />
                    </div>
                    <input type="submit" value="Save area" />
                </form>
            </div>
        </div>
    </div>
</div>
<div
    id="area-delete-modal"
    tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
>
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button
                type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                data-modal-hide="area-delete-modal"
            >
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg
                    class="mx-auto mb-4 text-red-600 w-8 h-8"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 20 20"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                </svg>
                <h3 class="mb-5 font-normal text-gray-500">
                    Are you sure you want to delete this area?
                    <br />
                    This will delete all of it's related areas and brands
                </h3>

                <form method="post" class="inline-block" action="{{ route('area-controller') }}?action=delete">
                    <input type="hidden" name="id" id="delete-area-id">
                    <button
                    data-modal-hide="area-delete-modal"
                    class="text-white bg-red-600  font-medium rounded-lg text-sm inline-flex items-center px-4 py-2 text-center mr-2"
                >
                    Yes, I'm sure
                </button>
                @csrf
                </form>

                <button
                    data-modal-hide="area-delete-modal"
                    type="button"
                    class="text-gray-500 bg-white  rounded-lg border border-gray-200 text-sm font-medium px-4 py-2 hover:text-gray-900 focus:z-10"
                >
                    No, cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function handleAreaClick() {
        var inputId = document.getElementById("area-id");
        var inputName = document.getElementById("area-name");
        var name = event.target.getAttribute("data-name");
        var id = event.target.getAttribute("data-id");
        inputId.value = id;
        inputName.value = name;
    }
    function handleAreaDelete() {
        var inputId = document.getElementById("delete-area-id");
        var id = event.target.getAttribute("data-id");
        inputId.value = id;
    }
</script>
