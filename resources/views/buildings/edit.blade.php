<x-app-layout>


    <div class="container mx-auto px-4 py-16 max-w-7xl">

        <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div>
                Name
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ $user->name }}"
                    required
                />
            </div>
        </form>

    </div>


</x-app-layout>

