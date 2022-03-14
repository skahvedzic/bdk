<form method="POST" action="{{ route('donor.store') }}">
    @csrf

    <!-- Name Address -->
    <div>
        <x-label for="name" :value="__('Name')" />

        <x-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus />
    </div>
    <div>
        <x-label for="last_name" :value="__('Last Name')" />

        <x-input id="last_name" class="block mt-1 w-full" type="last_name" name="last_name" :value="old('last_name')" required autofocus />
    </div>
    <div>
        <x-label for="last_name" :value="__('Phone')" />

        <x-input id="phone_number" class="block mt-1 w-full" type="phone_number" name="phone_number" :value="old('phone_number')" required autofocus />
    </div>
    <div>
        <x-label for="amount" :value="__('Amount')" />

        <x-input id="amount" class="block mt-1 w-full" type="amount" name="amount" :value="old('amount')" required autofocus />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-3">
            {{ __('Save') }}
        </x-button>
    </div>
    @if ($errors->any())
    <div role="alert">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        </div>
        
            @foreach ($errors->all() as $error)
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>{{ $error }}</p>
              </div>
             
            @endforeach
    </div>
@endif
</form>
