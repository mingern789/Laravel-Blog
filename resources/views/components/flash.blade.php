@if (session()->has('success'))
    <div class="flex fixed right-5 bottom-5 items-center p-4 space-x-4 w-full max-w-xs text-white bg-green-500 rounded-lg divide-x divide-gray-200 shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show">
        <p>{{session('success')}}</p>
    </div>
    @endif