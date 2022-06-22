# Prototype
Prototype é definido como um padrão de criação.
O prototype utilizar o próprio objeto para criar as novas instâncias em vez de usar classes auxiliares para fazer isso.

O padrão prototype serve quando precisamos criar cópias exatas incluíndo os atributos. Tendo assim menos custo de memória ao invés de instancia.


## Elementos que compõem o Prototype

- Protótipo (LivroPrototype.php): Uma classe abstrate que define a interface com os métodos que a permitem se autoclonar.
- Protótipo Concreto (LivroPhpPrototype.php): Classe concreta que implementa a interface Prototype
- Cliente (Index.php): Classe responsável por criar os objetos de protótipo e clonálos por meio de seus métodos.