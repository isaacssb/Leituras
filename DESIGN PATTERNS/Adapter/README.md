# Adapter
Adaper é um padrão estrutural.
<br />
O padrão Adapter serve como a própria tradução já diz, realizar a adapatação entre duas partes.<br />
Uma ótima analogia é que utilizamos 'Adaptadores' a todo momento nos equipamentos eletricos.<br />
Imagine que está trabalhando em uma atualização de código legado, porém precisa consumir um serviço desse código, mas não pode realizar mudanças nele, para não impactar nos usuários do sistema legado. O padrão Adapter sugere criar uma camada de comunicação que realizarar a chamada do recurso antigo de formar mais atual.


## Elementos que compõem o Adapter

- Item Adaptado (???): Trata-se de uma interface já existente , da qual o nosso adapatador fará usp. Seria como a tomada da parede.
- Cliente (index.php): São as classes que farão uso do adaptador. No exemplo do mundo real, o cliente seria o conector USB.
- Alvo (???): Define a interface que o nosso cliente vai usar. Seria como o contrado que define que todos os conectores USB só duncionam com uma entrada USB (nada além disso).
- Adaptador (???): É o adapatador de fato que implementa da interface de *Alvo*, porém, por trás, faz uso do item adaptado de forma totalmten transparente. As classes que usam esse adaptador só tem conhecimento de sua interface, mas ele tem conhecimento da interface do item adaptado.