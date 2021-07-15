<!--== Start Sidebar Wrapper ==-->
<div class="sidebar-wrapper sidebar-left">
    <!--== Start Sidebar Item ==-->
    <div class="sidebar-item">
        <h4 class="sidebar-title">Search</h4>
        <div class="sidebar-body">
            <div class="sidebar-search-form">
                <form action="#">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Enter key words">
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
                @for($i = 0; $i < 3; $i++)
                    <div class="post-item">
                        <div class="thumb">
                            <a href="{{ route('blog') }}/{{ $posts[$i]->slug }}"><img src="/storage/{{ $posts[$i]->image }}" alt="Image-HasTech"></a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="{{ route('blog') }}/{{ $posts[$i]->slug }}">{{ $posts[$i]->title }}</a>
                            </h4>
                            <p>{{ substr($posts[$i]->body, 0, 30) }} ...</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!--== End Sidebar Item ==-->

    <!--== Start Sidebar Item ==-->
    <div class="sidebar-item">
        <h4 class="sidebar-title">Archive</h4>
        <div class="sidebar-body">
            <div class="category-sub-menu pt-1">
                <span class="title">February 2019</span>
                <ul>
                    <li><a href="#/">Standard dummy text ever since</a></li>
                    <li><a href="#/">Make a type specimen book</a></li>
                    <li><a href="#/">Lorem Ipsum is simply dummy</a></li>
                    <li><a href="#/">It is a long established</a></li>
                    <li><a href="#/">Sed quia non numquam</a></li>
                    <li><a href="#/">Ratione voluptatem sequi nesciunt</a></li>
                    <li><a href="#/">Sit aspernatur aut odit</a></li>
                </ul>
                <span class="title">January 2019</span>
                <ul>
                    <li><a href="#/">Guis nostrum Nemo enim ipsam</a></li>
                    <li><a href="#/">Neque porro quisquam est</a></li>
                    <li><a href="#/">Qui dolorem ipsum quia</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--== End Sidebar Item ==-->
</div>
<!--== End Sidebar Wrapper ==-->
