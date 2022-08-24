<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <div>
                <h1 class="text-center font-bold text-xl">Login</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <label>Email</label><br>
                    <input name="email" value="{{old('email')}}" type="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" /><br>
                    @error('email')
                        <p class="mt-2 text-red-500 text-xs">{{$message}}</p>
                    @enderror
                    <label>Password</label><br>
                    <input name="password" type="password" autocomplete="new-password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" /><br>
                    @error('password')
                        <p class="mt-2 text-red-500 text-xs">{{$message}}</p>
                    @enderror
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded">Sign In</button>
                </form>
            </div>
        </main>
    </section>
</x-layout>