@extends('layouts.app')
@section('title', $responseBody->title)

@section('content')
        <section class="text-gray-700 body-font overflow-hidden ">
            <div class="container px-5 py-24 mx-auto">
              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 object-cover bg-gray-200 object-center rounded border border-gray-200" src="{{ $responseBody->image }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                  <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $responseBody->authors }} - {{ $responseBody->publisher }}</h2>
                  <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $responseBody->title }}</h1>
                  <div class="flex mb-4">
                    <span class="flex items-center">
                        {!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $responseBody->rating) !!}
                        {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5 - $responseBody->rating) !!}

                      <span class="text-gray-600 ml-3">{{ $responseBody->rating }} Stars</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                      <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                      </a>
                      <a class="ml-2 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                          <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                        </svg>
                      </a>
                    </span>
                  </div>
                  <p class="leading-relaxed">{{ $responseBody->desc }}</p>
                  <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                    <div class="flex">
                      <span class="mr-3">Pages: {{ $responseBody->pages }}</span>

                    </div>
                    <div class="flex ml-6 items-center">
                      <span class="mr-3">Year: {{ $responseBody->year }}</span>

                    </div>
                  </div>
                  <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">{{ $responseBody->price }}</span>

                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                      <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="py-10">
            <div class="px-10 mx-auto max-w-7xl">
                <div class="flex flex-col items-center md:flex-row md:justify-between">
                        <a href="/" class="relative flex items-center h-full pr-6 text-lg font-extrabold text-black">BookStore<span class="text-yellow-700">.</span></a>


                    <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4"> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"></path>
                            </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"></path>
                            </svg> </a> <a href="#" class="p-4 text-gray-700 hover:text-gray-400"> <svg class="fill-current" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <circle cx="12.145" cy="3.892" r="1"></circle>
                                    <path d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"></path>
                                    <path d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z"></path>
                                </g>
                            </svg> </a> </div>
                </div>
                <div class="flex flex-col justify-between text-center md:flex-row">
                    <p class="order-last text-sm leading-tight text-gray-500 md:order-first"> Created by <a href="https://blackburn-co.com" class="text-black">Blackburn</a>. Built with ❤️ by our team. </p>
                    <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                        <li> <a href="#_" class="px-4 text-gray-500 hover:text-black">Home</a> </li>
                        <li> <a href="#_" class="px-4 text-gray-500 hover:text-black">About</a> </li>
                        <li> <a href="#_" class="px-4 text-gray-500 hover:text-black">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
 