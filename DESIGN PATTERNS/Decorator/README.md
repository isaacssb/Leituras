# Decorator
Decorator � definido como um padr�o estrutural.
<br />
O padr�o Facade � utilizado para abstrair a complexidade e melhorar a implementa��o em outros projetos
<br />
Como a tradu��o fala, ela � uma **fachada**, essa fachada trabalha em uma camada mais alta do c�digo para  simplificar o uso de subsistemas.


 ## Elementos que comp�em o Decorator

- Componente (Personagem.php): � a interface que ser� implementada, tanto pelos decoradoes quanto pelos componnetes concretos. Ela garantir� que ambas as classes tenham uma compatibilidade de m�todos para o funcionamento das decora��es.
- Componente concreto (Cavaleiro.php, Arqueiro.php, Mago.php): � o componenete do sistema que receber� as decora��es. Nele, ser�o adicionados funcionalidades, comportamentos e estados extra. Estes componenetes s�o considerados as classes base de nosso sistema, que ser�o alteradas.
- Decorator/ Decorador (PersonagemDecorator.php): � a interface ou classe abstrata que serve de contrato para os decoradores concretos implementarem, garantindo a compatibilidade para as decora��es.
- Decorador Concreto (): S�o as implementa��es concretas dos decoradores. Elas cont�m as funcionalidades extras agregadas ao componenetes principal.