<x-layout meta-title="Blog" meta-description="Blog description">
    <h1>BLOG</h1>
    @foreach($posts as $post)
    <h2>{{ $post['title']}}</h2>
    @endforeach
</x-layout>