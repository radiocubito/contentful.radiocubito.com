<x-layout>
    <div class="max-w-6xl mx-auto px-4 lg:px-6 lg:grid lg:grid-cols-4 lg:gap-10 min-h-screen">
        <nav class="border-b pb-6 lg:border-r lg:border-b-0 lg:pb-0">
            <div class="px-3 py-6 font-bold">
                <a href="{{ route('docs.index') }}">RadioCúbito Wordful</a>
            </div>

            <div>
                <h6 class="px-3 my-2 text-sm font-bold text-gray-500">
                    Getting Started
                </h6>

                <div>
                    @foreach ($gettingStartedDocs as $gettingStartedDoc)
                        @if ($gettingStartedDoc->slug === $doc->slug)
                            <a href="{{ route('docs.show', $gettingStartedDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 lg:border-r-2 border-purple-500 focus:outline-none transition ease-in-out duration-150 text-purple-900 bg-purple-50 focus:bg-gray-200" aria-current="page">
                                <span class="truncate">
                                    {{ $gettingStartedDoc->title }}
                                </span>
                            </a>
                        @else
                            <a href="{{ route('docs.show', $gettingStartedDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 focus:outline-none transition ease-in-out duration-150 text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100" aria-current="page">
                                <span class="truncate">
                                    {{ $gettingStartedDoc->title }}
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="mt-8">
                <h6 class="px-3 my-2 text-sm font-bold text-gray-500">
                    Features
                </h6>

                <div>
                    @foreach ($featuresDocs as $featuresDoc)
                        @if ($featuresDoc->slug === $doc->slug)
                            <a href="{{ route('docs.show', $featuresDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 lg:border-r-2 border-purple-500 focus:outline-none transition ease-in-out duration-150 text-purple-900 bg-purple-50 focus:bg-gray-200" aria-current="page">
                                <span class="truncate">
                                    {{ $featuresDoc->title }}
                                </span>
                            </a>
                        @else
                            <a href="{{ route('docs.show', $featuresDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 focus:outline-none transition ease-in-out duration-150 text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100" aria-current="page">
                                <span class="truncate">
                                    {{ $featuresDoc->title }}
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="mt-8">
                <h6 class="px-3 my-2 text-sm font-bold text-gray-500">
                    Starter Kits
                </h6>

                <div>
                    @foreach ($starterKitsDocs as $starterKitsDoc)
                        @if ($starterKitsDoc->slug === $doc->slug)
                            <a href="{{ route('docs.show', $starterKitsDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 lg:border-r-2 border-purple-500 focus:outline-none transition ease-in-out duration-150 text-purple-900 bg-purple-50 focus:bg-gray-200" aria-current="page">
                                <span class="truncate">
                                    {{ $starterKitsDoc->title }}
                                </span>
                            </a>
                        @else
                            <a href="{{ route('docs.show', $starterKitsDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 focus:outline-none transition ease-in-out duration-150 text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100" aria-current="page">
                                <span class="truncate">
                                    {{ $starterKitsDoc->title }}
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </nav>

        <main class="lg:col-span-3 px-3 pb-24 lg:px-0 mt-8 lg:mt-24 lg:grid lg:grid-cols-4 lg:gap-10">
            <x-markdown anchors class="prose lg:col-span-3">{!! $doc->markdown !!}</x-markdown>

            <div class="hidden lg:block mt-8">
                <h6 class="text-sm font-medium text-gray-500">
                    On this page
                </h6>

                <x-toc class="mt-1 toc">
                    {!! $doc->markdown !!}
                </x-toc>
            </div>
        </main>
    </div>
</x-layout>
