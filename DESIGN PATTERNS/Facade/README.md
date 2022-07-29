# Facade
Facade � definido como um padr�o estrutural.
<br />
O padr�o Facade � utilizado para abstrair a complexidade e melhorar a implementa��o em outros projetos
<br />
Como a tradu��o fala, ela � uma **fachada**, essa fachada trabalha em uma camada mais alta do c�digo para  simplificar o uso de subsistemas.


 ## Elementos que comp�em o Facade

- Facade (BibliotecaFacade.php): representa��o da fachada respons�vel por abstrair as classes de subsistemas. Geralmente, est� camada � constru�da sobre uma �nica classe.
- Classes de Subsistemas e m�dulos/biblioteca (ModuloApiSms.php, ModuloControleClientes.php, ModuloControleEstoque.php, ModuloEmail.php): s�o todas as classes das quais um **Facade** faz uso. S�o as classes que ser�o simplificadas.
- Cliente (Index.php): Classe respons�vel por utilizar a fachada e utilizar como exemplo