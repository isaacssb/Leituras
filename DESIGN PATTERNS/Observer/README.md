# Observer
Observer � definido como um padr�o comportamental.
<br />
O padr�o Observer tem como finalidade utilizar uma classes para monitorar os eventos.
No exemplo do estoque toda vez que o estoque zera, deve ser enviada um email para setor respons�vel.
<br />
Esse padr�o de projeto � indicado quando temos mudan�as em um objeto que geram mudan�as em outros.
<br />
A vantagem desse padr�o � que ele n�o viola o encapsulamento.


 ## Elementos que comp�em o Observer
- Suject (): Interface que possui a defini��o dos m�todos que devem ser seguidos por Concrete Subject; � o contrato que garante a notifica��o da mudan�a dos estados dos sujeitos a seus observadores.
- Observer (): Interface que possui a defini��o dos m�todos de um observador concreto ( Concrete Observer). Esse Contrato garante que os observadores estat�o no padr�o para receber notifica��es dos sujeitos
- Concrete Subject - (): Classes concretas de sujeitos respons�veis por armazenar e enviar notifica��es a seus observadores.
- Concrete Observer - (): classes concretas de observadores que s�o respons�veis por receber notifica��es de sujeitos concretos (Concrete Subject)

