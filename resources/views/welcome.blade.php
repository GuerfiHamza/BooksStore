@extends('layouts.app')
@section('title', 'Home')

@section('content')
 <div class="container py-32 mx-auto text-center sm:px-4">

                    <h1 class="text-4xl font-extrabold leading-10 tracking-tight text-black sm:text-5xl sm:leading-none md:text-6xl xl:text-7xl"><span class="block">Simplify the way you</span> <span class="relative inline-block mt-3 text-transparent text-black">find books</span></h1>
                    <div class="max-w-lg mx-auto mt-6 text-sm text-center text-black md:mt-12 sm:text-base md:max-w-xl md:text-lg xl:text-xl">Search for what you want !</div>
                    <form action="{{ route('books.search') }}" method="GET">

                    <div class="relative flex items-center max-w-md mx-auto mt-12 overflow-hidden text-center rounded">

                        <input type="text" name="search" placeholder="Your favorite book !" class="w-full h-12 px-6 py-2 font-medium text-black focus:outline-none">

                        <span class="relative top-0 right-0 block">
                        <button type="submit" class="inline-flex items-center w-32 h-12 px-8 text-base font-bold leading-6 text-black transition duration-150 ease-in-out bg-yellow-500 border border-transparent hover:bg-yellow-800 focus:outline-none active:bg-yellow-800 hover:text-white">
                            Search
                        </button>

                    </span>
                    </div>
                </form>

                </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 ">
            <h1 class="text-center text-7xl uppercase pb-5 font-serif">Latest collection</h1>

            <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
           @foreach ($responseBody->books as $book)

              <div class="overflow-hidden transition-shadow duration-300 bg-white rounded-xl shadow-sm">
                <img src="{{ $book->image }}" class="object-contain  w-full h-64" alt="" />
                <div class="p-5  border-t-0">

                  <a href="/" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 text-black">{{ $book->title }}</a>
                  {{-- <p class="mb-2 text-black">
                    {{-- {{ $book->subtitle ?? '<br>' }}
                  </p> --}}
                  <p></p>
                  <a href="{{ route('books.show', $book->isbn13) }}" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-yellow-500 hover:text-yellow-800">Learn more</a>
                </div>
              </div>
              @endforeach

            </div>
          </div>


       @stop
