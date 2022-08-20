# Observer
Observer é definido como um padrão comportamental.
<br />
O padrão Observer tem como finalidade utilizar uma classes para monitorar os eventos.
No exemplo do estoque toda vez que o estoque zera, deve ser enviada um email para setor responsável.
<br />
Esse padrão de projeto é indicado quando temos mudanças em um objeto que geram mudanças em outros.
<br />
A vantagem desse padrão é que ele não viola o encapsulamento.


 ## Elementos que compõem o Observer
- Suject (): Interface que possui a definição dos métodos que devem ser seguidos por Concrete Subject; é o contrato que garante a notificação da mudança dos estados dos sujeitos a seus observadores.
- Observer (): Interface que possui a definição dos métodos de um observador concreto ( Concrete Observer). Esse Contrato garante que os observadores estatão no padrão para receber notificações dos sujeitos
- Concrete Subject - (): Classes concretas de sujeitos responsáveis por armazenar e enviar notificações a seus observadores.
- Concrete Observer - (): classes concretas de observadores que são responsáveis por receber notificações de sujeitos concretos (Concrete Subject)

