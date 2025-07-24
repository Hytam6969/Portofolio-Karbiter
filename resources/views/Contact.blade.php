<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hubungi Saya</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white to-blue-100 font-sans min-h-screen flex flex-col">

  {{-- Navbar --}}
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-700">Portofolio Saya</h1>
      <div class="space-x-6">
        <a href="/" class="text-gray-700 hover:text-indigo-600 font-medium">Home</a>
        <a href="/projects" class="text-gray-700 hover:text-indigo-600 font-medium">Projects</a>
        <a href="/contact" class="text-indigo-700 font-semibold underline">Hubungi Saya</a>
      </div>
    </div>
  </nav>

  @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4 border border-red-300">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


  {{-- Form Container --}}
  <main class="flex-grow flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-xl bg-white rounded-2xl shadow-2xl p-8">
      <h2 class="text-3xl font-bold text-indigo-800 text-center mb-6">Hubungi Saya</h2>

      @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6">
          {{ session('success') }}
        </div>
      @endif

      <form action="/contact" method="POST" class="space-y-5">
        @csrf

        <div>
          <label class="block font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" name="name" required class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-300 outline-none transition">
        </div>

        <div>
          <label class="block font-medium text-gray-700">Email</label>
          <input type="email" name="email" required class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-300 outline-none transition">
        </div>

        <div>
          <label class="block font-medium text-gray-700">Nomor HP</label>
          <input type="text" name="phone" class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-300 outline-none transition">
        </div>

        <div>
          <label class="block font-medium text-gray-700">Pesan</label>
          <textarea name="message" required rows="4" class="mt-1 w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-indigo-300 outline-none transition resize-none"></textarea>
        </div>

        <div class="text-right">
          <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-xl transition shadow">
            Kirim Pesan
          </button>
        </div>
      </form>
    </div>
  </main>

  {{-- Footer --}}
  <footer class="bg-white text-center py-4 text-gray-500 text-sm border-t">
    &copy; {{ date('Y') }} My Kisah
  </footer>

</body>
</html>
