<div style="margin-top: 200px">
    @if( $users && $users->count() != 0)
        <div>
            <ul class="list-group">
                @forelse($users as $user)
                    <li class="list-group-item">{{$user->name}} <strong>{{ucfirst($user->email)}}</strong></li>
                @empty
                    <p>No users</p>
                @endforelse
            </ul>
        </div>

    @endif
</div>
