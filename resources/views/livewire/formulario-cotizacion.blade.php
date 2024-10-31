<div>
    @if ($formSubmitted)
        <p class="text-green-400 text-2xl text-center">{{__('home.formsuccess')}}</p>
    @else
    <form wire:submit.prevent="submitForm" class="space-y-8">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-600">Nombre</label>
            <input wire:model="name" type="text" id="name" name="name" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 bg-gray-50 focus:border-primary-500 block w-full p-2.5" value="{{old('name')}}">
            @error('name')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
            <input wire:model="email" type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" value="{{old('email')}}">
            @error('email')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-600">Teléfono</label>
            <input wire:model="phone" type="text" id="subject" name="phone" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" value="{{old('phone')}}">
            @error('phone')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="text-gray-600 block mb-2 text-sm font-mediumtext-gray-400">Mensaje</label>
            <textarea wire:model="message" id="message" name="message" rows="6" class="block p-2.5 w-full text-sm rounded-lg shadow-sm border focus:ring-primary-500 focus:border-primary-500 bg-gray-50 text-gray-900 border-gray-300 placeholder-gray-400 focus:ring-primary-500 focus:border-primary-500">{{old('message')}}</textarea>
            @error('message')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="bg-cyan-600 text-gray-200 py-3 px-5 text-sm font-medium text-center rounded-lg sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 bg-primary-600 hover:bg-primary-700 focus:ring-primary-800 w-full lg:w-auto">Solicitar cotización</button>
    </form>
    @endif
</div>

