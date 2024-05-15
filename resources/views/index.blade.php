<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @if(session('success'))
    <script>
      alert(`${{{session('success')}}}`)
    </script>
@endif
    @include('admin.sidebar')
    
    <div class="w-4/5 mx-auto mt-20">
        <h1 class="text-gray-800 font-bold text-2xl underline mb-5">Voiture:</h1>
     
   
   
           <div class="grid grid-cols-3 gap-2">
               @foreach ($voitures as $voiture)
           
                   <div class="px-4 py-5 bg-gray-100">
                       <h1>
                           <span class="text-gray-800 font-bold">
                               Matriculation
   
                           </span>
                           <span class="text-gray-600">
   
                               {{ $voiture->immatriculation }}
                           </span>
                       </h1>
                       <p>
                           <span class="text-gray-800 font-bold">
                               Kilometrage:
                           </span>
                           <span class="text-gray-600">
   
                               {{ $voiture->kilometrage }}Km
                           </span>
   
                       </p>
                       <form method="get" action="/show_voiture/{{$voiture->id}}" method="get">
                           <button class="w-full mt-5 bg-blue-500 text-white px-3 py-2 rounded-lg">Details</button>

                       </form>
                   </div>
               @endforeach
           </div>
           <section style="justify-content: end; gap:12px ;margin-top:20px" class=" flex my-10 mr-4">
            <div>
                <p class="text-gray-400 mr-6">
                    Items {{ $voitures->firstItem() }} - {{ $voitures->lastItem() }} of {{ $voitures->total() }} |
    
                    Page {{$voitures->currentPage()}} of {{$voitures->lastPage()}}
                </p>
            </div>
            <div>
                @if ($voitures->onFirstPage())
                <span class="text-gray-300">No Previous Page</span>    
                    
                @else
                <a class="text-gray-500" href="{{$voitures->previousPageUrl()}}">Previous</a> 
                    
                @endif
            </div>
    
            <div>
                @if ($voitures->hasMorePages())
                    <a class="text-gray-500" href="{{$voitures->nextPageUrl()}}">Next></a>    
                @else
                    <span class="text-gray-300">No Next Page</span>    
                @endif
            </div>
            
        </section>
    
   
    
   
       </div>
</body>
</html>