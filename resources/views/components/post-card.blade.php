@props(['post'])

<div class="thumb">
    <img src="/storage/{{ $post->image }}" alt="Image-HasTech">
</div>
<div class="content">
    <h3 class="title">{{ $post->title }}</h3>
    <ul class="meta">
        <li> By - <a href="#">Adam</a></li>
        <li class="post-separator">|</li>
        <li>{{ $post->created_at->diffForHumans() }} | {{ $post->created_at->toDateString() }}</li>
    </ul>
    <p>{{ $post->body }}</p>
</div>
