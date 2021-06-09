@props([
    'features' => [
        [
            'Posts',
            'The essence of Wordful. You can create post drafts to publish later or email posts to your subscribers.',
            'Posts',
            route('docs.show', 'posts'),
        ],
        [
            'Pages',
            'Static “one-off” content for your about page, privacy policy, contact page, etc.',
            'Pages',
            route('docs.show', 'posts'),
        ],
        [
            'Tags',
            'Organize posts into related content by tagging them with one or more keywords.',
            'Tags',
            route('docs.show', 'tags'),
        ],
    ],
])

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach ($features as list($name, $description, $ctaLabel, $ctaLink))
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-2xl font-bold leading-tight">{{ $name }}</h3>
            <p class="mt-5 leading-relaxed">{{ $description }}</p>
            <div class="mt-5 -mb-2">
                <x-button href="{{ $ctaLink }}" color="transparent" class="group">
                    {{ $ctaLabel }} <x-icon.right-arrow class="ml-2 h-5 text-gray-400 group-hover:text-gray-900" />
                </x-button>
            </div>
        </div>
    @endforeach
</div>
