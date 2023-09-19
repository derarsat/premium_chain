<div class="relative overflow-x-auto p-4">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">#ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr class="bg-white border-b">
                <th
                    scope="row"
                    class="px-6 py-4 font-light text-gray-900 whitespace-nowrap"
                >
                    {{$brand->id}}
                </th>
                <th
                    scope="row"
                    class="px-6 py-4 font-light text-gray-900 whitespace-nowrap"
                >
                    {{$brand->name}}
                </th>
                <td class="px-6 py-4 flex gap-3">

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
