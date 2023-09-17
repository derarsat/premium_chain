<form class="p-4 rounded" method="POST" action="{{ route('brands.store') }}?model=country">
    @csrf
    <h1 class="py-4 font-medium text-2xl text-gray-700">Create new country</h1>
    <div>
        <label for="name">Country name</label>
        <input type="text" name="name" id="name" placeholder="Enter country name" required>
    </div>
    <input type="submit" value="Save Country">
</form>
