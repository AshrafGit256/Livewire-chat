<div class="max-w-6xl mx-auto my-16">

    <h5 class="text-center font-bold text-white py-4 rounded-md shadow-lg" style="font-size: 35px;">
        Users
    </h5>

    <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-8 p-6"> <!-- Increased gap here -->

        @foreach ($users as $key=> $user)

        {{------ child --------}}
        <div class="m-8 w-full bg-white border border-gray-200 rounded-lg p-6 shadow"> <!-- Increased spacing -->

            <div class="flex flex-col items-center pb-10">

                <img src="https://randomuser.me/api/portraits/men/{{ $key }}.jpg"
                    alt="User Portrait"
                    class="w-24 h-24 mb-4 rounded-full shadow-lg">



                <h5 class="mb-2 text-2xl font-semibold text-gray-800">
                    {{$user->name}}
                </h5>

                <span class="text-sm text-gray-500">{{$user->email}}</span>

                <div class="flex mt-4 space-x-3 md:mt-6">

                    <x-primary-button style="border: 1px solid black;">
                        Add Friend
                    </x-primary-button>

                    <x-secondary-button style="margin-left: 8px;" wire:click="message({{$user->id}})">
                        Message
                    </x-secondary-button>

                </div>

            </div>

        </div>

        @endforeach

    </div>
</div>