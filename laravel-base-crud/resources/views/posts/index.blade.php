@extends('app')

    {{-- @section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
    <h2> {{ $post->title }} </h2>
    <h3> {{ $post->body }} </h3>
    @endforeach --}}
    @section('content')
    <h1>Posts per l'admin</h1>
    <a href=" {{route('posts.create')}} " class="btn bg-dark text-white">Crea un nuovo Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Upgrated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <th>
                        <a href=" {{route('posts.show', ['post'=> $post->id] )}} " class="btn btn-primary">
                            <i class="fas fa-eye fa-lg fa-fw"></i> View
                        </a>

                        <a href=" {{route('posts.edit', ['post'=> $post->id] )}} " class="btn btn-warning">
                            <i class="fas fa-pen fa-lg fa-fw"></i> Edit
                        </a>

                        
                        <form action="{{route('posts.destroy', ['post'=> $post->id] )}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash fa-lg fa-fw"></i> 
                                Delete
                            </button>
                        </form>

                        {{-- <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"> Remove Post {{$post->title}} </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler cancellare {{$post->title}} ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{route('posts.destroy', ['post'=> $post->id] )}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn ">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

    @endsection