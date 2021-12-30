@foreach(get_client_feedbacks() as $feedback)
    <div class="item">
        <blockquote class="icon fs-lg">
            <p>“{!! $feedback->message !!}”</p>
            <div class="blockquote-details">
                <div class="info ps-0">
                    <h5 class="mb-1">{{$feedback->name}}</h5>
                    <p class="mb-0">{{$feedback->post}}</p>
                </div>
            </div>
        </blockquote>
    </div>
@endforeach
