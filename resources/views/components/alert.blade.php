<div class="p-3 mb-6 w-full flex space-x-4 border rounded {{ $type === 'success' ? 'bg-primary-light border-primary-normal' }}">
    <p class="font-bold">Success!</p>
    <p>{{ $message }}</p>
</div>

<div class="p-3 mb-6 w-full flex space-x-4 border rounded {{ $type === 'error' ? 'bg-red-500 border-red-600' }}">
    <p class="font-bold">Error!</p>
    <p>{{ $message }}</p>
</div>

<div class="p-3 mb-6 w-full flex space-x-4 border rounded {{ $type === 'info' ? 'bg-gray-500 border-gray-600' }}">
    <p class="font-bold">Info</p>
    <p>{{ $message }}</p>
</div>
