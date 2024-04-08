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
                        <a href="{{ url('/aboutus')}}" class="text-gray-600 hover:text-black mx-10">Sobre</a>
                        <a href="{{ url('/news')}}" class="text-gray-600 hover:text-black">Noticias</a>
                        <a href="{{ url('/contact')}}" class="text-gray-600 hover:text-black mx-10">Contato</a>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex justify-center mt-5 ">
    <div class="text-justify ">
        <h1 class="text-4xl font-bold mb-4 text-center lg:text-4xl md:text-4xl sm:text-3lg mx-10">ETEC Zona Leste</h1>
        <div class="mx-5 lg:mx-40 md:mx-30 sm:mx-20 text-base lg:text-lg">
        <p class="mb-4 text-gray-400">Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.</p>
        <p class="mb-4 text-gray-400">Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.</p>
        <p class="mb-4 text-gray-400">Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.</p>
        <p class="mb-4 text-gray-400">Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>
    </div>
    </div>
</div>


    <div class="flex flex-col items-center justify-center mt-5">
        <h1 class="text-4xl mt-5 font-bold ">Nossos Cursos</h1>
    </div>


<div class="flex justify-center items-center mb-40 mt-10">
  <div class="grid  gap-7 lg:grid-cols-3 sm:grid-cols-1">
    <div class="max-w-sm rounded overflow-hidden shadow-xl bg-gray-100 " style="">
      <img class="w-full h-auto  rounded-xl" src="{{ asset('assets/ds2.jpg')}}" alt="Imagem do Card" style="padding: 20px; border-radius: 25px; ">
      <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">Novotec Desenvolvimento de Sistemas AMS</div>
        <p class="text-gray-700 text-base">
          É o profissional que analisa e projeta sistemas. Constrói, documenta, realiza…
        </p>
      </div>
    </div>

    <div class="max-w-sm rounded overflow-hidden shadow-xl bg-gray-100">
    <img class="w-full h-50  rounded-xl" src="{{ asset('assets/cont.webp')}}" alt="Imagem do Card"style="padding: 20px; border-radius: 25px;">
    <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">Contabilidade</div>
        <p class="text-gray-700 text-base">
          Matemática e língua portuguesa são disciplinas importantes para entender a co…
        </p>
      </div>
    </div>

    <div class="max-w-sm rounded overflow-hidden shadow-xl bg-gray-100">
    <img class="w-full h-50  rounded-xl" src="{{ asset('assets/log.webp')}}" alt="Imagem do Card"style="padding: 20px; border-radius: 25px;">
      <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">Logística</div>
        <p class="text-gray-700 text-base">
          Logística é o planejamento do caminho feito por um produto ou serviço até che…
        </p>
      </div>
    </div>

    <div class="max-w-sm rounded overflow-hidden shadow-xl bg-gray-100">
    <img class="w-full h-50  rounded-xl" src="{{ asset('assets/rh.webp')}}" alt="Imagem do Card" style="padding: 20px; border-radius: 25px;">
      <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">Recursos Humanos</div>
        <p class="text-gray-700 text-base">
          O estudante vai precisar de conhecimentos de língua portuguesa, matemática e …
        </p>
      </div>
    </div>

    <div class="max-w-sm rounded overflow-hidden shadow-xl bg-gray-100">
    <img class="w-full h-50 rounded-xl" src="{{ asset('assets/sj.webp')}}" alt="Imagem do Card" style="padding: 20px; border-radius: 25px;">
      <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">Serviços Juridicos</div>
        <p class="text-gray-700 text-base">
          Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do …
        </p>
      </div>
    </div>

    <div class="max-w-sm rounded overflow-hidden shadow-xl bg-gray-100">
    <img class="w-full h-50  rounded-xl" src="{{ asset('assets/adm.webp')}}" alt="Imagem do Card" style="padding: 20px; border-radius: 25px;">

      <div class="px-8 py-6">
        <div class="font-bold text-xl mb-2">Administração</div>
        <p class="text-gray-700 text-base">
          Como funcionam as organizações, desde empresas privadas até ONGs, passando po…
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
