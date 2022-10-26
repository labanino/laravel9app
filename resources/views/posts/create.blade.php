<x-layouts.app
    title="Create new post" 
    meta-description="New blog post form">

<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf 
    <label>
        Title <br>
        <input name="title" type="text">
    </label>

    <br>

    <label>
        Body <br>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
    </label>
    
    <br>

    <button type="submit">Submit</button>

    <br>

</form>
<br>
<a href="{{ route('posts.index') }}"/>Back</a>

</x-layouts.app>
