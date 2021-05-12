@if( $users && $users->count() != 0)
    <div
        style="width: 100%; right: 0; min-height: 100px; background: gold;position:absolute;top: 60px;box-shadow:  0 10px 10px 0 rgba(0,0,0,0.05);overflow: scroll">
        <ul class="list-group">
            @forelse($users as $user)
                <li class="list-group-item">{{$user->name}} {{ucfirst($user->email)}}</li>
            @empty
                <p>No users</p>
            @endforelse
        </ul>
    </div>

@endif
