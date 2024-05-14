
<x-layout :title="$article->title">
    <h1>{{ $article->title }}</h1>
    <p>Autore: {{ $article->user->name }}
        <a href="mailto:{{ $article->user->email }}">{{ $article->user->email }}</a></p>

    @foreach($article->categories as $category)
        <span>{{ $category->name }}</span>
    @endforeach
</x-layout>
