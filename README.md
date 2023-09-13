entre na pasta crud_jogo    

        Clonagem do Projeto

Primeiramente, você deverá efetuar a clonagem do projeto em sua máquina pessoal. Esse procedimento é realizado através do uso do Git. Abra o terminal e navegue até o diretório onde deseja armazenar o projeto. Em seguida, execute o seguinte comando para efetuar a clonagem do repositório:


"git clone <URL-do-Repositório>"
Certifique-se de substituir <URL-do-Repositório> pela URL correta do repositório do projeto.

        Passo 2: Inicialização dos Contêineres Docker

Agora que o projeto foi clonado com sucesso, é hora de dar início aos contêineres Docker necessários. Certifique-se de que o Docker esteja devidamente instalado em seu sistema. No terminal, navegue até o diretório principal do projeto, onde você encontrará o arquivo docker-compose.yml. Em seguida, execute o seguinte comando:

"docker-compose up -d"
Isso irá iniciar os contêineres em segundo plano, permitindo que o ambiente de desenvolvimento seja configurado adequadamente.

        Passo 3: Execução das Migrações do Banco de Dados

Agora que os contêineres estão em execução, é crucial configurar o banco de dados de acordo com as necessidades do projeto. Para isso, acesse o terminal do contêiner denominado app-1. Isso pode ser feito através do seguinte comando:

"docker exec -it app-1 bash"
Dentro do ambiente do contêiner app-1, execute o comando a seguir para aplicar todas as migrações pendentes e realizar a configuração adequada do banco de dados:

"php artisan migrate"
Com esse processo finalizado, o projeto estará totalmente configurado e funcionando em sua máquina local, pronto para ser utilizado. Certifique-se de seguir essas etapas com atenção para garantir uma configuração bem-sucedida.


vai aparecer uma tela de erro ai vc coloca /jogos 
que vai entrar na tela certa