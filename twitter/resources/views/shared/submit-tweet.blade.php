<h4 style=" font-weight: bold; font-size: 2.25rem;"> Share your tweets </h4>
<div class="row">

    <form action="{{route('tweet.create')}}" method="post">
        @csrf 
    <div class="mb-3">
        <textarea name='content' class="form-control" id="content" rows="3"></textarea>
        @error('tweet')
           <span class="d-block mt-2 fs-6 text-danger">{{$message}}</span>
            
        @enderror
 
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark" style="background-color: #1DA1F2; border-color: #1DA1F2;"> Post </button>
    </div>
</form>
</div>