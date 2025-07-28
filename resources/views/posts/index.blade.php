<x-layout meta-title="Blog" meta-description="Blog description">
    

    <h1>BLOG</h1>
    <a href="{{route('posts.create')}}">Create new post</a>
    @foreach($posts as $post) 
        <h2>
            <a href="{{route('posts.show',$post)}}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
</x-layout>