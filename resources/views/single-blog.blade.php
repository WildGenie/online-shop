<head>
    <title>{{ $title }}</title>
</head>

<x-layout>

    <x-page-header :title="$title"/>

    <!--== Start Blog Details Area Wrapper ==-->
    <section class="blog-details-area">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-8">
            <div class="blog-details-content-wrap">
              <x-post-card :post="$post"/>
              <div class="blog-details-footer">
                <div class="social-sharing">
                  <ul class="social-icon">
                    <span>Share:</span>
                    <li><a href="#/">facebook,</a></li>
                    <li><a href="#/">Twitter,</a></li>
                    <li><a href="#/">pinterest,</a></li>
                    <li><a href="#/">Google+</a></li>
                  </ul>
                </div>
                <div class="article-next-previous">
                  <a class="previous" href="{{ route('blog') }}/{{ $previous->slug }}"><i class="fa fa-long-arrow-left"></i>Previous</a>
                  <a class="next" href="{{ route('blog') }}/{{ $next->slug }}">Next<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <x-blog-sidebar :posts="$posts"/>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Details Area Wrapper ==-->

</x-layout>
