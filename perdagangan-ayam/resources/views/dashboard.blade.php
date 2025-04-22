<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <!-- Tabel Ayam -->
                    <div class="mt-6">
                        <h3 class="text-lg font-bold mb-4">Daftar Ayam</h3>
                        <table class="min-w-full border border-gray-400">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border px-4 py-2">Jenis</th>
                                    <th class="border px-4 py-2">Berat (gram)</th>
                                    <th class="border px-4 py-2">Harga (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Kampung</td>
                                    <td class="border px-4 py-2">1500</td>
                                    <td class="border px-4 py-2">Rp56.000</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Broiler</td>
                                    <td class="border px-4 py-2">2500</td>
                                    <td class="border px-4 py-2">Rp73.000</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Mainan</td>
                                    <td class="border px-4 py-2">800</td>
                                    <td class="border px-4 py-2">Rp31.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Tabel Ayam -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
