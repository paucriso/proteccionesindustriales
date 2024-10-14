@if (session('status'))
    <div class="bg-green-500 text-white p-2 mb-4">
        {{ session('status') }}
    </div>
@endif
