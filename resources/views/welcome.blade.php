<x-layout>
    <x-header/>

    <main class="space-y-20 py-20 sm:space-y-28 sm:py-28">
        <x-page-section>
            <h1 class="text-4xl sm:text-6xl font-bold leading-tight">
                Just a simple publishing platform for Laravel.
            </h1>
            <p class="mt-10 text-xl leading-relaxed">
                 Wordful is a straightforward publishing platform built as an open-source package for Laravel. Just posts, pages, and tags to organize content.
            </p>
            <div class="mt-8">
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-x-3 sm:space-y-0">
                    <x-button href="{{ route('docs.index') }}" color="primary" class="justify-center sm:justify-start">
                        Get Started <x-icon.right-arrow class="ml-2 h-5" />
                    </x-button>
                    <x-button href="https://github.com/radiocubito/laravel-wordful" color="secondary" class="justify-center sm:justify-start">
                        <x-icon.github class="mr-2 h-5" /> View on Github
                    </x-button>
                </div>
            </div>
        </x-page-section>

        <x-page-section>
            <x-feature-list />
        </x-page-section>

        <x-page-section>
            <h2 class="text-5xl font-bold leading-tight">Quickstart</h2>
            <p class="mt-8 leading-relaxed">
                Install Wordful via the Composer package manager:
            </p>
            <button type="button" class="mt-5 max-w-full py-4 px-6 rounded bg-gray-800 text-sm inline-flex items-center space-x-2 group" x-data="{ command: 'composer require radiocubito/laravel-wordful' }" @click="$clipboard(command)">
                <span class="font-mono text-gray-500">$</span>
                <pre class="overflow-auto"><code class="text-white"><span class="text-blue-300">composer</span> require radiocubito/laravel-wordful</code></pre>
                <span class="sr-only">Click to copy to clipboard</span>
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="w-5 h-5 text-gray-500 group-hover:text-white" aria-hidden="true">
                    <path d="M8 16c0 1.886 0 2.828.586 3.414C9.172 20 10.114 20 12 20h4c1.886 0 2.828 0 3.414-.586C20 18.828 20 17.886 20 16v-4c0-1.886 0-2.828-.586-3.414C18.828 8 17.886 8 16 8m-8 8h4c1.886 0 2.828 0 3.414-.586C16 14.828 16 13.886 16 12V8m-8 8c-1.886 0-2.828 0-3.414-.586C4 14.828 4 13.886 4 12V8c0-1.886 0-2.828.586-3.414C5.172 4 6.114 4 8 4h4c1.886 0 2.828 0 3.414.586C16 5.172 16 6.114 16 8"></path>
                </svg>
            </button>
            <div class="mt-5">
                <x-button href="{{ route('docs.index') }}" color="transparent" class="group">
                    Learn more <x-icon.right-arrow class="ml-2 h-5 text-gray-400 group-hover:text-gray-900" />
                </x-button>
            </div>
        </x-page-section>
    </main>
</x-layout>
