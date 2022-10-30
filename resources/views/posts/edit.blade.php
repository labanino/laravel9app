<x-layouts.app
    :title="$post->title" 
    :meta-description="$post->body">

<h1>Edit form</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form-fields')
    <br>
    <button type="submit">Submit</button>
    <br>
</form>

<a href="{{ route('posts.index') }}"/>Back</a>

</x-layouts.app>
