# Template Method
Template Method � definido como um padr�o de comportamental.\n
<br />
O padr�o tem como objetivo definir uma base para o algoritmo que contenha partes que variam
<br />
Uma parte importante do � a classe de uam classe abstrata que cont�m um m�todo "m�todo template", esse m�todo tem como objetivo realizar a chamada de outros m�todos abstrados da pr�pria classe, esse m�todo tamb�m definir a ordem em que os m�todos ser�o executados.
<br />
Hook Method ( M�todo Gancho )
<br />
A desvatagem do TemplateMethod � que o fluxo pode ficar um pouco confurso, dessa forma a manuten��o pode ser um pouco custosa � partir da complexidade. Por�m esse padr�o � muito bom pra reutiliza��o de c�digos pois utiliza os c�digos a partir da heran�a.


## Elementos que comp�em o Prototype

- Classe Abstrata (): � o esqueleto do algoritmo, e cont�m a defini��o da parte principal do algoritmo que n�o varia.
- Subclasses (): S�o as classes com a implementa��o do template que variam.