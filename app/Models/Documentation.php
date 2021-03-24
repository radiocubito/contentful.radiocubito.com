<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Sushi\Sushi;

class Documentation extends Model
{
    use Sushi;

    private $filesystem;

    protected $rows = [
        [
            'slug' => 'introduction',
            'section' => 'getting-started',
            'title' => 'Introduction',
        ],
        [
            'slug' => 'installation',
            'section' => 'getting-started',
            'title' => null
        ],
        [
            'slug' => 'posts',
            'section' => 'features',
            'title' => null
        ],
        [
            'slug' => 'tags',
            'section' => 'features',
            'title' => null
        ],
        [
            'slug' => 'personal-blog-starter-kit',
            'section' => 'starter-kits',
            'title' => 'Personal Blog'
        ],
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(function ($model) {
            $model->filesystem = new Filesystem;
        });
    }

    public function markdownExists(): bool
    {
        return $this->filesystem->exists($this->path("{$this->slug}.md"));
    }

    public function getMarkdownAttribute(): string
    {
        return $this->filesystem->get($this->path("{$this->slug}.md"));
    }

    public function getTitleAttribute($title): string
    {
        return $title ?? Str::after(collect(explode(PHP_EOL, $this->markdown))->first(), '# ');
    }

    private function path(string $file): string
    {
        return resource_path("markdown/docs/{$file}");
    }
}
