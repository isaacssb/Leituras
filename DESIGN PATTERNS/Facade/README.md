# Facade
Facade é definido como um padrão estrutural.
<br />
O padrão Facade é utilizado para abstrair a complexidade e melhorar a implementação em outros projetos
<br />
Como a tradução fala, ela é uma **fachada**, essa fachada trabalha em uma camada mais alta do código para  simplificar o uso de subsistemas.


 ## Elementos que compõem o Facade

- Facade (BibliotecaFacade.php): representação da fachada responsável por abstrair as classes de subsistemas. Geralmente, está camada é construída sobre uma única classe.
- Classes de Subsistemas e módulos/biblioteca (ModuloApiSms.php, ModuloControleClientes.php, ModuloControleEstoque.php, ModuloEmail.php): são todas as classes das quais um **Facade** faz uso. São as classes que serão simplificadas.
- Cliente (Index.php): Classe responsável por utilizar a fachada e utilizar como exemplo