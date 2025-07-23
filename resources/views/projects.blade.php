<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Proyek Saya | Hazar</title>
  @vite('resources/css/app.css')
</head>
<body class="relative min-h-screen overflow-hidden">

  <!-- 🔹 Background Blur -->
  <div class="absolute inset-0 -z-10">
    <img src="{{ asset('image/Wuthering Waves.jpg') }}" 
         alt="Background" 
         class="w-full h-full object-cover blur-lg brightness-75">
  </div>
    
    <h1 class="text-4xl font-bold text-center mb-8">Waifu Gweh</h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
      
      <!-- Proyek 1 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
        <img src="{{ asset('image/Zani broadblade.jpg') }}" alt="Proyek 1" class="rounded mb-4 object-cover h-40 w-full">
        <h3 class="text-xl font-semibold mb-2">Zani</h3>
        <p class="text-sm text-gray-700 mb-4">Alasan main Wuthering Waves</p>
        <a href="/zani" class="text-blue-600 hover:underline text-sm">Bini Gweh</a>
      </div>

      <!-- Proyek 2 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
        <img src="{{ asset('image/Phoebe.jpg') }}" alt="Proyek 2" class="rounded mb-4 object-cover h-40 w-full">
        <h3 class="text-xl font-semibold mb-2">Phoebe</h3>
        <p class="text-sm text-gray-700 mb-4">Waifu paling manis aduhai gemesnya</p>
        <a href="/phoebe" class="text-blue-600 hover:underline text-sm">Bini gweh</a>
      </div>

      <!-- Proyek 3 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
        <img src="{{ asset('image/Cantarella 2.jpg') }}" alt="Proyek 3" class="rounded mb-4 object-cover h-40 w-full">
        <h3 class="text-xl font-semibold mb-2">Cantarella</h3>
        <p class="text-sm text-gray-700 mb-4">Bini gweh yg ada di Fisalia</p>
        <a href="/Cantarella" class="text-blue-600 hover:underline text-sm">Monteli Babi</a>
      </div>

    </div>

    <!-- Tombol Kembali -->
    <a href="/" 
     class="absolute top-4 left-4 inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm border border-gray-300 text-gray-800 px-4 py-2 rounded-full shadow hover:bg-gray-100 transition duration-300 z-10">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
      Kembali ke Beranda
    </a>


  </div>
</body>
</html>
