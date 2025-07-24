<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <title>Portofolio | Hazar</title>
  @vite('resources/css/app.css')
</head>
<body class="relative min-h-screen font-sans text-gray-900">

  <!-- Background gambar -->
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('image/Yuru Camp△.jpg') }}" alt="Background" class="w-full h-full object-cover blur-sm brightness-75">
  </div>

  <!-- Konten utama -->
  <div class="relative z-10 flex flex-col justify-center items-center p-6 text-center min-h-screen">
    
    <!-- Foto Profil -->
    <img src="{{ asset('image/download.jpg') }}" alt="Foto Profil" class="w-60 h-40 rounded-full mb-4 shadow-lg object-cover">
    
    <!-- Judul -->
    <h1 class="text-4xl font-bold">Halo, saya Hazar 👋</h1>
    
    <!-- Deskripsi -->
    <p class="text-lg mt-2 max-w-xl text-white">Saya adalah Web Developer yang fokus pada Laravel, Tailwind CSS, dan membangun aplikasi web modern yang cepat dan efisien.</p>

    <!-- Badge -->
    <div class="mt-4 flex flex-wrap justify-center gap-2">
      <span class="bg-white/80 text-sm px-3 py-1 rounded-full">Laravel</span>
      <span class="bg-white/80 text-sm px-3 py-1 rounded-full">Tailwind CSS</span>
      <span class="bg-white/80 text-sm px-3 py-1 rounded-full">JavaScript</span>
    </div>

    <!-- Tombol -->
    <div class="mt-6 space-x-4">
      <a href="/projects" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-full shadow transition">Lihat Proyek</a>
      <a href="/contact" class="bg-gray-300 hover:bg-gray-400 text-black py-2 px-4 rounded-full shadow transition">Hubungi Saya</a>
    </div>

    <!-- Sosmed -->
    <div class="mt-6 flex space-x-4 justify-center text-white">
      <a href="https://github.com/Hytam6969" target="_blank" class="hover:text-gray-300">
        <i class="fab fa-github text-2xl"></i>
      </a>
      <a href="https://www.instagram.com/hazar.dio/" target="_blank" class="hover:text-pink-400">
        <i class="fab fa-instagram text-2xl"></i>
      </a>
    </div>

    <!--TENTANG SAYA -->
    <div id="tentang" class="mt-8 space-x-4 scroll-mt-20">
      <div class="max-w-2xl mx-auto text-center rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Tentang Saya</h2>
          <p class="text-gray-800 text-lg leading-relaxed">
            Saya adalah seorang Web Developer yang fokus pada Laravel, Tailwind CSS, dan JavaScript.
            Saya memiliki pengalaman dalam membangun aplikasi web yang responsif dan efisien.
            Saya selalu berusaha untuk terus belajar dan mengembangkan keterampilan saya dalam teknologi web terbaru.
            Alasan saya memilih laravel ini karena mudah di pahami, dan memiliki banyak fitur yang memudahkan dalam pengembangan aplikasi web.
          </p>
    </div>

  </div>
</body>
