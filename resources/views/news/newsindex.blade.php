
<h2>Это общий Newslist</h2></br>

@dump($newsList)
@forelse($newsList as $news)

    <div>
<h4>
    
<hr>
  <!-- <a href="{{route('showOneNew', ['id'=> $news['id']])}}"> -->
{{$news['title']}}
<!-- </a> -->
</h4>
<p>
 
  

    @if (!$news['isPrivate'])
      <a href="{{ route('showOneNew', ['id'=> $news['id']]) }}">
    Здесь поподробнее о новости</a></div>
   @endif

</p>
</div>
@empty
А нет новостей...
@endforelse





    

