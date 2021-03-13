# Posts

## The Post Object

The post object that is accessed via Eloquent queries provides a variety of useful methods for inspecting the post's attributes and relationships:

```php
// Access the post's author...
$post->author : \App\Models\User

// Get all of the post's tags...
$post->tags : \Illuminate\Database\Eloquent\Collection

// Filter posts by published...
$post->published() : \Illuminate\Database\Eloquent\Builder

// Filter posts by draft...
$post->draft() : \Illuminate\Database\Eloquent\Builder

// Filter posts by type (post or page)...
$post->type('post') : \Illuminate\Database\Eloquent\Builder

// Filter posts by a given tag slug...
$post->tag($tag) : \Illuminate\Database\Eloquent\Builder

// Determine if the post is published...
$post->isPublished() : bool

// Determine if the post is a draft...
$post->isDraft() : bool

// Mark the post as published...
$post->markAsPublished() : void
```
