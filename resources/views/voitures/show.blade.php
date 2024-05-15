<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voiture</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

</head>
<body>
    @if(session('success'))
    <script>
      alert(`${{{session('success')}}}`)
    </script>
@endif
    <div class="w-4/5 mx-auto my-4 flex gap-5 flex-col">
        <a href="/" class="hover:text-gray-400 font-semibold text-gray-600"><i class="fa-solid fa-chevron-left"></i> Home</a>
        <h1 class="text-gray-800 font-bold text-2xl underline mb-2">Voiture Information:</h1>
        <div class="flex gap-4 justify-start items-center">

            <span class="text-gray-800 text-xl font-medium"> Voiture Matriculation :</span>
            <span class="text-gray-600 text-lg font-normal"> {{$voiture->immatriculation}}</span>
        </div>
        <div class="flex gap-4 justify-start items-center">

            <span class="text-gray-800 text-xl font-medium"> Num Assurance Voiture:</span>
            <span class="text-gray-600 text-lg font-normal"> {{$voiture->num_assurance}}</span>
        </div>
        <div class="flex gap-4 justify-start items-center">

            <span class="text-gray-800 text-xl font-medium"> Voiture Kilometrage :</span>
            <span class="text-gray-600 text-lg font-normal"> {{$voiture->kilometrage}}Km</span>
        </div>
        <span class="text-gray-800 text-xl font-medium"> Entrer La Date: </span>
        <div class="flex gap-4 justify-start items-start flex-col">

            <div class="">
                <form action="/save_loyer/{{$voiture->id}}" method="post">
                    @csrf
                <section class="flex flex-col gap-4" >
                    <aside class="flex justify-start items-center gap-4">
                    <span class="w-full">Date Debut</span>
                    <div class="relative h-10 w-full min-w-[200px]">
                        <input
                          id="date-picker"
                          class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                          placeholder=" "
                          name="date_debut"
                        />
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                          Select a Date
                        </label>
                    </div>
                    </aside>
     
               
                    <aside class="flex justify-start items-center gap-4">
                    <span class="w-full">Date Fin <span class="text-red-300 font-normal text-sm">*Optional</span></span>
                    <div class="relative h-10 w-full min-w-[200px]">
                        <input
                        name="date_fin"
                          id="date-picker"
                          class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                          placeholder=" "
                        />
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                          Select a Date
                        </label>
                    </div>
                    </aside>
     
                </section>
                <button class="bg-blue-700 hover:bg-blue-500 text-white w-36 mt-5 mb-10 font-medium rounded-lg px-3 py-2" type="submit">Loyer</button>
            </form>
                {{-- date --}}
            </div>
                
 

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  const datepicker = flatpickr("#date-picker", {});
 
  // styling the date picker
  const calendarContainer = datepicker.calendarContainer;
  const calendarMonthNav = datepicker.monthNav;
  const calendarNextMonthNav = datepicker.nextMonthNav;
  const calendarPrevMonthNav = datepicker.prevMonthNav;
  const calendarDaysContainer = datepicker.daysContainer;
 
  calendarContainer.className = `${calendarContainer.className} bg-white p-4 border border-blue-gray-50 rounded-lg shadow-lg shadow-blue-gray-500/10 font-sans text-sm font-normal text-blue-gray-500 focus:outline-none break-words whitespace-normal`;
 
  calendarMonthNav.className = `${calendarMonthNav.className} flex items-center justify-between mb-4 [&>div.flatpickr-month]:-translate-y-3`;
 
  calendarNextMonthNav.className = `${calendarNextMonthNav.className} absolute !top-2.5 !right-1.5 h-6 w-6 bg-transparent hover:bg-blue-gray-50 !p-1 rounded-md transition-colors duration-300`;
 
  calendarPrevMonthNav.className = `${calendarPrevMonthNav.className} absolute !top-2.5 !left-1.5 h-6 w-6 bg-transparent hover:bg-blue-gray-50 !p-1 rounded-md transition-colors duration-300`;
 
  calendarDaysContainer.className = `${calendarDaysContainer.className} [&_span.flatpickr-day]:!rounded-md [&_span.flatpickr-day.selected]:!bg-gray-900 [&_span.flatpickr-day.selected]:!border-gray-900`;
</script>
                {{-- date --}}
                

  
  
           
        </div>
     

        
    </div>
</body>
</html>