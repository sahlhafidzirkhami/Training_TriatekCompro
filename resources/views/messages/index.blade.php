<x-layout>

  <x-slot:title>Daftar Pesan</x-slot>
<x-slot:content>
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-triatek-dark">Daftar Pesan Masuk</h1>
    
    @if(session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pesan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
            <th class="relative px-6 py-3">
              <span class="sr-only">Actions</span>
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @forelse ($messages as $message)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $message->name }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $message->email }}</td>
              <td class="px-6 py-4 max-w-sm truncate text-sm text-gray-500" title="{{ $message->message }}">{{ $message->message }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $message->created_at->format('d M Y') }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                <a href="{{ route('messages.edit', $message) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <form action="{{ route('messages.destroy', $message) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">Tidak ada pesan.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="mt-6">
      {{ $messages->links() }}
    </div>
  </div>
  </x-slot:content>
</x-layout>