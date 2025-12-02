 <x-layout>
    {{-- Cara memanggil slot $title yang telah dibuat --}}
    <x-slot:title>
        Contact
    </x-slot:title>
    <h1>Halaman Contact</h1>
 
 <!-- Contact Section -->
  <section class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-semibold mb-4">Hubungi Kami</h2>

    <form action="#" method="POST" class="space-y-4">
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Nama</label>
        <input type="text" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
        <input type="email" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Pesan</label>
        <textarea rows="4" class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
      </div>

      <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
        Kirim Pesan
      </button>
    </form>
  </section>

  </x-layout>