# Memento
Memento � definido como um padr�o comportamental.
<br />
O padr�o Memento tem como finalidade a grava��o e recupera��o de um determinado objeto.
As informa��es ser�o salvas no armazenamento local.
<br />
A vantagem desse padr�o � que ele n�o viola o encapsulamento.


 ## Elementos que comp�em o Memento
- Originator(Texto.php): � o objeto cujo estado queremos capturar.
- Memento(TextoMemento.php): � o objeto usado para armazenar o estado interno do originator.
- Care Taker - Armazenador (TextoCareTaker.php): Respons�vel por armazenar e gerenciar os estados internos (Memento) de um originator.


