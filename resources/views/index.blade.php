<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <div class="w-4/5 mx-auto mt-4">
   
   
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
   
                               {{ $voiture->kilometrage }}
                           </span>
   
                       </p>
                       <form method="get" action=">show_voiture/{{$voiture->id}}" method="get">
                           <button class="w-full mt-5 bg-blue-500 text-white px-3 py-2 rounded-lg">Loyer</button>

                       </form>
                   </div>
               @endforeach
           </div>
   
       </div>
</body>
</html>