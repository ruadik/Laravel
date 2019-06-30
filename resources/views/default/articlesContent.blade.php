<div class="jumbotron">
    <h2 class="blog-post-title">Sample "Articles" blade layouts</h2>
    <p class="blog-post-meta">April 03, 2019 by <a href="#">Ali</a></p>

<ul>
    @for($i=0; $i<count($dataI); $i++)
        <li>
            {{$dataI[$i]}}
        </li>
    @endfor
</ul>

<ul>
    @foreach($dataI as $k=>$value)
         <li>
             {{$k. " => " .$value}}
         </li>
    @endforeach
</ul>

</div>