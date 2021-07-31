@extends('layouts.app')
@section('title', $search)

@section('content')

        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 ">

            <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                @if(!empty($responseBody))

           @foreach ($responseBody as $book)

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
              @else 
              <div>
                  <h2>No books found</h2>
              </div>
          @endif
            </div>
            {{-- {{ $responseBody->links() }} --}}
          </div>

        
@stop