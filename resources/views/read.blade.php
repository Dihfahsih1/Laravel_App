      
@include('inc.header')
<div class="container">
    <div class="row">
        <legend>Read Article</legend>
        <p class="container" >{{ $articles->title }}</p>
        <p >{{ $articles->description }}</p>
       
    </div>
</div>
@include('inc.footer')