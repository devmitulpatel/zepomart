@foreach(get_teams() as $member)
    <div class="item">
        <div class="item-inner">
            <div class="card">
                <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="{{asset($member->image)}}" alt="{{$member->name}}" />
                    <h4 class="mb-1">{!! $member->name !!}</h4>
                    <div class="meta mb-2">{!! $member->position !!}</div>
                    <p class="mb-2">{!! $member->quot !!}</p>
                    <nav class="nav social mb-0">
                        @foreach($member->socials->take(\App\Models\TeamData::DefaultNoOfDisplay) as $links)
                            <a href="{{$links->pivot->link}}"><i class="{{$links->icon_class}}"></i></a>
                        @endforeach
                    </nav>
                    <!-- /.social -->
                </div>
                <!--/.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.item-inner -->
    </div>
@endforeach
