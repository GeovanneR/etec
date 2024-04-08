<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="">
<nav class="bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-10 lg:px-40">
            <div class="relative flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center pt-1">
                    <img class="h-10 w-100" src="{{ asset('assets/eteczl.webp')}}" alt="Logo">
                </div>

                <!-- Links da Navbar -->
                <div class="hidden md:block ">
                    <div class="ml-40 flex items-baseline space-x-20">
                        <a href="{{ url('/')}}" class="text-gray-600 hover:text-black">Início</a>
                        <a href="{{ url('aboutus')}}" class="text-gray-600 hover:text-black mx-10">Sobre</a>
                        <a href="{{ url('news')}}" class="text-gray-600 hover:text-black">Noticias</a>
                        <a href="{{ url('contact')}}" class="text-gray-600 hover:text-black mx-10">Contato</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl text-gray-900  font-bold mb-6 mt-5">Noticias</h1>
    </div>





<div class="flex justify-center items-center mb-20 mt-10">
  <div class="grid gap-4 lg:grid-cols-1 sm:grid-cols-1">
    <div class="max-w-sm rounded overflow-hidden shadow-lg rounded-lg bg-gray-100">
      <img class="w-full h-50  rounded-xl" src="{{asset('assets/professora_ams.webp')}}" alt="Imagem do Card" style="padding: 20px; border-radius: 25px;">
      <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">PSS Processo Seletivo</div>
        <p class="text-gray-700 text-base">
          Processo Seletivo Simplificado para Professor de Ensino Médio e Técnico
        </p>
      </div>
    </div>
  </div>
</div>



<footer class="bg-gray-200 py-4 h-150">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-3 gap-4 items-center justify-center sm:h-50 md:h-50 lg:h-50 lg:mt-6a ">
        <div class="flex items-center justify-center lg:ml-40 sm:justify-start">
            <img src="{{ asset('assets/eteczl.webp')}}" alt="Logo da Etec Zona Leste" class="h-20">
        </div>
        <div class="text-center sm:text-left ">
            <p class="text-center text-gray-800 text-sm">© 2024 Etec Zona Leste. Todos os direitos reservados.</p>

        </div>
        <div class="flex justify-center sm:justify-end">
            <!-- Aqui você pode adicionar os ícones das redes sociais -->
            <!-- Por exemplo, use font-awesome ou outras bibliotecas de ícones -->
            <!-- <i class="fab fa-facebook-f"></i> -->
            <!-- <i class="fab fa-twitter"></i> -->
            <!-- <i class="fab fa-instagram"></i> -->

        </div>

    </div>
    <div class="flex items-center justify-center lg:mb-6"><p class="text-black-light font-bold"></p></div>
</footer>
</body>
</html>
