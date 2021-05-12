<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" style="width: 100%;" id="navbarSupportedContent">
            <form class="d-flex" style="width: 700px;position: relative">
                <input class="form-control searchInput me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <span class="search-box">
                </span>
            </form>
        </div>
    </div>
</nav>
<div>
    <div>
        <select name="name" id="select_price">
            @foreach($teams as  $team)
            <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>
    </div>
   <div >
       @if( $users && $users->count() != 0)
           <div class="price_place">
               <ul class="list-group">
                   @forelse($users as $user)
                       <li class="list-group-item">{{$user->name}} {{ucfirst($user->email)}}</li>
                   @empty
                       <p>No users</p>
                   @endforelse
               </ul>
           </div>

       @endif
   </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
<script>
    let searchInput = document.querySelector('.searchInput');
    let searchBox = document.querySelector('.search-box');


    searchInput.addEventListener('keyup', function (e) {
        let query = e.target.value;
            fetch(`/search/partial?query=${query}`).
            then(res => res.text()).
            then(html=>{
                searchBox.innerHTML = html;
            })
    });

    let selectBox = document.querySelector('#select_price');

    selectBox.addEventListener('change',function (e){
        fetch(`partisal/price/${e.target.value}`).
        then(res => res.text()).
        then(html=>{
            document.querySelector('.price_place').innerHTML = html;
        })
    });

</script>
</body>
</html>
