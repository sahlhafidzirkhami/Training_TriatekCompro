<x-layout>
  <x-slot:title>Edit Pesan</x-slot>
<x-slot:content>
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-triatek-dark">Edit Pesan</h1>
    
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
      <form action="{{ route('messages.update', $message) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Name*</label>
          <input type="text" name="name" id="name" value="{{ old('name', $message->name) }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email*</label>
          <input type="email" name="email" id="email" value="{{ old('email', $message->email) }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Subject*</label>
            <input type="text" name="subject" id="subject" value="{{ old('subject', $message->subject) }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Message*</label>
          <textarea name="message" id="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">{{ old('message', $message->message) }}</textarea>
        </div>
        <div>
          <button type="submit" class="w-full text-white font-bold py-3 px-6 rounded-lg bg-blue-600 hover:bg-blue-700 transition-colors">
            Update Pesan
          </button>
        </div>
      </form>
    </div>
  </div>
  </x-slot:content>
</x-layout>