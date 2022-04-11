@yield("footer")
<div class="flex flex-col min-h-screen">
        <footer class="bg-blue-500 text-white mt-auto p-10 ">
            <div class="grid grid-cols-3 items-center text-lg">
                <div class="col-span-2">
                 <a class="mr-5" href="">Nosotros</a>
                 <a class="mr-5" href="">Terminos y condiciones de privacidad</a>
                </div>
                
                <div class="flex items-center">
                     <p>Derechos reservados 2022</p>
                     <img class="h-12 w-20" src="{{url('image/logo.png')}}"/>
                </div>
               
            </div>
        </footer>
    </div>

