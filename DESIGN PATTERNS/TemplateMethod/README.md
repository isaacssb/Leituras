# Template Method
Template Method é definido como um padrão de comportamental.\n
<br />
O padrão tem como objetivo definir uma base para o algoritmo que contenha partes que variam
<br />
Uma parte importante do é a classe de uam classe abstrata que contém um método "método template", esse método tem como objetivo realizar a chamada de outros métodos abstrados da própria classe, esse método também definir a ordem em que os métodos serão executados.


## Elementos que compõem o Prototype

- Classe Abstrata (): É o esqueleto do algoritmo, e contém a definição da parte principal do algoritmo que não varia.
- Subclasses (): São as classes com a implementação do template que variam.