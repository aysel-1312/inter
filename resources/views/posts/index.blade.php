    @extends('layouts.app')
    @section('title') anasayfa
    @endsection
    @section('content')

    <div class="row">
        <div class="col-3"></div>
        <div class="col-md-6 card">

        <form action="" method="post">
            @csrf
            <div class="mb-4 text-center card-body">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="4"></textarea>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group card-body">
                <button type="submit" class="btn btn-primary">Post</button></div>
        </form>
            @if($posts->count())
                @foreach($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                {{ $posts->links('pagination::bootstrap-4') }} {{--direk yazılmıyor ancak bu şekilde çalışıyor--}}
            @else
                <p> There are no posts </p>
            @endif
        </div>
    </div>
    @endsection
