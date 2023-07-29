@extends('admin.layouts.app')
@section('title', 'Them danh muc')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="color:blueviolet">
                Create Category
            </h2>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <!-- Helper text -->
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Tên danh mục
                </span>
                    <input name="name" value="{{ old('name') }}" type="name" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Thêm tên danh mục" >
                    @error('name')
                    <span class="text-xs text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </label>
                <br>
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Thêm
                </button>
            </div>
            </form>
        </div>
    </main>
@endsection
