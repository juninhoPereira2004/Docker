entre na pasta crud_jogo    

        Clonagem do Projeto

Primeiramente, você deverá efetuar a clonagem do projeto em sua máquina pessoal. Esse procedimento é realizado através do uso do Git. Abra o terminal e navegue até o diretório onde deseja armazenar o projeto. Em seguida, execute o seguinte comando para efetuar a clonagem do repositório:


"git clone <URL-do-Repositório>"
Certifique-se de substituir <URL-do-Repositório> pela URL correta do repositório do projeto.

instalar as dependencias com composer install

mudar o nome do arquivo .env.example para .env

        Passo 2: Inicialização dos Contêineres Docker

Agora que o projeto foi clonado com sucesso, é hora de dar início aos contêineres Docker necessários. Certifique-se de que o Docker esteja devidamente instalado em seu sistema. No terminal, navegue até o diretório principal do projeto, onde você encontrará o arquivo docker-compose.yml. Em seguida, execute o seguinte comando:

"docker-compose up -d"
Isso irá iniciar os contêineres em segundo plano, permitindo que o ambiente de desenvolvimento seja configurado adequadamente.

execute dentro do terminal do container "php artisa key:generate", "php artisan migrate"

        Passo 3: Execução das Migrações do Banco de Dados

agora que o container esta em execução, use este comando para entrar no terminal do container "docker exec -it id_container bash"
Dentro do ambiente do contêiner, execute o comando a seguir para aplicar todas as migrações pendentes e realizar a configuração adequada do banco de dados:"php artisan migrate"


Com esse processo finalizado, o projeto estará totalmente configurado e funcionando em sua máquina local, pronto para ser utilizado. Certifique-se de seguir essas etapas com atenção para garantir uma configuração bem-sucedida.
