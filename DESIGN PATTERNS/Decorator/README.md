# Decorator
Decorator � definido como um padr�o estrutural.
<br />
Quando temos a complexidade de diversas heren�as com in�meras combina��es, podemos utilizar o Decorator.
<br />
A implementa��o � feita � feita por meio de uma composi��o recursiva de objetos, que ser�o os decoradores que agregam as funcionalidades.
<br />
Uma das desvantagem desse design patter � que pode gerar um n�mero muito grande de classes, podendo dificultar a leitura e manuten��o no lugar de ajudar.
<br />
Por�m as classes que implementam os decoradores e decoradores concretos ficam muito simples de leitura e pequenos arquivos, evitando classes cheias de m�todos que n�o ser�o utilizados, facilitando a leitura,


 ## Elementos que comp�em o Decorator

- Componente (Personagem.php): � a interface que ser� implementada, tanto pelos decoradoes quanto pelos componnetes concretos. Ela garantir� que ambas as classes tenham uma compatibilidade de m�todos para o funcionamento das decora��es.
- Componente concreto (Cavaleiro.php, Arqueiro.php, Mago.php): � o componenete do sistema que receber� as decora��es. Nele, ser�o adicionados funcionalidades, comportamentos e estados extra. Estes componenetes s�o considerados as classes base de nosso sistema, que ser�o alteradas.
- Decorator/ Decorador (PersonagemDecorator.php): � a interface ou classe abstrata que serve de contrato para os decoradores concretos implementarem, garantindo a compatibilidade para as decora��es.
- Decorador Concreto (AnelDeFogo.php, ColarDeForca.php, EspadaMagica.php): S�o as implementa��es concretas dos decoradores. Elas cont�m as funcionalidades extras agregadas ao componenetes principal.