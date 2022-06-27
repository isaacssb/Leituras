# Adapter
Adaper � um padr�o estrutural.
<br />
O padr�o Adapter serve como a pr�pria tradu��o j� diz, realizar a adapata��o entre duas partes.<br />
Uma �tima analogia � que utilizamos 'Adaptadores' a todo momento nos equipamentos eletricos.<br />
Imagine que est� trabalhando em uma atualiza��o de c�digo legado, por�m precisa consumir um servi�o desse c�digo, mas n�o pode realizar mudan�as nele, para n�o impactar nos usu�rios do sistema legado. O padr�o Adapter sugere criar uma camada de comunica��o que realizarar a chamada do recurso antigo de formar mais atual.


## Elementos que comp�em o Adapter

- Item Adaptado (???): Trata-se de uma interface j� existente , da qual o nosso adapatador far� usp. Seria como a tomada da parede.
- Cliente (index.php): S�o as classes que far�o uso do adaptador. No exemplo do mundo real, o cliente seria o conector USB.
- Alvo (???): Define a interface que o nosso cliente vai usar. Seria como o contrado que define que todos os conectores USB s� duncionam com uma entrada USB (nada al�m disso).
- Adaptador (???): � o adapatador de fato que implementa da interface de *Alvo*, por�m, por tr�s, faz uso do item adaptado de forma totalmten transparente. As classes que usam esse adaptador s� tem conhecimento de sua interface, mas ele tem conhecimento da interface do item adaptado.