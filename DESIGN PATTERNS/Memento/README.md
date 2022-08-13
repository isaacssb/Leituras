# Decorator
Decorator é definido como um padrão estrutural.
<br />
Quando temos a complexidade de diversas herenças com inúmeras combinações, podemos utilizar o Decorator.
<br />
A implementação é feita é feita por meio de uma composição recursiva de objetos, que serão os decoradores que agregam as funcionalidades.
<br />
Uma das desvantagem desse design patter é que pode gerar um número muito grande de classes, podendo dificultar a leitura e manutenção no lugar de ajudar.
<br />
Porém as classes que implementam os decoradores e decoradores concretos ficam muito simples de leitura e pequenos arquivos, evitando classes cheias de métodos que não serão utilizados, facilitando a leitura,


 ## Elementos que compõem o Decorator

- Componente (Personagem.php): É a interface que será implementada, tanto pelos decoradoes quanto pelos componnetes concretos. Ela garantirá que ambas as classes tenham uma compatibilidade de métodos para o funcionamento das decorações.
- Componente concreto (Cavaleiro.php, Arqueiro.php, Mago.php): é o componenete do sistema que receberá as decorações. Nele, serão adicionados funcionalidades, comportamentos e estados extra. Estes componenetes são considerados as classes base de nosso sistema, que serão alteradas.
- Decorator/ Decorador (PersonagemDecorator.php): é a interface ou classe abstrata que serve de contrato para os decoradores concretos implementarem, garantindo a compatibilidade para as decorações.
- Decorador Concreto (AnelDeFogo.php, ColarDeForca.php, EspadaMagica.php): São as implementações concretas dos decoradores. Elas contêm as funcionalidades extras agregadas ao componenetes principal.