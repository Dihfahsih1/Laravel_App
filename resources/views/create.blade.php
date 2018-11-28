      
@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
           <form action="{{ url('/insert') }}" method="post" class="form-horizontal">
           	{{ csrf_field() }}
            <fieldset>
                 <legend>Laravel Application</legend>
                          @if(count($errors)>0)
                             @foreach($errors -> all() as $error)
                               <div class=" alert alert-danger">
                                   {{ $error }}
                               </div>
                             @endforeach                         
                              @endif
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" class="form-control" placeholder=" type here title" name="title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  name="description" class="form-control" placeholder="type here description" ></textarea>
                            </div>
                            <div class="form-group">
                             <div class="col-lg-10 col-lg-offset-2"> 	
	                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
	                            
	                            <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
	                        </div>
	                       </div>     
             </fieldset>
           </form>  
        </div>
    </div>
</div>
@include('inc.footer')