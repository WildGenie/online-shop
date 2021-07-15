@props(['post'])

<!--== Start Blog Item ==-->
<div class="post-item">
    <div class="inner-content">
        <div class="thumb">
            <a href="{{ route('blog') }}/{{ $post->slug }}">
                <img class="w-100" src="/storage/{{ $post->image }}" alt="Image-HasTech">
            </a>
        </div>
        <div class="content">
            <h4 class="title"><a href="{{ route('blog') }}/{{ $post->slug }}">{{ $post->title }}</a></h4>
            <p>{{ substr($post->body, 0, 50) }} ...</p>
            <a class="btn-link" href="{{ route('blog') }}/{{ $post->slug }}">Read More</a>
            <ul class="meta-info">
                <li><span>By - </span><a class="author" href="blog.blade.php">Pasha</a></li>
                <li><span>{{ $post->created_at->diffForHumans() }}</span></li>
            </ul>
        </div>
    </div>
</div>
<!--== End Blog Item ==-->
