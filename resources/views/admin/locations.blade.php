<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locations</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


        @include('admin.sidebar')

 
   
    <div class="relative mx-auto w-4/5 my-4 overflow-x-auto mt-20"> 
        <h1 class="text-gray-800 font-bold text-2xl underline mb-5">{{$locations->count()}} Location:</h1>
        {{-- <a href="/ajouter" class="bg-blue-700 hover:bg-blue-500 text-white mb-10 font-medium rounded-lg px-3 py-2">Ajouter</a> --}}
          @if(session('success'))
          <script>
            alert(`${{{session('success')}}}`)
          </script>
@endif
        <table class="w-full text-sm text-left rtl:text-right mt-5 text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Voiture Immatriculation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Client
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Debut
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Fin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                <tr class="bg-white border-b  ">
                        
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{$location->voiture->immatriculation}}
                    </th>
                    <td class="px-6 py-4">
                        {{$location->client->prenom}}
                    </td>
                    <td class="px-6 py-4">
                        {{$location->date_debut_location}}
                    </td>
                    <td class="px-6 py-4">
                        {{$location->date_fin_location ? $location->date_fin_location : "Inlimite"}}
                    </td>
                    <td class="px-6 py-4 flex justify-center items-center gap-3">
                        <a href="/editVoiture/{{$location->id}}"><i class="fa-solid fa-pen-to-square text-blue-600"></i></a>
                        <form method="POST" class="m-0" action="/deleteLocation/{{$location->id}}">
                            @csrf
                            {{method_field("DELETE")}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="font-medium text-red-600 hover:text-red-500  hover:underline"><i class="fa-solid fa-trash"></i></button>

                        </form>
                    </td>
                </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>
    
</body>
</html>