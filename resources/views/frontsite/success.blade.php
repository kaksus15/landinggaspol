@extends('layouts.auth')

@section('content')
    <div class="md:max-w-5xl md:mx-auto">
        <!-- Image Welcome -->
        <!-- Content -->
        <div class="min-h-screen flex justify-center items-center pt-20 py-28">
            <div class="mx-auto text-center">
                <img src="{{ asset('/template/frontsite/img/success-stunting.svg') }}" class="inline-block imgsuc"
                    alt="Sign up success ilustration" />
                <div class="mt-12 reg-success">
                    <h2 class="text-[#1E2B4F] text-2xl font-semibold">
                        Selamat Datang {{ auth()->user()->name }}
                    </h2>
                    <p class="text-[#AFAEC3] mt-4">
                        Selamat Bergabung di GASPOL
                        <br />
                        Semoga Donasi Telur Anda<br /> Mencegah Stunting.
                    </p>
                    <a href="{{ route('dashboard.index') }}"
                        class="inline-block mt-10 bg-red-500 hover:bg-blue-500 text-white rounded-full px-14 py-3">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
@endsection
