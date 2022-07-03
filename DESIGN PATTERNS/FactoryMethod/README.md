# Factory Methord
Factory Methord é um padrão de Criação.
<br />
O padrão Factory é muito bom para quando temos um acompamento muito grande e instâncias demais.
Nesse padrão iremos iremos criar a **fábrica de objetos**, que terá a responsabilidade de criar as instâncias. Assim iremos encapsular a criação e os objetos do sistemas
<br />


## Elementos que compõem o Factory Method

- Product (Produto Abstrato: CarroProduct.php) - Define uma interface de objetos que será criada pelo nosso método fábrica que estará no **Concrete Creator**;
- Concrete Product (Produto Concreto: TeslaModeloS.php, TeslaModeloX.php, DodgeCharge.php, DodgeDart.php) - É o produto concreto que implementa a interface Prodct. Trata-se do produto final que será criado pelas fábricas.
- Creator (Criador Abstrato: CarroFactory.php) - É a interface que define o contrato de todas as nossas fábricas.
- Concrete Creator (Criador Concreto: TeslaFactory.php, DodgeFactory.php) - É a classe concreta que implementa nossa interface **Creator**, ela representa a fábrica de objetos de cada produtos.