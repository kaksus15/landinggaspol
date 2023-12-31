<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GASPOL | Gerakan Atasi Stunting Peduli Donasi Telur</title>
    <link rel="stylesheet" href="{{ asset('/template/frontsite/css/styles.css') }}" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
</head>

<body class="text-gray-700 font-rbt">
    <header class="shadow-md w-full md:mx-auto fixed top-0 bg-white z-10">
        <nav
            class="
          h-16
          md:h-16
          flex
          justify-between
          items-center
          mx-6
          max-w-5xl
          md:mx-auto md:px-6
        ">
            <!-- Logo -->
            <a href="" class="logo"><img src="{{ asset('/template/frontsite/img/logo-gaspol.svg') }}"
                    alt="" class="w-12 logo" /></a>

            <!-- Menu Responsive -->
            <div class="
            nav_menu
            fixed
            top-14
            md:mb-5
            p-8
            bg-gray-100
            md:bg-transparent
            w-[80%]
            -right-full
            h-full
            md:w-max
            duration-500
            md:duration-0 md:static md:ml-auto
          "
                id="nav-menu">
                <ul class="md:flex md:ml-auto">
                    <li class="list_menu mb-8 md:ml-8">
                        <a href="#" class="nav_link font-medium active">Home</a>
                    </li>
                    <li class="list_menu mb-8 md:ml-8">
                        <a href="#service" class="nav_link font-medium">Gaspol</a>
                    </li>
                    <li class="list_menu mb-8 md:ml-8">
                        <a href="https://gaspol.brebeskab.go.id/desabinaan" class="nav_link font-medium">Desa</a>
                    </li>
                    <li class="list_menu mb-8 md:ml-8">
                        <a href="#contact" class="nav_link font-medium">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Toggle -->
            <div class="nav_toggle md:hidden" id="id-toggle">
                <img src="{{ asset('/template/frontsite/img/toggle-icon.svg') }}" class="cursor-pointer w-6"
                    alt="" id="nav-toggle" />
            </div>
        </nav>
    </header>

    <!-- Main Start-->
    <main class="grid gap-4 md:pt-28">
        <section
            class="
          mt-[54px]
          grid
          pb-[47px]
          mx-4
          md:grid-cols-2
          max-w-5xl
          md:mx-auto md:px-5
        ">
            <!-- Image Home -->
            <div class="home_img" id="home">
                <img src="{{ asset('/template/frontsite/img/pj.bupati.brebes.png') }}" alt=""
                    class="w-[349px] md:w-[562.97px] md:pt-0 pt-16 block mx-auto mb-8" />
            </div>
            <!-- Desc -->
            <div class="home_desc text-center md:text-left grid gap-4 md:order-first">
                <p
                    class="
              text-[34px]
              md:text-4xl md:leading-[3rem]
              font-medium
              text-[#1F2E35]
              leading-[45px]
            ">
                    Gerakan Atasi Stunting Peduli Donasi Telur (GASPOL)
                    <br />
                    <span class="text-red-500">Kabupaten Brebes</span>
                </p>
                <p class="text-xl">
                    Cegah Stunting itu Penting,<br />
                    Mari Kita Berikan Telur <br /> untuk Mencegah Stunting
                </p>
                <div class="button">
                    <a href="#welcome"
                        class="
                bg-red-500
                px-10
                py-3
                rounded
                text-white
                inline-block
                text-xl
                shadow-lg
                hover:-translate-y-0.5
                focus:ring-offset-2
                hover:bg-red-600
              ">Read
                        More</a>
                </div>
            </div>
        </section>

        <section class="bg-[#F6F6F6] md:px-6" id="welcome">
            <div class="mx-6 grid md:grid-cols-2 md:max-w-5xl md:mx-auto">
                <!-- Image Welcome -->

                <img src="{{ '/template/frontsite/img/makan-telur.png' }}" alt=""
                    class="img_welc w-[349px] md:w-[452px] mx-auto mb-[35px]" />

                <div class="mt-14">
                    <!-- Desc Welcome -->
                    <p
                        class="
                text-[32px]
                font-medium
                text-center
                md:text-left
                title_welc
              ">
                        <span class="text-gray-900">GASPOL </span><span class="text-red-500">BREBES</span>
                    </p>
                    <p class="mt-6 text-[18px] desc_welc">
                        Gerakan Atasi Stunting Peduli Donasi Telur (GASPOL)
                        adalah Gerakan untuk Mengecegah Stunting dengan Cara
                        Mengumpulkan Donasi Telur, Kemudian Menyalurkannya Kepada
                        Sasaran Yaitu Baduta/Anak usia di bawah dua tahun atau sekitar 0-23 bulan
                        dan Ibu Hamil Kurang Energi Kronis (KEK) yang ada di Kabupaten Brebes.
                    </p>
                    <p class="mt-6 text-[18px] desc_welc">
                        Tujuan dari Gerakan Atasi Stunting Peduli Donasi Telur (GASPOL)
                        adalah sebagai upaya untuk meningkatkan kepedulian masyarakat dan
                        kontribusi nyata dalam rangka percepatan penurunan stunting di kabupaten Brebes
                        melalui donasi telur berbasis keluarga.
                    </p>
                </div>
            </div>
        </section>

        <section class="mx-[26px] md:mx-auto md:px-6">
            <h1 class="
            text-[32px] text-center text-gray-800
            font-semibold
            mt-5
            title_serv
          "
                id="service">
                GASPOL
            </h1>
            <div class="md:grid md:grid-cols-3 md:max-w-5xl md:gap-x-4">
                <div
                    class="
              text-center
              space-y-[15px]
              box-serv
              mt-4
              bg-gray-100
              p-3
              rounded-lg
              transform
              hover:-translate-x-2
              transition
              duration-300
            ">
                    <img src="{{ asset('/template/frontsite/img/kkn.png') }}" width="100" height="100"
                        alt="" class="inline-block" />
                    <p class="text-[28px] font-medium text-red-500 title_serv">
                        Gabung Gaspol
                    </p>
                    <p class="text-lg desc_serv">
                        Mari Bergabung Menjadi Donatur GASPOL,
                        untuk Kabupaten Brebes
                    </p>
                    <a href="{{ route('register') }}"
                        class="
                bg-red-500
                px-6
                py-2
                rounded
                text-white
                inline-block
                shadow-lg
                button
                hover:bg-red-600
              ">Join
                        GASPOL</a>
                </div>

                <div
                    class="
              text-center
              space-y-[15px]
              box-serv1
              mt-4
              bg-gray-100
              p-3
              rounded-lg
              transform
              hover:-translate-x-2
              transition
              duration-300
            ">
                    <img src="{{ asset('/template/frontsite/img/service2.svg') }}" alt=""
                        class="inline-block" />
                    <p class="text-[28px] font-medium text-red-500 title_serv">
                        Laporan GASPOL
                    </p>
                    <p class="text-lg desc_serv">
                        Laporkan Donasi Telur Anda, <br />
                        Berapa dan Diberikan pada Siapa?
                    </p>
                    <a href="{{ route('login') }}"
                        class="
                bg-red-500
                px-6
                py-2
                rounded
                text-white
                inline-block
                shadow-lg
                button
                hover:bg-red-600">
                        Laporan GASPOL</a>
                </div>

                <div
                    class="
              text-center
              space-y-[15px]
              box-serv2
              mt-4
              bg-gray-100
              p-3
              rounded-lg
              transform
              hover:-translate-x-2
              transition
              duration-300
              md:duration-0
            ">
                    <img src="{{ asset('/template/frontsite/img/service3.svg') }}" alt=""
                        class="inline-block" />
                    <p class="text-[28px] font-medium text-red-500 title_serv">
                        Data Para Donatur
                    </p>
                    <p class="text-lg desc_serv">
                        Berikut Data Para Donatur yang sudah bergabung GASPOL
                    </p>
                    <a href="https://gaspol.brebeskab.go.id/datadonatur"
                        class="
                bg-red-500
                px-6
                py-2
                rounded
                text-white
                inline-block
                shadow-lg
                button
                hover:bg-red-600
              "
                        target="_blank">Donatur GASPOL</a>
                </div>
            </div>
        </section>



        <section class="mx-[26px] md:mx-auto md:px-6">
            <div class="md:grid md:grid-cols-3 md:max-w-5xl md:gap-x-4">
                <div
                    class="
              text-center
              space-y-[15px]
              box-serv
              mt-4
              bg-gray-100
              p-3
              rounded-lg
              transform
              hover:-translate-x-2
              transition
              duration-300
            ">
                    <img src="{{ asset('/template/frontsite/img/rnd.svg') }}" width="100" height="100"
                        alt="" class="inline-block" />
                    <p class="text-[28px] font-medium text-red-500 title_serv">
                        Sumber Donasi
                    </p>
                    <p class="text-lg desc_serv">
                    <ul class="">
                        <li>1. ASN Pemda dan Pusat</li>
                        <li>2. Pimpinan dan karyawan BUMN/BUMD/Swasta</li>
                        <li>3. Masyarakat Mampu</li>
                    </ul>
                    </p>

                </div>
                <div
                    class="
              text-center
              space-y-[15px]
              box-serv
              mt-4
              bg-gray-100
              p-3
              rounded-lg
              transform
              hover:-translate-x-2
              transition
              duration-300
            ">
                    <img src="{{ asset('/template/frontsite/img/inovasi.svg') }}" width="100" height="100"
                        alt="" class="inline-block" />
                    <p class="text-[28px] font-medium text-red-500 title_serv">
                        Penerima Donasi
                    </p>
                    <p class="text-lg desc_serv">
                    <ul class="mt-3">
                        <li>1. Anak Usia dibawah Dua Tahun/Baduta Stunting usia 7-23 bulan</li>
                        <li>2. Ibu Hamil Kurang Energi Kronis (KEK)</li>
                    </ul>
                    </p>

                </div>

                <div
                    class="
              text-center
              space-y-[15px]
              box-serv1
              mt-4
              bg-gray-100
              p-3
              rounded-lg
              transform
              hover:-translate-x-2
              transition
              duration-300
            ">
                    <img src="{{ asset('/template/frontsite/img/inovasi_pamong.png') }}" width="100"
                        height="100" alt="" class="inline-block" />
                    <p class="text-[28px] font-medium text-red-500 title_serv">
                        Teknis Penyaluran
                    </p>
                    <p class="text-lg desc_serv">
                    <ul class="mt-3">
                        Donatur menyalurkan donasi telur yang telah dihimpun ke Pemerintah Desa untuk dikelola oleh TPPS
                        Desa
                        bersama TP PKK Desa melalui Dapur Sehat Atasi Stunting (DASHAT) bila sudah terbentuk atau
                        langsung oleh TP
                        PKK.
                    </ul>
                    </p>
                </div>

            </div>
        </section>
    </main>

    <footer class="pt-16" id="contact">
        <div
            class="
          pl-6
          pt-5
          pb-8
          space-y-8
          md:grid md:grid-cols-3 md:max-w-5xl md:mx-auto
        ">
            <div class="home_img">
                <img src="{{ asset('/template/frontsite/img/logo-gaspol.svg') }}" alt=""
                    class="w-12 mb-2" />
                <h3 class="text-lg font-medium">Sekretariat TPPS Kab. Brebes</h3>
                <p class="mt-3">
                    DP3KB Kab. Brebes <br />
                    Jl. Veteran No.10 <br />
                    Brebes, Jateng 52212
                </p>
            </div>

            <div class="contact">
                <h3 class="text-2xl font-medium">Contact</h3>
                <ul class="mt-3">
                    <li>Phone : (0283) 671253</li>
                    <li>Fax : (0283) 671253</li>
                    <li>Email : dp3kb@brebeskab.go.id</li>
                </ul>
                <ul class="mt-3">
                    <li>1. Dyah Ayu Sekar Langit 0878 4577 0179</li>
                    <li>2. Windias Friliasni 0821 1708 4828</li>
                    <li>3. Sus Hardianto 0818 0666 3355</li>
                </ul>
            </div>

            <div class="contact">
                <h3 class="text-2xl font-medium">Follow</h3>
                <div class="flex space-x-4">
                    <a href="#" class=""><img
                            src="{{ asset('/template/frontsite/img/bxl-facebook-square.svg') }}"
                            class="w-7 opacity-60" alt="" /></a>
                    <a href="#" class=""><img
                            src="{{ asset('/template/frontsite/img/bxl-instagram-alt.svg') }}" class="w-7 opacity-60"
                            alt="" /></a>
                    <a href="#" class=""><img
                            src="{{ asset('/template/frontsite/img/bxl-twitter.svg') }}" class="w-7 opacity-60"
                            alt="" /></a>
                    <a href="#" class=""><img
                            src="{{ asset('/template/frontsite/img/bxl-youtube.svg') }}" class="w-7 opacity-60"
                            alt="" /></a>
                    <a href="#" class=""><img src="assets/img/bxl-whatsapp-square.svg"
                            class="w-7 opacity-60" alt="" /></a>
                </div>
            </div>
        </div>
        <div
            class="
          bg-red-500
          h-16
          font-medium
          text-white
          flex
          justify-center
          items-center
        ">
            Copyright © 2023 - Kabupaten Brebes
        </div>
    </footer>

    <!-- Main End -->
    <script src="{{ asset('/template/frontsite/js/scrollreveal.js') }}"></script>
    <script src="{{ asset('/template/frontsite/js/main.js') }}"></script>
</body>

</html>
