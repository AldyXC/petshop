@extends('backend.layouts.app')

@section('title', 'Dashboard - Products')

@section('dashboard_content')
    <div class="container w-full mx-auto">
        <div class="p-10 mt-10">
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold mb-2 text-gray-800">Products</h2>
                        <p class="text-gray-700">Manajemen produk kamu disini.</p>
                    </div>
                    <div>
                        <div class="flex space-x-2 justify-center">
                            <a href="#_"
                                class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                data-rounded="rounded-md" data-primary="blue-600" data-primary-reset="{}">
                                Add New Product
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-10">
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="text-gray-700">All Products</h3>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
                    <i class="bi bi-search text-sm"></i>
                    <input type="text" placeholder="search"
                        class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
                </div>
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
                                                Product
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Image
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Stock
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Price
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Action
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
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Edit | Delete
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
