<html>
<head>
    <style>
        .page-item{
            display: inline;
            padding: 10px;
        }
    </style>
</head>
<body>
     <div>
         @foreach($data as $item)
             <li>
                 {{$item->name}}
             </li>
             @endforeach
     </div>
     <div>
         {{$data->links()}}
     </div>
</body>
</html>
