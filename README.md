# Estrutura básica do padrão MVC em PHP.

*Criado por Adalberto Rodrigues Teixeira

adalbertoart@gmail.com

Como Usar:
1. config.php: 
  - Configure as variáveis '$config' com os dados de sua base de dados;
  - Mude o valor da BASE_URL para a url do seu projeto;
  - Se ENVIRONMENT for 'development', configure os dados conforme seu servidor local;
  - Se ENVIRONMENT for 'production', configure os dados conforme seu servidor de hospedagem externo;
2. environment.php:
  - Se estiver desenvolvendo em localhost, manter ativo o ENVIRONMENT => 'development';
  - Se estiver publicando em servidor externo (online), manter ativo o ENVIRONMENT => 'production';
  - Manter apenas 1 deles ativo, comentando o que nao estiver em uso.
3. models:
  - Colocar as classes na pasta models;
  - Toda classe herda de model (Ex. class Usuario extends model {});
4. controllers:
  - Todos os controllers devem ter uma função index e herdar da classe controller 
  (Ex. class produtoController extends controller {
        public function index() {}
  }). Mesmo que a funçao index não tenha nada (vazia) ela deve ser criada ou dará erro.
5. view:
  - Aqui ficará toda a parte visual (html).
  - O cabeçalho e o footer estão em template.php. Caso necessite alterar, não remova o codigo php responsável por
  carregar o conteudo do site (<?php $this->loadView($viewName, $viewData) ?>).
Observaçoes: 
  - Todo link a ser criado precisa ser precedido da url padrão BASE_URL. Exemplo:  
  <pre><code>&lt;a href=&quot;&lt;?php echo BASE_URL; ?&gt;pagina_exemplo.php&quot; &gt;Clique Aqui para ir para a Página Exemplo&lt;/a&gt;</code></pre>
  - A url padrão BASE_URL também deve preceder caminhos de diretórios. Exemplo:
  <pre><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?php echo BASE_URL; ?&gt;assets/css/style.css&quot;&gt;</code></pre>
  - Não é necessário invocar o session_start(), ele ja esta sendo invocado no index.php;
  - O index.php sempre é invocado. Sempre!  
