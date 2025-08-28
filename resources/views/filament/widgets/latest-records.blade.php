<x-filament::widget>
    <x-filament::card>
        <h2 class="text-xl font-bold mb-4">📋 Latest Records</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($this->getLatestData() as $modelName => $records)
                <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm bg-white">
                    <div class="bg-gray-100 px-4 py-2 font-semibold text-gray-700 flex justify-between">
                        <span>{{ $modelName }}</span>
                        <span class="text-sm text-gray-500">{{ $records->count() }} items</span>
                    </div>
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-gray-50 border-b">
                                <th class="text-left py-2 px-4">Name</th>
                                <th class="text-left py-2 px-4">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($records as $record)
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="py-2 px-4">{{ $record->name ?? '-' }}</td>
                                    <td class="py-2 px-4 text-gray-500">{{ $record->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="py-2 px-4 text-gray-500 text-center">No records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </x-filament::card>
</x-filament::widget>
