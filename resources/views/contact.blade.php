<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<nav class="bg-gray-200 mb-10">
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

    <div class="flex justify-center items-center  mb-20 mx-10">
    <div class="w-700px h-300px bg-gray-200 rounded-lg shadow-md">

        <form style="padding: 20px;">
        <h1 class="text-3xl font-bold mb-6 text-center">Entre em Contato</h1>
            <div class="mb-4">
                <label for="nome" class="block text-sm font-semibold mb-2">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Seu Nome" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Seu Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="telefone" class="block text-sm font-semibold mb-2">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Seu Telefone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="assunto" class="block text-sm font-semibold mb-2">Assunto</label>
                <input type="text" id="assunto" name="assunto" placeholder="Assunto da Mensagem" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="mensagem" class="block text-sm font-semibold mb-2">Mensagem</label>
                <textarea id="mensagem" name="mensagem" placeholder="Sua Mensagem" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
            </div>

            <div class=" mt-10">
                <button type="submit" class="w-full  bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600" style="background: blue; padding: 10px;">Enviar</button>
            </div>
        </form>
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
