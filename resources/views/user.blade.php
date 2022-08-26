@include('header')
<h1>Hello User</h1>
@include('inner')

@foreach($users as $user)
<h4><?php echo $user ?></h4>
@endforeach

<script>
var data=['ss','vs','ds'];
console.warn(data)
    </script>

