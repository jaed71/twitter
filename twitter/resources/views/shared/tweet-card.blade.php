<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>

            <div>
                <form method="POST" action="{{ route('tweet.destroy', $tweet->id) }}">
                    @csrf
                    @method('delete')
                    <a class="mx-2" href="{{ route('tweet.edit', $tweet->id) }}">Edit</a>
                    <a href="{{ route('tweet.show', $tweet->id) }}">View</a>
                    <button class="ms-1 btn btn-danger btn-sm">X</button>

                </form>



            </div>
        </div>

    </div>


    <div class="card-body">


        @if ($editing ?? false)
            <form action="{{ route('tweet.update', $tweet->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea name='content' class="form-control" id="content" rows="3">{{ $tweet->content }}</textarea>
                    @error('content')
                        <span class="d-block mt-2 fs-6 text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2"> Post </button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{ $tweet->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $tweet->likes }} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $tweet->created_at }} </span>
            </div>
        </div>
        @include('shared.comments-box')
    </div>

</div>
