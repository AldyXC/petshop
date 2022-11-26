@extends('backend.layouts.app')

@section('title', 'Dashboard - Home')

@section('dashboard_content')
    <div class="container w-full mx-auto">
        <div class="p-10 mt-10">
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <p class="text-gray-700">Hello,</p>
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Bambang Santoso</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-10">
            <div class="flex justify-center border-2 rounded-lg p-6 bg-white ">
                <h4 class="text-2xl font-bold mb-2 text-gray-800">10</h4>
                <p class="text-gray-700">Products</p>
            </div>
            <div class="flex justify-center border-2 rounded-lg p-6 bg-white ">
                <h4 class="text-2xl font-bold mb-2 text-gray-800">5</h4>
                <p class="text-gray-700">Categories</p>
            </div>
            <div class="flex justify-center border-2 rounded-lg p-6 bg-white ">
                <h4 class="text-2xl font-bold mb-2 text-gray-800">50</h4>
                <p class="text-gray-700">Users</p>
            </div>
            <div class="flex justify-center border-2 rounded-lg p-6 bg-white ">
                <h4 class="text-2xl font-bold mb-2 text-gray-800">100</h4>
                <p class="text-gray-700">Checkouts</p>
            </div>
        </div>
        <div class="p-10">
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="text-gray-700">Latest Transaction</h3>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="bg-white border-b">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                #
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Customer
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Product
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Qty
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Budi Sumarno
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Makanan Ayam
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                2
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                12000
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
