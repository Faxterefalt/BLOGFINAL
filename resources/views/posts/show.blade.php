<x-layout :meta-title="$post->title" :meta-description="$post->excerpt">
<h1> {{ $post -> title }} </h1>
<p> {{ $post -> body}} </p>
<a href="{{ route('posts.index')}}">Back</a>
</x-layout>