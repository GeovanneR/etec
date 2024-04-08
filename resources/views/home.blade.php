<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body>
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
                            <a href="{{ url('/aboutus')}}" class="text-gray-600 hover:text-black mx-10">Sobre</a>
                            <a href="{{ url('/news')}}" class="text-gray-600 hover:text-black">Noticias</a>
                            <a href="{{ url('/contact')}}" class="text-gray-600 hover:text-black mx-10">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
    </nav>


    <div class="relative h-screen mb-10">
        <!-- Imagem de fundo -->
        <img src="{{ asset('assets/etec6.jpg')}}" alt="Imagem de Fundo" class="absolute inset-0 object-cover w-full h-full" style="height: 630px;">

        <div class="absolute inset-0 bg-black opacity-50" style="height: 630px;"></div>

        <!-- Conteúdo sobreposto -->
        <div class="absolute inset-0 flex flex-col justify-center text-white text-center md:text-left md:mb-40 md:ml-20 lg:ml-80">
            <p class="text-lg text-gray-400 font-bold">ETEC ZONA LESTE</p>
            <h1 class="text-3xl font-bold mb-4 mt-3 md:mr-80 text-justify">Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</h1>
            <button class="bg-red-700 text-white font-bold py-2 px-4 rounded-full mt-2 w-full md:w-80"><a href="{{ url('aboutus')}}">CONHEÇA NOSSA HISTORIA</a></button>
        </div>
    </div>







    <div class="container mx-auto px-4 mt-10 text-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-20">
                <div class="p-4 lg:ml-6 lg:text-left">
                    <h1 class="text-3xl font-bold mb-6">Descubra um futuro brilhante na ETEC Zona Leste</h1>
                    <p class="text-lg text-justify">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                </div>
                <div class="p-4 lg:mr-6">
                    <img src="{{ asset('assets/home1.webp') }}" alt="Imagem" class="mx-auto lg:ml-8 lg:mx-0 w-full lg:w-85 h-80 rounded-lg">
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-20">
                <div class="p-4 lg:ml-6 lg:text-left">
                    <h1 class="text-3xl font-bold mb-6">Aprendizados para além da sala de aula</h1>
                    <p class="text-lg text-justify">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                </div>
                <div class="p-4 lg:mr-6">
                    <img src="{{ asset('assets/home2.webp') }}" alt="Imagem" class="mx-auto lg:ml-10 lg:mx-0 w-full lg:w-85 h-80 rounded-lg">
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-20">
                <div class="p-4 lg:ml-6 lg:text-left">
                    <h1 class="text-3xl font-bold mb-6">Infraestrutura Moderna</h1>
                    <p class="text-lg text-justify">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                </div>
                <div class="p-4 lg:mr-6">
                    <img src="{{ asset('assets/home3.webp') }}" alt="Imagem" class="mx-auto lg:ml-10 lg:mx-0 w-full lg:w-85 h-80 rounded-lg">
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
