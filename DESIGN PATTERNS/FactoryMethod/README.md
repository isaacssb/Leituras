# Factory Methord
Factory Methord � um padr�o de Cria��o.
<br />
O padr�o Factory � muito bom para quando temos um acompamento muito grande e inst�ncias demais.
Nesse padr�o iremos iremos criar a **f�brica de objetos**, que ter� a responsabilidade de criar as inst�ncias. Assim iremos encapsular a cria��o e os objetos do sistemas
<br />


## Elementos que comp�em o Factory Method

- Product (Produto Abstrato: CarroProduct.php) - Define uma interface de objetos que ser� criada pelo nosso m�todo f�brica que estar� no **Concrete Creator**;
- Concrete Product (Produto Concreto: TeslaModeloS.php, TeslaModeloX.php, DodgeCharge.php, DodgeDart.php) - � o produto concreto que implementa a interface Prodct. Trata-se do produto final que ser� criado pelas f�bricas.
- Creator (Criador Abstrato: CarroFactory.php) - � a interface que define o contrato de todas as nossas f�bricas.
- Concrete Creator (Criador Concreto: TeslaFactory.php, DodgeFactory.php) - � a classe concreta que implementa nossa interface **Creator**, ela representa a f�brica de objetos de cada produtos.