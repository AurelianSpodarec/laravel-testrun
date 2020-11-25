<x-app-layout>


    <div class="container mx-auto px-4 py-16 max-w-7xl">
        <h3>Create Listing</h3>
        <form method="POST" action="/buildings" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div>
                Name
                <input
                    type="text"
                    name="name"
                    id="name"
{{--dd                    value="{{ $listing->name }}"--}}
                    required
                />
            </div>

            <button type="submit">Create</button>
        </form>

    </div>


</x-app-layout>

