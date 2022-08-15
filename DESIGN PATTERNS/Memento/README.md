# Memento
Memento é definido como um padrão comportamental.
<br />
O padrão Memento tem como finalidade a gravação e recuperação de um determinado objeto.
As informações serão salvas no armazenamento local.
<br />
A vantagem desse padrão é que ele não viola o encapsulamento.


 ## Elementos que compõem o Memento
- Originator(Texto.php): É o objeto cujo estado queremos capturar.
- Memento(TextoMemento.php): É o objeto usado para armazenar o estado interno do originator.
- Care Taker - Armazenador (TextoCareTaker.php): Responsável por armazenar e gerenciar os estados internos (Memento) de um originator.


