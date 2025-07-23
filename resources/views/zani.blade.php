<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Zani | Bini Gweh</title>
  @vite('resources/css/app.css')
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white to-sky-100 min-h-screen font-sans relative">

  <!-- Tombol Kembali -->
  <a href="/projects" 
     class="absolute top-4 left-4 inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm border border-gray-300 text-gray-800 px-4 py-2 rounded-full shadow hover:bg-gray-100 transition z-10">
    ← Kembali ke Proyek
  </a>

  <!-- Background Blur -->
    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('image/wuthering-waves-zani-4k-live_thumb1-scaled.jpg') }}"
        alt="Background"
        class="w-full h-full object-cover">
    </div>
    <!--<div class="relative min-h-screen bg-[url('/image/background.jpg')] bg-cover bg-center blur-sm brightness-75">
        <div class="absolute inset-0 bg-white/20 backdrop-blur-sm"></div>
    </div>-->



  <main class="pt-20 px-6 max-w-3xl mx-auto text-center">
    <img src="{{ asset('image/Zani.jpg') }}" alt="Zani" class="mx-auto rounded-lg shadow-lg w-64 h-64 object-cover mb-6">

    <h1 class="text-4xl font-bold text-indigo-700 mb-2">Zani – Bini Gweh 💙</h1>
    <p class="text-gray-700 text-lg mb-6">Karakter yang bikin Wuthering Waves jadi wajib dimainin. Skill-nya sadis, desainnya kece, dan auranya nggak bisa dilawan.</p>

    <div class="bg-white/90 rounded-xl p-6 shadow text-left">
      <h2 class="text-2xl font-semibold mb-3">Kenapa Zani?</h2>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>Pengguna Broadblade yang punya damage besar dan animasi keren</li>
        <li>Karakter lore yang misterius dan bikin penasaran</li>
        <li>Design outfit dan visual yang top-tier</li>
        <li>Kalau ga ada Zani, hidup di Monteli gak lengkap 😤</li>
      </ul>
    </div>
  </main>

  <footer class="mt-20 text-center text-gray-500 text-sm py-4">
    &copy; {{ date('Y') }} Lords Karbiters
  </footer>
</body>
</html>
