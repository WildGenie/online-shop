<head>
    <title>{{ $title }}</title>
</head>

<x-layout>

    <x-page-header :title="$title"/>

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-inner-area">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-8">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6">
                      <x-posts-card :post="$post"/>
                    </div>
                @endforeach
            </div>
            <!--== Start Pagination Wrap ==-->
                {{ $posts->links() }}
            <!--== End Pagination Wrap ==-->
          </div>
          <div class="col-lg-4">
            <x-blog-sidebar :posts="$posts"/>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

</x-layout>
