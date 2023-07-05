@extends('layouts.auth')

@section('content')
    <section class="md:px-6" id="welcome">
        <div class="grid md:grid-cols-2 md:max-w-5xl md:mx-auto">
            <!-- Image Welcome -->
            <a href="/" class="my-auto mx-auto">
                <img src="{{ asset('/template/frontsite/img/makan-telur-reg.png') }}" alt=""
                    class="img_welc w-[150px] md:w-[400px] md:h-[350px]" />
            </a>

            <div class="container mx-auto py-14 register">
                <h1 class="text-2xl font-bold mb-6 text-center tex-reg">Form Login</h1>
                <form action="{{ route('login') }}" method="POST"
                    class="w-full max-w-sm mx-auto bg-white p-8 rounded-lg shadow-md">
                    @csrf
                    <div class="mb-4 emaile">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            type="email" id="email" name="email" placeholder="john@example.com">
                        @if ($errors->has('email'))
                            <p class="text-red-500 mb-3 text-sm invalid">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-4 passw">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            type="password" id="password" name="password" placeholder="********">
                        @if ($errors->has('password'))
                            <p class="text-red mb-3 text-sm">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <button
                        class="w-full bg-red-600 text-white text-sm font-bold py-3 px-4 rounded-lg hover:bg-indigo-500 transition duration-300 btn-reg block text-center"
                        onclick="alertSwal()">Login</button>
                    <a href="/register"
                        class="w-full bg-indigo-100 mt-6 mb-2 text-sm font-bold py-3 px-4 rounded-lg hover:bg-indigo-300 transition duration-300 btn-reg text-center"
                        type="submit">Register</a>
                </form>
            </div>

        </div>
    </section>
@endsection
