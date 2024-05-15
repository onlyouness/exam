<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    @include('admin.sidebar')
    <div class="w-1/2 mx-auto mt-20">
        <h1 class="text-gray-800 text-2xl ">Edit Voiture: </h1>
        <form class="space-y-4 md:space-y-6" action="/save_edit/{{$voiture->id}}" method="POST"> 

            @csrf
            @method("PUT")
            <div>
                <label for="immatriculation"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Immatriculation:</label>
                <input type="text" name="immatriculation" id="immatriculation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="" value="{{$voiture->immatriculation}}">
            </div>
            <div>
                <label for="num_assurance"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Num Assurance:</label>
                <input type="text" name="num_assurance" id="num_assurance"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="" value="{{$voiture->num_assurance}}">
            </div>
            <div>
                <label for="kilometrage"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Kilometrage:</label>
                <input type="text" name="kilometrage" id="kilometrage"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="" value="{{$voiture->kilometrage}}">
            </div>
         
        
            <button type="submit" id=""
                class=" flex justify-center items-center gap-5 text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
               
                Ajouter
            </button>
       
          
            
            
        </form>
    </div>
</body>
</html>