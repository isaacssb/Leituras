# Prototype
Prototype � definido como um padr�o de cria��o.
O prototype utilizar o pr�prio objeto para criar as novas inst�ncias em vez de usar classes auxiliares para fazer isso.

O padr�o prototype serve quando precisamos criar c�pias exatas inclu�ndo os atributos. Tendo assim menos custo de mem�ria ao inv�s de instancia.


## Elementos que comp�em o Prototype

- Prot�tipo (LivroPrototype.php): Uma classe abstrate que define a interface com os m�todos que a permitem se autoclonar.
- Prot�tipo Concreto (LivroPhpPrototype.php): Classe concreta que implementa a interface Prototype
- Cliente (Index.php): Classe respons�vel por criar os objetos de prot�tipo e clon�los por meio de seus m�todos.