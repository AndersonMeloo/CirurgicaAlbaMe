













































<!-- < ?php

$telefoneWhatsapp = "(11) 91962-3472";
$emailPrincipal = "cirurgicaalbame@gmail.com";
$endereco = "São Paulo - SP";
$iconePerfil = "./imagens/imagens-icon/icon-perfil.svg";

?> -->

<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./imagens/logo.jpg" type="image/x-icon">
</head> -->


    <!-- <section class="login-cadastro">
        <div class="relative flex justify-center items-center h-[600px] w-[350px] border-4 border-black rounded-2xl bg-gray-50 shadow-lg"> -->
            <!-- Topo do celular -->
            <!-- <div class="absolute top-2 left-1/2 transform -translate-x-1/2 bg-black w-16 h-2 rounded-full"></div> -->

            <!-- Corpo do celular -->
            <!-- <div class="relative flex justify-center flex-col p-4 w-full"> -->
                <!-- Formulário -->
                <!-- action="login-cadastro.php" -->

                <!-- action="api.php - PEGANDO O ARQUIVO API NO FORMULARIO - FORM -->
                <!-- <form class="form w-full" method="POST" action="api.php"> -->
                    <!-- Email -->
                    <!-- <div class="flex-column mb-4">
                        <label for="email" class="block mb-2 text-sm font-semibold">Email</label>
                        <div class="inputForm flex items-center p-2 border border-gray-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                <g data-name="Layer 3" id="Layer_3">
                                    <path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path>
                                </g>
                            </svg>
                            <input id="email" placeholder="Email" class="input ml-2 p-2 w-full text-sm" type="text" name="email" required>
                        </div>
                    </div> -->

                    <!-- Senha -->
                    <!-- <div class="flex-column mb-4">
                        <label for="password" class="block mb-2 text-sm font-semibold">Password</label>
                        <div class="inputForm flex items-center p-2 border border-gray-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-64 0 512 512">
                                <path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path>
                                <path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path>
                            </svg>
                            <input id="password" placeholder="Senha" class="input ml-2 p-2 w-full text-sm" type="password" name="senha" >
                        </div>
                    </div> -->

                    <!-- Lembre de mim -->
                    <!-- <div class="flex-row justify-between mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <label class="text-sm">Lembrar-me</label>
                        </div>
                        <span class="text-sm text-blue-600 cursor-pointer">?</span>
                    </div> -->

                    <!-- Botão de login -->
                    <!-- <button type="submit" class="button-submit w-full p-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Entrar</button>
                    <p class="p text-center mt-4 text-sm">Não tem uma conta? <span class="span text-blue-600 cursor-pointer">Inscrever-se</span></p>
                    <p class="p text-center mt-2 text-sm text-gray-500">Ou com</p> -->

                    <!-- Botões sociais -->
                    <!-- <div class="flex justify-between mt-4">
                        <button class="btn google p-2 text-black rounded-md flex items-center justify-center w-full mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                                <path d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456C103.821,274.792,107.225,292.797,113.47,309.408z" style="fill:#FBBB00;"></path>
                                <path d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z" style="fill:#518EF8;"></path>
                                <path d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z" style="fill:#28B446;"></path>
                                <path d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0C318.115,0,375.068,22.126,419.404,58.936z" style="fill:#F14336;"></path>
                            </svg>
                            Google
                        </button> -->
                        <!-- <button class="btn apple p-2 bg-black text-white rounded-md flex items-center justify-center w-full ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22.773 22.773">
                                <g>
                                    <path d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573 c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z"></path>
                                    <path d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334 c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.6,0.905-3.532,1.905c-0.853,1.029-1.3,2.486-2.264,3.262c-1.472,1.139-3.129,1.303-4.687,1.282c-1.438,0.014-2.677-0.132-3.745-0.794c-1.039-0.651-1.707-1.637-2.401-2.525c-1.013-1.302-1.495-2.86-1.664-4.435 c-0.134-0.949-0.056-1.971,0.195-2.852c0.206-0.563,0.536-1.073,0.933-1.563c1.152-1.456,2.354-2.775,4.289-2.765c1.177,0.007,2.539,0.586,3.65,0.593c1.133,0.007,2.404-0.631,3.351-1.365c1.396-0.97,2.022-2.456,2.577-4.022c0.464-1.552,0.643-3.264-0.376-4.62 c-0.486-0.697-1.176-1.183-1.937-1.623c0.024-0.36,0.048-0.725,0.072-1.085c0.048-0.672,0.102-1.34,0.152-2.008 c0.024-0.494-0.363-1.091-0.88-1.084h-0.056c-0.721,0.009-1.498,0.426-2.171,0.902c-0.728,0.489-1.402,1.013-2.185,1.181c0.072,0.439,0.006,0.873-0.166,1.268c-0.418,1.128-1.593,1.53-2.447,1.357c-0.716-0.142-1.283-0.529-1.697-1.033c-0.578-0.739-1.161-1.423-1.814-2.034 c-0.348-0.357-0.775-0.661-1.255-0.833c-0.204-0.087-0.439-0.139-0.686-0.131c-1.073,0.025-2.222,0.352-3.082,1.148 c-0.42,0.324-0.848,0.701-1.255,1.098c-0.522,0.657-0.985,1.412-1.442,2.16c-1.155,2.043-0.273,5.755,2.444,6.297 c2.627,0.509,4.015-2.442,5.224-4.156c0.244-0.353,0.553-0.661,0.874-0.925c0.703-0.521,1.493-0.836,2.338-1.141 C20.321,14.173,20.496,15.563,20.67,16.716z"></path>
                                </g>
                            </svg>
                            Apple
                        </button> -->
                    <!-- </div>
                </form>
            </div>
        </div>
    </section>


    < php include_once("rodape.php"); ?>

    </body>

</html> -->