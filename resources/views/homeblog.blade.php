@extends('layoutblog')
@section('content')
@foreach($blogs as $blog)
<center><img src="https://demo.themezy.com/system/resources/demo_themes/000/000/202//wp-content/uploads/sites/2/2013/10/salt-lake-74570_1280-720x340.jpg" alt=""></center>
<center><h6>{{$blog->blog_date}}</h6></center>
<center><h4>{{$blog->title}}</h4></center>
<center><h9>{{$blog->body}}</h9></center>
@endforeach
@endsection