<p align="center"><img src="https://shieldforce.com.br/logo.png"></p>

<p align="center">
    Shieldforce Soluções Online
</p>

## Instalação do Repositório Padrão de Projetos Shieldforce

Esse repositório foi construído para ajudar a equipe de desenvolvimento shieldforce, Aqui estão as instruções de Instalação:

- Abra seu GitBash ou similar na pasta aonde deseja clonar o repositório.
- Digite o seguinte comando no GitBash : [git clone https://github.com/Shieldforce/base-shieldforce.git] .
- Assin que o repositório terminar de baixar dê o próximo comando: [composer update].
- Depois Copie o arquivo .env.example e renomeie para .env.
- Configure seu arquivo .env com os dados do seu host.
- Gerar a Key com o comando [php artisan key:generate].
- Logo após dê o comando no GitBash : [php artisan migrate].
- E então o comando : [php artisan db:seed].
- Então Crie o Virtual Host.
- Acesso padrão user: admin@shieldforce e pass: admin e mãos a obra.

Pronto o pacote já pode ser usuado.

## Agradecimentos

Abrigado a Equipe por colaborarem para o crescimento da empresa.

## Licença

Lisença:  [MIT license](https://opensource.org/licenses/MIT).
