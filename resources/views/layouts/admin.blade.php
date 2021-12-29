<x-app-layout>
    <x-navigation>
    </x-navigation>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>{{ $header }}</p>
                    <div class="text-right">
                        <a href="{{ route('contacts.index') }}" class="text-right hover:text-green-500">未読のお問い合わせ：{{$count}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $slot }}
</x-app-layout>
