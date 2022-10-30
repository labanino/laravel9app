<x-layouts.app
    title="Create new post" 
    meta-description="New blog post form">

<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf 
    @include('posts.form-fields')
    <br>
    <button type="submit">Submit</button>
    <br>
</form>
<br>
<a href="{{ route('posts.index') }}"/>Back</a>

</x-layouts.app>
