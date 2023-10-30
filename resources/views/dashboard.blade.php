@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen">
        <div class="w-full mb-1">
            {{--    Total Expense  --}}
            <div
                class="mb-4 w-3/12 items-center  justify-between  bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700  dark:bg-gray-800">
                <div class="w-full flex flex-col items-center py-6">
                    <h3 class="text-2xl font-semibold text-gray-500 dark:text-gray-400">Total Expenses In
                        <h2 class="font-semibold  text-xl text-gray-500 dark:text-gray-400">{{ now()->format('F Y') }}
                        </h2>
                    </h3>
                    <span class="text-4xl font-bold leading-none text-gray-900 sm:text-4xl dark:text-white">2,340 </span>
                </div>
            </div>
            {{--    Total Expense  --}}
        </div>
    </div>
@endsection
