<!--== Start Sidebar Wrapper ==-->
<div class="sidebar-wrapper sidebar-left">
    <!--== Start Sidebar Item ==-->
    <div class="sidebar-item">
        <h4 class="sidebar-title">Search</h4>
        <div class="sidebar-body">
            <div class="sidebar-search-form">
                <form action="#" method="GET">
                    <div class="form-group">
                        <input class="form-control" type="text" name="search" placeholder="Enter key words">
                        <button type="submit" class="btn-src">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--== End Sidebar Item ==-->

    <!--== Start Sidebar Item ==-->
    <div class="sidebar-item sidebar-recent-post-item">
        <h4 class="sidebar-title">Recent Post</h4>
        <div class="sidebar-body">
            <div class="sidebar-post-item">
                @foreach($posts as $post)
                    @if($loop->iteration > 3)
                        @break
                    @endif
                    <div class="post-item">
                        <div class="thumb">
                            <a href="{{ route('blog') }}/{{ $post->slug }}"><img src="/storage/{{ $post->image }}" alt="Image-HasTech"></a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="{{ route('blog') }}/{{ $post->slug }}">{{ $post->title }}</a>
                            </h4>
                            <p>{{ substr($post->body, 0, 30) }} ...</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--== End Sidebar Item ==-->

    <!--== Start Sidebar Item ==-->
    <div class="sidebar-item">
        <h4 class="sidebar-title">Archive</h4>
        <div class="sidebar-body">
            <div class="category-sub-menu pt-1">
                <span class="title">November 2020</span>
                <ul>
                    <li><a href="#/">What’s in Style for Living Room Furniture</a></li>
                    <li><a href="#/">5 Home Office Ideas that Will Make You Rethink Your Workspace</a></li>
                    <li><a href="#/">Six Things to Consider When Choosing Bedroom Furniture</a></li>
                    <li><a href="#/">7 Factors to Consider When Buying Dining Room Tables</a></li>
                    <li><a href="#/">Reinvent Your Dining Room to Perfection</a></li>
                    <li><a href="#/">7 Tips to Make Your Dining Room Look Amazing</a></li>
                    <li><a href="#/">7 Tips for Buying a Quality Sofa</a></li>
                </ul>
                <span class="title">July 2020</span>
                <ul>
                    <li><a href="#/">How to Create the Perfect Master Bedroom</a></li>
                    <li><a href="#/">How To Style a Modern Living Room</a></li>
                    <li><a href="#/">6 Simple Bedroom Decor Ideas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--== End Sidebar Item ==-->
</div>
<!--== End Sidebar Wrapper ==-->
