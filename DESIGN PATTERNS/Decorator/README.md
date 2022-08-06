# Decorator
Decorator é definido como um padrão estrutural.
<br />
O padrão Facade é utilizado para abstrair a complexidade e melhorar a implementação em outros projetos
<br />
Como a tradução fala, ela é uma **fachada**, essa fachada trabalha em uma camada mais alta do código para  simplificar o uso de subsistemas.


 ## Elementos que compõem o Decorator

- Componente (Personagem.php): É a interface que será implementada, tanto pelos decoradoes quanto pelos componnetes concretos. Ela garantirá que ambas as classes tenham uma compatibilidade de métodos para o funcionamento das decorações.
- Componente concreto (Cavaleiro.php, Arqueiro.php, Mago.php): é o componenete do sistema que receberá as decorações. Nele, serão adicionados funcionalidades, comportamentos e estados extra. Estes componenetes são considerados as classes base de nosso sistema, que serão alteradas.
- Decorator/ Decorador (PersonagemDecorator.php): é a interface ou classe abstrata que serve de contrato para os decoradores concretos implementarem, garantindo a compatibilidade para as decorações.
- Decorador Concreto (): São as implementações concretas dos decoradores. Elas contêm as funcionalidades extras agregadas ao componenetes principal.