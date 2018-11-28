
      
@include('inc.header')
<div class="container">
    <div class="row">
        <legend>Laravel Application</legend>
        <div class="row">
            <div class="col-md-6 col-lg-6">
            @if(session('info'))
            </div>
            <div class=" alert alert-danger">
              {{ session('info') }}  
            </div>
             @endif
        </div>
        <table class="table table-striped table-hover">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
              <tbody>
                @if(count($articles)>0)
                   @foreach($articles->all() as $article)

                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td>
                           <a href='{{ url("/read/{$article->id}") }}' class=" primary">Read </a>|
                           <a href='{{ url("/update/{$article->id}") }}' class="success">update </a>|
                           <a href='{{ url("/delete/{$article->id}") }}' class=" danger">Delete</a>
                        </td>
                    </tr>
                  @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@include('inc.footer')