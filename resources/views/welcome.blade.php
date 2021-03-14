<x-layout>
    <main class="pb-16">
        <header class="bg-gray-50">
            <div class="p-8 max-w-3xl mx-auto items-center flex" style="min-height: 60vh;">
                <div class=" overflow-hidden">
                    <h1 class="text-4xl lg:text-6xl font-bold">RadioCúbito Wordful</h1>
                    <h2 class="mt-5 text-2xl lg:text-4xl font-semibold text-gray-600 leading-snug">
                        Just a simple blogging platform. <br> For Laravel.
                    </h2>

                    <button type="button" class="mt-5 max-w-full py-4 px-6 rounded bg-gray-800 text-sm inline-flex items-center space-x-2 group" x-data="{ command: 'composer require radiocubito/laravel-wordful' }" @click="$clipboard(command)">
                        <span class="font-mono text-gray-500">$</span>
                        <pre class="overflow-auto"><code class="text-white"><span class="text-blue-300">composer</span> require radiocubito/laravel-wordful</code></pre>
                        <span class="sr-only">Click to copy to clipboard</span>
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-5 h-5 text-gray-500 group-hover:text-white" aria-hidden="true">
                            <path d="M8 16c0 1.886 0 2.828.586 3.414C9.172 20 10.114 20 12 20h4c1.886 0 2.828 0 3.414-.586C20 18.828 20 17.886 20 16v-4c0-1.886 0-2.828-.586-3.414C18.828 8 17.886 8 16 8m-8 8h4c1.886 0 2.828 0 3.414-.586C16 14.828 16 13.886 16 12V8m-8 8c-1.886 0-2.828 0-3.414-.586C4 14.828 4 13.886 4 12V8c0-1.886 0-2.828.586-3.414C5.172 4 6.114 4 8 4h4c1.886 0 2.828 0 3.414.586C16 5.172 16 6.114 16 8"></path>
                        </svg>
                    </button>

                    <div class="mt-10 flex items-center space-x-6 md:order-2">
                        <a href="https://github.com/radiocubito/laravel-wordful" class="text-gray-500 hover:text-gray-700">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                            </svg>
                        </a>

                        <a href="{{ route('docs.index') }}" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            Documentation
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-white border-t">
            <div class="p-8 max-w-3xl mx-auto">
                <p><a class="anchor" name="changelog"></a></p>
                <h2 class="mt-8 text-3xl lg:text-4xl font-semibold leading-slug">
                    Changelog
                </h2>
                <div class="mt-6 divide-y">
                    @foreach ($posts as $post)
                        <article class="relative py-6">
                            <header>
                                <p class="text-sm text-gray-500 lg:-ml-32 lg:mt-0.5 lg:absolute">
                                    {{ $post->published_at->format('F j, Y') }}
                                </p>
                                <h2 class="font-bold text-2xl mt-1 leading-none">
                                    {{ $post->title }}
                                </h2>
                            </header>

                            <div class="mt-6 text-base leading-snug prose">
                                {!! $post->html !!}
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</x-layout>
