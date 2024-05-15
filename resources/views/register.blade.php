<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <div class="w-1/2 mx-auto">
        <form class="space-y-4 md:space-y-6" action="/save_register" method="POST"> 

            @csrf
            <div>
                <label for="nom"
                    class="block mb-2 text-sm font-medium text-gray-900 ">nom</label>
                <input type="text" name="nom" id="nom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="">
            </div>
            <div>
                <label for="prenom"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Prenom</label>
                <input type="text" name="prenom" id="prenom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="">
            </div>
           
            <div>
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 "> email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="">
            </div>
            {{-- <div>
                <label for="num_permis"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Num Permis</label>
                <input type="text" name="num_permis" id="num_permis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                    placeholder="" required="">
            </div> --}}
            
            <div>
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••"
                    class=" bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    required="">
            </div>
         
        
            <button type="submit" id=""
                class=" flex justify-center items-center gap-5 text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
               
                Login
            </button>
       
          
            
            
        </form>
    </div>
</body>
</html>