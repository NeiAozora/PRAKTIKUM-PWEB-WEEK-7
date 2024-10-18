@extends('layouts.app')

@section('title', "Tugas Contact")

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Employee Card -->
    <div class="bg-white shadow-md rounded-lg p-4">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Informasi Pegawai</h2>
        <!-- Employee Table -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-600">
                    <th class="py-2 px-3 border-b w-2">No.</th>
                    <th class="py-2 px-3 border-b">Name</th>
                    <th class="py-2 px-3 border-b">Position</th>
                    <th class="py-2 px-3 border-b">Department</th>
                    <th class="py-2 px-3 border-b">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $employee)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-3 border-b">{{ $index + 1 }}</td>
                    <td class="py-2 px-3 border-b">{{ $employee['name'] }}</td>
                    <td class="py-2 px-3 border-b">{{ $employee['position'] }}</td>
                    <td class="py-2 px-3 border-b">{{ $employee['department'] }}</td>
                    <td class="py-2 px-3 border-b">{{ $employee['email'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
