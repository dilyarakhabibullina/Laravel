<h2>Это админский Newslist</h2></br>

@forelse($newsList as $news)
    <div>
<h4>
    <a href="{{route('admin.showOneNew', ['id'=> $news['id']])}}">
{{$news['title']}}</a>
</h4>
{{$news['text']}}

</div>
@empty
А нет новостей...
@endforelse





    

